@extends('template.head')
<title>@yield('title', 'Dashboard')</title>
@include('partials.navbar')
@include('partials.sidebar')
<section class="container-fluid mt-4">
    <div class="row g-4 ms-1 me-1">
        {{-- Card kelas X --}}
        <div class="col-12 col-lg-4">
            <div class="card shadow-sm border-0 h-100">
                <!-- Header -->
                <div class="card-header bg-success text-white text-center fw-bold">
                    <i class="fa-solid fa-chalkboard-user me-2"></i>
                    Kelas X
                </div>
                <!-- Body -->
                <div class="card-body p-0">
                    <div class="row g-0 text-center">
                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-users fs-4 text-primary mb-1"></i>
                            <p class="mb-1 small text-muted">Total Siswa</p>
                            <h4 class="mb-0 fw-bold">60</h4>
                        </div>
                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-laptop fs-4 text-success mb-1"></i>
                            <p class="mb-1 small text-muted">Bawa Laptop</p>
                            <h4 class="mb-0 fw-bold">20</h4>
                        </div>

                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-box-archive fs-4 text-warning mb-1"></i>
                            <p class="mb-1 small text-muted">Di Loker</p>
                            <h4 class="mb-0 fw-bold">15</h4>
                        </div>
                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-handshake fs-4 text-danger mb-1"></i>
                            <p class="mb-1 small text-muted">Dipinjam</p>
                            <h4 class="mb-0 fw-bold">5</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Card kelas XI --}}
        <div class="col-12 col-lg-4">
            <div class="card shadow-sm border-0 h-100">

                <!-- Header -->
                <div class="card-header bg-info text-white text-center fw-bold">
                    <i class="fa-solid fa-chalkboard-user me-2"></i>
                    Kelas XI
                </div>

                <!-- Body -->
                <div class="card-body p-0">
                    <div class="row g-0 text-center">
                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-users fs-4 text-primary mb-1"></i>
                            <p class="mb-1 small text-muted">Total Siswa</p>
                            <h4 class="mb-0 fw-bold">60</h4>
                        </div>
                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-laptop fs-4 text-success mb-1"></i>
                            <p class="mb-1 small text-muted">Bawa Laptop</p>
                            <h4 class="mb-0 fw-bold">20</h4>
                        </div>
                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-box-archive fs-4 text-warning mb-1"></i>
                            <p class="mb-1 small text-muted">Di Loker</p>
                            <h4 class="mb-0 fw-bold">15</h4>
                        </div>
                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-handshake fs-4 text-danger mb-1"></i>
                            <p class="mb-1 small text-muted">Dipinjam</p>
                            <h4 class="mb-0 fw-bold">5</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Card kelas XII --}}
        <div class="col-12 col-lg-4">
            <div class="card shadow-sm border-0 h-100">

                <!-- Header -->
                <div class="card-header bg-danger text-white text-center fw-bold">
                    <i class="fa-solid fa-chalkboard-user me-2"></i>
                    Kelas XII
                </div>

                <!-- Body -->
                <div class="card-body p-0">
                    <div class="row g-0 text-center">
                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-users fs-4 text-primary mb-1"></i>
                            <p class="mb-1 small text-muted">Total Siswa</p>
                            <h4 class="mb-0 fw-bold">60</h4>
                        </div>
                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-laptop fs-4 text-success mb-1"></i>
                            <p class="mb-1 small text-muted">Bawa Laptop</p>
                            <h4 class="mb-0 fw-bold">20</h4>
                        </div>
                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-box-archive fs-4 text-warning mb-1"></i>
                            <p class="mb-1 small text-muted">Di Loker</p>
                            <h4 class="mb-0 fw-bold">15</h4>
                        </div>
                        <div class="col-6 border p-3">
                            <i class="fa-solid fa-handshake fs-4 text-danger mb-1"></i>
                            <p class="mb-1 small text-muted">Dipinjam</p>
                            <h4 class="mb-0 fw-bold">5</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- TABEL KIRI : DAFTAR PEMINJAM --}}
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white fw-semibold text-center">
                    Daftar Peminjam Aktif
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Laptop</th>
                                    <th>Tgl Pinjam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ahmad</td>
                                    <td>X-1</td>
                                    <td>LP-01</td>
                                    <td>10-01-2026</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Siti</td>
                                    <td>XI-2</td>
                                    <td>LP-05</td>
                                    <td>11-01-2026</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- TABEL KANAN : KETERANGAN / REKAP --}}
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white fw-semibold text-center         p">
                    Keterangan Laptop
                </div>

                <div class="card-body p-0">
                    <table class="table table-bordered mb-0 text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Status</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tersedia di Loker</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <td>Dipinjam</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>Di Asrama</td>
                                <td>2</td>
                            </tr>
                            <tr class="fw-bold table-success">
                                <td>Total Laptop</td>
                                <td>72</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    </div>
</section>
