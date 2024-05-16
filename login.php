<?php
session_start(); // Mulai sesi

include_once("./assets/inc/conn.php");

// Periksa apakah pengguna sudah login sebelumnya
if (isset($_SESSION['username'])) {
    // Redirect pengguna ke halaman yang sesuai
    header("Location: index.php");
    exit();
}

$message = ""; // Variabel untuk menyimpan pesan notifikasi

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Mengambil data dari form
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Mengambil data dari form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Mengecek informasi login di database
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Login berhasil
            $_SESSION['username'] = $username; // Set session username

            if ($username === 'admin') {
                // Jika username adalah 'admin', redirect ke admin.html
                $message = "Login Admin Berhasil";
                header("Location: admin.php");
                exit(); // Hentikan eksekusi script setelah mengarahkan pengguna
            } else {
                // Jika bukan admin, redirect ke index.php
                $message = "Login Berhasil";
                header("Location: index.php");
                exit(); // Hentikan eksekusi script setelah mengarahkan pengguna
            }
        } else {
            // Login gagal
            $message = "Invalid username or password";
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Time Travel | Peminjaman Ruangan</title>
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
    <link href="assets/css/login.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">Time Travel</a></h1>
    </header>
    <!-- End Header -->

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3><strong>Sign In Account </strong></h3>
                        <p>Universitas Teknokrat Indonesia</p>
                        <form action="login.php" method="POST" class="requires-validation" novalidate>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="username" placeholder="Username" required>
                                <div class="valid-feedback">Username Valid!</div>
                                <div class="invalid-feedback">Username kosong!</div>
                            </div>


                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                                <div class="valid-feedback">Password valid!</div>
                                <div class="invalid-feedback">Password kosong!</div>
                            </div>

                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label">I confirm that all data are correct</label>
                                <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                            </div>
                            <br>
                            <div class="form-button " align="center">
                                <button id="submit" type="submit" class="btn btn-danger">Login</button>
                            </div>

                            <div class="form-content-2">
                                <a href="register.php ">Belum punya akun? Register</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    <?php if (!empty($message)) : ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: "<?php echo $message; ?>",
                    icon: "<?php echo ($message === 'Login Berhasil' || $message === 'Login Admin Berhasil') ? 'success' : 'error'; ?>",
                    confirmButtonText: "OK"
                });
            });
        </script>
    <?php endif; ?>
    
    <script>
        (function() {
            'use strict'
            const forms = document.querySelectorAll('.requires-validation')
            Array.from(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>
