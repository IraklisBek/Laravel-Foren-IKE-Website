<?php

namespace App\Acme\Services;

use App\Role;
use Doctrine\Common\Collections\Collection;
use Illuminate\Support\Facades\Cache;
use Validator;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UserService{


    /**
     * Finds user by email
     * @param $email
     * @return false with error if user is not found, else the user
     */
    public static function getUserByEmail($email) {
        $user = User::where('email', $email)->get();
        if($user->count()){
            return $user->first();
        }else{
            MessageService::_message('fail', 'There has been an error. Please check your email address.');
            return false;
        }
    }

    /**
     * Finds user by email and password
     * @param $email
     * @return false with error if user is not found, else the user
     */
    public static function getUserByEmailAndPassword($email, $password) {
        $user = User::where('email', $email)->where('password', $password)->get();
        if($user->count()){
            return $user->first();
        }else{
            \Request::session()->flash('logInError', '');
            MessageService::_message('fail', 'Username and Password do not match');
            return false;
        }
    }

    /**
     * Finds user by Token
     * @param $token
     * @return bool
     */
    public static function getUserByToken($token) {
        $user = User::where('confirm_token', $token)->get();
        if($user->count()){
            return $user->first();
        }else{
            //MessageService::_message('fail', 'There has been an error.');
            return false;
        }
    }

    /**
     * Compares if passwords are matching
     *
     * @param $password
     * @param $confirmPassword
     * @return bool
     */
    public static function passwordsMismatch($password, $confirmPassword){
        if(strcmp($password, $confirmPassword)!=0){
            \Request::session()->flash('registerError', '');
            MessageService::_message('fail', 'Passwords do not match');
            return true;
        }
        return false;
    }

    /**
     * @param User $user
     * @param $data
     */
    public static function updateUser(User $user, $data){
        $user->update(array($data));
    }

    /**
     * Get all roles in array type cache style
     * @return mixed
     */
    public static function getRolesInArray(){
        //if( ! $this->relationLoaded('roles')) $this->load('roles');
        $roles = Role::with('users')->get();
        return Acme::getRowsInArray($roles);
    }

    /**
     * Get all roles of a user in array type cache style
     * @param User $user
     * @return array
     */
    public static function getUserRolesInArray(User $user){
        $roles = array();
        foreach ($user->roles as $role) {
            $roles[$role->id] = $role->name;
        }
        return $roles;
    }

    /**
     * Get all users cache style
     * @return mixed
     */
    public static function getAllUsers(){
        return User::with('roles', 'comments', 'post')->get();
    }

    /**
     * Notifications area. Gets new users
     * @return mixed
     */
    public static function getNewUsers(){
        $users = User::with('roles', 'comments', 'post')->get();
        $newUsers = $users->keyBy('id');
        foreach($users as $user){
            if($user->new_user == 1 || $user->role){
                $newUsers->forget($user->id);
            }
        }
        return $newUsers;
    }

}