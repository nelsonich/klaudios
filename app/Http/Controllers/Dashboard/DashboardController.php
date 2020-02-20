<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\News;

class DashboardController extends Controller
{
    public static function index() 
    {
        $user = \Auth::user();
        $users = User::where('role', 'user')->get();

        return \view('dashboard.home', [
            'user' => $user,
            'users' => $users
        ]);
    }

    public static function getNews()
    {
        $news = News::orderBy('id', 'desc')->paginate(5);
        return \view('dashboard.Pages.news', [
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
}