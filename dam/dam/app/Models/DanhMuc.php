<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DanhMuc extends Model
{
    use HasFactory;
    public function getList()
    {
        $listDanhMuc = DB::table('danh_mucs')->get();
        return $listDanhMuc;
        }
    public function createProduct($datas) {
        DB::table('danh_mucs')->insert($datas);
    }
    public function getDanhMuc($id){
        $danh_mucs = DB::table('danh_mucs')->where('id',$id)->first();
        return $danh_mucs;
    }
    // cach 3: si dung eloquent
    protected $table = 'danh_mucs';
    protected $fillable = ['ten_danh_muc','hinh_anh'];
}
