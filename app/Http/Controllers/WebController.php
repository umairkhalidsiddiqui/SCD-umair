<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\review;


class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }
    public function men(){
        $products = Product::where('category', 'men')->get();
        return view('web.men', compact('products'));
    }
    public function women(){
        $products = Product::where('category', 'women')->get();
        return view('web.women', compact('products'));
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

    public function description(){
        return view('web.description');
    }




  
    
}
