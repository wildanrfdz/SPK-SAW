<header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            Aplikasi Penerimaan Karyawan PT. Armudi Pradana Konsultan
        </h1>
        <div class="navbar-nav flex-row order-md-last">

            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div><?= $_SESSION['level'] ?></div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="logout.php" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>