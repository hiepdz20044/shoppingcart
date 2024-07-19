@extends('layouts.admin')
@section('title')
    {{-- Hien thi du lieu trong blade --}}
    {{ $title }}
@endsection
@section('css')
    <style>
        .fade {
            transition: opacity 0.5s ease-out;
            opacity: 0;
        }
    </style>
@endsection
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Lấy thông báo nếu tồn tại
            var notification = document.getElementById('notification');

            if (notification) {
                // Đặt thời gian hiển thị thông báo là 5 giây (5000 milliseconds)
                setTimeout(function() {
                    notification.classList.add('fade');
                    setTimeout(function() {
                        notification.style.display = 'none';
                    }, 150); // Thời gian trễ để đảm bảo hiệu ứng fade-out được hiển thị
                }, 5000);
            }
        });
    </script>
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thêm Sản Phẩm</div>

                    <div class="card-body">
                        <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="ten_san_pham" class="form-label">Tên Sản Phẩm:</label>
                                <input type="text" id="ten_san_pham" name="ten_san_pham"
                                    class="form-control @error('ten_san_pham') is-invalid @enderror"
                                    value="{{ old('ten_san_pham') }}">
                                @error('ten_san_pham')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hinh_anh" class="form-label">Hình Ảnh:</label>
                                <input type="file" id="hinh_anh" name="hinh_anh" class="form-control" accept="image/*">
                                @error('hinh_anh')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="gia" class="form-label">Giá:</label>
                                <input type="number" id="gia" name="gia"
                                    class="form-control @error('gia') is-invalid @enderror" step="0.01"
                                    value="{{ old('gia') }}">
                                @error('gia')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="so_luong" class="form-label">Số Lượng:</label>
                                <input type="number" id="so_luong" name="so_luong"
                                    class="form-control @error('so_luong') is-invalid @enderror"
                                    value="{{ old('so_luong') }}">
                                @error('so_luong')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="id_danh_muc" class="form-label">Danh Mục:</label>
                                <select id="id_danh_muc" name="id_danh_muc" class="form-select">
                                    @foreach ($danhMucs as $danhMuc)
                                        <option value="{{ $danhMuc->id }}">{{ $danhMuc->ten_danh_muc }}</option>
                                    @endforeach
                                </select>
                                @error('id_danh_muc')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- trang thai --}}
                            <div class="mb-3">
                                <label for="trang_thai" class="form-label">Trạng Thái:</label>
                                <select id="trang_thai" name="trang_thai"
                                    class="form
                                    select">
                                    <option value="1">Còn Hàng</option>
                                    <option value="0">Hết Hàng</option>
                                </select>
                                @error('trang_thai')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
