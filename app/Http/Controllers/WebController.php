<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }
    public function men(){
        return view('web.men');
    }
    public function women(){
        return view('web.women');
    }
    public function aboutus(){
        return view('web.aboutus');
    }
    public function contactus(){
        return view('web.contactus');
    }
    public function register(){
        return view('web.register');
    }
    public function form(){
        return view('web.form');
    }
}
