<?php

namespace App\Http\Controllers\Admins;

use Carbon\Carbon;
use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\KhachHangRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class KhachHangController extends Controller
{
    // su dung cho 2 cach row query va query builder
    public $users;
    public function __construct()
    {
        $this->users = new KhachHang();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $title = "Danh sách khách hàng";
        $listKhachHang = $this->users->getList();
        return view('admins.khachhangs.list', compact('title', 'listKhachHang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Thêm khách hàng";
        return view('admins.khachhangs.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KhachHangRequest $request)
    {
        //
        // Xử lý file hình ảnh
        if ($request->hasFile('hinh_anh')) {
            $imagePath = $request->file('hinh_anh')->store('images', 'public');
        } else {
            // Cung cấp tên file mặc định hoặc xử lý lỗi nếu không có ảnh
            $imagePath = 'default.png'; // Thay đổi nếu cần thiết
        }
        if ($request->isMethod('post')) {
            $params = $request->post();
            $params['password'] = Hash::make($params['password']);
            $params = $request->except('_token');
            $params['hinh_anh'] = $imagePath;
            // Lấy CSRF token từ request
            $csrfToken = $request->input('_token');
            // Gán CSRF token cho trường remember_token
            $params['remember_token'] = $csrfToken;
            // Gán ngày tạo cho trường created_at
            $params['created_at'] = Carbon::now();
            // Gán ngày cập nhật cho trường updated_at
            $params['updated_at'] = Carbon::now();
            $this->users->createProduct($params);
            return redirect()->route('khachhang.index')->with('thongbao', 'Thêm khách hàng thành công');
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
        $title = "Sửa thông tin khách hàng";
        // Lấy thông tin chi tiết
        // Sử dngj query builder
        $user = $this->users->getUser($id);
        // su dung eloquent
        // $user = User::findOrFine($id); cai nay dang sai
        if (!$user) {
            return redirect()->route('khachhang.index')->with('error', 'Không tìm thấy khách hàng');
        }
        return view('admins.khachhangs.edit', compact('title', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KhachHangRequest $request, string $id)
    {
        // Kiểm tra phương thức PUT
        if ($request->isMethod('PUT')) {
            // Lấy người dùng hoặc báo lỗi nếu không tìm thấy
            $user = KhachHang::findOrFail($id);

            // Lấy tất cả các tham số ngoại trừ _token và _method
            $params = $request->except('_token', '_method');

            // Xử lý hình ảnh
            if ($request->hasFile('hinh_anh')) {
                // Xóa hình cũ nếu có
                if ($user->hinh_anh) {
                    Storage::disk('public')->delete($user->hinh_anh);
                }
                // Lưu hình mới
                $params['hinh_anh'] = $request->file('hinh_anh')->store('images/', 'public');
            } else {
                // Giữ hình cũ nếu không có hình mới
                $params['hinh_anh'] = $user->hinh_anh;
            }

            // Cập nhật dữ liệu người dùng
            $params['password'] = Hash::make($params['password']);

            $user->update($params);

            // Redirect với thông báo thành công
            return redirect()->route('khachhang.index')->with('thongbao', 'Cập nhật khách hàng thành công');
        }

        // Nếu không phải PUT, trả về trang lỗi
        return redirect()->route('khachhang.index')->with('error', 'Yêu cầu không hợp lệ.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // xóa sản phẩm
        // Tìm sản phẩm theo ID
        $users = DB::table('users')->where('id', $id)->first();

        if ($users) {
            // Xóa hình ảnh từ thư mục lưu trữ nếu không phải là ảnh mặc định
            if ($users->hinh_anh !== 'default.png') {
                Storage::delete('public/images/' . $users->hinh_anh);
            }

            // Xóa sản phẩm khỏi cơ sở dữ liệu
            DB::table('users')->where('id', $id)->delete();

            return redirect()->route('khachhang.index')->with('thongbao', 'Khách hàng đã được xóa thành công');
        }

        return redirect()->route('sanpham.index')->with('thongbao', 'Khách hàng không tồn tại');
    }
}
