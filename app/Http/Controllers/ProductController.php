<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\review;


class ProductController extends Controller
{
   
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
    'price'=> 'required',
    'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
    'category' => 'required|in:men,women',

    ]);



        // upload image
      
     $imageName = time().'.'.$request->image->extension();
     $request->image->move (public_path('products'), $imageName);
     $product = new Product;
     $product->image = $imageName;
     $product->name = $request->name;
     $product->description = $request->description;
     $product->price = $request->price;
     $product->category = $request->category;


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

    'price'=> 'required',
    'category' => 'required|in:men,women', // Validate category

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

     $product->price = $request->price;
     $product->category = $request->category; // Update category

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
