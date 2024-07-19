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
        /* Remove padding from the card if not needed */
        padding: 0;
    }

    .card-body {
        background: #ffffff;
        border-radius: 15px;
        padding: 2rem; /* Adjust padding if needed */
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
                        <p class="text-center mb-4">Welcome Back! Please Login to Your Account</p>
                        
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Input -->
                            <div class="form-outline mb-4">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder=" " value="{{ old('email') }}" required>
                                <label class="form-label" for="email">Email Address</label>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="form-outline mb-4">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder=" " required autocomplete="current-password">
                                <label class="form-label" for="password">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="d-flex align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                <a class="ms-auto" href="{{ route('password.request') }}">Forgot Your Password?</a>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100">Login</button>

                            <!-- Register Link -->
                            <div class="text-center mt-3">
                                <p class="mb-0">Don't have an account?</p>
                                <a class="text-primary fw-bold" href="{{ route('register') }}">Create one</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
