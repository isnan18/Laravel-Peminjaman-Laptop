@extends('template.head')
<title>@yield('title', 'Daftar Siswa')</title>
@include('partials.navbar')
@include('partials.sidebar')
<section class="container-fluid mt-4">
    <div class="row justify-content-center ms-2 me-2">
        <div class="col-lg-12 col-sm-4">
            <div class="card shadow border-0 rounded-4">

                {{-- Header --}}
                <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 fw-semibold">
                        <i class="fa-solid fa-laptop"></i>
                        Daftar Siswa
                    </h6>
                    <span class="badge bg-light text-danger">
                        Total: 2 Siswa
                    </span>
                </div>

                {{-- Body --}}
                <div class="card-body">

                    {{-- Search --}}
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control form-control-sm"
                                placeholder="Cari nama siswa / code laptop...">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#tambah-siswa"><i
                                    class="fa-solid fa-plus me-2"></i>Tambah Siswa</button>
                        </div>
                    </div>

                    {{-- Table --}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-light text-center">
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="10%">NIS</th>
                                    <th>Nama Siswa</th>
                                    <th width="10%">Kelas</th>
                                    <th width="15%">Code Laptop</th>
                                    <th width="15%">Merk</th>
                                    <th width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1233</td>
                                    <td>Ahmad</td>
                                    <td class="text-center">X-1</td>
                                    <td class="text-center">
                                        <span class="badge bg-info">LP-01</span>
                                    </td>
                                    <td class="text-center">Asus</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#edit-siswa">
                                            <i class="fa-solid fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapus-data-siswa">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">1234</td>
                                    <td>Siti</td>
                                    <td class="text-center">XI-2</td>
                                    <td class="text-center">
                                        <span class="badge bg-info">LP-05</span>
                                    </td>
                                    <td class="text-center">Lenovo</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#edit-siswa">
                                            <i class="fa-solid fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapus-data-siswa">
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

<!-- Modal tambah siswa -->
<div class="modal fade" id="tambah-siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS :</label>
                        <input type="number" class="form-control" id="nis" aria-describedby="emailHelp">
                    </div>
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
                        <label for="code-laptop" class="form-label">Code Laptop :</label>
                        <input type="text" class="form-control" id="code-laptop" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk Laptop :</label>
                        <input type="text" class="form-control" id="merk" aria-describedby="emailHelp">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Edit data siswa --}}
<div class="modal fade" id="edit-siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nis-edit" class="form-label">NIS :</label>
                        <input type="number" class="form-control" id="nis-edit" aria-describedby="emailHelp"
                            value="1234" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama :</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp"
                            value="Ahmad">
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
                        <label for="code-laptop" class="form-label">Code Laptop :</label>
                        <input type="text" class="form-control" id="code-laptop" aria-describedby="emailHelp"
                            value="LP-01" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk Laptop :</label>
                        <input type="text" class="form-control" id="merk" aria-describedby="emailHelp"
                            value="Asus">
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
<div class="modal fade" id="hapus-data-siswa" tabindex="-1" aria-labelledby="exampleModalLabel"
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
