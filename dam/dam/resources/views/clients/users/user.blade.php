@extends('layouts.client')

@section('title')
    {{ $title }}
@endsection

@section('css')
    <style>
        body {
            background: rgb(62, 208, 184);
            color: #fff;
        }

        .container {
            background: #fff;
            color: #000;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #d750bc;
        }
        
        .text-muted {
            color: #6c757d !important;
        }

        .img-thumbnail {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .default-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #999;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div class="container rounded bg-white mt-5 mb-5 p-4">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <!-- Avatar image with ID for JavaScript update -->
                    <img id="profileImage" src="{{ $user->hinh_anh ? asset('storage/' . $user->hinh_anh) : '' }}" 
                         alt="Profile Picture" class="img-thumbnail mt-2 {{ $user->hinh_anh ? '' : 'd-none' }}">
                    <!-- Default avatar if no profile picture -->
                    <div id="defaultAvatar" class="default-avatar mt-2 {{ $user->hinh_anh ? 'd-none' : '' }}">
                        Ảnh đại diện
                    </div>
                    <h4 class="font-weight-bold mt-2">{{ $user->name }}</h4>
                    <span class="text-muted">{{ $user->email }}</span>
                </div>
            </div>
            <div class="col-md-9">
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4>Thông tin cá nhân</h4>
                    </div>
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="dia_chi" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control @error('dia_chi') is-invalid @enderror" id="dia_chi" name="dia_chi" value="{{ old('dia_chi', $user->dia_chi) }}">
                                @error('dia_chi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="hinh_anh" class="form-label">Ảnh đại diện</label>
                                <input type="file" class="form-control @error('hinh_anh') is-invalid @enderror" id="hinh_anh" name="hinh_anh">
                                @error('hinh_anh')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Cập nhật</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <form action="{{ route('logout') }}" method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger">Đăng xuất</button>
                        </form>
                        <a href="{{ route('home') }}" class="btn btn-primary ml-2">Trang chủ</a>
                    </div>
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