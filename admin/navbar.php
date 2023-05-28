<?php
if(!session_id()) session_start();

if(!isset($_SESSION['auth_admin1'])) 
	echo "<script>alert('Anda harus login terlebih dahulu!');window.location='../../login.php'</script>";

	//header('Location: ../../login.php');

$base_url = "http://localhost/sipsalu/" 
?>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
	<div class="container">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link <?= $active == 'dashboard' ? 'active' : '' ?>" href="<?= $base_url ?>admin">Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $active == 'bukutamu' ? 'active' : '' ?> " href="<?= $base_url ?>admin/bukutamu/index.php">Bukutamu</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $active == 'jurusan' ? 'active' : '' ?> " href="<?= $base_url ?>admin/jurusan/index.php">Jurusan</a>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link <?= $active == 'kategori' ? 'active' : '' ?> " href="<?= $base_url ?>admin/kategori_artikel/index.php">Kategori Artikel</a>
			</li> -->
			<li class="nav-item">
				<a class="nav-link <?= $active == 'sambutan' ? 'active' : '' ?> " href="<?= $base_url ?>admin/sambutan/sambutan.php">Sambutan</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link <?= $active == 'tentang' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Tentang Sekolah</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= $base_url ?>admin/visi_misi/visi_misi.php">Visi Misi</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/sejarah/sejarah_singkat.php">Sejarah Sekolah</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/struktur/struktur.php">Struktur Organisasi</a>
				</div>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link <?= $active == 'sejarah' ? 'active' : '' ?> " href="<?= $base_url ?>admin/sejarah/sejarah_singkat.php">Sejarah Sekolah</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $active == 'struktur' ? 'active' : '' ?> " href="<?= $base_url ?>admin/struktur/struktur.php">Struktur Organisasi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $active == 'visi_misi' ? 'active' : '' ?> " href="<?= $base_url ?>admin/visi_misi/visi_misi.php">Visi Misi</a>
			</li> -->
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item dropdown">
				<a class="nav-link <?= $active == 'pengguna' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><?php echo $_SESSION['nama']; ?></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= $base_url ?>admin/pengguna/index.php">Data Pengguna</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/pengguna/ubah_pass.php">Ubah Password</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/logout.php">Logout</a>
				</div>
			</li>
		</ul>
	</div>
</nav>