<?php 

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['id'];
// $query_kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori_artikel");
$query_galeri = mysqli_query($koneksi, "SELECT * FROM tbl_galeri WHERE id = $id");
$galeri = mysqli_fetch_assoc($query_galeri);

$active = 'galeri'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubah Galeri - SMKN 1 Luwu Utara</title>
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
								Ubah Galeri
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_ubah.php?id=<?= $galeri['id'] ?>" enctype="multipart/form-data">
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text" value="<?= $galeri['judul'] ?>" class="form-control" id="judul" placeholder="judul galeri" autocomplete="off" required="required" name="judul">
							</div>
							<!-- <div class="form-group">
								<label for="id_kategori">Kategori Artikel</label>
								<select name="id_kategori" id="id_kategori" class="form-control">
									<?php while($kategori = mysqli_fetch_assoc($query_kategori)) : ?>
										<option value="<?= $kategori['id'] ?>" <?= $artikel['id_kategori'] == $kategori['id'] ? 'selected' : '' ?> ><?= $kategori['nama_kategori'] ?></option>
									<?php endwhile; ?>
								</select>
							</div> -->
							<div class="form-group">
								<label for="foto">Foto</label>
								<input type="file" class="form-control-file mb-2" id="foto" placeholder="Foto Galeri" autocomplete="off" name="foto">
								*gambar sebelumnya <br>
								<img src="../../images/galeri/<?= $galeri['foto'] ?>" alt="<?= $row['judul'] ?>" width="500px" class="mt-2">
							</div>
							<div class="form-group">
								<label for="isi">Keterangan</label>
								<textarea name="isi" id="ckeditor" class="ckeditor form-control">
									<?= $galeri['isi'] ?>
								</textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="index.php" class="btn btn-sm btn-secondary">Kembali</a>
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