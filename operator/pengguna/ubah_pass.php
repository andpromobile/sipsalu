<?php 

require_once '../../koneksi.php';

    $username = $_SESSION['username'];
    $id = $_SESSION['id'];

    if (count($_POST) > 0) {
    $result = mysqli_query($koneksi, "SELECT * from tbl_pengguna WHERE id='$id'");
    $row = mysqli_fetch_array($result);

    $hashedPassword = $row["password"];
    $password = PASSWORD_HASH($_POST["newPassword"], PASSWORD_DEFAULT);

    if (password_verify($_POST["currentPassword"], $hashedPassword)) {
    	mysqli_query($koneksi, "UPDATE tbl_pengguna set password='$password' WHERE id='$id'");
    	echo "<script>alert('Password Berhasil Diubah');history.go(-1);</script>";
    } else {
    	echo "<script>alert('Password Lama tidak cocok !');history.go(-1);</script>";
    }
}

$active = 'pengguna'; ?>
<!DOCTYPE html>
<html>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
    currentPassword.focus();
    document.getElementById("currentPassword").innerHTML = "required";
    output = false;
}
else if(!newPassword.value) {
    newPassword.focus();
    document.getElementById("newPassword").innerHTML = "required";
    output = false;
}
else if(!confirmPassword.value) {
    confirmPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "required";
    output = false;
}
if(newPassword.value != confirmPassword.value) {
    newPassword.value="";
    confirmPassword.value="";
    newPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "not same";
    output = false;
}   
return output;
}
</script>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubah Password - SMKN 1 Luwu Utara</title>
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
								Ubah Password
							</div>
						</div>
					</div>
					<div class="card-body">
						<form name="frmChange" method="POST" action="" onSubmit="return validatePassword()" class="form-horizontal"  role="form">
							<div class="form-group">
								<label for="nama">Username</label>
								<input type="text" class="form-control" id="username" name="username" value="<?=$username?>" readonly>
							</div>
							
							<div class="form-group">
								<label for="password">Password Lama</label>
									<input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
							</div>
							
							<div class="form-group">
								<label for="password">Password Baru</label>
								<input type="password" class="form-control" id="newPassword" name="newPassword" required>
							</div>

							<div class="form-group">
								<label for="password">Konfirmasi Password Baru</label>
								<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
							</div>  

							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="submit">Ubah</button>
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
</body>
</html>