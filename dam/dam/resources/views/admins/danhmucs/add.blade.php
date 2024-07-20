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

        .form-control-file {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .img-preview {
            width: 200px;
            height: auto;
            display: none;
            margin-top: 10px;
        }

        .form-select {
            border-radius: 0.25rem;
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
            const imgDanhMuc = document.getElementById('img_danh_muc');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                imgDanhMuc.src = reader.result;
                imgDanhMuc.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection

@section('content')
    <div class="container">
        <h1 class="mb-4">Thêm Danh Mục</h1>

        <!-- Form thêm danh mục -->
        <form action="{{ route('admins.danhmucs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Tên danh mục -->
            <div class="form-group mb-3">
                <label for="ten_danh_muc" class="form-label">Tên Danh Mục</label>
                <input type="text" class="form-control @error('ten_danh_muc') is-invalid @enderror" id="ten_danh_muc"
                    name="ten_danh_muc" placeholder="Nhập tên danh mục" value="{{ old('ten_danh_muc') }}">
                @error('ten_danh_muc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Hình ảnh -->
            <div class="form-group mb-3">
                <label for="hinh_anh" class="form-label">Hình Ảnh</label>
                <input type="file" id="hinh_anh" name="hinh_anh" class="form-control-file" accept="image/*"
                    onchange="showImage(event)">
                <img id="img_danh_muc" class="img-preview" alt="Hình ảnh danh mục">
            </div>

            <!-- Trạng thái -->
            <div class="form-group mb-3">
                <label for="trang_thai" class="form-label">Trạng Thái</label>
                <select class="form-select" id="trang_thai" name="trang_thai">
                    <option value="1">Hiển thị</option>
                    <option value="0">Ẩn</option>
                </select>
            </div>

            <!-- Nút Submit và Quay lại -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="{{ route('admins.danhmucs.index') }}" class="btn btn-secondary">Quay lại</a>
            </div>
        </form>
    </div>
@endsection
