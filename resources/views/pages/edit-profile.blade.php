@extends('template.head')
<title>@yield('title', 'Edit Profile')</title>
@include('partials.navbar')
@include('partials.sidebar')
<section class="container mt-4">
    {{-- alert ketika data berhasil diupdate --}}
    @if (session('sukses'))
        <div class="position-fixed top-0 start-50 translate-middle-x mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 5">
                <i class="fa-solid fa-circle-check me-2"></i>
                {{ session('sukses') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    Edit Profile Admin
                </div>

                <div class="card-body">
                    <form action="/update" method="POST">
                        @csrf
                        <!-- Icon -->
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
