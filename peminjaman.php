<?php include_once("./assets/inc/conn.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Daftar | Peminjaman Ruangan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/form.css" rel="stylesheet">

</head>

<body>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.php">Time Travel</a></h1>
        </div>
    </header>
    <br><br><br>
    <main class="form-body">
        <div class="row ">
                <div class="form-content ">
                        <div class="card shadow ">
                            <div class="col-md-12 item-content " style="margin-top: 20px; ">
                                <div class="card">
                                    <div class="card-header">
                                        <h3><strong>Daftar Peminjaman Ruangan</strong></h3>
                                        <p>Universitas Teknokrat Indonesia</p>
                                    </div>
                                    <div class="card-body ">
                                        <div class="table-responsive ">
                                            <table class="table table-striped ">
                                                <thead>
                                                    <tr>
                                                        <th scope="col ">Id</th>
                                                        <th scope="col ">Name</th>
                                                        <th scope="col ">Date</th>
                                                        <th scope="col ">Kategori</th>
                                                        <th scope="col ">Ruangan</th>
                                                        <th scope="col ">Prodi</th>
                                                        <th scope="col ">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                        // Query data dari tabel
                                        $query = "SELECT id, name, date, gedung, ruangan, prodi, status FROM form";
                                        $result = mysqli_query($conn, $query);

                                        // Periksa apakah query berhasil dijalankan
                                        if (!$result) {
                                            die("Error executing query: " . mysqli_error($conn));
                                        }
                                        $i = 1;
                                        // Tampilkan data dalam tabel
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<th scope='row'>" . $i++ . "</th>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . date("d F, Y", strtotime($row['date'])) . "</td>";
                                            echo "<td>" . $row['gedung'] . "</td>";
                                            echo "<td>" . $row['ruangan'] . "</td>";
                                            echo "<td>" . $row['prodi'] . "</td>";
                                            // Button status
                                            echo "<td>";
                                            $status = $row['status'];

                                            if ($status == 'Accepted') {
                                                echo "<button class='btn btn-success' type='button' data-bs-toggle='dropdown'>" . $status . "</button>";
                                            } elseif ($status == 'Rejected') {
                                                echo "<button class='btn btn-danger' type='button' data-bs-toggle='dropdown'>" . $status . "</button>";
                                            } elseif ($status == 'On Process') {
                                                echo "<button class='btn btn-warning' type='button' data-bs-toggle='dropdown'>" . $status . "</button>";
                                            } else {
                                                // Default case if none of the above conditions match
                                                echo "<button class='btn btn-secondary' type='button' data-bs-toggle='dropdown'>" . $status . "</button>";
                                            }
                                            echo "</form>";
                                            echo "</td>";
                                        }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </main>
</body>

</html>