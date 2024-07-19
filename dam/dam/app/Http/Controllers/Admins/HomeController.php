<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $data=[];
        $data['title']="Dashboard";
        return view('admins.index',$data);
    }
}
