<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index(){
        return view("clients.cart.cart");
    }
    public function one(){
        return view("clients.cart.cart");
    }
    public function two(){
        return view("clients.cart.checkout2");
    }
    public function three(){
        return view("clients.cart.checkout3");
    }
}
