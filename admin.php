<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard - Peminjaman Ruangan</title>
    <!-- Favicons -->

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/admin.css">

    <link rel="stylesheet" href="assets/modules/fontawesome6.1.1/css/all.css">
    <link rel="stylesheet" href="assets/modules/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/modules/apexcharts/apexcharts.css">
</head>

<body>

    <!--Topbar -->
    <div class="topbar transition">
        <div class="bars"></div>

        <div class="menu">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-4 my-2 my-md-0 mw-400 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                    </div>
                </div>
            </form>
            <ul>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/img/avatar.png" alt="">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="admin.php"><i class="fa fa-dashboard size-icon-1"></i> <span>Dashboard</span></a>
                        <a class="dropdown-item" href="data.php"><i class="fa fa-columns size-icon-1"></i> <span>Peminjaman</span></a>
                        <a class="dropdown-item" href="riwayat.php"><i class="fa fa-database size-icon-1"></i> <span>Riwayat</span></a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="login.php"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>Logout</span></a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!--Sidebar-->
    <div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
        <div class="sidebar-content">
            <div id="sidebar">

                <!-- Logo -->
                <div class="logo">
                    <h2 class="mb-0"><img src="assets/img/apple-touch-icon.png"> Admin</h2>
                </div>

                <ul class="side-menu">
                    <li>
                        <a href="admin.php" class="active">
                            <i class='bx bxs-dashboard icon'></i>Dashboard
                        </a>
                    </li>

                    <!-- Divider-->
                    <li class="divider" data-text="MENU">MENU</li>

                    <li>
                        <a href="data.php">
                            <i class='bx bx-columns icon'></i>Data Peminjaman
                        </a>
                    </li>
                    <li>
                        <a href="riwayat.php">
                            <i class='bx bx-history icon'></i>Riwayat Peminjaman
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar-->


    <div class="sidebar-overlay"></div>


    <!--Content Start-->
    <div class="content-start transition">

        <div class="container-fluid dashboard">
            <div class="content-header">
                <h1><strong>Dashboard</strong></h1>

            </div>
            <div class="card shadow">
                <div class="content-header">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="hero bg-primary text-white">
                                <div class="hero-inner">
                                    <h2>Welcome, Administrator!</h2>
                                    <p class="lead">Manajemen peminjaman yang efisien dan efektif</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center">
                                                <i class="fas fa-building icon-home bg-primary text-light"></i>
                                            </div>
                                            <div class="col-8">
                                                <p style="margin-bottom: 0;">GEDUNG</p>
                                                <h5 style="margin-top: 10px;">A</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center">
                                                <i class="fas fa-building icon-home bg-primary text-light"></i>
                                            </div>
                                            <div class="col-8">
                                                <p style="margin-bottom: 0;">GEDUNG</p>
                                                <h5 style="margin-top: 10px;">GSG</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center">
                                                <i class="fas fa-building icon-home bg-primary text-light"></i>
                                            </div>
                                            <div class="col-8">
                                                <p style="margin-bottom: 0;">GEDUNG</p>
                                                <h5 style="margin-top: 10px;">ICT</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center">
                                                <i class="fas fa-building icon-home bg-primary text-light"></i>
                                            </div>
                                            <div class="col-8">
                                                <p style="margin-bottom: 0;">GEDUNG</p>
                                                <h5 style="margin-top: 10px;">FSIP</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Panduan -->

                            <div class="container">
                                <div class="card-body d-flex">
                                    <div><br>
                                        <h1 class="card-title"><strong>Panduan Penggunaan</strong></h1>
                                        <p class="card-body">Pada halaman ini, Anda dapat melihat informasi penting tentang setiap peminjaman ruangan, seperti ID peminjaman, nama peminjam, tanggal peminjaman, kategori ruangan, ruangan yang dipinjam, prodi, dan status peminjaman.
                                            Informasi ini membantu Anda dalam melacak dan memantau status peminjaman ruangan secara efisien.</p>
                                    </div>
                                    <div class="ms-auto">
                                        <img class="img-fluid" src="assets/img/Panduan.png" alt="Gambar Panduan" style="width: 250px;">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Footer -->
            <footer>
                <div class="footer ">
                    <div class="float-start ">
                        <p>Copyright &copy; 2023 Time Travel - All rights reserved.</p>
                    </div>
                </div>
            </footer>

            <!-- General JS Scripts -->
            <script src="assets/js/admin.js "></script>

            <!-- JS Libraies -->
            <script src="assets/modules/jquery/jquery.min.js "></script>
            <script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js "></script>
            <script src="assets/modules/popper/popper.min.js "></script>

            <!-- Chart Js -->
            <script src="assets/modules/apexcharts/apexcharts.js "></script>
            <script src="assets/js/ui-apexcharts.js "></script>

            <!-- Template JS File -->
            <script src="assets/js/script.js "></script>
            <script src="assets/js/custom.js "></script>


</body>

</html>