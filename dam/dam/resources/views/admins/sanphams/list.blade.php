@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection
@section('css')
    <style>
        .alert {
            transition: opacity 0.5s ease-out;
        }

        .alert.fade {
            opacity: 0;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-outline-secondary:hover {
            background-color: #e2e6ea;
            border-color: #d6d6d6;
        }
    </style>
@endsection
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var notification = document.getElementById('notification');

            if (notification) {
                setTimeout(function() {
                    notification.classList.add('fade');
                    setTimeout(function() {
                        notification.style.display = 'none';
                    }, 500);
                }, 5000);
            }
        });
    </script>
@endsection
@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Danh Sách Sản Phẩm</h1>
        <a href="{{ route('admins.sanphams.create') }}" class="mb-3">
            <button type="button" class="btn btn-primary">Thêm mới</button>
        </a>
        {{-- Tìm kiếm --}}
        {{-- <form action="{{ route('sanpham.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <select name="searchTrangThai" class="form-select">
                    <option value="">Tất cả</option>
                    <option value="1" {{ request('searchTrangThai') == '1' ? 'selected' : '' }}>Còn hàng</option>
                    <option value="0" {{ request('searchTrangThai') == '0' ? 'selected' : '' }}>Hết hàng</option>
                </select>
                <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
            </div>
        </form>         --}}

        {{-- Hiển thị thông báo --}}
        @if (session('thongbao') || session('error'))
            <div id="notification" class="alert {{ session('error') ? 'alert-danger' : 'alert-success' }}" role="alert">
                <h5 class="alert-heading">
                    {{ session('thongbao') ?? session('error') }}
                </h5>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Danh Mục</th>
                        <th>Hình Ảnh</th>
                        <th>Giá</th>
                        <th>Giá khuyến mãi</th>
                        <th>Số Lượng</th>
                        <th>Trạng Thái</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listSanPham as $item)
                        <tr>
                            <td>{{ $item->ma_san_pham }}</td>
                            <td>{{ $item->ten_san_pham }}</td>
                            <td>
                                {{ $item->danhMuc->ten_danh_muc ?: 'Không có danh mục' }}
                            </td>
                            <td>
                                <img src="{{ asset('storage/' . $item->hinh_anh) }}" alt="{{ $item->ten_san_pham }}" width="100" class="img-thumbnail">
                            </td>
                            <td>{{ number_format($item->gia, 2) }} VNĐ</td>
                            <td>{{ empty($item->gia_khuyen_mai) ? 0 : $item->gia_khuyen_mai }}
                                VNĐ</td>
                            <td>{{ $item->so_luong }}</td>
                            <td>
                                @if ($item->trang_thai == 1)
                                <span class="badge bg-success">Còn hàng</span>
                                @else
                                <span class="badge bg-danger">Hết hàng</span>
                                @endif
                            <td>
                                <a href="{{ route('admins.sanphams.edit', $item->id) }}" class="btn btn-primary btn-sm">Sửa</a>
                                <form class="d-inline" action="{{ route('admins.sanphams.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Hiển thị phân trang --}}
        {{ $listSanPham->links('pagination::bootstrap-5') }}
    </div>
@endsection
