<?php 

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_alumni WHERE id = $id");
$query_jurusan = mysqli_query($koneksi, "SELECT * FROM tbl_jurusan order by nama_jurusan");
$alumni = mysqli_fetch_assoc($query);

$active = 'alumni'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubah Alumni - SMKN 1 Luwu Utara</title>
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
								Ubah Alumni
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_ubah.php?id=<?= $alumni['id'] ?>" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama_alumni">Nama Alumni</label>
								<input type="text" value="<?= $alumni['nama_alumni'] ?>" class="form-control" id="nama_alumni" placeholder="Nama Alumni" autocomplete="off" required="required" name="nama_alumni">
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="Jurusan">Jurusan</label>
										<select name="id_jurusan" id="id_jurusan" class="form-control">
											<?php while($jurusan = mysqli_fetch_assoc($query_jurusan)) : ?>
												<option value="<?= $jurusan['id'] ?>" <?= $alumni['id_jurusan'] == $jurusan['id'] ? 'selected' : '' ?> ><?= $jurusan['nama_jurusan'] ?></option>
												<?php endwhile; ?>
											</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="angkatan">Angkatan</label>
										<input type="number" value="<?= $alumni['angkatan'] ?>" class="form-control" id="angkatan" placeholder="Angkatan" autocomplete="off" required="required" name="angkatan">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="pekerjaan">Pekerjaan</label>
								<input type="text" value="<?= $alumni['pekerjaan'] ?>" class="form-control" id="pekerjaan" placeholder="Pekerjaan" autocomplete="off" required="required" name="pekerjaan">
							</div>
							<div class="form-group">
								<label for="isi">Testimoni</label>
								<textarea name="isi" id="ckeditor" class="ckeditor form-control">
									<?= $alumni['isi'] ?>
								</textarea>
							</div>
							<div class="form-group">
								<label for="foto">Foto</label>
								<input type="file" class="form-control-file mb-2" id="foto" placeholder="Foto Alumni" autocomplete="off" name="foto">
								*gambar sebelumnya <br>
								<img src="../../images/alumni/<?= $alumni['foto'] ?>" alt="<?= $row['nama_alumni'] ?>" width="500px" class="mt-2">
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