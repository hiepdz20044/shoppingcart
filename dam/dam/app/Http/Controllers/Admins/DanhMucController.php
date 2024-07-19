<?php

namespace App\Http\Controllers\Admins;

use Carbon\Carbon;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\DanhMucRequest;
use Illuminate\Support\Facades\Storage;

class DanhMucController extends Controller
{
    // su dung cho 2 cach row query va query builder
    public $danh_mucs;
    public function __construct()
    {
        $this->danh_mucs = new DanhMuc();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = "Danh sách danh mục";
        $danh_mucs = $this->danh_mucs->getList();
        return view('admins.danhmucs.list', compact('danh_mucs', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Thêm danh mục";
        return view('admins.danhmucs.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DanhMucRequest $request)
    {
        //
        //
        if ($request->isMethod('post')) {
            
            $params = $request->post();
            $params = $request->except('_token');
            // Xử lý file hình ảnh
            if ($request->hasFile('hinh_anh')) {
                $image = $request->file('hinh_anh');
                $path = $image->store('public/images');
                $imagePath = basename($path); // Lấy tên file từ đường dẫn lưu trữ
            } else {
                // Cung cấp tên file mặc định hoặc xử lý lỗi nếu không có ảnh
                $imagePath = 'default.png'; // Thay đổi nếu cần thiết
            }
            $params['hinh_anh'] = $imagePath;
            // Gán ngày tạo cho trường created_at
            $params['created_at'] = Carbon::now();
            // Gán ngày cập nhật cho trường updated_at
            $params['updated_at'] = Carbon::now();
            $this->danh_mucs->createProduct($params);
            return redirect()->route('danhmuc.index')->with('thongbao', 'Thêm danh mục thành công');
        }
    }   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $title = "Thêm danh mục";
        $danh_mucs = $this->danh_mucs->getDanhMuc($id);
        if (!$danh_mucs) {
            return redirect()->route('danhmuc.index')->with('error', 'Không tìm thấy khách hàng');
        }
        return view('admins.danhmucs.edit', compact('title', 'danh_mucs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DanhMucRequest $request, string $id)
    {
        //
        if ($request->isMethod('PUT')) {
            $params = $request->except('_token', '_method');
            $danhMuc = DanhMuc::findOrFail($id);
            // xu li hinh anh
            if ($request->hasFile('img_danh_muc')) {
                // neu co day hinh anh thi xoa hinh cu va them hinh moi
                if ($danhMuc->hinh_anh) {
                    Storage::disk('public')->delete($danhMuc->hinh_anh);
                }
                $params['hinh_anh'] = $request->file('img_danh_muc')->store('images/', 'public');
            } else {
                // neu khong co hinh anh thi lay lai hinh anh cu
                $params['hinh_anh'] = $danhMuc->img_danh_muc;
            }
            // cap nhat du lieu
            // eloquent
            $danhMuc->update($params);
            return redirect()->route('danhmuc.index')->with('thongbao', 'Cap nhat hinh anh thanh cong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // xóa sản phẩm
        // Tìm sản phẩm theo ID
        $danhmuc = DB::table('danh_mucs')->where('id', $id)->first();
        // Xóa danh mục khỏi cơ sở dữ liệu
        DB::table('danh_mucs')->where('id', $id)->delete();
        return redirect()->route('danhmuc.index')->with('thongbao', 'Danh mục đã được xóa thành công');
    }
}
