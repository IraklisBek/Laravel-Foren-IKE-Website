<?php

namespace App\Http\Controllers\Auth;

use App\Acme\Services\MailService;
use App\Acme\Services\MessageService;
use App\Acme\Services\UserService;
use App\Acme\Services\ValidationService;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    //protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest');
    }*/
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getRegister(){

        return view('visitor.auth.register');
    }

    private function insertUserCredentials(User $user, Request $request){
        $Blowfish_Pre = '$2a$05$';
        $Blowfish_End = '$';
        $Allowed_Chars ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789./';
        $Chars_Len = 63;
        $Salt_Length = 21;
        $salt = "";
        for($i=0; $i<$Salt_Length; $i++)
        {
            $salt .= $Allowed_Chars[mt_rand(0,$Chars_Len)];
        }
        $bcrypt_salt = $Blowfish_Pre . $salt . $Blowfish_End;
        $user->name = $request->registername;
        $user->email = $request->registeremail;
        //$user->password = $request->password;
        $user->password = crypt($request->password, $bcrypt_salt);;
        $user->salt = $salt;
        $user->confirm=0;
    }

    private function insertUser(User $user, Request $request){
        try {
            $token = str_random(30);
            $link = constant('myurl').'confirmRegistration/'. $token;
            $user->confirm_token = $token;
            $user->save();
            //$user->roles()->sync([1], false);
            $data = array(
                'email' => $request->email,
                'bodyMessage' => '<a href="'.$link.'">Click here to confirm registration</a>',
                'subject' => 'Confirm Registration'
            );
            MailService::sendConfirmationEmail($data, 'visitor.emails.confirmRegistration');
            MessageService::_message('success', 'Welcome '.$request->name.'! Your registration has been successful. Please Confirm your registration in your e-mail');
            return true;
        }catch (QueryException $e){
            \Request::session()->flash('registerError', '');
            $e->errorInfo[1] = 1062
                ? MessageService::_message('fail', 'This Email is already in use')
                : "There has been an error. Please try again later";
            return false;
        }
    }

    public function registerUser(Request $request){
        $user = new User;

        $validator = ValidationService::validateCreation($request, $user);
        if($validator->fails())
            return redirect()->route('home')->withErrors($validator)->withInput();

        if(UserService::passwordsMismatch($request->password, $request->confirmPassword)){
            return redirect()->back();
        }
        $this->insertUserCredentials($user, $request);
        return
            $this->insertUser($user, $request)
            ? redirect()->back()
            : redirect()->back();
    }

    public function postConfirmRegistration($token){
        $user = UserService::getUserByToken($token);
        if($user){
            $user->confirm = 1;
            $user->save();
            MessageService::_message('success', 'Your registration has been complete');
            return redirect()->back();
        }else{
            MessageService::_message('fail', 'Your registration could not been completed');
            return redirect()->back();
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    /*protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }*/
}
