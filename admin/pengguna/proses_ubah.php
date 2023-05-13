<?php 

if(!isset($_POST['ubah'])) header('Location: ubah.php');


require_once '../../koneksi.php';
$nama = mysqli_real_escape_string($koneksi, isset($_POST['nama']) ? $_POST['nama'] : '');
$username = mysqli_real_escape_string($koneksi, isset($_POST['username']) ? $_POST['username'] : '');
$level = mysqli_real_escape_string($koneksi, isset($_POST['level']) ? $_POST['level'] : '');

$id = $_GET['id'];

		// ubah data
		$query = mysqli_query($koneksi, "UPDATE tbl_pengguna SET nama = '$nama', username = '$username', level = '$level' WHERE id = $id") ;
		if($query == true){
			$_SESSION['sukses'] = 'Data Berhasil Diubah!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Diubah, username sudah terdaftar!';
			header('Location: index.php');
		}