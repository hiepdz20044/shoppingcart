@extends('layouts.admin')
@section('title')
    {{-- Hien thi du lieu trong blade --}}
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

        .alert.show {
            opacity: 1;
        }
    </style>
@endsection
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var notification = document.getElementById('notification');

            if (notification) {
                // Đặt thời gian hiển thị thông báo là 5 giây (5000 milliseconds)
                setTimeout(function() {
                    var alert = new bootstrap.Alert(notification);
                    alert.close();
                }, 5000);
            }
        });
    </script>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                        <h5 class="card-title mb-0">Danh sách sản phẩm</h5>
                        <a href="{{ route('admins.danhmucs.create') }}" class="btn btn-light">
                            Thêm mới <i class="fe fe-plus"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        {{-- Hiển thị thông báo --}}
                        @if (session('thongbao'))
                            <div id="notification" class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('thongbao') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- Hiển thị thông báo lỗi --}}
                        @if (session('error'))
                            <div id="notification" class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>STT</th>
                                    <th>Tên danh mục</th>
                                    <th>Ảnh</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($danh_mucs as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->ten_danh_muc }}</td>
                                        <td>
                                            @if ($item->hinh_anh)
                                                <img src="{{ asset('storage/' . $item->hinh_anh) }}"
                                                    alt="{{ $item->ten_danh_muc }}" class="img-thumbnail" style="max-width: 150px;">
                                            @else
                                                <span class="text-muted">Chưa có ảnh</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->trang_thai == true)
                                                <span class="badge text-success">Hiển thị</span>
                                            @else
                                                <span class="badge text-danger">Ẩn</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admins.danhmucs.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">
                                                <i class="fe fe-edit"></i> Sửa
                                            </a>
                                            <form action="{{ route('admins.danhmucs.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                                    <i class="fe fe-trash"></i> Xóa
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection