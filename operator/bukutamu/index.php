<?php 
require_once '../../koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_bukutamu");
$no = 1;
$active = 'bukutamu';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Bukutamu - SMKN 1 Luwu Utara</title>
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
								Daftar Bukutamu
							</div>
						</div>
					</div>
					<div class="card-body">
                        <table id="table_id" class="dataTable table table-bordered">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th>Nama</th>
                                    <th>Telepon</th>
						            <th>Email</th>
                                    <th>Subjek</th>
						            <th>Kesan/Pesan</th>
									<th>Tanggal</th>
						        </tr>
						    </thead>
						    <tbody>
						        <?php while($row = mysqli_fetch_assoc($query)) : ?>
						        	<tr>
						        		<td><?= $no++ ?></td>
						        		<td><?= $row['nama'] ?></td>
                                        <td><?= $row['telepon'] ?></td>
						        		<td><?= $row['email'] ?></td>
						        		<td><?= $row['subjek'] ?></td>
                                        <td><?= $row['isi'] ?></td>
										<td><?= $row['tanggal'] ?></td>
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