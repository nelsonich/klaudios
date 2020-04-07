<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\User;
use App\Models\News;
use App\Models\LikeNews;
use App\Models\NewsComment;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Models\NewsCommentLikes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Pusher\Pusher;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ip = request()->ip(); //46.241.208.21 My Ip
        $data = Location::get($ip);
        $countryName = "Armenia";
        if ($ip != '127.0.0.1') $countryName = $data->countryName;
        Cookie::queue('countryName', $countryName, 24 * 60);

        $news = News::with('getNewsLikes', 'getNewsLikesCounts', 'getNewsCommentCount')->paginate(6);
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->with('getAuthGameStatus')->first();
        $country = Cookie::get('countryName');

        return view('home', ['news' => $news, 'user' => $user, 'country' => $country]);
    }

    public function searchNews(Request $request)
    {
        $user_id = Auth::id();
        $user = User::where('id', $user_id)->with('getAuthGameStatus')->first();
        $country = Cookie::get('countryName');
        $q = $request->get('searchNewsName');

        $request->flashOnly(['searchNewsName']);

        if ($q != "") {
            $news = News::where('title', 'LIKE', '%' . $q . '%')->paginate(6)->setPath('');
            $pagination = $news->appends(array(
                'searchNewsName' => $request->get('searchNewsName')
            ));
            if (count($news) > 0)
                return view('home', ['news' => $news, 'user' => $user, 'country' => $country])->withQuery($q);
        }
        return view('home', ['user' => $user, 'country' => $country]);
    }

    public function getNewsName(Request $request)
    {
        $value = $request->post('newsName');

        $news = News::query()->where('title', 'LIKE', "%{$value}%")->get();
        return response()->json($news);
    }

    public function newsItem($id)
    {
        $news = News::where('id', $id)->with('getNewsLikes', 'getNewsLikesCounts')->first();
        return view('news.newsInformation', ['news' => $news]);
    }

    public function likeNews(Request $request)
    {
        $user_id = Auth::id();
        $news_id = $request->post('newsId');
        $ifExistsRecord = LikeNews::where('user_id', $user_id)->where('news_id', $news_id)->exists();
        if (!$ifExistsRecord) {
            LikeNews::create([
                "user_id" => $user_id,
                "news_id" => $news_id,
            ]);
            return response()->json('created');
        } else {
            LikeNews::where('user_id', $user_id)->where('news_id', $news_id)->delete();
            return response()->json('deleted');
        }
    }

    public function commentsNews(Request $request)
    {
        $news_id = $request->post('newsId');
        $newsComments = NewsComment::where('news_id', $news_id)->with('getCommentedUser', 'getCommentLoves')->orderBy('id', 'desc')->get();

        return response()->json($newsComments);
    }

    public function createCommentNews(Request $request)
    {
        $news_id = $request->post('newsId');
        $comment = $request->post('comment');
        NewsComment::create([
            "user_id" => Auth::id(),
            "news_id" => $news_id,
            "comment" => $comment,
        ]);

        return response()->json('ok');
    }

    public function likeCommentNews(Request $request)
    {
        $commentId = $request->post('commentId');
        $user_id = Auth::id();

        $ifExistsRecord = NewsCommentLikes::where('user_id', $user_id)->where('comment_id', $commentId)->exists();
        if (!$ifExistsRecord) {
            NewsCommentLikes::create([
                "user_id" => $user_id,
                "comment_id" => $commentId,
            ]);
            return response()->json('created');
        } else {
            NewsCommentLikes::where('user_id', $user_id)->where('comment_id', $commentId)->delete();
            return response()->json('deleted');
        }
    }

    public function profile()
    {
        $user = Auth::user();
        return view('Profile.profile', ['user' => $user]);
    }

    public function editProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required',
            'email' => 'required',
        ]);

        $data = $request->except('_token');
        $user_id = Auth::id();
        User::find($user_id)->update($data);

        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }

    public function editProfilePassword(Request $request)
    {
        $request->validate([
            'oldPassword' => ['required', new MatchOldPassword],
            'newPassword' => ['required'],
            'confirmNewPassword' => ['same:newPassword'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->post('newPassword'))]);

        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }


    public function getUsers()
    {
        $users = User::where('id', '!=', Auth::id())->get();
//        dd($users);
        return view('Profile.Chat.index', ['users' => $users]);
    }

    public function getMessages($user_id)
    {
        $my_id = Auth::id();

        // Make read all unread message
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        // Get all message from selected user
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();


        return view('Profile.Chat.messages', ['messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        // pusher
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
