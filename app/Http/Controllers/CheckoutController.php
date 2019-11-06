<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {

    	if (Auth::check()) {

    		$cartItems = Cart::content();

    		return view('cart.checkout',compact('cartItems'));
    		
    	}else{

    		return redirect('login');
    	}


    }
}
