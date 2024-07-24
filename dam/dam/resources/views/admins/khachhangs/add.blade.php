@extends('layouts.admin')
@section('title')
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
            var notification = document.getElementById('notification');
            if (notification) {
                setTimeout(function() {
                    notification.classList.add('fade');
                    setTimeout(function() {
                        notification.style.display = 'none';
                    }, 150);
                }, 5000);
            }
        });

        function showImage(event) {
            const img_user = document.getElementById('img_user');
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function() {
                img_user.src = reader.result;
                img_user.style.display = 'block';
            }
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
@section('content')
    <div class="container mt-5">
        <h2>Thêm mới khách hàng</h2>
        <form action="{{ route('admins.khachhangs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên khách hàng</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" value="{{ old('email') }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="dia_chi" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control @error('dia_chi') is-invalid @enderror" id="dia_chi"
                    name="dia_chi" value="{{ old('dia_chi') }}">
                @error('dia_chi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="hinh_anh" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control @error('hinh_anh') is-invalid @enderror" id="hinh_anh" name="hinh_anh" onchange="showImage(event)">
                @error('hinh_anh')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <img id="img_user" src="" alt="Hình ảnh khách hàng" style="width: 200px; display: none;">
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ngay_sinh" class="form-label">Ngày sinh</label>
                <input type="date" class="form-control @error('ngay_sinh') is-invalid @enderror" id="ngay_sinh"
                    name="ngay_sinh" value="{{ old('ngay_sinh') }}">
                @error('ngay_sinh')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="so_dien_thoai" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control @error('so_dien_thoai') is-invalid @enderror" id="so_dien_thoai" name="so_dien_thoai"
                    value="{{ old('so_dien_thoai') }}">
                @error('so_dien_thoai')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gioi_tinh" class="form-label">Giới tính</label>
                <select id="gioi_tinh" name="gioi_tinh" class="form-select @error('gioi_tinh') is-invalid @enderror">
                    <option value="Nam" {{ old('gioi_tinh') == 'Nam' ? 'selected' : '' }}>Nam</option>
                    <option value="Nữ" {{ old('gioi_tinh') == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                </select>
                @error('gioi_tinh')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="trang_thai" class="form-label">Trạng thái</label>
                <select id="trang_thai" name="trang_thai" class="form-select @error('trang_thai') is-invalid @enderror">
                    <option value="1" {{ old('trang_thai') == '1' ? 'selected' : '' }}>Đang hoạt động</option>
                    <option value="0" {{ old('trang_thai') == '0' ? 'selected' : '' }}>Dừng hoạt động</option>
                </select>
                @error('trang_thai')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button type="reset" class="btn btn-outline-secondary me-3">Nhập lại</button>
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </div>
            <a href="{{ route('admins.khachhangs.index') }}"><button type="button" class="btn btn-danger">Hủy</button></a>
        </form>
    </div>
@endsection
