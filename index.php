<?php
session_start(); // Mulai sesi

// Periksa apakah pengguna sudah login sebelumnya
if (!isset($_SESSION['username'])) {
    // Redirect pengguna ke halaman login jika belum login
    header("Location: login.php");
    exit();
}

// Logout jika ada permintaan logout
if (isset($_GET['logout'])) {
    session_destroy(); // Hapus semua data sesi
    header("Location: login.php");
    exit();
}

// Periksa status login untuk mengubah teks tombol
$loginStatus = isset($_SESSION['username']) ? 'Logout' : 'Login';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home | Peminjaman Ruangan</title>
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
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">Time Travel</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="#faqs">FaQs</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <?php if (isset($_SESSION['username'])) : ?>
                        <li><a class="getstarted scrollto" href="?logout=true">Logout</a></li>
                    <?php else : ?>
                        <li><a class="getstarted scrollto" href="login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

    <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Peminjaman Ruangan</h1>
                    <h2>Universitas Teknokrat Indonesia</h2>
                    <p>Temukan ruangan impian Anda untuk menjalankan kegiatan kampus yang berdampak positif bagi komunitas Universitas Teknokrat Indonesia!</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="form.php" class="btn-get-started scrollto ">Form Peminjaman</a>
                        <div class="m-2"></div>
                        <a href="peminjaman.php" class="btn-get-secondary scrollto">Daftar Peminjaman</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/campus.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <p align="justify">
                        Selamat datang di About Us TimeTravel! Kami adalah platform inovatif yang didedikasikan untuk memfasilitasi peminjaman ruangan di dalam kampus dengan mudah dan efisien. Kami menghubungkan mahasiswa, staf, dan organisasi kampus dengan berbagai pilihan
                        ruangan yang tersedia di gedung A, B, ICT, dan GSG. Proses peminjaman ruangan kami sangatlah mudah. Anda hanya perlu memilih gedung dan ruangan yang Anda inginkan, tentukan tanggal dan waktu yang diinginkan, dan lengkapi proses
                        pemesanan dengan beberapa langkah sederhana. Proses peminjaman ruangan kami sangatlah mudah. Anda hanya perlu memilih gedung dan ruangan yang Anda inginkan, tentukan tanggal dan waktu yang diinginkan, dan lengkapi proses pemesanan
                        dengan beberapa langkah sederhana.
                    </p>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Gedung Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Gedung </h2>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-building"></i></div>
                            <h4><a href="">Gedung A</a></h4>
                            <p>Gedung A menawarkan pilihan ruangan yang luas dan serbaguna, mulai dari ruang konferensi yang elegan hingga ruang kelas yang nyaman.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-building"></i></div>
                            <h4><a href="">Gedung ICT</a></h4>
                            <p>Gedung ICT menyediakan layanan peminjaman ruangan yang dapat memenuhi berbagai kebutuhan.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-building"></i></div>
                            <h4><a href="">Gedung GSG</a></h4>
                            <p>Gedung GSG berada di GSG dimana terdapat 3 lantai lab yang dimana terdiri dari 2 lab tiap lantainya.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-building"></i></div>
                            <h4><a href="">Gedung FSIP</a></h4>
                            <p>Gedung FSIP memiliki fasilitas untuk mengajar dan melakukan presentasi</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Gedung Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Gallery</h2>
                </div>

                <div class="row gallery-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 gallery-item filter-app">
                        <div class="gallery-img"><img src="assets/img/gallery/portfolio-1.jpg" class="img-fluid" alt=""></div>
                        <div class="gallery-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="assets/img/gallery/portfolio-1.jpg" data-gallery="galleryGallery" class="gallery-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-web">
                        <div class="gallery-img"><img src="assets/img/gallery/portfolio-2.jpg" class="img-fluid" alt=""></div>
                        <div class="gallery-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/gallery/portfolio-2.jpg" data-gallery="galleryGallery" class="gallery-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-app">
                        <div class="gallery-img"><img src="assets/img/gallery/portfolio-3.jpg" class="img-fluid" alt=""></div>
                        <div class="gallery-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="assets/img/gallery/portfolio-3.jpg" data-gallery="galleryGallery" class="gallery-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-card">
                        <div class="gallery-img"><img src="assets/img/gallery/portfolio-4.jpg" class="img-fluid" alt=""></div>
                        <div class="gallery-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="assets/img/gallery/portfolio-4.jpg" data-gallery="galleryGallery" class="gallery-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-web">
                        <div class="gallery-img"><img src="assets/img/gallery/portfolio-5.jpg" class="img-fluid" alt=""></div>
                        <div class="gallery-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="assets/img/gallery/portfolio-5.jpg" data-gallery="galleryGallery" class="gallery-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-app">
                        <div class="gallery-img"><img src="assets/img/gallery/portfolio-6.jpg" class="img-fluid" alt=""></div>
                        <div class="gallery-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="assets/img/gallery/portfolio-6.jpg" data-gallery="galleryGallery" class="gallery-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Gallery Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faqs" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>FAQS</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Bagaimana cara melakukan peminjaman ruangan di Website ini <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Untuk melakukan peminjaman ruangan di kampus Teknokrat, Anda mengklik tombol "Form Peminjaman" dan mengisi formulir peminjaman yang tersedia. Pastikan Anda memberikan informasi yang lengkap mengenai tanggal, waktu, jenis acara, dan kebutuhan khusus lainnya.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa syarat dan ketentuan yang harus dipenuhi untuk melakukan peminjaman ruangan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Syarat dan ketentuan untuk melakukan peminjaman ruangan dapat bervariasi. Biasanya, Anda perlu menjadi mahasiswa atau staf kampus Teknokrat yang terdaftar untuk memenuhi syarat peminjaman ruangan.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Berapa lama waktu peminjaman yang dapat dilakukan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Waktu peminjaman ruangan di kampus Teknokrat dapat bervariasi tergantung pada ketersediaan dan jenis acara.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Apakah ada biaya yang harus dibayarkan untuk peminjaman ruangan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Untuk Biaya peminjaman ruangan di kampus Teknokrat tidak dikenakan tarif biaya.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Apa saja fasilitas yang tersedia dalam ruangan yang dapat dipinjam? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Fasilitas yang tersedia dalam ruangan yang dapat dipinjam di kampus Teknokrat dapat mencakup meja dan kursi, proyektor, sistem suara, akses internet, dan fasilitas pendukung lainnya. tetapi anda isa mengisi fasilitas yang ingin dipinjam semisalnya diruangan
                                    tersebut tidak tersedia.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. ZA. Pagar Alam No.9 -11, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>uti@teknokrat.ac.id</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>085383020570 (Chat Only)</p>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.226620207035!2d105.25562721476514!3d-5.382383996096008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dadc7970b277%3A0x5b1fe57f83b6416c!2sUniversitas%20Teknokrat%20Indonesia!5e0!3m2!1sid!2sid!4v1684818511059!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->
        <footer class="bg-dark text-light">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-6">
                        <h4>About Us</h4>
                        <p>Selamat datang di About Us TimeTravel! Kami adalah platform inovatif yang didedikasikan untuk memfasilitasi peminjaman ruangan di dalam kampus dengan mudah dan efisien. </p>
                    </div>
                    <div class="col-md-3">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#faqs">FAQS</a></li>
                            <li><a href="#contact">Contact</a></li>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>Contact Us</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-map-marker-alt"></i> Jl. ZA. Pagar Alam No.9 -11</li>
                            <li><i class="fas fa-phone"></i> Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung</li>
                            <li><i class="fas fa-envelope"></i> Lampung 35132</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <p>Copyright &copy; 2023 Time Travel - All rights reserved.</p>
                </div>
            </div>
        </footer>

    </main>
    <!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>