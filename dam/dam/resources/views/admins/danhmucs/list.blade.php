@extends('layouts.admin')
@section('title')
    {{-- Hien thi du lieu trong blade --}}
    {{ $title }}
@endsection
@section('css')
    <style>
        /* CSS để xử lý fade-out hiệu ứng */
        .alert {
            transition: opacity 0.5s ease-out;
        }

        .alert.fade {
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
                    }, 500); // Thời gian trễ để đảm bảo hiệu ứng fade-out được hiển thị
                }, 5000);
            }
        });
    </script>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Danh sách sản phẩm</h5>
                        <div class="card-options">
                            <a href="{{ route('danhmuc.create') }}" class="btn btn-primary">Thêm mới
                                <i class="fe fe-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            {{-- Hiển thị thông báo --}}
                            @if (session('thongbao'))
                                <div id="notification" class="alert alert-success" role="alert">
                                    <h5 class="alert-heading">
                                        {{ session('thongbao') }}
                                    </h5>
                                </div>
                            @endif

                            {{-- Hiển thị thông báo lỗi --}}
                            @if (session('error'))
                                <div id="notification" class="alert alert-danger" role="alert">
                                    <h5 class="alert-heading">
                                        {{ session('error') }}
                                    </h5>
                                </div>
                            @endif

                            <table class="table table-striped table-bordered table-hover" id="table1">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên danh mục</th>
                                        <th>Ảnh</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($danh_mucs as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->ten_danh_muc }}</td>
                                            <td><img src="{{ asset('storage/' . $item->hinh_anh) }}" alt="{{ $item->ten_danh_muc }}" width="200"
                                                height="300px"> </td>
                                            <td>
                                                <a href="{{ route('danhmuc.edit', $item->id) }}"
                                                    class="btn btn-primary">Sửa</a>
                                                <form action="{{ route('danhmuc.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                                </form>
                                            </td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
