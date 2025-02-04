@extends('layouts.admin-login')

@section('title', 'Login')

@section('content')
    <div class="container-fluid login-container">
        <div class="half left">
            <img src="{{ Vite::asset('resources/assets/images/compesa.png') }}" alt="compesa" class="main-logo">
            <img src="{{ Vite::asset('resources/assets/images/comped.png') }}" alt="comped Logo">
            <p>A Social Media Platform for Collaborative Learning and Event Management.</p>
        </div>
        <div class="half right">
            <a href="{{ url('/') }}" class="back-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M13 19l-7-7 7-7 1.41 1.41L8.83 12l5.58 5.59L13 19z"></path>
                </svg>
            </a>
            <div class="form-container">
                <h1>Login as Admin</h1>
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger d-flex align-items-center p-3 shadow-sm border-0 rounded-3"
                        role="alert" style="background: #ff4d4d; color: white;">
                        <div class="me-2">
                            <i class="fas fa-exclamation-circle fs-4"></i> <!-- FontAwesome Icon -->
                        </div>
                        <div>
                            @foreach ($errors->all() as $error)
                                <p class="mb-0">{{ $error }}</p>
                            @endforeach
                        </div>
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif

                <form class="login-form" action="{{ route('admin.login.submit') }}" method="POST">
                    @csrf
                    <input class="input-login" type="email" name="email" placeholder="Email Address" required>
                    <input class="input-login" type="password" name="password" placeholder="Password" required>
                    <div class="terms">
                        <input type="checkbox" name="remember">
                        <label>Remember me</label>
                    </div>
                    <button class="button-login" type="submit">Login</button>
                    <p class="redirect">Not an admin? <a href="#">Request</a></p>
                </form>
            </div>
            <div class="footer-text">
                <p>&copy; 2025 CompED | All Rights Reserved | Calunsag.</p>
            </div>
        </div>
    </div>
@endsection
