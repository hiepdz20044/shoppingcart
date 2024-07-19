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
            const img_danh_muc = document.getElementById('img_danh_muc');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                img_danh_muc.src = reader.result;
                img_danh_muc.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
{{-- Tạo content trang thêm danh mục --}}
@section('content')
    <div class="container">
        <h1 class="mb-4">Thêm Danh Mục</h1>
        <!-- Form thêm danh mục -->
        <form action="{{ route('danhmuc.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="ten_danh_muc">Tên Danh Mục</label>
                <input type="text" class="form-control @error('ten_danh_muc') is-invalid @enderror" id="ten_danh_muc"
                    name="ten_danh_muc" placeholder="Nhập tên danh mục">
                @error('ten_danh_muc')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="hinh_anh" class="form-label">Hình Ảnh:</label>
                <input type="file" id="hinh_anh" name="hinh_anh" class="form-control" accept="image/*"
                    onchange="showImage(event)">
            </div>
            <img id="img_danh_muc" src="" alt="Hình ảnh danh mục" style="width: 200px; display: none">
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="{{ route('danhmuc.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
@endsection
