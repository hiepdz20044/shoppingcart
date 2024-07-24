@extends('layouts.app')

@section('css')
    <!-- Custom CSS -->
@endsection

@section('content')
<!-- Start registration section -->
<div class="login__section section--padding">
    <div class="container">
        <div class="login__section--inner">
            <div class="row row-cols-md-2 row-cols-1 justify-content-center">
                <div class="col-md-6">
                    <div class="account__login register">
                        <div class="account__login--header mb-25">
                            <h2 class="account__login--header__title h3 mb-10">Create an Account</h2>
                            <p class="account__login--header__desc">Register here if you are a new customer</p>
                        </div>
                        <div class="account__login--inner">
                            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="account__login--inner">
                                    <input name="name" id="name" class="account__login--input @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" placeholder="Username" type="text">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input name="dia_chi" id="dia_chi" class="account__login--input @error('dia_chi') is-invalid @enderror"
                                        value="{{ old('name') }}" placeholder="Địa chỉ" type="text">
                                    @error('dia_chi')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input name="email" id="email" class="account__login--input @error('email') is-invalid @enderror"
                                        placeholder="Email Address" type="text">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input name="password" id="password"
                                        class="account__login--input @error('password') is-invalid @enderror" placeholder="Password"
                                        type="password">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input name="password_confirmation" id="password_confirmation"
                                        class="account__login--input @error('password_confirmation') is-invalid @enderror"
                                        placeholder="Confirm Password" type="password">
                                    @error('password_confirmation')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <button class="account__login--btn primary__btn mb-10" type="submit">Submit & Register</button>
                                    <div class="account__login--remember position__relative">
                                        <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                        <span class="checkout__checkbox--checkmark"></span>
                                        <label class="checkout__checkbox--label login__remember--label" for="check2">
                                            I have read and agree to the terms & conditions</label>
                                    </div>
                                    <p class="account__login--signup__text">Bạn đã có tài khoản?<a href="{{ route('login') }}">Đăng nhập ngay</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
