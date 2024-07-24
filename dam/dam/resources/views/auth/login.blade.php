@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <!-- Start login section -->
    <div class="login__section section--padding">
        <div class="container">
            <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1 justify-content-center">
                    <div class="col-md-6">
                        <div class="account__login">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title h3 mb-10">Login</h2>
                                <p class="account__login--header__desc">Login if you are a returning customer.</p>
                            </div>
                            <div class="account__login--inner">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="account__login--inner">
                                        <input class="account__login--input @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}"
                                            placeholder="Email Addres" type="email">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <input class="account__login--input @error('password') is-invalid @enderror"
                                            id="password" name="password" placeholder="Password" type="password">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div
                                            class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                            <div class="account__login--remember position__relative">
                                                <input class="checkout__checkbox--input" id="check1" type="checkbox"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkout__checkbox--checkmark"></span>
                                                <label class="checkout__checkbox--label login__remember--label"
                                                    for="check1">
                                                    Remember me</label>
                                            </div>
                                        </div>
                                        <button class="account__login--btn primary__btn" type="submit">Login</button>
                                        <div class="account__login--divide">
                                            <span class="account__login--divide__text">OR</span>
                                        </div>
                                        <div class="account__social d-flex justify-content-center mb-15">
                                            <a class="account__social--link facebook" target="_blank"
                                                href="https://www.facebook.com/">Facebook</a>
                                            <a class="account__social--link google" target="_blank"
                                                href="https://www.google.com/">Google</a>
                                            <a class="account__social--link twitter" target="_blank"
                                                href="https://twitter.com/">Twitter</a>
                                        </div>
                                        <p class="account__login--signup__text">Don,t Have an Account? <a
                                                href="{{ route('register') }}"><button type="submit">Sign up
                                                    now</button></a>
                                        </p>
                                    </div>
                                </form>
                                <a href="{{ route('password.request') }}"><button class="account__login--forgot"
                                    type="submit">Forgot Your Password?</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End login section  -->
@endsection
