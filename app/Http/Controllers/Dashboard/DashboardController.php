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
        $news = News::all();
        return \view('dashboard.Pages.news', [
            'news' => $news,
        ]);
    }
}