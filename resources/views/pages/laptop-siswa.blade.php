@extends('template.head')
<title>@yield('title', 'Data Laptop')</title>
@include('partials.navbar')
@include('partials.sidebar')
<section class="container-fluid mt-4">
    {{-- alert ketika berhasil menambahkan data laptop --}}
    @if (session('success'))
        <div class="position-fixed top-0 start-50 translate-middle-x mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 5">
                <i class="fa-solid fa-circle-check me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    @endif

    {{-- alert ketika berhasil menghapus data laptop --}}
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
                <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 fw-semibold">
                        <i class="fa-solid fa-laptop"></i>
                        Daftar Laptop
                    </h6>
                    <span class="badge bg-light text-info">
                        Total: 2 Laptop
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
                            <button class="btn btn-info text-white" data-bs-toggle="modal"
                                data-bs-target="#tambah-laptop"><i class="fa-solid fa-plus me-2"></i>Tambah
                                Laptop</button>
                        </div>
                    </div>

                    {{-- Table --}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-light text-center">
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="20%">Code Laptop</th>
                                    <th width="20%">Merk</th>
                                    <th width="20%">Loker</th>
                                    <th width="20%">Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laptops as $lp)
                                    <tr>
                                        <td class="text-center">{{ $lp->id }}</td>
                                        <td class="text-center">
                                            <span class="badge bg-info">{{ $lp->kode_laptop }}</span>
                                        </td>
                                        <td class="text-center">{{ $lp->merk }}</td>
                                        <td class="text-center">{{ $lp->loker?->kode_loker }}
                                        </td>
                                        <td class="text-center">{{ $lp->status }} </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#edit-laptop">
                                                <i class="fa-solid fa-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#hapus-data-laptop" data-id={{ $lp->id }}>
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
<div class="modal fade" id="tambah-laptop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Laptop</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/laptop/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="kode_laptop" class="form-label">Kode Laptop</label>
                        <input type="text" class="form-control" id="kode_laptop" name="kode_laptop"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk Laptop</label>
                        <input type="text" class="form-control" id="merk" name="merk"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Loker</label>
                        <select name="loker" class="form-control">
                            @foreach ($lokers as $loker)
                                <option value="{{ $loker->id }}">
                                    {{ $loker->kode_loker }}
                                </option>
                            @endforeach
                        </select>
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
<div class="modal fade" id="edit-laptop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Laptop</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="code" class="form-label">Code Laptop :</label>
                        <input type="text" class="form-control" id="code" aria-describedby="emailHelp"
                            value="LP-01" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk Laptop :</label>
                        <input type="text" class="form-control" id="merk" aria-describedby="emailHelp"
                            value="Asus">
                    </div>
                    <div class="mb-3">
                        <label for="loker" class="form-label">Loker :</label>
                        <input type="text" class="form-control" id="loker" aria-describedby="emailHelp"
                            value="A5">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status :</label>
                        <input type="text" class="form-control" id="status" aria-describedby="emailHelp"
                            value="Di Loker" disabled readonly>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal hapus data --}}
<div class="modal fade" id="hapus-data-laptop" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                <a href="" class="btn btn-danger" id="btn-hapus">Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('hapus-data-laptop').addEventListener('show.bs.modal', function(event) {
        let button = event.relatedTarget // tombol yang diklik
        let id = button.getAttribute('data-id') // ambil id laptop
        let hapusBtn = document.getElementById('btn-hapus') // buat variabel untuk menampung elemen button hapus
        hapusBtn.href = '/laptop/delete/' + id // tambahkan href pada button hapus
    })
</script>
