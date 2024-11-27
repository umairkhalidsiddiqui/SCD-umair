<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index',['products'=> product::get()]);
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

    public function description(){
        return view('web.description');
    }


<<<<<<< HEAD






=======
>>>>>>> 0baa56f057b120e03fe8a2cc6a701f39bc94c54e
     
    public function admin(){
        
        return view('web.admin',['products'=> product::get()]);
    }
    public function create(){
        return view('web.create');
    }

    public function store(Request $request){

       // validate data
    $request->validate([
    'name' => 'required',
    'description'=> 'required',
<<<<<<< HEAD
    'price'=> 'required',
=======
>>>>>>> 0baa56f057b120e03fe8a2cc6a701f39bc94c54e
    'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
    ]);



        // upload image
      
     $imageName = time().'.'.$request->image->extension();
     $request->image->move (public_path('products'), $imageName);
     $product = new Product;
     $product->image = $imageName;
     $product->name = $request->name;
     $product->description = $request->description;
<<<<<<< HEAD

     $product->price = $request->price;

=======
>>>>>>> 0baa56f057b120e03fe8a2cc6a701f39bc94c54e
     $product->save();
     return back()->withSuccess('Product Created !!!!!');
    }





    public function edit($id){
        $product = Product::where('id', $id)->first();
        return view('web.edit', ['product' => $product]);
    }








    public function update(Request $request, $id){


    
       // validate data
    $request->validate([
    'name' => 'required',
    'description'=> 'required',
<<<<<<< HEAD

    'price'=> 'required',

=======
>>>>>>> 0baa56f057b120e03fe8a2cc6a701f39bc94c54e
    'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
    ]);
    $product = Product::where('id', $id)->first();
    if(isset($request->image)){

     $imageName = time().'.'.$request->image->extension();
     $request->image->move (public_path('products'), $imageName);
     $product->image = $imageName;

    }

     $product->name = $request->name;
     $product->description = $request->description;
<<<<<<< HEAD

     $product->price = $request->price;

=======
>>>>>>> 0baa56f057b120e03fe8a2cc6a701f39bc94c54e
     $product->save();
     return back()->withSuccess('Product updated !!!!!');


       
    }


    public function destroy($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product deleted !!!!!!');
    }

    public function show($id){
        $product = Product::where('id',$id)->first();

        return view('web.show',['product'=>$product]);

    }

  
    
}
