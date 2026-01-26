@extends('template.head')
<title>@yield('title', 'Edit Profile')</title>
@include('partials.navbar')
@include('partials.sidebar')
<section class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    Edit Profile Admin
                </div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Foto -->
                        <div class="text-center mb-3">
                            <i class="fa-solid fa-circle-user fa-5x"></i>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email', $user->email) }}">
                        </div>

                        <!-- Username -->
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control"
                                value="{{ old('username', $user->username) }}">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Password Baru</label>
                            <input type="password" name="password" class="form-control">
                            <small class="text-muted">Kosongkan jika tidak ingin mengganti</small>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
