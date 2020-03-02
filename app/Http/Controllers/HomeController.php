<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\News;
use App\Models\LikeNews;
use App\Models\NewsComment;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Models\NewsCommentLikes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $news = News::with('getNewsLikes', 'getNewsLikesCounts')->paginate(5);
//        dd($news);
        return view('home', ['news' => $news,]);
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
}
