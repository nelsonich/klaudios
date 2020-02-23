<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Features;
use App\Models\StaticInformation;
use Illuminate\Http\Request;
use App\User;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public static function index()
    {
        $user = Auth::user();
        $users = User::where('role', 'user')->get();

        return view('dashboard.home', [
            'user' => $user,
            'users' => $users
        ]);
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

        if($request->hasFile('image')) {
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

        if($request->hasFile('image')) {
            $files = $request->file('image');
            $destinationPath = 'images/news/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);

        } else {
            $profilefile = 'news.png';
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
        $about = About::first();
        return view('dashboard.Pages.StaticPages.about', ['about' => $about]);
    }

    public function editAbout(Request $request)
    {
        $request->validate([
            'title' => 'required',
            // 'image' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('image')) {
            $files = $request->file('image');
            $destinationPath = 'images/'; // upload path
            $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profilefile);

        } else {
            $profilefile = 'about.png';
        }

        $data = $request->except('_token');
        $data['image'] = $profilefile;
        About::find(1)->update($data);

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

        if($request->hasFile('logo')) {
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

    public function getFeatures()
    {
        $features = Features::first();
        return view('dashboard.Pages.StaticPages.features', ['features' => $features]);
    }

    public function editFeatures(Request $request)
    {
        $data = $request->except('_token');
        Features::find(1)->update($data);

        $request->session()->flash('status', 'edit');
        return redirect()->back();
    }
}
