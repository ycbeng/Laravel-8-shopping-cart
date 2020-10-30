<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('insertCategory');
    }

    public function store(){    //create the function for store name should be same with route  
        $r=request(); //get all data from HTML form
        $addCategory=Category::create([    //bind data, check the spelling insert into categories values('','','','');
            'id'=>$r->ID, //bind the variable with field name $_POST['ID']
            'name'=>$r->name, //same name from database           
        ]);
        
        Return redirect()->route('category');// redirect to the page 'category' same define on route
    }
}
