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
        DB::table('san_phams')->where('id', $id)->update($datas);
    }
    public function deleteProduct($id)
    {
        DB::table('san_phams')->where('id', $id)->delete();
    }
    // cach 3: si dung eloquent
    use SoftDeletes;
    protected $table = 'san_phams';
    protected $fillable = [
        'ma_san_pham',
        'ten_san_pham',
        'hinh_anh',
        'gia',
        'gia_khuyen_mai',
        'mo_ta_ngan',
        'noi_dung',
        'so_luong',
        'luot_xem',
        'ngay_nhap',
        'danh_muc_id',
        'trang_thai',
        'moi',
        'hot',
        'hot_deal',
        'show_home',
    ];
    protected $casts = [
        'trang_thai' => 'boolean',
        'moi' => 'boolean',
        'hot' => 'boolean',
        'hot_deal' => 'boolean',
        'show_home' => 'boolean',
    ];
    public function danhMuc(){
        return $this->belongsTo(DanhMuc::class);
    }
    public function hinhAnhSanPham()
    {
        return $this->hasMany(HinhAnhSanPham::class);
    }
}
