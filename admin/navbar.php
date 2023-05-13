<?php
if(!session_id()) session_start();

if(!isset($_SESSION['auth_admin'])) 
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
				<a class="nav-link <?= $active == 'kategori' ? 'active' : '' ?> " href="<?= $base_url ?>admin/kategori_artikel/index.php">Kategori Artikel</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $active == 'jurusan' ? 'active' : '' ?> " href="<?= $base_url ?>admin/jurusan/index.php">Jurusan</a>
			</li>
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