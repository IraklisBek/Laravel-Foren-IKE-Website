<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //protected $hidden = [
      //  'password', 'remember_token',
    //];

    /**
     * @return array
     */
    public static function createRules(){

        return [
            'registername' => 'required',
            'registeremail' => 'required',
            'password' => 'required|min:6|regex:/^[a-zA-Z0-9!$#%]+$/',
            //'g-recaptcha-response' => 'required',
        ];

    }
}
