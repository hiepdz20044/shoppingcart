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
    <script>
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
        <form action="{{ route('khachhang.store') }}" method="POST" enctype="multipart/form-data">
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
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
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
            <div class="mb-3 d-flex justify-content-center">
                <button type="reset" class="btn btn-outline-secondary me-3">Nhập lại</button>
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </div>
            <a href="{{ route('khachhang.index') }}"><button type="button" class="btn btn-danger">Hủy</button></a>
        </form>
    </div>
@endsection
