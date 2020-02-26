<?php


namespace App\Helpers;


use Illuminate\Support\Facades\Mail;

class MailSender
{
    public static function sender($data)
    {
        Mail::send('emails.registrationEmail', $data, function ($m) use ($data) {
            $m->from(env('MAIL_FROM'), env('APP_NAME'));
            $m->to($data['email'], $data['first_name'])
                ->subject('Thank you!');
        });
    }

    public static function sendToAdmin($data, $source)
    {
        Mail::send($source, $data, function ($m) use ($data) {
            $m->from(env('MAIL_FROM'), env('APP_NAME'));
            $m->to(env('MAIL_TO'), $data['first_name'])
                ->subject('Thank you!');
        });
    }
}
