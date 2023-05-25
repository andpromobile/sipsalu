<?php

    require_once ('../koneksi.php');

    
    // $berita = mysqli_query($koneksi, "SELECT * FROM tbl_artikel where id_kategori = 1");

    $active = 'beranda';

    $halaman = 2; //batasan halaman
    $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $berita = mysqli_query($koneksi, "SELECT * FROM tbl_artikel where id_kategori = 1 order by id desc LIMIT $mulai, $halaman");
    $berita_row = mysqli_query($koneksi, "SELECT * FROM tbl_artikel where id_kategori = 1");
    $total = mysqli_num_rows($berita_row);
    $pages = ceil($total/$halaman);

    $prev = $page-1;
    $next = $page+1;

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
                        <h1 class="text-white animated slideInDown">BERITA TERBARU</h1>
                            <p class="fs-5 text-white mb-4 pb-2 animated slideInDown">Kumpulan Berita Terbaru SMK Negeri 1 Luwu Utara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Berita Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <?php while($row = mysqli_fetch_assoc($berita)) : ?>
            <div class="row justify-content-md-center">
                <div class="col-lg-2 wow fadeInUp" data-wow-delay="0.1s" style="display: flex; flex-direction: column;">
                    <span>
                        <i class="fa fa-user text-primary mb-4"></i> &nbsp; Admin Sekolah
                    </span>
                    <span>
                        <i class="fa fa-clock text-primary mb-4"></i> &nbsp; <?= $row['tanggal'] ?>
                    </span>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3><?= $row['judul'] ?></h3>
                    <img class="img-fluid" src="../images/artikel/<?= $row['foto'] ?>" alt="">
                    <p>
                        <?= $row['isi'] ?>
                    </p>                   
                </div>
            </div>
            <br>
            <?php endwhile; ?> 
            
            <div class="row justify-content-md-center">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  
                        <nav>
                            <ul class="pagination">
                              
                                <li class="page-item <?php echo ($page-1 == 0)? 'disabled':''; ?>">
                                    <a <?php echo ($page-1 > 0)? "href='?halaman=$prev'":""; ?> class="page-link">Previous</a>
                                  </li>

                              <?php for ($i=1; $i<=$pages ; $i++){ ?>

                        
                              
                                <li class="page-item <?php echo $page == $i? 'active':''; ?>">
                                    <a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                                  </li>
                               
                                <?php } ?>
                          
                              <li class="page-item <?php echo ($page == $pages)? 'disabled':''; ?>">
                                <a <?php echo ($page != $pages)? "href='?halaman=$next'":""; ?> class="page-link">Next</a>
                              </li>
                            </ul>
                          </nav>
                </div>               
            </div>        
        </div>
    </div>
    <!-- Berita End -->



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