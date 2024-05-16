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
  if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    // Mengambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Periksa apakah username atau email sudah digunakan
    $checkUserQuery = "SELECT * FROM users WHERE username='$username'";
    $checkUserResult = $conn->query($checkUserQuery);
    $checkEmailQuery = "SELECT * FROM users WHERE email='$email'";
    $checkEmailResult = $conn->query($checkEmailQuery);

    // Periksa apakah email berakhiran @teknokrat.ac.id
    if (substr($email, -16) !== "@teknokrat.ac.id") {
      $message = "Invalid email format. Email must end with @teknokrat.ac.id";
    } else {
      // Periksa panjang password dan apakah mengandung setidaknya satu angka
      if (strlen($password) < 8 || !preg_match("/[0-9]/", $password)) {
        // Password tidak memenuhi persyaratan
        $message = "Password must be at least 8 characters long and contain at least one digit";
      } else {
        if ($checkUserResult->num_rows > 0) {
          // Username sudah digunakan
          $message = "Username already exists";
        } elseif ($checkEmailResult->num_rows > 0) {
          // Email sudah digunakan
          $message = "Email already exists";
        } else {
          // Username dan email tersedia, simpan data ke database
          $registerQuery = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
          if ($conn->query($registerQuery) === TRUE) {
            // Pendaftaran berhasil
            $message = "Registration Success!";
            header("Location: login.php");
            exit();
          } else {
            // Pendaftaran gagal
            $message = "Registration failed";
          }
        }
      }
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
  <link href="assets/css/register.css" rel="stylesheet">
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
            <h3><strong>Sign Up Account</strong></h3>
            <p>Universitas Teknokrat Indonesia</p>
            <form action="register.php" method="POST" class="requires-validation" novalidate>
              <div class="col-md-12">
                <input class="form-control" type="text" name="username" placeholder="Username" required>
                <div class="valid-feedback">Username Valid!</div>
                <div class="invalid-feedback">Username kosong!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="password" name="password" placeholder="Password" required>
                <div class="valid-feedback">Password valid!</div>
                <div class="invalid-feedback">Password tidak boleh kosong!</div>
              </div>

              <div class="col-md-12">
                <input class="form-control" type="email" name="email" placeholder="Email" required>
                <div class="valid-feedback">Email valid!</div>
                <div class="invalid-feedback">Email tidak boleh kosong!</div>
              </div>

              <br>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label">I confirm that all data are correct</label>
                <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
              </div>
              <br>
              <div class="form-button" align="center">
                <button id="submit" type="submit" class="btn btn-danger">Register</button>
              </div>
            </form>

            <div class="form-content-2">
              <a href="login.php">Sudah punya akun? Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Include SweetAlert library -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <?php if (!empty($message)) : ?>
    <?php $icon = ($message === 'Registration Success!') ? 'success' : 'error'; ?>
    <script>
      Swal.fire({
        title: "<?php echo $message; ?>",
        icon: "<?php echo $icon; ?>",
        confirmButtonText: "OK"
      });
    </script>
  <?php endif; ?>

  <script>
    (function() {
      'use strict'
      const forms = document.querySelectorAll('.requires-validation')
      Array.from(forms).forEach(function(form) {
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