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
            const imgNew = document.getElementById('img_new');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                imgNew.src = reader.result;
                imgNew.style.display = 'block'; // Hiển thị hình ảnh mới
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                imgNew.src = '#'; // Đặt lại src nếu không có tệp nào được chọn
                imgNew.style.display = 'none'; // Ẩn hình ảnh mới nếu không có tệp nào được chọn
            }
        }
    </script>
@endsection
{{-- Tạo content trang thêm danh mục --}}
@section('content')
    <div class="container">
        <h1 class="mb-4">Thêm Danh Mục</h1>
        <!-- Form thêm danh mục -->
        <form action="{{ route('danhmuc.update', $danh_mucs->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="ten_danh_muc">Tên Danh Mục</label>
                <input type="text" class="form-control @error('ten_danh_muc') is-invalid @enderror" id="ten_danh_muc" name="ten_danh_muc"
                    value="{{ old('ten_danh_muc', $danh_mucs->ten_danh_muc) }}" required>
                    @error('ten_danh_muc')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="img_danh_muc" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" id="img_danh_muc" name="img_danh_muc"
                    onchange="showImage(event)">
            </div>
            @if ($danh_mucs->hinh_anh)
                <<img id="img_current" src="{{ asset('storage/' . $danh_mucs->hinh_anh) }}" alt="Hình ảnh danh mục"
                    style="width: 200px;">
                @else
                    <img id="img_current" src="#" alt="Hình ảnh danh mục" style="width: 200px; display: none;">
            @endif
            <div class="mb-3">
                <label for="new_image" class="form-label">Hình Ảnh Mới:</label>
                <img id="img_new" src="#" alt="Hình ảnh mới" style="width: 200px; display: none;">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <a href="{{ route('danhmuc.index') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
@endsection
