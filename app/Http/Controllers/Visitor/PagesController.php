<?php

namespace App\Http\Controllers\Visitor;

use App\Acme\Services\MailService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


class PagesController extends Controller
{
    public function getHome(){
        return view('visitor.pages.welcome');
    }

    public function getFORENBOX(){
        return view('visitor.pages.forenbox');
    }

    public function getGallery(){
        return view('visitor.pages.gallery');
    }

    public function getProducts(){
        return view('visitor.pages.products');
    }

    public function getAbout(){
        return view('visitor.pages.about');
    }

    public function getContact(){
        return view('visitor.pages.contact');
    }

    public function get3DModel(){
        return view('visitor.pages.3dmodel');
    }

    public function postContact(Request $request){
        $data = array(
            'email' => Input::get('email'),
            'subject' => $request->subject,
            'name' => $request->name,
            'orgname' => $request->orgname,
            'body' => $request->body
        );
        //var_dump($data);
        MailService::sendEmail($data, 'visitor.emails.contact');
        //MessageService::_message('success', 'Your E-mail has been sent');
        /*return redirect()->action(
            'Visitor\\PagesController@getContact'
        );*/
    }

    public function send3DModel(Request $request){
        $data = array(
            'email' => Input::get('user'),
            'x' => Input::get('x'),
            'z' => Input::get('z'),
            'y1' => Input::get('y1'),
            'y2' => Input::get('y2'),
            'y3' => Input::get('y3'),
            'kind' => Input::get('kind'),
            'subject' => '3D Model mail delivery',
            'image' => Input::get('image')
        );
        MailService::sendModel($data, 'visitor.emails.3dmodel');

    }
}
