<?php

namespace App\Http\Controllers\Visitor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
