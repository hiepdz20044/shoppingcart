<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $title="Trang chủ";
        $listSanPham = SanPham::get();
        return view("clients.home.index", compact("listSanPham", "title"));
    }
    public function details($id)
    {
        $title="Sản phẩm";
        $SanPham = SanPham::findOrFail($id);
        return view("clients.products.detail", compact("SanPham", "title"));
    }
}
