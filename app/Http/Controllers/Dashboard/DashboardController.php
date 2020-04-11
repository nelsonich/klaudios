<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Faq;
use App\Models\Features;
use App\Models\Games\Game;
use App\Models\Games\GameAnswer;
use App\Models\Games\GameCategory;
use App\Models\Games\GameComplexity;
use App\Models\Games\RightAnswer;
use App\Models\Games\UserRightAnswer;
use App\Models\Languages;
use App\Models\RequestQuote;
use App\Models\StaticInformation;
use App\Models\Terms\CookiesPolicy;
use App\Models\Terms\PrivacyPolicy;
use App\Models\Terms\TermsAndConditions;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\User;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public static function index()
    {
        $user = Auth::user();
        $users = User::where('role', "!=", 'superadmin')->orderBy('id', 'desc')->paginate(5);
        $roles = UserRole::all();
        return view('dashboard.home', [
            'user' => $user,
            'users' => $users,
            'roles' => $roles,
        ]);
    }

    public function editUserData(Request $request)
    {
        $data = $request->except('_token');
        $userId = $data['id'];
        unset($data['id']);
        User::find($userId)->update($data);

        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }

    public static function getNews()
    {
        $news = News::orderBy('id', 'desc')->paginate(5);
        return view('dashboard.Pages.news', [
            'news' => $news,
        ]);
    }

    public function addNews(Request $request)
    {
        $request->validate([
            'title' => 'required',
            // 'image' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $destinationPath = 'images/news/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);

        } else {
            $profilefile = 'news.png';
        }

        $data = $request->except('_token');
        $data['image'] = $profilefile;
        News::create($data);

        $request->session()->flash('status', 'add');
        return redirect()->back();
    }

    public function editNews(Request $request)
    {
        $request->validate([
            'title' => 'required',
            // 'image' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $destinationPath = 'images/news/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);

        } else {
            $profilefile = $request->post('newsoldimage');
        }

        $data = $request->except('_token');
        $data['image'] = $profilefile;
        News::find($data['id'])->update($data);

        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }

    public function deleteNews(Request $request)
    {
        $data = $request->except('_token');
        News::destroy($data['id']);
        $request->session()->flash('status', 'delete');
        return redirect()->back();
    }

    public function getAbout()
    {
        $abouts = About::all();
        return view('dashboard.Pages.StaticPages.about', ['abouts' => $abouts]);
    }

    public function editAbout(Request $request, $lang)
    {
        $request->validate([
            'title' => 'required',
            // 'image' => 'required',
            'description' => 'required',
        ]);

//        if($request->hasFile('image')) {
//            $files = $request->file('image');
//            $destinationPath = 'images/'; // upload path
//            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
//            $files->move($destinationPath, $profilefile);
//
//        } else {
//            $profilefile = 'about.png';
//        }

        $data = $request->except('_token');
//        $data['image'] = $profilefile;
        About::where('lang', $lang)->update($data);

        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }

    public function getStaticInfo()
    {
        $staticInfo = StaticInformation::first();
        return view('dashboard.Pages.StaticPages.staticInformation', ['staticInfo' => $staticInfo]);
    }

    public function editStaticInformation(Request $request)
    {
        $request->validate([
            'place' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'instagram_link' => 'required',
            'facebook_link' => 'required',
            'twitter_link' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $files = $request->file('logo');
            $destinationPath = 'images/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);

        } else {
            $profilefile = 'klaudios.png';
        }

        $data = $request->except('_token');
        $data['logo'] = $profilefile;
        StaticInformation::find(1)->update($data);

        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }

    public function getRequestQuote()
    {
        $requestQuotes = RequestQuote::paginate(10);
        return view('dashboard.Pages.requestQuote', ['requestQuotes' => $requestQuotes]);
    }

    public function getFeatures()
    {
        $features = Features::all();
        return view('dashboard.Pages.StaticPages.features', ['features' => $features]);
    }

    public function editFeatures(Request $request, $lang)
    {
        $data = $request->except('_token');
        Features::where('lang', $lang)->update($data);

        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }

    public function getLanguages()
    {
        $languages = Languages::all();
        return view('dashboard.Pages.languages', ['languages' => $languages]);
    }

    public function editLangStatus(Request $request)
    {
        $langId = $request->post('langId');
        $lang = Languages::find($langId);
        $staus = $lang->status == 1 ? 0 : 1;
        $lang->status = $staus;
        $lang->save();
        return response()->json('ok');
    }

    public function getFaq()
    {
        $faq = Faq::where('lang', 'en')->paginate(5);
        return view('dashboard.Pages.StaticPages.faq', ['faq' => $faq]);
    }

    public function getTerms()
    {
        $terms = TermsAndConditions::all();
        return view('dashboard.Pages.terms.terms', ['terms' => $terms]);
    }

    public function editTerms(Request $request)
    {
        $data = $request->except('_token');
        TermsAndConditions::find($data['id'])->update($data);
        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }

    public function getPrivacy()
    {
        $privacy = PrivacyPolicy::all();
        return view('dashboard.Pages.terms.privacy', ['privacy' => $privacy]);
    }

    public function editPrivacy(Request $request)
    {
        $data = $request->except('_token');
        PrivacyPolicy::find($data['id'])->update($data);
        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }

    public function getCookies()
    {
        $cookies = CookiesPolicy::all();
        return view('dashboard.Pages.terms.cookies', ['cookies' => $cookies]);
    }

    public function editCookies(Request $request)
    {
        $data = $request->except('_token');
        CookiesPolicy::find($data['id'])->update($data);
        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }


    /* Games */
    public function getGames()
    {
        $categories = GameCategory::all();
        $games = Game::with('getGameAnswers', 'getGameRightAnswer')->paginate(10);

        return view('dashboard.Pages.games', [
            'categories' => $categories,
            'games' => $games,
        ]);
    }

    public function addGame(Request $request)
    {
        $request->validate([
            'question' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $destinationPath = 'images/Games/games/'; // upload path
            $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $image);

        } else {
            $image = null;
        }

        $data = $request->except('_token');
        $data['image'] = $image;
        Game::create($data);

        $request->session()->flash('status', 'add');
        return redirect()->back();
    }

    public function editGame(Request $request)
    {
        $images = array();
        $data = $request->except('_token');
        $gameId = $data['id'];
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('images/Games/answers/', $name);
                $images[] = $name;
            }
        }
        if (!empty($images) && !empty($data['answer'])) {
            foreach ($images as $key => $item) {
                GameAnswer::create([
                    "answer" => $data['answer'][$key],
                    "image" => $item,
                    "game_id" => $gameId,
                ]);
            }
        } elseif(!empty($images) && empty($data['answer'])) {
            foreach ($images as $item) {
                GameAnswer::create([
                    "image" => $item,
                    "game_id" => $gameId,
                ]);
            }
        } elseif(empty($images) && !empty($data['answer'])) {
            foreach ($data['answer'] as $item) {
                GameAnswer::create([
                    "answer" => $item,
                    "game_id" => $gameId,
                ]);
            }
        }
        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }

    public function changeRightAnswer(Request $request)
    {
        $gameId = $request->post('gameId');
        $answerId = $request->post('answerId');
        $isExists = RightAnswer::where('game_id', $gameId)->exists();
        UserRightAnswer::where('game_id', $gameId)->update([
            "answer_id" => $answerId,
        ]);
        if (!$isExists) {
            RightAnswer::create([
                "game_id" => $gameId,
                "answer_id" => $answerId
            ]);
        } else {
            RightAnswer::where('game_id', $gameId)->update([
                "answer_id" => $answerId,
            ]);
        }

        return response()->json('ok');
    }

    public function getGameCategory()
    {
        $categories = GameCategory::with('getCategoryComplexity')->paginate(10);

        $complexities = GameComplexity::all();
        return view('dashboard.Pages.gameCategories', [
            'categories' => $categories,
            'complexities' => $complexities,
        ]);
    }

    public function addGameCategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'complexity_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $destinationPath = 'images/news/'; // upload path
            $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $image);
        } else {
            $image = "warm-up.png";
        }

        $data = $request->except('_token');
        $data['image'] = $image;

        GameCategory::create($data);

        $request->session()->flash('status', 'add');
        return redirect()->back();
    }

    public function editGameCategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'complexity_id' => 'required',
        ]);

        $data = $request->except('_token');

        $cat = GameCategory::find($data['id']);

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $destinationPath = 'images/Games/categories/'; // upload path
            $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $image);
        } else {
            $image = $cat->image;
        }

        $data['image'] = $image;

        $cat->update($data);

        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }

    public function editGameCategoryStatus(Request $request)
    {
        $catId = $request->post('catId');
        $cat = GameCategory::find($catId);
        $staus = $cat->status == 1 ? 0 : 1;
        $cat->status = $staus;
        $cat->save();
        return response()->json('ok');
    }

    public function getChangedGames()
    {
        $games = Game::with('getGameAnswers', 'getGameRightAnswer')->paginate(10);
        return view('dashboard.Pages.changedGames', [
            "games" => $games
        ]);
    }

    public function editChangedGame(Request $request, $gameAnswerId)
    {
        $data = $request->except('_token');
        $gameAnswer = GameAnswer::find($gameAnswerId);

        if ($file = $request->file('image')) {
            $name = $file->getClientOriginalName();
            $file->move('images/Games/answers/', $name);
        } else {
            $name = $data['oldImage'];
        }

        $gameAnswer->answer = $data['answer'];
        $gameAnswer->image = $name;
        $gameAnswer->save();

        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }
}
