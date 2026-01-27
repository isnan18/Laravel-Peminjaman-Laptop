@extends('template.head')
<title>@yield('title', 'Login')</title>
<section class="vh-100 d-flex align-items-center">
    {{-- alert ketika berhasil logout --}}
    @if (session('logout'))
        <div class="position-fixed top-0 start-50 translate-middle-x mt-3">
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="z-index: 5">
                <i class="fa-solid fa-circle-check me-2"></i>
                {{ session('logout') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- Card Login -->
            <div class="col-lg-10">
                @if (session('failed'))
                    <div class="alert alert-danger text-center">{{ session('failed') }}</div>
                @endif
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="row g-0">

                        <!-- Left Image -->
                        <div class="col-md-6 d-none d-md-flex align-items-center bg-primary text-white">
                            <div class="p-4 text-center">
                                <h3 class="fw-bold mb-3">
                                    Sistem Informasi<br>Peminjaman Laptop
                                </h3>
                                <p class="small">
                                    Kelola peminjaman laptop siswa dengan mudah, cepat, dan terintegrasi.
                                </p>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                                    class="img-fluid mt-3" alt="Login Image">
                            </div>
                        </div>

                        <!-- Right Form -->
                        <div class="col-md-6">
                            <div class="card-body p-5">

                                <h4 class="text-center fw-bold text-primary mb-4">
                                    Login Sistem
                                </h4>

                                <form action="/login" method="POST">
                                    @csrf
                                    <!-- Username -->
                                    @error('username')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-primary text-white">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Masukkan username">
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-primary text-white">
                                                <i class="fa-solid fa-lock"></i>
                                            </span>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Masukkan password">
                                        </div>
                                    </div>

                                    <!-- Remember & Forgot -->
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="rememberMe">
                                            <label class="form-check-label">
                                                Remember me
                                            </label>
                                        </div>

                                        <a href="#" class="text-decoration-none text-primary small">
                                            Lupa password?
                                        </a>
                                    </div>

                                    <!-- Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow">
                                            <i class="fa-solid fa-right-to-bracket me-2"></i> Login
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer -->
                <p class="text-center mt-4 small text-muted">
                    © 2026 Sistem Informasi Peminjaman Laptop Siswa
                </p>
            </div>

        </div>
    </div>
</section>
