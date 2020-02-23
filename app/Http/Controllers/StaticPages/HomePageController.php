<?php

namespace App\Http\Controllers\StaticPages;

use App\Models\About;
use App\Models\Features;
use App\Models\RequestQuote;
use App\Models\StaticInformation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
    public function index()
    {
        $about = About::first();
        $staticInformation = StaticInformation::first();
        $features = Features::first();
        return view('welcome', [
            'about' => $about,
            'staticInformation' => $staticInformation,
            'features' => $features,
        ]);
    }

    public function requestQuote(Request $request)
    {
        $request->validate([
            "firstName" => "required",
            "lastName" => "required",
            "subject" => "required",
            "message" => "required",
        ]);

        $data = $request->except('_token');
        RequestQuote::create($data);
        $data['messageQuote'] = $data['message'];
        unset($data['message']);

        Mail::send('emails.requestQuote', $data, function ($m) use ($data) {
            $m->from(env('MAIL_FROM'), env('APP_NAME'));
            $m->to(env('MAIL_TO'), $data['firstName'])
                ->subject('Thank you!');
        });

        return response()->json('ok');
    }

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
//        dd(app()->getLocale());
        return redirect()->back();
    }
}
