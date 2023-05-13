<?php 

if(!isset($_POST['tambah'])) header('Location: tambah.php');

require_once '../../koneksi.php';
$nama_jurusan = mysqli_real_escape_string($koneksi, isset($_POST['nama_jurusan']) ? $_POST['nama_jurusan'] : '');
$isi = mysqli_real_escape_string($koneksi, isset($_POST['isi']) ? $_POST['isi'] : '');

$query = mysqli_query($koneksi, "INSERT INTO tbl_jurusan (nama_jurusan, isi) VALUES ('$nama_jurusan', '$isi')");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
	header('Location: index.php');
}