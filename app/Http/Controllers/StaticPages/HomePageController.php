<?php

namespace App\Http\Controllers\StaticPages;

use App\Models\About;
use App\Models\Faq;
use App\Models\Features;
use App\Helpers\MailSender;
use App\Models\Terms\CookiesPolicy;
use App\Models\Terms\PrivacyPolicy;
use App\Models\Terms\TermsAndConditions;
use Illuminate\Http\Request;
use App\Models\RequestQuote;
use App\Models\StaticInformation;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

class HomePageController extends Controller
{
    public function index()
    {
        $ip = request()->ip(); //46.241.208.21 My Ip
        $data = Location::get($ip);
        $countryName = "Armenia";
        if ($ip != '127.0.0.1') $countryName = $data->countryName;
        Cookie::queue('countryName', $countryName, 24*60);

        $lang = Session::get('locale');

        if ($lang == null) $lang = 'en';
        $about = About::where('lang', $lang)->first();
        $staticInformation = StaticInformation::first();
        $features = Features::where('lang', $lang)->first();
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
        $data['first_name'] = $data['firstName'];
        $data['last_name'] = $data['lastName'];
        unset($data['message']);
        unset($data['firstName']);
        unset($data['lastName']);

        MailSender::sendToAdmin($data, 'emails.requestQuote');

        return response()->json('ok');
    }

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
//        dd(app()->getLocale());
        return redirect()->back();
    }

    public function faq()
    {
        $lang = Session::get('locale');

        if ($lang == null) $lang = 'en';
        $faq = Faq::where('lang', $lang)->get();
        return view('sections.faq', [
            'faq' => $faq,
        ]);
    }

    public function terms()
    {
        $lang = Session::get('locale');

        if ($lang == null) $lang = 'en';
        $terms = TermsAndConditions::where('lang', $lang)->first();
        return view('sections.terms.terms', [
            'terms' => $terms,
        ]);
    }

    public function privacy()
    {
        $lang = Session::get('locale');

        if ($lang == null) $lang = 'en';
        $privacy = PrivacyPolicy::where('lang', $lang)->first();
        return view('sections.terms.privacy', [
            'privacy' => $privacy,
        ]);
    }

    public function cookies()
    {
        $lang = Session::get('locale');

        if ($lang == null) $lang = 'en';
        $cookie = CookiesPolicy::where('lang', $lang)->first();
        return view('sections.terms.cookies', [
            'cookie' => $cookie,
        ]);
    }

    public function coronavirus()
    {
        return view('sections.coronaVirus');
    }
}
