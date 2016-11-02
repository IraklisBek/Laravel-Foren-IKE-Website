<?php

namespace App\Acme\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailService{

    public static function contactEmail($data, $kind){
        Mail::send($kind, $data, function($message) use ($data){
            $message->from('iraklis@gmail.com');//$data['email']
            $message->to('iraklis@gmail.com');
            $message->subject($data['subject']);
        });
    }

    public static function sendConfirmationEmail($data, $kind){
        Mail::send($kind, $data, function($message) use ($data){
            $message->from('iraklis@gmail.com');
            $message->to('iraklis@gmail.com');//$data['email']
            $message->subject($data['subject']);
            $message->embed('visitor/images/general/logo.jpg');
        });
    }

    public static function sendResetPasswordEmail($data, $kind){
        Mail::send($kind, $data, function($message) use ($data){
            $message->from('iraklis@gmail.com');
            $message->to('iraklis@gmail.com');//$data['email']
            $message->subject($data['subject']);
            $message->embed('visitor/images/general/logo.jpg');
        });
    }

    public static function sendModel($data, $kind){
        Mail::send($kind, $data, function($message) use ($data){
            $message->from('iraklis@gmail.com');
            $message->to('iraklis@gmail.com');//$data['email']
            $message->subject($data['subject']);
            $message->embed($data['image']);
        });
    }
}