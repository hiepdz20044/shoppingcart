<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KhachHang extends Model
{
    use HasFactory;
    public function getList()
    {
        $listKhachHang = DB::table('users')->get();
        return $listKhachHang;
    }
    public function createProduct($datas)
    {
        DB::table('users')->insert($datas);
    }
    public function getUser($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return $user;
    }
    // cach 3: si dung eloquent
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'dia_chi',
        'hinh_anh',
        'ngay_sinh',
        'so_dien_thoai',
        'gioi_tinh',
        'trang_thai',
    ];
}
