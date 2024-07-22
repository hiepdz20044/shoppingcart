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

        .container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
        }

        .form-content,
        .editor-container {
            padding: 15px;
            box-sizing: border-box;
        }

        .form-content {
            width: 100%;
        }

        .editor-container {
            width: 100%;
        }

        .form-control,
        .quill-editor {
            width: 100%;
        }

        .quill-editor {
            height: 400px;
            /* Điều chỉnh chiều cao của editor theo nhu cầu */
        }

        .switch {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .switch input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            width: 0;
            height: 0;
        }

        .switch label {
            font-size: 16px;
            color: #333;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-left: 10px;
        }

        .slider {
            position: relative;
            display: inline-block;
            width: 34px;
            height: 20px;
            background-color: #ccc;
            border-radius: 20px;
            transition: background-color .4s;
        }

        .slider:before {
            content: "";
            position: absolute;
            height: 12px;
            width: 12px;
            border-radius: 50%;
            background-color: white;
            left: 4px;
            bottom: 4px;
            transition: transform .4s;
        }

        input:checked+.slider {
            background-color: #f93200;
        }

        input:checked+.slider:before {
            transform: translateX(14px);
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('js')
    <!-- Thêm thư viện Quill.js -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script>
        function showImage(event) {
            const img_san_pham = document.getElementById('img_san_pham');
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function() {
                img_san_pham.src = reader.result;
                img_san_pham.style.display = 'block';
            }
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Khởi tạo Quill editor
            var quill = new Quill('#noi_dung', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{
                            'header': '1'
                        }, {
                            'header': '2'
                        }],
                        ['bold', 'italic', 'underline'],
                        ['image', 'code-block']
                    ]
                }
            });

            // Đặt nội dung cho Quill editor nếu có dữ liệu cũ
            @if (old('noi_dung'))
                quill.root.innerHTML = `{!! old('noi_dung') !!}`;
            @endif

            // Xử lý nội dung khi form được submit
            document.querySelector('form').addEventListener('submit', function() {
                document.querySelector('textarea[name="noi_dung"]').value = quill.root.innerHTML;
            });

            // Xử lý thông báo
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
    </script>
    {{-- thêm album hình ảnh --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var rowCount = 1;
            document.getElementById('add-row').addEventListener('click', function() {
                var tableBody = document.getElementById('image-table-body');

                var newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td class="d-flex align-items-center">
                    <img class="me-2" id="preview_${rowCount}"
                        src="https://i.fbcd.co/products/resized/resized-750-500/563d0201e4359c2e890569e254ea14790eb370b71d08b6de5052511cc0352313.webp"
                        alt="" style="width: 50px;">
                    <input type="file" id="hinh_anh" name="list_hinh_anh[id_${rowCount}]"
                        class="form-control" onchange="previewImage(this,${rowCount})">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" onclick="removeImage(this)">
                            Xóa
                        </button>
                    </td>`;

                tableBody.appendChild(newRow);
                rowCount++;
            })
        });

        function previewImage(input, rowIndex) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById(`preview_${rowIndex}`).setAttribute('src', e.target.result)
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        // Hàm xóa
        function removeImage(input) {
            input.parentElement.parentElement.remove();
        }
    </script>
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{ route('admins.sanphams.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <!-- Form content bên trái -->
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">Thêm Sản Phẩm</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="ma_san_pham" class="form-label">Mã Sản Phẩm:</label>
                                <input type="text" id="ma_san_pham" name="ma_san_pham"
                                    class="form-control @error('ma_san_pham') is-invalid @enderror"
                                    value="{{ old('ma_san_pham') }}">
                                @error('ma_san_pham')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

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
                                <label for="danh_muc_id" class="form-label">Danh Mục:</label>
                                <select id="danh_muc_id" name="danh_muc_id" class="form-select @error('danh_muc_id') is-invalid @enderror">
                                    <option selected>--Chọn danh mục--</option>
                                    @foreach ($danhMucs as $danhMuc)
                                        <option value="{{ $danhMuc->id }}">{{ $danhMuc->ten_danh_muc }}</option>
                                    @endforeach
                                </select>
                                @error('danh_muc_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="hinh_anh" class="form-label">Hình Ảnh:</label>
                                <input type="file" class="form-control @error('hinh_anh') is-invalid @enderror"
                                    id="hinh_anh" name="hinh_anh" onchange="showImage(event)">
                                @error('hinh_anh')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <img id="img_san_pham" src="" alt="Hình ảnh sản phẩm"
                                    style="width: 200px; display: none;">
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
                                <label for="gia_khuyen_mai" class="form-label">Giá khuyến mãi:</label>
                                <input type="number" id="gia_khuyen_mai" name="gia_khuyen_mai"
                                    class="form-control @error('gia_khuyen_mai') is-invalid @enderror" step="0.01"
                                    value="{{ old('gia_khuyen_mai') }}">
                                @error('gia_khuyen_mai')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="so_luong" class="form-label">Số lượng:</label>
                                <input type="number" id="so_luong" name="so_luong"
                                    class="form-control @error('so_luong') is-invalid @enderror"
                                    value="{{ old('so_luong') }}">
                                @error('so_luong')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ngay_nhap" class="form-label">Ngày nhập:</label>
                                <input type="date" id="ngay_nhap" name="ngay_nhap"
                                    class="form-control @error('ngay_nhap') is-invalid @enderror"
                                    value="{{ old('ngay_nhap') }}">
                                @error('ngay_nhap')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="trang_thai" class="form-label">Trạng Thái:</label>
                                <select id="trang_thai" name="trang_thai" class="form-select @error('trang_thai') is-invalid @enderror">
                                    <option value="1" {{ old('trang_thai') == '1' ? 'selected' : '' }}>Hiển thị</option>
                                    <option value="0" {{ old('trang_thai') == '0' ? 'selected' : '' }}>Ẩn</option>
                                </select>
                                @error('trang_thai')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="mo_ta_ngan" class="form-label">Mô tả ngắn:</label>
                                <textarea name="mo_ta_ngan" id="mo_ta_ngan" rows="10"
                                    class="form-control @error('mo_ta_ngan') is-invalid @enderror">{{ old('mo_ta_ngan') }}</textarea>
                                @error('mo_ta_ngan')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tùy chỉnh thêm:</label>
                                <div class="switch">
                                    <input type="checkbox" id="moi" name="moi" {{ old('moi') ? 'checked' : '' }}>
                                    <span class="slider"></span>
                                    <label for="moi">Mới</label>
                                </div>
                                <div class="switch">
                                    <input type="checkbox" id="hot" name="hot" {{ old('hot') ? 'checked' : '' }}>
                                    <span class="slider"></span>
                                    <label for="hot">Hot</label>
                                </div>
                                <div class="switch">
                                    <input type="checkbox" id="hot_deal" name="hot_deal" {{ old('hot_deal') ? 'checked' : '' }}>
                                    <span class="slider"></span>
                                    <label for="hot_deal">Hot Deal</label>
                                </div>
                                <div class="switch">
                                    <input type="checkbox" id="show_home" name="show_home" {{ old('show_home') ? 'checked' : '' }}>
                                    <span class="slider"></span>
                                    <label for="show_home">Show Home</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quill editor bên phải -->
                <div class="col-lg-7">
                    <div class="mb-3">
                        <label for="noi_dung" class="form-label">Nội Dung:</label>
                        <div id="noi_dung" class="quill-editor" style="height: 350px; "></div>
                        <textarea name="noi_dung" id="textarea_noi_dung" style="display: none;">{{ old('noi_dung') }}</textarea>
                        @error('noi_dung')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="hinh_anh" class="form-label">Album hình ảnh:</label>
                        <button id="add-row" type="button" class="btn btn-success">
                            Thêm
                        </button>
                        <table class="table table-bordered table-striped table-hover table-sm mb-0">
                            <tbody id="image-table-body">
                                <!-- Các hàng hình ảnh sẽ được thêm vào đây -->
                            </tbody>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img class="me-2" id="preview_0"
                                        src="https://i.fbcd.co/products/resized/resized-750-500/563d0201e4359c2e890569e254ea14790eb370b71d08b6de5052511cc0352313.webp"
                                        alt="" style="width: 50px;">
                                    <input type="file" id="hinh_anh" name="list_hinh_anh[id_0]"
                                        class="form-control" onchange="previewImage(this,0)">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" onclick="removeImage(this)">
                                        Xóa
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Nút submit dưới cùng -->
            <button type="submit" class="btn btn-primary mt-3">Thêm Sản Phẩm</button>
        </form>
    </div>
@endsection