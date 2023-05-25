<?php

    require_once ('../koneksi.php');

    $query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel where id_kategori = 2 order by id desc LIMIT 4");

    $berita = mysqli_query($koneksi, "SELECT * FROM tbl_artikel where id_kategori = 1 order by id desc LIMIT 3");

    $active = 'beranda';


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
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

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
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include('navbar.php'); ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">SMK Negeri 1 Luwu Utara</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed
                                    stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                    eirmod elitr.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">SMK Negeri 1 Luwu Utara</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed
                                    stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                    eirmod elitr.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kenapa Harus</h6>
                <h1 class="mb-5">SMK Negeri 1 Luwu Utara</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-laptop text-primary mb-4"></i>
                            <h5 class="mb-3">Fasilitas Lengkap</h5>
                            <p>Penunjang belajar dengan kualitas premium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Kerjasama Luas</h5>
                            <p>Memperbesar kesempatan bekerja sebelum lulus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Lingkungan Nyaman</h5>
                            <p>Berada di lingkungan yang asri, aman dan kondusif.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-chalkboard-teacher text-primary mb-4"></i>
                            <h5 class="mb-3">Pengajar Kompeten</h5>
                            <p> Guru yang up-to-date dengan perkembangan industri.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Sambutan Start -->
    <div class="container-xxl py-5" id="sambutan">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Sambutan Kepala Sekolah</h6>
                    <h1 class="mb-4">Assalamualaikum Wr. Wb.</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sambutan End -->


    <!-- Prodi Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Jurusan</h6>
                <h1 class="mb-5">Program Studi Keahlian</h1>
            </div>
            <div class="row justify-content-md-center g-3">
                <div class="col-lg-12">
                    <div class="row text-center g-3">
                        
                        <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-delay="0.3s">   
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/5-prodi-aphp.jpg"
                            style="width: 150px; height: 150px;">
                            <h5 class="m-0">Agribisnis Pengolahan Hasil Pertanian</h5>
                            <p>APHP</p>
                        </div>

                        <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/4-prodi-agri.jpg"
                            style="width: 150px; height: 150px;">
                            <h5 class="m-0">Agribisnis Tanaman Pangan & Holtikultura</h5>
                            <p>ATPH</p>
                        </div>

                        <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/3-prodi-atp.jpg"
                            style="width: 150px; height: 150px;">
                            <h5 class="m-0">Agribisnis Tanaman Perkebunan</h5>
                            <p>ATP</p>
                        </div>

                        <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-delay="0.5s">   
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/6-prodi-atu.jpg"
                            style="width: 150px; height: 150px;">
                            <h5 class="m-0">Agribisnis Ternak Unggas</h5>
                            <p>ATU</p>
                        </div>

                        <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/8-prodi-dipb.jpg"
                            style="width: 150px; height: 150px;">
                            <h5 class="m-0">Desain Permodelan dan Informasi Bangunan</h5>
                            <p>DIPB</p>
                        </div>

                        <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/2-prodi-tekbis.jpg" 
                            style="width: 150px; height: 150px;">
                            <h5 class="m-0">Teknis Bisnis Sepeda Motor</h5>
                            <p>TBSM</p>
                        </div>

                        <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/1-prodi-tkro.jpg"
                            style="width: 150px; height: 150px;">
                            <h5 class="mb-0">Teknik Kendaraan Ringan</h5>
                            <p>TKR/Otomotif</p>
                        </div>
                        
                        <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-delay="0.1s">    
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/7-prodi-kom.jpg"
                            style="width: 150px; height: 150px;">
                            <h5 class="m-0">Teknik Komputer & Jaringan</h5>
                            <p>TKJ</p>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Prodi End -->


    <!-- Berita Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Artikel</h6>
                <h1 class="mb-5">Berita Terbaru</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php while($row = mysqli_fetch_assoc($berita)) : ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../images/artikel/<?= $row['foto'] ?>" alt="">
                            
                        </div>
                        <div class="text-center p-4 pb-0">
                            
                            <h5 class="mb-4"><?= $row['judul'] ?></h5>

                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px;">Selengkapnya</a>
            
                        </div>

                        <br>

                       
                        
                    </div>
                </div>
                <?php endwhile; ?>
                
            </div>
        </div>
    </div>
    <!-- Berita End -->


    <!-- Galeri Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Galeri</h6>
                <h1 class="mb-5">Kegiatan Sekolah</h1>
            </div>

            <div class="owl-carousel testimonial-carousel position-relative">
                <?php while($row = mysqli_fetch_assoc($query)) : ?>
                <div class="testimonial-item text-center wow fadeInUp" data-wow-delay="0.2s">
                    <img style="object-fit: cover;" height="200px" width="100%" src="../images/artikel/<?= $row['foto'] ?>">
                    
                    
                    <div class="testimonial-text bg-light text-center p-4">
                        <h5 class="mb-0"><?= $row['judul'] ?></h5>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

      </div>      
    </div>
    <!-- Galeri End -->



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