<?php 

if(!isset($_POST['tambah'])) header('Location: tambah.php');


require_once '../../koneksi.php';
$judul = mysqli_real_escape_string($koneksi, isset($_POST['judul']) ? $_POST['judul'] : '');
// $id_kategori = mysqli_real_escape_string($koneksi, isset($_POST['id_kategori']) ? $_POST['id_kategori'] : '');
$isi = mysqli_real_escape_string($koneksi, isset($_POST['isi']) ? $_POST['isi'] : '');
$tanggal = date('Ymd');

// persiapan upload foto
$ekstensi = $_FILES['foto']['name'];
$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

$nama_foto = $tanggal . '-';
$nama_foto = $nama_foto . strtolower($judul);
$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;


$asal = $_FILES['foto']['tmp_name'];
$tujuan = '../../images/galeri/';

if($_FILES['foto']['error'] == 0){
	if($_FILES['foto']['size'] < 5000000){
		if (file_exists('../../images/galeri/' . $nama_foto)) unlink('../../images/galeri/' . $nama_foto);

		$query = mysqli_query($koneksi, "INSERT INTO tbl_galeri (judul, isi, tanggal, foto, id_kategori) VALUES('$judul', '$isi', '$tanggal', '$nama_foto', 2)") or die(mysqli_error($koneksi));
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');
		if($query){
			$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
			header('Location: index.php');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 5Mb!';
		header('Location: index.php');
	}
}