@extends('layouts.client')

@section('title')
    {{ $title }}
@endsection

@section('css')
    <style>
    </style>
@endsection

@section('content')
    <div class="main-content">
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
            style="min-height: 600px; background-image: url(https://raw.githubusercontent.com/creativetimofficial/argon-dashboard/gh-pages/assets-old/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h1 class="display-2 text-white">Hello {{ old('name', $user->name) }}</h1>
                        <h3 class="text-white mt-0 mb-5">Đây là trang quản lí tài khoản của bạn !</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <img src="{{ asset('storage/' . $user->hinh_anh) }}" style="width: 65px" id="defaultAvatar" class="rounded-circle">
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3>
                                    {{ $user->name }}<span class="font-weight-light">,
                                        {{ \Carbon\Carbon::parse($user->ngay_sinh)->age }}</span>
                                </h3>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>{{ $user->dia_chi }}
                                </div>
                                <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>{{ $user->role }}
                                </div>
                                <div>
                                    {{ $user->so_dien_thoai }}
                                </div>
                                <hr class="my-4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <form action="{{ route('profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Tài khoản của tôi</h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="heading-small text-muted mb-4">Thông tin người dùng</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-username">Họ và tên</label>
                                                <input type="text" id="input-username" name="name"
                                                    class="form-control form-control-alternative @error('name')
                                                        is-invalid
                                                    @enderror" placeholder="Họ và tên"
                                                    value="{{ $user->name }}">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Địa chỉ email</label>
                                                <input type="email" id="input-email" name="email"
                                                    class="form-control form-control-alternative @error('email')
                                                        is-invalid
                                                    @enderror" placeholder="Email"
                                                    value="{{ $user->email }}">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-ngay-sinh">Ngày sinh</label>
                                                <input type="date" id="input-ngay-sinh" name="ngay_sinh"
                                                    class="form-control form-control-alternative @error('ngay_sinh')
                                                        is-invalid
                                                    @enderror" placeholder="Ngày sinh"
                                                    value="{{ $user->ngay_sinh }}">
                                                    @error('ngay_sinh')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-gioi-tinh">Giới tính</label>
                                                <select id="input-gioi-tinh" name="gioi_tinh" class="form-control form-control-alternative @error('gioi_tinh')
                                                    is-invalid
                                                @enderror">
                                                    <option value="Nam" {{ $user->gioi_tinh == 'Nam' ? 'selected' : '' }}>Nam</option>
                                                    <option value="Nữ" {{ $user->gioi_tinh == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                                                </select>
                                                @error('gioi_tinh')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-trang-thai">Trạng thái</label>
                                                <input type="text" id="input-trang-thai" name="trang_thai"
                                                    class="form-control form-control-alternative" placeholder="Trạng thái"
                                                    value="{{ $user->trang_thai == '1' ? 'Đang hoạt động' : 'Dừng hoạt động' }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-hinh-anh">Hình ảnh</label>
                                                <input type="file" id="input-hinh-anh" name="hinh_anh"
                                                    class="form-control form-control-alternative @error('hinh_anh')
                                                        is-invalid
                                                    @enderror">
                                                    @error('hinh_anh')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Thông tin liên lạc</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-address">Địa chỉ</label>
                                                <input id="input-address" name="dia_chi" class="form-control form-control-alternative @error('dia_chi')
                                                    is-invalid
                                                @enderror"
                                                    placeholder="Địa chỉ" value="{{ $user->dia_chi }}" type="text">
                                                    @error('dia_chi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-so-dien-thoai">Số điện thoại</label>
                                                <input type="text" id="input-so-dien-thoai" name="so_dien_thoai"
                                                    class="form-control form-control-alternative @error('so_dien_thoai')
                                                        is-invalid
                                                    @enderror"
                                                    placeholder="Số điện thoại" value="{{ $user->so_dien_thoai }}">
                                                    @error('so_dien_thoai')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('hinh_anh');
            const profileImage = document.getElementById('profileImage');
            const defaultAvatar = document.getElementById('defaultAvatar');

            fileInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profileImage.src = e.target.result;
                        profileImage.classList.remove('d-none');
                        defaultAvatar.classList.add('d-none');
                    }
                    reader.readAsDataURL(file);
                } else {
                    profileImage.src = '';
                    profileImage.classList.add('d-none');
                    defaultAvatar.classList.remove('d-none');
                }
            });
        });
    </script>
@endsection