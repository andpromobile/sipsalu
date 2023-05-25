<?php 

require_once '../../koneksi.php';

$query_struktur = mysqli_query($koneksi, "SELECT * FROM tbl_struktur_organisasi WHERE id = 1");
$struktur = mysqli_fetch_assoc($query_struktur);

$active = 'tentang'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Struktur Organisasi - SMKN 1 Luwu Utara</title>
	<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
</head>
<body>
	<?php require_once '../navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Struktur Organisasi
							</div>
						</div>
					</div>
					<div class="card-body">
                    <?php if(isset($_SESSION['sukses'])) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Berhasil!</strong> <?= $_SESSION['sukses'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php unset($_SESSION['sukses']) ?>
						<?php elseif(isset($_SESSION['gagal'])) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Gagal!</strong> <?= $_SESSION['gagal'] ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php unset($_SESSION['gagal']) ?>
						<?php endif; ?>
						<form method="POST" action="proses_struktur.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text" value="<?= $struktur['judul'] ?>" class="form-control" id="judul" placeholder="Judul" autocomplete="off" required="required" name="judul">
							</div>
							<div class="form-group">
								<label for="foto">Foto</label>
								<input type="file" class="form-control-file mb-2" id="foto" placeholder="Foto Struktur Organisasi" autocomplete="off" name="foto">
								*gambar sebelumnya <br>
								<img src="../../images/struktur/<?= $struktur['foto'] ?>" alt="<?= $row['judul'] ?>" width="500px" class="mt-2">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/ckeditor/ckeditor.js"></script>
</body>
</html>