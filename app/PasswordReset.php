<?php

namespace App;

use App\Acme\Services\MessageService;
use App\Acme\Services\PasswordResetService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    /**
     * Checks if link has expired
     *
     * @var string
     * @return false with message if link has expired else returns the row
     */
    protected $table = 'password_resets';
    protected $primaryKey = 'email';



    public static function hasExpired($time = 12, $reset_email) {
        $created = $reset_email->first()->created_at;
        if(Carbon::now()->diffInHours($created) - $time > 0){
            PasswordResetService::deletePasswordResetRow($reset_email->first());
            MessageService::_message('fail', 'Your reset password link has expired, please follow the reset password process again.');
            return false;
        }else{
            return $reset_email->first();
        }
    }
}
