@extends('layouts.app')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #fff5f8, #fce4ec, #fdf2f8);
        min-height: 100vh;
    }

    .login-wrapper {
        min-height: 85vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px 15px;
    }

    .login-card {
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid #f8dce6;
        border-radius: 28px;
        padding: 38px !important;
        box-shadow: 0 15px 45px rgba(214, 119, 148, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .login-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 50px rgba(214, 119, 148, 0.22);
    }

    .login-title {
        color: #c75b83;
        font-weight: 800;
        letter-spacing: 1.5px;
        font-size: 27px;
    }

    .login-subtitle {
        color: #a68b98;
        font-size: 13px;
    }

    .login-icon {
        width: 76px;
        height: 76px;
        margin: 0 auto 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #ffe0eb, #f8c5d8);
        border-radius: 24px;
        font-size: 34px;
        box-shadow: 0 6px 18px rgba(214, 119, 148, 0.12);
    }

    .login-card .form-label {
        color: #8f6175 !important;
        font-size: 13px;
        margin-bottom: 8px;
    }

    .login-card .form-control {
        background-color: #fff9fb;
        border: 1px solid #f0d5e0;
        border-radius: 13px !important;
        padding: 12px 15px;
        color: #795568;
        font-size: 14px;
        transition: all 0.25s ease;
    }

    .login-card .form-control::placeholder {
        color: #d0b5c1;
    }

    .login-card .form-control:focus {
        background-color: #ffffff;
        border-color: #e99bb9;
        box-shadow: 0 0 0 4px rgba(233, 155, 185, 0.15);
    }

    .login-card .form-check-input {
        border-color: #e4b6c9;
        cursor: pointer;
    }

    .login-card .form-check-input:checked {
        background-color: #d9789d;
        border-color: #d9789d;
    }

    .login-card .form-check-input:focus {
        box-shadow: 0 0 0 3px rgba(217, 120, 157, 0.15);
    }

    .login-card .form-check-label {
        color: #a68b98 !important;
        cursor: pointer;
    }

    .login-card .text-primary {
        color: #cf6f94 !important;
    }

    .login-card a {
        transition: color 0.2s ease;
    }

    .login-card a:hover {
        color: #b84f79 !important;
    }

    .login-button {
        background: linear-gradient(135deg, #e995b4, #d56f98);
        border: none;
        border-radius: 13px !important;
        padding: 13px !important;
        color: white;
        letter-spacing: 1px;
        font-size: 14px;
        box-shadow: 0 7px 18px rgba(213, 111, 152, 0.22) !important;
        transition: all 0.25s ease;
    }

    .login-button:hover {
        background: linear-gradient(135deg, #dc83a5, #c75b83);
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(213, 111, 152, 0.3) !important;
    }

    .login-button:active {
        transform: scale(0.98);
    }

    .login-divider {
        height: 1px;
        background: #f6e5ec;
        margin: 24px 0 18px;
    }

    .login-footer {
        color: #a68b98;
        font-size: 13px;
    }

    .login-decoration {
        color: #e8a4bc;
        font-size: 12px;
        letter-spacing: 3px;
        margin-top: 22px;
    }

    @media (max-width: 576px) {
        .login-card {
            padding: 28px 22px !important;
            border-radius: 23px;
        }

        .login-title {
            font-size: 23px;
        }
    }
</style>

<div class="container login-wrapper">
    <div class="col-md-5 col-lg-4">

        <div class="card login-card shadow-lg border-0">

            <div class="text-center mb-4">

                <div class="login-icon">
                    🌸
                </div>

                <h3 class="login-title mb-2">
                    SISFO AKADEMIK
                </h3>

                <p class="login-subtitle mb-0">
                    Silakan masuk menggunakan akun terdaftar
                </p>

                <div class="login-decoration">
                    ♡ ───────── ♡
                </div>

            </div>

            <div class="card-body p-0">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">
                            Email Address
                        </label>

                        <input
                            id="email"
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                            placeholder="nama@email.com"
                        >

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">
                            Password
                        </label>

                        <input
                            id="password"
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="••••••••"
                        >

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4 d-flex justify-content-between align-items-center flex-wrap gap-2">

                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="remember"
                                {{ old('remember') ? 'checked' : '' }}
                            >

                            <label class="form-check-label small" for="remember">
                                Remember Me
                            </label>
                        </div>

                        @if (Route::has('password.request'))
                            <a
                                class="small text-decoration-none"
                                href="{{ route('password.request') }}"
                            >
                                Lupa Password?
                            </a>
                        @endif

                    </div>

                    <div class="d-grid mb-3">
                        <button
                            type="submit"
                            class="btn login-button fw-semibold"
                        >
                            ♡ LOGIN ♡
                        </button>
                    </div>

                    <div class="login-divider"></div>

                    <div class="text-center login-footer">
                        Belum punya akun?

                        <a
                            href="{{ route('register') }}"
                            class="text-decoration-none fw-semibold"
                        >
                            Register di sini
                        </a>
                    </div>

                </form>

            </div>
        </div>

        <p class="text-center mt-3 small" style="color: #c99bad;">
            Made with ♡ for your academic journey
        </p>

    </div>
</div>

@endsection