<?php 
require_once '../../koneksi.php';

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT tbl_alumni.*, tbl_jurusan.nama_jurusan FROM tbl_alumni LEFT JOIN tbl_jurusan ON tbl_alumni.id_jurusan = tbl_jurusan.id WHERE tbl_alumni.id = $id");

$row = mysqli_fetch_assoc($query);
$active = 'alumni';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail Alumni - SMKN 1 Luwu Utara</title>
	<link rel="stylesheet" href="../../resources/datatables/datatables.min.css">
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
								Detail Alumni - <strong><?= $row['nama_alumni'] ?></strong>
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-stripped">
							<tr>
								<td><b>Nama</b></td>
								<td>:</td>
								<td><?= $row['nama_alumni'] ?></td>
							</tr>
							<tr>
								<td><b>Jurusan</b></td>
								<td>:</td>
								<td><?= $row['nama_jurusan'] ?></td>
							</tr>
							<tr>
								<td><b>Angkatan</b></td>
								<td>:</td>
								<td><?= $row['angkatan'] ?></td>
							</tr>
							<tr>
								<td><b>Pekerjaan</b></td>
								<td>:</td>
								<td><?= $row['pekerjaan'] ?></td>
							</tr>
							<tr>
								<td><b>Testimoni</b></td>
								<td>:</td>
								<td><?= $row['isi'] ?></td>
							</tr>
							<tr>
								<td><b>Foto</b></td>
								<td></td>
								<td></td>
							</tr>
						</table>
						<img src="../../images/alumni/<?= $row['foto'] ?>" alt="<?= $row['nama_alumni'] ?>" width="50%" class="img-thumbnail">
					</div>

				</div>
			</div>
		</div>
	</div>
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/datatables/datatables.min.js"></script>
	<script src="../../resources/datatables/datatable.js"></script>
</body>
</html>