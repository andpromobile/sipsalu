<?php

    require_once ('../koneksi.php');

    $alumni = mysqli_query($koneksi, "SELECT * FROM tbl_alumni");

    $active = 'alumni';

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK Negeri 1 Luwu Utara</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo-sekolah.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include('navbar.php'); ?>
    <!-- Navbar End -->

    <div class="container-fluid p-0 mb-5">
        <div class="position-relative" style="height: 400px;">
            <img class="w-100 h-100" src="img/profil.png" style="object-fit:cover;" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7); height: 500px;">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-sm-10 col-lg-8">
                        <h1 class="text-white animated slideInDown">TESTIMONI ALUMNI</h1>
                            <!-- <p class="fs-5 text-white mb-4 pb-2 animated slideInDown">Kumpulan Kegiatan SMK Negeri 1 Luwu Utara</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="container-xxl py-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimoni</h6>
                <h1 class="mb-5">Kata Alumni Kami!</h1>
            </div>
            
            <div class="owl-carousel testimonial-carousel position-relative">
            <?php while($row = mysqli_fetch_assoc($alumni)) : ?>
                <div class="testimonial-item">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="../images/alumni/<?= $row['foto'] ?>" style="width: 200px; height: 200px;">
                    <h5 class="mb-0 text-center"><?= $row['nama_alumni'] ?></h5>
                    <p class="mb-2 text-center"><?= $row['angkatan'] ?> || <?= $row['pekerjaan'] ?></p>
                    <div class="testimonial-text bg-light p-3" style="text-align: justify;">
                    <p class="mb-0"><?= $row['isi'] ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            
        </div>
    </div>
    <!-- Testimonial End -->



    <!-- Footer Start -->
    <?php include('footer.php'); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>