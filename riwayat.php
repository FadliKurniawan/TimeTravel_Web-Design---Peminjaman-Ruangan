<?php include_once("./assets/inc/conn.php"); ?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Riwayat - Peminjaman Ruangan</title>

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
    </div>
    <!-- End Sidebar-->


    <div class="sidebar-overlay"></div>

   <!-- Content Start -->
   <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <h1><strong>Riwayat</strong></h1>
            </div>
            <div class="card shadow">
                <div class="col-md-12 item-content" style="margin-top: 20px;">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Peminjaman (Recently Deleted)</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Ruangan</th>
                                            <th scope="col">Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Query data from the 'deleted_form' table
                                        $query = "SELECT id, name, date, gedung, ruangan, prodi FROM deleted_form";
                                        $result = mysqli_query($conn, $query);

                                        if (!$result) {
                                            die("Error executing query: " . mysqli_error($conn));
                                        }

                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<th scope='row'>" . $i++ . "</th>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . date("d F, Y", strtotime($row['date'])) . "</td>";
                                            echo "<td>" . $row['gedung'] . "</td>";
                                            echo "<td>" . $row['ruangan'] . "</td>";
                                            echo "<td>" . $row['prodi'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



                <!-- Footer -->
                <footer>
                    <div class="footer">
                        <div class="float-start">
                            <p>Copyright &copy; 2023 Time Travel - All rights reserved.</p>
                        </div>
                    </div>
                </footer>

                <!-- General JS Scripts -->
                <script src="assets/js/admin.js"></script>

                <!-- JS Libraies -->
                <script src="assets/modules/jquery/jquery.min.js"></script>
                <script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
                <script src="assets/modules/popper/popper.min.js"></script>

                <!-- Chart Js -->
                <script src="assets/modules/apexcharts/apexcharts.js"></script>
                <script src="assets/js/ui-apexcharts.js"></script>

                <!-- Template JS File -->
                <script src="assets/js/script.js"></script>
                <script src="assets/js/custom.js"></script>


</body>

</html>