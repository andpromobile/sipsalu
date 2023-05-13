<?php 

if(!isset($_POST['tambah'])) header('Location: tambah.php');

require_once '../../koneksi.php';
$nama = mysqli_escape_string($koneksi, $_POST['nama']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $_POST['password']);
$level = mysqli_escape_string($koneksi, $_POST['level']);

// encrypt password
$password = password_hash($password, PASSWORD_DEFAULT);


$query = mysqli_query($koneksi, "INSERT INTO tbl_pengguna (nama, username, password, level) VALUES('$nama', '$username', '$password', '$level')");
if($query == true){
	$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Username sudah terdaftar!';
	header('Location: index.php');
}
