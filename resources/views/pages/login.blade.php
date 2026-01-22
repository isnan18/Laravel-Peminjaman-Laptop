@extends('template.head')
<title>@yield('title', 'Login')</title>
<section class="vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <!-- Card Login -->
            <div class="col-lg-10">
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

                                <form>

                                    <!-- Username -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-primary text-white">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Masukkan username">
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-primary text-white">
                                                <i class="fa-solid fa-lock"></i>
                                            </span>
                                            <input type="password" class="form-control" placeholder="Masukkan password">
                                        </div>
                                    </div>

                                    <!-- Remember & Forgot -->
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
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
                                        <button type="button" class="btn btn-primary btn-lg rounded-pill shadow">
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
