<?php

    require_once ('../koneksi.php');

    $query = mysqli_query($koneksi, "SELECT * FROM tbl_visi_misi where id=1 ");

    $sekolah = mysqli_query($koneksi, "SELECT * FROM tbl_sejarah_singkat where id=1 ");

    $struktur = mysqli_query($koneksi, "SELECT * FROM tbl_struktur_organisasi where id=1 ");

    $active = 'tentang';

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
                        <h1 class="text-white animated slideInDown">TENTANG KAMI</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Visi Misi Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="visi_misi">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Tentang Kami</h6>
                <h1 class="mb-5">Visi dan Misi</h1>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-12" style="display: flex; flex-direction: column;">
                <?php $row = mysqli_fetch_assoc($query); ?>
                <h3>Visi</h3>
                <p>
                    <?= $row['visi'] ?>
                </p>
        
                <br>
        
                <h3>Misi</h3>
                <p>
                    <?= $row['misi'] ?>
                </p>
            </div>
            </div>
        </div>
    </div>
    <!-- Visi Misi End -->


    <!-- sejarah Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.3s" id="sejarah">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Tentang Kami</h6>
                <h1 class="mb-5">Sejarah Sekolah</h1>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-12" style="display: flex; flex-direction: column;">
                <?php $row = mysqli_fetch_assoc($sekolah); ?>
                <p>
                    <?= $row['sejarah_singkat'] ?>
                </p>
            </div>
        </div>
    </div>
</div>
    <!-- sejarah End -->

        <!-- Struktur Start -->
        <?php $row = mysqli_fetch_assoc($struktur); ?>
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.5s" id="struktur">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Tentang Kami</h6>
                <h1 class="mb-5"><?= $row['judul'] ?></h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-7 col-md-7">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../images/struktur/<?= $row['foto'] ?>" alt="">
                        </div>  
                    </div>
                </div>
            </div>
        </div>
</div>
    <!-- Struktur End -->

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