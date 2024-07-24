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
    <div class="container mt-5">
        <h2 class="mb-4">Danh sách khách hàng</h2>
        <a href="{{ route('admins.khachhangs.create') }}"><button type="submit" class="btn btn-primary">Thêm mới</button> </a>
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

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Ảnh</th>
                    <th>Địa chỉ</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listKhachHang as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><img src="{{ asset('storage/' . $user->hinh_anh) }}" alt="{{ $user->name }}" width="100"
                                height="150px"> </td>
                        <td>{{ $user->dia_chi }}</td>
                        <td>{{ $user->ngay_sinh }}</td>
                        <td>{{ $user->gioi_tinh }}</td>
                        <td>{{ $user->trang_thai == '1' ? 'Đang hoạt động' : 'Dừng hoạt động'}}</td>
                        <td>
                            <a href="{{ route('admins.khachhangs.edit', $user->id) }}" class="btn btn-primary">Sửa</a>
                            <form action="{{ route('admins.khachhangs.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
