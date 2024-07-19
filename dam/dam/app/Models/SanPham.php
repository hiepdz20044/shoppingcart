<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    use HasFactory;
    public function getList()
    {
        // truy cập vào bảng danh_mucs để lấy ten_danh_muc thông qua id_danh_muc từ bảng san_phams
        $listSanPham = DB::table('san_phams')
            ->join('danh_mucs', 'san_phams.id_danh_muc', '=', 'danh_mucs.id')->select('san_phams.*', 'danh_mucs.ten_danh_muc')->get();
        return $listSanPham;
    }
    public function createProduct($datas)
    {
        DB::table('san_phams')->insert($datas);
    }
    public function getListSp($id)
    {
        // Thực hiện JOIN giữa bảng 'san_phams' và bảng 'danh_mucs'
        $listSanPham = DB::table('san_phams')
            ->join('danh_mucs', 'san_phams.id_danh_muc', '=', 'danh_mucs.id')
            ->where('san_phams.id', $id)
            ->select('san_phams.*', 'danh_mucs.ten_danh_muc') // Chọn tất cả cột từ 'san_phams' và cột 'ten_danh_muc' từ 'danh_mucs'
            ->first();
        return $listSanPham;
    }
    public function updateProduct($id, $datas)
    {
        DB::table('san_phams')->where('id',$id)->update($datas);
    }
    public function deleteProduct($id)
    {
        DB::table('san_phams')->where('id',$id)->delete();
    }
    // cach 3: si dung eloquent
    use SoftDeletes;
    protected $table = 'san_phams';
    protected $fillable = ['ten_san_pham', 'hinh_anh',  'gia', 'so_luong', 'id_danh_muc','trang_thai'];
}
