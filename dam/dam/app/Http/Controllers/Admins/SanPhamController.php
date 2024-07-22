<?php

namespace App\Http\Controllers\Admins;

use Carbon\Carbon;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\SanPhamRequest;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    // su dung cho 2 cach row query va query builder
    public $san_phams;
    public function __construct()
    {
        $this->san_phams = new SanPham();
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // $title = 'Danh sách sản phẩm';
        // $listSanPham = $this->san_phams->getList();
        // return view('admins.sanphams.list', compact('title', 'listSanPham'));
        // su dung eloquent
        $title = 'Danh sách sản phẩm';
        // lay du lieu cu form tim kiem
        // $search = $request->input('search');
        // $searchTrangThai= $request->input('searchTrangThai');
        $listSanPham = SanPham::orderByDesc('trang_thai')->get();
        // ->when($search, function ($query, $search) {
        //     return $query->where("ten_san_pham", "like", "%{$search}%");
        // })
        // ->when($searchTrangThai !== null, function ($query) use ($searchTrangThai) {
        //     return $query->where("trang_thai", "=", $searchTrangThai);
        // })
        // ->orderByDesc('id')->paginate(3);
        return view('admins.sanphams.list', compact('title', 'listSanPham'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = 'Thêm sản phẩm';
        $listSanPham = SanPham::query()->get();
        // Lấy danh sách các danh mục
        $danhMucs = DB::table('danh_mucs')->get();
        return view('admins.sanphams.add', compact('title', 'listSanPham', 'danhMucs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SanPhamRequest $request)
    {
        //
        if ($request->isMethod('post')) {
            $params = $request->post();
            $params = $request->except('_token');
            // chuyen doi gia tri checkbox thanh boolean
            $params['moi'] = $request->has('moi') ? 1 : 0;
            $params['hot'] = $request->has('hot') ? 1 : 0;
            $params['hot_deal'] = $request->has('hot_deal') ? 1 : 0;
            $params['show_home'] = $request->has('show_home') ? 1 : 0;
            // Xử lý file hình ảnh
            if ($request->hasFile('hinh_anh')) {
                $imagePath = $request->file('hinh_anh')->store('images', 'public');
            } else {
                // Cung cấp tên file mặc định hoặc xử lý lỗi nếu không có ảnh
                $imagePath = 'default.png'; // Thay đổi nếu cần thiết
            }
            $params['hinh_anh'] = $imagePath;
            $sanPham = SanPham::query()->create($params);
            $sanPhamID = $sanPham->id;
        }
        if ($request->hasFile('list_hinh_anh')) {
            foreach ($request->File('list_hinh_anh') as $image) {
                if ($image) {
                    $path = $image->store('images/id' . $sanPhamID, 'public');
                    $sanPham->hinhAnhSanPham()->create([
                        'san_pham_id' => $sanPhamID,
                        'hinh_anh' => $path,
                    ]);
                }
            }
        }
        return redirect()->route('admins.sanphams.index')->with('thongbao', 'Thêm sản phẩm thành công');
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
        $title = "Sửa sản phẩm";
        // Lấy thông tin chi tiết của sản phẩm
        $listSanPham = $this->san_phams->getListSp($id);

        if (!$listSanPham) {
            return redirect()->route('sanpham.index')->with('error', 'Không tìm thấy sản phẩm');
        }

        // Lấy danh sách các danh mục
        $danhMucs = DB::table('danh_mucs')->get();

        return view('admins.sanphams.edit', compact('title', 'listSanPham', 'danhMucs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SanPhamRequest $request, string $id)
    {
        //
        // Kiểm tra phương thức PUT
        if ($request->isMethod('PUT')) {
            // Lấy người dùng hoặc báo lỗi nếu không tìm thấy
            $listSanPham = SanPham::findOrFail($id);

            // Lấy tất cả các tham số ngoại trừ _token và _method
            $params = $request->except('_token', '_method');

            // Xử lý hình ảnh
            if ($request->hasFile('hinh_anh')) {
                // Xóa hình cũ nếu có
                if ($listSanPham->hinh_anh) {
                    Storage::disk('public')->delete($listSanPham->hinh_anh);
                }
                // Lưu hình mới
                $params['hinh_anh'] = $request->file('hinh_anh')->store('images/', 'public');
            } else {
                // Giữ hình cũ nếu không có hình mới
                $params['hinh_anh'] = $listSanPham->hinh_anh;
            }
            // Cập nhật dữ liệu vào cơ sở dữ liệu
            $listSanPham->update($params);

            // Chuyển hướng và thông báo thành công
            return redirect()->route('sanpham.index')->with('thongbao', 'Cập nhật thành công!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        if ($request->isMethod('DELETE')) {
            // su dung query builder
            // Lay thong tin cua san pham de neu xoa thi xoa anh
            // 
            // su dung eloquent
            $sanPham = SanPham::findOrFail($id);
            if ($sanPham) {
                // su dung query builder
                // $this->san_phams->deleteProduct($id);
                // su dung eloquent
                $sanPham->delete();
                // xoa hinh anh (neu xoa mem thi khong xoa hinh anh)
                // if ($sanPham->hinh_anh && Storage::disk('public')->exists($sanPham->hinh_anh)) {
                //     Storage::disk('public')->delete($sanPham->hinh_anh);
                // }
                return redirect()->route('sanpham.index')->with('thongbao', 'Sản phẩm đã được xóa thành công');
            }
            return redirect()->route('sanpham.index')->with('thongbao', 'Sản phẩm không tồn tại');
        }
        // khi xoa mem se su dung eloquent (xoa mem thi khong xoa anh)
        // mot so ham can nho khi lam viec voi xoa mem
        // ham hien thi toan bo cac san pham da xoa mem
        // $listSanPhamDaXoa = SanPham::query()->onlyTrashed()->get;

        // Ham restore san pham da xoa
        // $listSanPhamDaXoa->restore();

        // ham xoa vinh vien san pham da xoa mem (khi lam chuc nang nay moi duoc xoa anh)
        // $listSanPhamDaXoa->forceDelete();
    }
}
