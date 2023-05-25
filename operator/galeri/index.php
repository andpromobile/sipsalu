<?php 
require_once '../../koneksi.php';

$query = mysqli_query($koneksi, "SELECT tbl_galeri.*, tbl_kategori_artikel.nama_kategori FROM tbl_galeri LEFT JOIN tbl_kategori_artikel ON tbl_galeri.id_kategori = tbl_kategori_artikel.id order by id desc");
$no = 1;
$active = 'galeri';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Galeri - SMKN 1 Luwu Utara</title>
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
								Daftar Galeri
							</div>
							<div class="float-right">
								<a href="tambah.php">Tambah</a>
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
						<table id="table_id" class="dataTable table table-bordered">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th width="250px">Gambar Galeri</th>
						            <th>Judul Galeri</th>
						            <th width="100px">Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
						        <?php while($row = mysqli_fetch_assoc($query)) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><img src="../../images/galeri/<?= $row['foto'] ?>" alt="<?= $row['judul'] ?>" width="100%" class="img-thumbnail"></td>
										<td><a href="detail.php?id=<?= $row['id'] ?>"><?= $row['judul'] ?></a></td>
										<td>
											<a href="ubah.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm">Ubah</a>
											<a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin menghapus Galeri ini??')">Hapus</a>
										</td>
									</tr>
								<?php endwhile; ?>
						    </tbody>
						</table>
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