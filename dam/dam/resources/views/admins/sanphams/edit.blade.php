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
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cập Nhật Sản Phẩm</div>

                    <div class="card-body">
                        <form action="{{ route('sanpham.update', $listSanPham->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="ten_san_pham" class="form-label">Tên Sản Phẩm:</label>
                                <input type="text" id="ten_san_pham" name="ten_san_pham"
                                    class="form-control @error('ten_san_pham') is-invalid @enderror"
                                    value="{{ old('ten_san_pham', $listSanPham->ten_san_pham) }}">
                                @error('ten_san_pham')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hinh_anh" class="form-label">Hình Ảnh:</label>
                                <input type="file" id="hinh_anh" name="hinh_anh" class="form-control" accept="image/*"
                                    onchange="showImage(event)">
                                @error('hinh_anh')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="current_image" class="form-label">Hình Ảnh Hiện Tại:</label>
                                @if ($listSanPham->hinh_anh)
                                    <img id="img_current" src="{{ asset('storage/' . $listSanPham->hinh_anh) }}"
                                        alt="Hình ảnh sản phẩm" style="width: 200px;">
                                @else
                                    <img id="img_current" src="#" alt="Hình ảnh sản phẩm"
                                        style="width: 200px; display: none;">
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="new_image" class="form-label">Hình Ảnh Mới:</label>
                                <img id="img_new" src="#" alt="Hình ảnh mới" style="width: 200px; display: none;">
                            </div>

                            <div class="mb-3">
                                <label for="gia" class="form-label">Giá:</label>
                                <input type="number" id="gia" name="gia"
                                    class="form-control @error('gia') is-invalid @enderror" step="0.01"
                                    value="{{ old('gia', $listSanPham->gia) }}">
                                @error('gia')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="so_luong" class="form-label">Số Lượng:</label>
                                <input type="number" id="so_luong" name="so_luong"
                                    class="form-control @error('so_luong') is-invalid @enderror"
                                    value="{{ old('so_luong', $listSanPham->so_luong) }}">
                                @error('so_luong')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="id_danh_muc" class="form-label">Danh Mục:</label>
                                <select id="id_danh_muc" name="id_danh_muc" class="form-select">
                                    @foreach ($danhMucs as $danhMuc)
                                        <option value="{{ $danhMuc->id }}"
                                            {{ $danhMuc->id == old('id_danh_muc', $listSanPham->id_danh_muc) ? 'selected' : '' }}>
                                            {{ $danhMuc->ten_danh_muc }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_danh_muc')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- trang thai --}}
                            <div class="mb-3">
                                <label for="trang_thai" class="form-label">Trạng Thái:</label>
                                <select id="trang_thai" name="trang_thai" class="form select">
                                    <option value="1" {{ $listSanPham->trang_thai == 1 ? 'selected' : '' }}>
                                        Còn Hàng</option>
                                    <option value="0" {{ $listSanPham->trang_thai == 0 ? 'selected' : '' }}>
                                        Hết Hàng</option>
                                </select>
                                @error('trang_thai')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
                        </form>
                        <a href="{{ route('sanpham.index') }}"><button type="button"
                                class="btn btn-danger">Hủy</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
