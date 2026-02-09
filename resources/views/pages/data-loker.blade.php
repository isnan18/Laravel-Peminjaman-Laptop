@extends('template.head')
<title>@yield('title', 'Data Loker')</title>
@include('partials.navbar')
@include('partials.sidebar')
<section class="container-fluid mt-4">
    {{-- alert ketika berhasil menambahkan data loker --}}
    @if (session('success'))
        <div class="position-fixed top-0 start-50 translate-middle-x mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 5">
                <i class="fa-solid fa-circle-check me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    @endif

    {{-- alert ketika berhasil menghapus data loker --}}
    @if (session('hapus'))
        <div class="position-fixed top-0 start-50 translate-middle-x mt-3">
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="z-index: 5">
                <i class="fa-solid fa-circle-check me-2"></i>
                {{ session('hapus') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    @endif

    <div class="row justify-content-center ms-2 me-2">
        <div class="col-lg-12 col-sm-4">
            <div class="card shadow border-0 rounded-4">
                {{-- Header --}}
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 fw-semibold">
                        <i class="fa-solid fa-box-archive"></i>
                        Daftar Loker
                    </h6>
                    <span class="badge bg-light text-success">
                        Total: 2 Loker
                    </span>
                </div>

                {{-- Body --}}
                <div class="card-body">

                    {{-- Search --}}
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control form-control-sm" placeholder="Cari loker...">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-success text-white" data-bs-toggle="modal"
                                data-bs-target="#tambah-loker"><i class="fa-solid fa-plus me-2"></i>Tambah
                                Loker</button>
                        </div>
                    </div>

                    {{-- Table --}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-light text-center">
                                <tr>
                                    <th width="5%">Id</th>
                                    <th width="35%">No Loker</th>
                                    <th width="35%">Kapasitas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lokers as $lk)
                                    <tr>
                                        <td class="text-center">{{ $lk->id }}</td>
                                        <td class="text-center">
                                            <span class="badge bg-success">{{ $lk->kode_loker }}</span>
                                        </td>
                                        <td class="text-center">{{ $lk->kapasitas }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#edit-loker">
                                                <i class="fa-solid fa-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#hapus-data-loker" data-id="{{ $lk->id }}">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
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
<div class="modal fade" id="tambah-loker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Laptop</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/loker/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="code_loker" class="form-label">Kode Loker</label>
                        <input type="text" class="form-control" id="code_loker" name="code_loker"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Kapasitas</label>
                        <input type="number" class="form-control" id="kapasitas" name="kapasitas"
                            aria-describedby="emailHelp">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal Edit data laptop --}}
<div class="modal fade" id="edit-loker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Loker</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="code-loker" class="form-label">Kode Loker :</label>
                        <input type="text" class="form-control" id="code-loker" aria-describedby="emailHelp"
                            value="A5">
                    </div>
                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Kapasitas :</label>
                        <input type="number" class="form-control" id="kapasitas" aria-describedby="emailHelp"
                            value="3">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal hapus data --}}
<div class="modal fade" id="hapus-data-loker" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                <a href="#" id="btn-hapus" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('hapus-data-loker').addEventListener('show.bs.modal', function(event) {
        let button = event.relatedTarget // tombol yang diklik
        let id = button.getAttribute('data-id') // ambil id loker
        let hapusBtn = document.getElementById('btn-hapus')
        hapusBtn.href = '/loker/delete/' + id
    })
</script>
