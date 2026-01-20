@extends('template.head');
<title>@yield('title', 'Login')</title>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">

            <h2 class="text-center text-primary mb-4">
                Sistem Informasi Peminjaman Laptop Siswa
            </h2>

            <!-- Gambar -->
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
            </div>

            <!-- Form Login -->
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form>

                    <!-- Username -->
                    <div class="form-outline mb-4">
                        <input type="text" id="username" class="form-control form-control-lg"
                            placeholder="Masukkan username" />
                        <label class="form-label" for="username">Username</label>
                    </div>

                    <!-- Password -->
                    <div class="form-outline mb-3">
                        <input type="password" id="password" class="form-control form-control-lg"
                            placeholder="Masukkan password" />
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <!-- Remember Me & Lupa Password -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember me
                            </label>
                        </div>

                        <a href="#" class="text-decoration-none text-primary">
                            Lupa password?
                        </a>
                    </div>

                    <!-- Button Login -->
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="button" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div
        class="d-flex flex-column flex-md-row text-center text-md-start
                justify-content-between py-4 px-4 px-xl-5 bg-primary">
        <div class="text-white mb-3 mb-md-0">
            Copyright © 2026. All rights reserved.
        </div>
    </div>
</section>
