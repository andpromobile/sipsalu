<?php 

require_once '../../koneksi.php';

$visi = mysqli_real_escape_string($koneksi, isset($_POST['visi']) ? $_POST['visi'] : '');
$misi = mysqli_real_escape_string($koneksi, isset($_POST['misi']) ? $_POST['misi'] : '');
$query = mysqli_query($koneksi, "UPDATE tbl_visi_misi SET visi = '$visi', misi = '$misi' WHERE id = 1");

if($query){
	$_SESSION['sukses'] = 'Visi Misi Berhasil Diubah!';
	header('Location: visi_misi.php');
} else {
	$_SESSION['gagal'] = 'Visi Misi Gagal Diubah!';
	header('Location: visi_misi.php');
}