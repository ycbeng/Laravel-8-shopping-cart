<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product; 

class productController extends Controller
{
    //
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
        
        Return view('insertProduct');// step 5 back to last page
    }
}
