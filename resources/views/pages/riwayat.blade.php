@extends('template.head')
<title>@yield('title', 'Riwayat Peminjaman')</title>
@include('partials.navbar')
@include('partials.sidebar')
<section class="container-fluid mt-4">
    <div class="row justify-content-center ms-2 me-2">
        <div class="col-lg-12 col-sm-4">
            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-dark text-white fw-semibold text-center">
                    Riwayat Peminjaman
                </div>

                <div class="card-body">

                    {{-- Filter --}}
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Cari nama / NIS">
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option value="">Semua Status</option>
                                <option value="dikembalikan">Dikembalikan</option>
                                <option value="terlambat">Terlambat</option>
                            </select>
                        </div>
                    </div>

                    {{-- Tabel --}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-secondary text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Peminjam</th>
                                    <th>NIS</th>
                                    <th>Barang</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Contoh data statis --}}
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Ahmad</td>
                                    <td>12345</td>
                                    <td>Laptop Lenovo</td>
                                    <td>01-01-2026</td>
                                    <td>03-01-2026</td>
                                    <td class="text-center">
                                        <span class="badge bg-success">Dikembalikan</span>
                                    </td>
                                    <td>-</td>
                                </tr>

                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Siti</td>
                                    <td>12346</td>
                                    <td>Laptop Asus</td>
                                    <td>02-01-2026</td>
                                    <td>05-01-2026</td>
                                    <td class="text-center">
                                        <span class="badge bg-danger">Terlambat</span>
                                    </td>
                                    <td>Telat 1 hari</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
