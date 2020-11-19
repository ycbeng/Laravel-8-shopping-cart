<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product; 
use App\Models\Category; 

class productController extends Controller
{
    //
    public function create(){
        return view('insertProduct') ->with('categories',Category::all());;
    }


    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML
        $addCategory=Product::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'name'=>$r->name, //fullname from HTML
            'description'=>$r->description,
            'categoryID'=>$r->category,
            'price'=>$r->price,
            'quantity'=>$r->quantity,
            'image'=>'-',
            
        ]);
        
        return redirect()->route('showProduct');
    }

    public function show(){
        $products=Product::all();
        return view('showProduct')->with('products',$products);
    }
}
