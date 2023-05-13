<?php 
// if(!session_id()) session_start();

// if(!isset($_SESSION['auth_admin'])) header('Location: ./');
if(!session_id()) session_start();

if(!isset($_SESSION['auth_admin'])) 
	echo "<script>alert('Anda harus login terlebih dahulu!');window.location='../login.php'</script>";

$active = 'dashboard';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Admin - SMKN 1 Luwu Utara</title>
	<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
</head>
<body>
	<?php require_once 'navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">Website SMKN 1 Luwu Utara</div>
					<div class="card-body">
						Halo <?php echo $_SESSION['nama']; ?>, Selamat Datang di Halaman Operator !
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../resources/js/jquery.js"></script>
	<script src="../resources/js/bootstrap.min.js"></script>
</body>
</html>