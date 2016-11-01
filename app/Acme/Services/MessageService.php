<?php

namespace App\Acme\Services;
/**
 * Created by PhpStorm.
 * User: Irakl_000
 * Date: 5/10/2016
 * Time: 2:49 PM
 */



class MessageService{

    public static function _message($type, $msg){
        \Request::session()->flash($type, $msg);
    }
}