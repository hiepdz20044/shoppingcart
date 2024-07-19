@extends('layouts.app')

@section('css')
<!-- Custom CSS -->
<style>
    .gradient-background {
        background: linear-gradient(to right, #ebbcbc, #73a2ed);
    }

    .card {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Ensure the card does not overflow */
        overflow: hidden;
    }

    .card-body {
        background: #ffffff;
        border-radius: 15px;
        padding: 2rem;
    }

    .btn-primary {
        background-color: #2e8aec;
        border: none;
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 1rem;
    }

    .btn-primary:hover {
        background-color: #689ed7;
    }

    .text-primary {
        color: #007bff;
    }

    .text-primary:hover {
        color: #0056b3;
    }

    .form-label {
        color: #333;
        font-size: 0.875rem;
    }

    .invalid-feedback {
        font-size: 0.875rem;
    }

    .form-outline {
        position: relative;
        margin-bottom: 1.5rem;
    }

    .form-outline input {
        padding-left: 0.75rem;
    }

    .form-outline .form-label {
        position: absolute;
        top: 0;
        left: 0.75rem;
        font-size: 0.875rem;
        transition: 0.2s;
        transform: translateY(-50%);
        background: #ffffff;
        padding: 0 0.25rem;
    }

    .form-outline input:focus ~ .form-label,
    .form-outline input:not(:placeholder-shown) ~ .form-label {
        top: -0.75rem;
        font-size: 0.75rem;
        color: #007bff;
    }

    /* Ensure the form does not exceed the card width */
    .form-control {
        width: 100%;
        box-sizing: border-box;
    }
</style>
@endsection

@section('content')
<!-- Page Wrapper -->
<div class="gradient-background d-flex align-items-center justify-content-center min-vh-100">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row w-100">
            <div class="col-md-8 col-lg-6 col-xl-4 mx-auto">
                <div class="card shadow-lg border-light rounded">
                    <div class="card-body p-4 p-md-5">
                        <a href="{{ url('/') }}" class="text-center d-block py-3">
                            <img src="{{ asset('assets/admins/images/logos/dark-logo.svg') }}" width="180" alt="Logo">
                        </a>
                        <p class="text-center mb-4">Register!</p>
                        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Name Input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="name" name="name"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" />
                                <label class="form-label" for="name">Họ và tên</label>
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Image Upload -->
                            <div class="form-outline mb-4">
                                <input type="file" id="hinh_anh" name="hinh_anh"
                                    class="form-control form-control-lg @error('hinh_anh') is-invalid @enderror" />
                                <label class="form-label" for="hinh_anh">Hình ảnh</label>
                                @error('hinh_anh')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email Input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="emailAddress" name="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" />
                                <label class="form-label" for="emailAddress">Email</label>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Address Input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="dia_chi" name="dia_chi"
                                    class="form-control form-control-lg @error('dia_chi') is-invalid @enderror"
                                    value="{{ old('dia_chi') }}" />
                                <label class="form-label" for="dia_chi">Địa chỉ</label>
                                @error('dia_chi')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror" />
                                <label class="form-label" for="password">Mật khẩu</label>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Confirm Password Input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" />
                                <label class="form-label" for="password_confirmation">Xác nhận mật khẩu</label>
                                @error('password_confirmation')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-center mb-4">
                                <button type="submit" class="btn btn-primary btn-lg">Đăng ký</button>
                            </div>
                        </form>
                        <!-- Login Link -->
                        <div class="text-center mt-4">
                            <p class="mb-0">Already have an account?</p>
                            <a class="text-primary fw-bold" href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection