<?php 

require_once '../../koneksi.php';

$query = mysqli_query($koneksi, "SELECT id, nama_jurusan FROM tbl_jurusan order by nama_jurusan");

$active = 'alumni'; 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah Data Alumni - SMKN 1 Luwu Utara</title>
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
								Tambah Data Alumni
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama_alumni">Nama Alumni</label>
								<input type="text" class="form-control" id="nama_alumni" placeholder="Nama Alumni" autocomplete="off" required="required" name="nama_alumni">
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="Jurusan">Jurusan</label>
										<select name="id_jurusan" id="jurusan" class="form-control">
											<?php while($row = mysqli_fetch_assoc($query)) : ?>
												<option value="<?= $row['id'] ?>"><?= $row['nama_jurusan'] ?></option>
											<?php endwhile; ?>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="angkatan">Angkatan</label>
										<input type="number" class="form-control" id="angkatan" placeholder="Angkatan" autocomplete="off" required="required" name="angkatan">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="isi">Testimoni</label>
								<textarea name="isi" id="ckeditor" class="ckeditor form-control" required="required"></textarea>
							</div>
							<div class="form-group">
								<label for="foto">Foto</label>
								<input type="file" class="form-control-file" id="foto" autocomplete="off" required="required" name="foto">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="tambah">Tambah</button>
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