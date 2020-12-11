
@extends('layouts.app')
@section('content') 
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif 
    

<div class="container">
	    <div class="row">
        <form   method="post" action="{{ route('create.order') }}" >
            @csrf
		    <table class="table table-hover table-striped">
		        <thead>
		        <tr class="thead-dark">
		            <th>ID</th>
                    <th>Image</th>
		            <th>Name</th>
		            <th>Quantity</th>
		            <th>Amount</th>
                    <th>Action</th>
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($carts as $cart)
		            <tr>
		                <td><input type="checkbox" name="item[]" /></td>
                        <td><img src="{{ asset('images/') }}/{{$cart->image}}" alt="" width="50"></td>
		                <td style="max-width:300px">
		                    <h6>{{$cart->name}}</h6>	                    
		                </td>
                        <td>{{$cart->cartQty}}</td>
                        <td>{{$cart->price*$cart->cartQty}}</td>
		                <td>
		                    | 
		                    <a href="#" 
 class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
		                </td>
		            </tr> 
                @endforeach

                <tr class="thead-dark">
		            <td>&nbsp;</td>
                    <td>&nbsp;</td>
		            <td>&nbsp;</td>                   
		            <td>Total</td>
		            <td><input type="text" name="amount" id="amount" value="1000"></td>
                    <td><input type="submit" name="checkout" value="Checkout"></td>
		        </tr>
				</form>
		        </tbody>
		    </table>
		
		<div class="text-center">
			{{ $carts->links() }}
        </div>

	</div>
    </div>

@endsection
