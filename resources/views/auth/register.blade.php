@extends('layouts.app')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #fff5f8, #fce4ec, #fdf2f8);
        min-height: 100vh;
    }

    .register-wrapper {
        min-height: 85vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px 15px;
    }

    .register-card {
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid #f8dce6;
        border-radius: 28px;
        padding: 38px !important;
        box-shadow: 0 15px 45px rgba(214, 119, 148, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .register-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 50px rgba(214, 119, 148, 0.22);
    }

    .register-title {
        color: #c75b83;
        font-weight: 800;
        letter-spacing: 1.2px;
        font-size: 26px;
    }

    .register-subtitle {
        color: #a68b98;
        font-size: 13px;
        line-height: 1.7;
    }

    .register-icon {
        width: 72px;
        height: 72px;
        margin: 0 auto 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #ffe0eb, #f8c5d8);
        border-radius: 23px;
        font-size: 32px;
        box-shadow: 0 6px 18px rgba(214, 119, 148, 0.12);
    }

    .register-decoration {
        color: #e8a4bc;
        font-size: 12px;
        letter-spacing: 3px;
        margin-top: 18px;
    }

    .register-card .form-label {
        color: #8f6175 !important;
        font-size: 13px;
        margin-bottom: 8px;
    }

    .register-card .form-control {
        background-color: #fff9fb;
        border: 1px solid #f0d5e0;
        border-radius: 13px !important;
        padding: 12px 15px;
        color: #795568;
        font-size: 14px;
        transition: all 0.25s ease;
    }

    .register-card .form-control::placeholder {
        color: #d0b5c1;
    }

    .register-card .form-control:focus {
        background-color: #ffffff;
        border-color: #e99bb9;
        box-shadow: 0 0 0 4px rgba(233, 155, 185, 0.15);
    }

    .register-card .text-primary {
        color: #cf6f94 !important;
    }

    .register-card a {
        transition: color 0.2s ease;
    }

    .register-card a:hover {
        color: #b84f79 !important;
    }

    .register-button {
        background: linear-gradient(135deg, #e995b4, #d56f98);
        border: none;
        border-radius: 13px !important;
        padding: 13px !important;
        color: #ffffff;
        letter-spacing: 1px;
        font-size: 14px;
        box-shadow: 0 7px 18px rgba(213, 111, 152, 0.22) !important;
        transition: all 0.25s ease;
    }

    .register-button:hover {
        background: linear-gradient(135deg, #dc83a5, #c75b83);
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(213, 111, 152, 0.3) !important;
    }

    .register-button:active {
        transform: scale(0.98);
    }

    .register-divider {
        height: 1px;
        background: #f6e5ec;
        margin: 24px 0 18px;
    }

    .register-footer {
        color: #a68b98;
        font-size: 13px;
    }

    .register-footer a {
        color: #cf6f94;
    }

    .register-bottom-text {
        color: #c99bad;
        font-size: 12px;
        letter-spacing: 0.3px;
    }

    @media (max-width: 576px) {
        .register-card {
            padding: 28px 22px !important;
            border-radius: 23px;
        }

        .register-title {
            font-size: 22px;
        }
    }
</style>

<div class="container register-wrapper">
    <div class="col-md-6 col-lg-5">

        <div class="card register-card shadow-lg border-0">

            <div class="text-center mb-4">

                <div class="register-icon">
                    🌸
                </div>

                <h3 class="register-title mb-2">
                    DAFTAR AKUN BARU
                </h3>

                <p class="register-subtitle mb-0">
                    Lengkapi data berikut untuk mendaftar ke SISFO Akademik
                </p>

                <div class="register-decoration">
                    ♡ ───────── ♡
                </div>

            </div>

            <div class="card-body p-0">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">
                            Nama Lengkap
                        </label>

                        <input
                            id="name"
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autocomplete="name"
                            autofocus
                            placeholder="Nama Anda"
                        >

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

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
                            autocomplete="new-password"
                            placeholder="Minimal 8 karakter"
                        >

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="form-label fw-semibold">
                            Konfirmasi Password
                        </label>

                        <input
                            id="password-confirm"
                            type="password"
                            class="form-control"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Ulangi password"
                        >
                    </div>

                    <div class="d-grid mb-3">
                        <button
                            type="submit"
                            class="btn register-button fw-semibold"
                        >
                            ♡ REGISTER ♡
                        </button>
                    </div>

                    <div class="register-divider"></div>

                    <div class="text-center register-footer">
                        Sudah punya akun?

                        <a
                            href="{{ route('login') }}"
                            class="text-decoration-none fw-semibold"
                        >
                            Login di sini
                        </a>
                    </div>

                </form>

            </div>
        </div>

        <p class="text-center mt-3 register-bottom-text">
            Made with ♡ for your academic journey
        </p>

    </div>
</div>

@endsection