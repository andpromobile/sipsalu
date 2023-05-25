 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="./index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img style="margin-right: 10px;" height="50px" src="img/logo-sekolah.png" alt=""> SMK Negeri 1 Luwu Utara
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <div class="nav-item dropdown">
                    <a class="nav-link <?= $active == 'beranda' ? 'active' : '' ?> dropdown-toggle" href="./index.php">Beranda</a>
                    <!-- <a href="index.php" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Beranda</a> -->
                    <div class="dropdown-menu fade-down m-0">
                        <a href="./index.php#sambutan" class="dropdown-item">Sambutan Kepala Sekolah</a>
                        <a href="./berita.php" class="dropdown-item">Berita Terbaru</a>
                        <a href="./galeri.php" class="dropdown-item">Galeri Sekolah</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link <?= $active == 'tentang' ? 'active' : '' ?> dropdown-toggle" href="./tentang.php">Tentang Kami</a>
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a> -->
                    <div class="dropdown-menu fade-down m-0">
                        <a href="./tentang.php#visi_misi" class="dropdown-item">Visi Misi</a>
                        <a href="./tentang.php#sejarah" class="dropdown-item">Sejarah Sekolah</a>
                        <a href="./tentang.php#struktur" class="dropdown-item">Struktur Organisai</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link <?= $active == 'program' ? 'active' : '' ?> dropdown-toggle" href="#">Program</a>
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program</a> -->
                    <div class="dropdown-menu fade-down m-0">
                        <a href="./jurusan.php" class="dropdown-item">Profil Jurusan</a>
                        <a href="#" class="dropdown-item">Ekstrakurikuler</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                <a class="nav-link <?= $active == 'alumni' ? 'active' : '' ?> dropdown-toggle" href="#">Alumni</a>
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Alumni</a> -->
                    <div class="dropdown-menu fade-down m-0">
                        <a href="#" class="dropdown-item">Profil Alumni</a>
                        <a href="./alumni.php" class="dropdown-item">Testimoni Alumni</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                <a class="nav-link <?= $active == 'kontak' ? 'active' : '' ?> dropdown-toggle" href="#">Hubungi Kami</a>
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Hubungi Kami</a> -->
                    <div class="dropdown-menu fade-down m-0">
                        <a href="./kontak.php" class="dropdown-item">Kontak</a>
                        <a href="./pusat_bantuan.php" class="dropdown-item">Pusat Bantuan</a>
                    </div>
                </div>
                <a href="#" class="nav-item nav-link">PPBD</a>
            </div>
        </div>
    </nav>