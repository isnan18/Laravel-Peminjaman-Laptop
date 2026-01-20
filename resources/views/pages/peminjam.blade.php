@extends('template.head')
<title>@yield('title', 'Daftar Peminjam')</title>
@include('partials.navbar')
@include('partials.sidebar')
<section class="container-fluid mt-4">
    <div class="row justify-content-center ms-2 me-2">
        <div class="col-lg-12 col-sm-4">
            <div class="card shadow border-0 rounded-4">

                {{-- Header --}}
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 fw-semibold">
                        <i class="fa-solid fa-people-group"></i>
                        Daftar Peminjam Aktif
                    </h6>
                    <span class="badge bg-light text-success">
                        Total: 2 Peminjam
                    </span>
                </div>

                {{-- Body --}}
                <div class="card-body">

                    {{-- Search --}}
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control form-control-sm"
                                placeholder="Cari nama siswa / laptop...">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambah-peminjam"><i
                                    class="fa-solid fa-plus me-2"></i>Tambah Baru</button>
                        </div>
                    </div>

                    {{-- Table --}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-light text-center">
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Nama Siswa</th>
                                    <th width="10%">Kelas</th>
                                    <th width="15%">Laptop</th>
                                    <th width="15%">Tanggal Pinjam</th>
                                    <th width="15%">Keterangan</th>
                                    <th width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Ahmad</td>
                                    <td class="text-center">X-1</td>
                                    <td class="text-center">
                                        <span class="badge bg-info">LP-01</span>
                                    </td>
                                    <td class="text-center">10-01-2026</td>
                                    <td class="text-center">Asrama</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-success">
                                            <i class="bi bi-arrow-repeat"></i> Kembalikan
                                        </button>
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#edit-peminjam">
                                            <i class="fa-solid fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapus-data-peminjam">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Siti</td>
                                    <td class="text-center">XI-2</td>
                                    <td class="text-center">
                                        <span class="badge bg-info">LP-05</span>
                                    </td>
                                    <td class="text-center">11-01-2026</td>
                                    <td class="text-center">Pelajaran</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-success">
                                            <i class="bi bi-arrow-repeat"></i> Kembalikan
                                        </button>
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#edit-peminjam">
                                            <i class="fa-solid fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapus-data-peminjam">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- Modal --}}

<!-- Modal tambah peminjam -->
<div class="modal fade" id="tambah-peminjam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Peminjam</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama :</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Kelas</option>
                            <option value="X-1">X-1</option>
                            <option value="X-2">X-2</option>
                            <option value="X-3">X-3</option>
                            <option value="XI-1">XI-1</option>
                            <option value="XI-2">XI-2</option>
                            <option value="XI-3">XI-3</option>
                            <option value="XII-1">XII-1</option>
                            <option value="XII-2">XII-2</option>
                            <option value="XII-3">XII-3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Keperluan</option>
                            <option value="1">Pembelajaran</option>
                            <option value="2">Kegiatan Extra</option>
                            <option value="3">Dibawa Asrama</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pj" class="form-label">Penanggungjawab :</label>
                        <input type="text" class="form-control" id="pj" aria-describedby="emailHelp">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Edit data peminjam --}}
<div class="modal fade" id="edit-peminjam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama :</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp"
                            value="Ahmad" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" disabled readonly>
                            <option selected>Kelas</option>
                            <option value="X-1">X-1</option>
                            <option value="X-2">X-2</option>
                            <option value="X-3">X-3</option>
                            <option value="XI-1">XI-1</option>
                            <option value="XI-2">XI-2</option>
                            <option value="XI-3">XI-3</option>
                            <option value="XII-1">XII-1</option>
                            <option value="XII-2">XII-2</option>
                            <option value="XII-3">XII-3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Keperluan</option>
                            <option value="1">Pembelajaran</option>
                            <option value="2">Kegiatan Extra</option>
                            <option value="3">Dibawa Asrama</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pj" class="form-label">Penanggungjawab :</label>
                        <input type="text" class="form-control" id="pj" aria-describedby="emailHelp">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Edit</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal hapus data --}}
<div class="modal fade" id="hapus-data-peminjam" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data</h1>
                <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <i class="fa-solid fa-circle-exclamation text-danger" style="font-size: 80px;"></i>
                <p class="mt-3 mb-0">
                    Hapus data?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
