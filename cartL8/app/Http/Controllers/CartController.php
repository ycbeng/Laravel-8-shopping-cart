<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product; 
use App\Models\Category;
use App\Models\myCart;
Use Session;
Use Auth;


class CartController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function add(){ 

        $r=request(); 
        $addCategory=myCart::create([    
            
            'quantity'=>$r->quantity,             
            'orderID'=>'',
            'productID'=>$r->id,                 
            'userID'=>Auth::id(), 
                        
        ]);
        Session::flash('success',"Product add succesful!");        
        Return redirect()->route('products');
    }

    public function showMyCart(){
        $carts=DB::table('my_carts')
        ->leftjoin('products', 'products.id', '=', 'my_carts.productID')
        ->select('my_carts.quantity as cartQty','products.*')
        ->where('my_carts.orderID','=','') //'' haven't make payment
        ->where('my_carts.userID','=',Auth::id())
        ->paginate(12);
        
        return view('myCart')->with('carts',$carts);
    }
}
