<?php 

require_once '../../koneksi.php';

$sejarah = mysqli_real_escape_string($koneksi, isset($_POST['sejarah']) ? $_POST['sejarah'] : '');
$query = mysqli_query($koneksi, "UPDATE tbl_sejarah_singkat SET sejarah_singkat = '$sejarah' WHERE id = 1");

if($query){
	$_SESSION['sukses'] = 'Sejarah Sekolah Berhasil Diubah!';
	header('Location: sejarah_singkat.php');
} else {
	$_SESSION['gagal'] = 'Sejarah Sekolah Gagal Diubah!';
	header('Location: sejarah_singkat.php');
}