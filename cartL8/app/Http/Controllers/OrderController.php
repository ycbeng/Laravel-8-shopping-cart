<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product; 
use App\Models\myCart;
use App\Models\myOrder;
Use Session;
Use Auth;
class OrderController extends Controller
{
    //
    public function add(){ 

        $r=request(); 
        $addOrder=myOrder::create([    
            
            'amount'=>$r->amount,             
            'paymentStatus'=>'pending',                 
            'userID'=>Auth::id(),                         
        ]); 
        
        $orderID=DB::table('my_orders')->where('userID','=',Auth::id())->orderBy('created_at', 'desc')->first(); //get the lastest order ID        
        
        $items=$r->input('item');
        foreach($items as $item => $value){
            $carts =myCart::find($value);
            $carts->orderID = $orderID->id;
            $carts->save();
        }
        
        Session::flash('success',"Order succesful!");        
        Return redirect()->route('show.myCart'); //redirect to payment
        
    }
}
