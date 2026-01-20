<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container-fluid">

        <!-- TOGGLE OFFCANVAS -->
        <a class="navbar-brand text-white ms-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button">
            <i class="fa-solid fa-bars"></i>
        </a>

        <div class="d-flex gap-2 ">
            <!-- LOGO -->
            <img src="../img/images__2_-removebg-preview.png" alt="Logo" height="40" class="me-2">

            <!-- TITLE -->
            <span class="navbar-text text-white fw-semibold">
                SMAIT Nurul Islam
            </span>
        </div>

        <!-- TOGGLER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- RIGHT MENU -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto"></ul>

            <!-- USER DROPDOWN -->
            <div
                class="dropdown d-flex align-items-center gap-2 px-lg-3 mt-3 mt-lg-0 justify-content-center justify-content-lg-end w-100 w-lg-auto">
                <i class="fa-solid fa-circle-user text-white fs-4"></i>

                <a class="text-white text-decoration-none dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Hi, John Doe
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark border-0 mt-2">
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
    </div>
</nav>
