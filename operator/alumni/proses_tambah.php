<?php 

if(!isset($_POST['tambah'])) header('Location: tambah.php');

require_once '../../koneksi.php';
$nama_alumni = mysqli_escape_string($koneksi, $_POST['nama_alumni']);
$angkatan = mysqli_escape_string($koneksi, $_POST['angkatan']);
$pekerjaan = mysqli_escape_string($koneksi, $_POST['pekerjaan']);
$id_jurusan = mysqli_escape_string($koneksi, $_POST['id_jurusan']);
$isi = mysqli_escape_string($koneksi, $_POST['isi']);

// persiapan upload foto
$ekstensi = $_FILES['foto']['name'];
$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

$nama_foto = strtolower($nama_alumni);
$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;

$asal = $_FILES['foto']['tmp_name'];
$tujuan = '../../images/alumni/';

if($_FILES['foto']['error'] == 0){
	if($_FILES['foto']['size'] < 1000000){
		if (file_exists($tujuan . $nama_foto)) unlink($tujuan . $nama_foto);

		$query = mysqli_query($koneksi, "INSERT INTO tbl_alumni (nama_alumni, angkatan, pekerjaan, isi, foto, id_jurusan) VALUES('$nama_alumni', '$angkatan', '$pekerjaan', '$isi', '$nama_foto', '$id_jurusan')") or die(mysqli_error($koneksi));
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');
		if($query){
			$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
			header('Location: index.php');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 1Mb!';
		header('Location: index.php');
	}
}
