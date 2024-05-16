<?php
include_once("./assets/inc/conn.php");

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $barang = $_POST['barang'];
    $gedung = $_POST['gedung'];
    $ruangan = $_POST['ruangan'];
    $prodi = $_POST['prodi'];

    // Periksa jika semua field telah diisi
    if (!empty($name) && !empty($barang) && !empty($gedung) && !empty($ruangan) && !empty($prodi)) {
        // Query SQL untuk menyimpan data ke dalam tabel
        $sql = "INSERT INTO form (name, barang, gedung, ruangan, prodi)
                VALUES ('$name', '$barang', '$gedung', '$ruangan', '$prodi')";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php"); // Redirect ke halaman index.php
            exit(); // Menghentikan eksekusi kode setelah redirect
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $message = "Harap lengkapi semua field!";
    }
}

// Tutup koneksi
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Form | Peminjaman Ruangan</title>
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
    <link href="assets/css/form.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">Time Travel</a></h1>
    </div>
</header>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3><strong>Form Peminjaman Ruangan</strong></h3>
                        <p>Universitas Teknokrat Indonesia</p>
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="name" placeholder="Nama Lengkap" required>
                                <div class="valid-feedback">Nama Valid!</div>
                                <div class="invalid-feedback">Nama tidak boleh kosong!</div>
                            </div>

                            <div class="col-md-12">

                                <textarea class="form-control" name="barang" placeholder="contoh : meja = 2" required>Nama Barang</textarea>
                                <div class="valid-feedback">Nama Barang valid!</div>
                                <div class="invalid-feedback">Nama Barang tidak boleh kosong!</div>
                            </div>

                            <div class="col-md-12">
                                <select class="form-select mt-3" required>
                                  <option selected disabled value="">Pilihan Gedung</option>
                                  <option value="jweb">Gedung A</option>
                                  <option value="sweb">Gedung ICT</option>
                                  <option value="pmanager">Gedung GSG</option>
                                  <option value="pmanager">Gedung FSIP</option>
                           </select>
                                <div class="valid-feedback">Berhasil memilih!</div>
                                <div class="invalid-feedback">Tolong pilih gedung!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="ruangan" placeholder="Ruangan" required>
                                <div class="valid-feedback">Ruangan valid!</div>
                                <div class="invalid-feedback">Ruangan tidak boleh kosong!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="prodi" placeholder="Program Studi" required>
                                <div class="valid-feedback">Program studi is valid!</div>
                                <div class="invalid-feedback">Prodi tidak boleh kosong!</div>
                            </div>

                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label">I confirm that all data are correct</label>
                                <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                            </div>


                            <div class="form-button mt-3" align="center">
                                <button id="submit" type="submit" class="btn btn-danger">Register</button>
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
                                Swal.fire({
                                    title: "<?php echo $message; ?>",
                                    icon: "<?php echo ($message === 'Data berhasil dikirim!') ? 'success' : 'error'; ?>",
                                    confirmButtonText: "OK"
                                });
                            </script>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
