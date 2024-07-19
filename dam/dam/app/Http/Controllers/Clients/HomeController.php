<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $title = "Trang chủ ";
        return view('clients.index', ['title' => $title]);
    }
}
