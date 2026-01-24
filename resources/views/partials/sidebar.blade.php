<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

    <!-- HEADER -->
    <div class="offcanvas-header bg-primary text-white flex-column text-center">
        <div class="dropdown">
            <i class="fa-solid fa-circle-user fa-3x mb-2 d-block"></i>
            <h5 class="mb-0 dropdown-toggle" data-bs-toggle="dropdown" style="cursor:pointer">
                {{ auth()->user()->username }}
            </h5>


            <!-- DROPDOWN MENU -->
            <ul class="dropdown-menu dropdown-menu-dark w-100 text-start border-0 mt-3">
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="fa-solid fa-pen-to-square me-2"></i>Edit Profil
                    </a>
                </li>
                <li>
                    <a class="dropdown-item text-danger" href="#">
                        <i class="fa-solid fa-right-from-bracket me-2"></i>Logout
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <!-- BODY -->
    <div class="offcanvas-body p-3">
        <div class="list-group list-group-flush">

            <a href="/dashboard"
                class="list-group-item list-group-item-action d-flex align-items-center gap-2
                     rounded-3 w-100 my-2
                      {{ request()->is('dashboard') ? 'active bg-primary text-white' : '' }}">
                <i class="fa-solid fa-gauge"></i>
                Dashboard
            </a>

            <a href="/peminjam"
                class="list-group-item list-group-item-action d-flex align-items-center gap-2
                     rounded-3 w-100 my-2
                      {{ request()->is('peminjam') ? 'active bg-primary text-white' : '' }}">
                <i class="fa-solid fa-users"></i>
                Daftar Peminjam
            </a>

            <a href="/siswa"
                class="list-group-item list-group-item-action d-flex align-items-center gap-2
                     rounded-3 w-100 my-2
                      {{ request()->is('siswa') ? 'active bg-primary text-white' : '' }}">
                <i class="fa-solid fa-user-graduate"></i>
                Daftar Siswa
            </a>

            <a href="/riwayat"
                class="list-group-item list-group-item-action d-flex align-items-center gap-2
                     rounded-3 w-100 my-2
                      {{ request()->is('riwayat') ? 'active bg-primary text-white' : '' }}">
                <i class="fa-solid fa-clock-rotate-left"></i>
                Riwayat
            </a>

        </div>

    </div>
</div>
