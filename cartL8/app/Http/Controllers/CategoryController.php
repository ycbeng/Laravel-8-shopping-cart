<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;   //step 1 link model (laravel 8 format)

class CategoryController extends Controller
{
    //
    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML
        $addCategory=Category::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'name'=>$r->name, //fullname from HTML
            
        ]);
        
        Return view('insertCategory');// step 5 back to last page
    }

   

}
