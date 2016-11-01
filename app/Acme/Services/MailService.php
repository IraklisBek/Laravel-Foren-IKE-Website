<?php

namespace App\Acme\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailService{

    public static function sendEmail($data, $kind){
        Mail::send($kind, $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('iraklis@gmail.com');
            $message->subject($data['subject']);
        });
    }

    public static function sendModel($data, $kind){
        Mail::send($kind, $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('iraklis@gmail.com');//$data['email'] for confirm
            $message->subject($data['subject']);
            $message->embed($data['image']);
        });
    }
}