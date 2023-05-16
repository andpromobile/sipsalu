<?php 

require_once '../../koneksi.php';
$judul = mysqli_real_escape_string($koneksi, isset($_POST['judul']) ? $_POST['judul'] : '');
$tanggal = date('Ymd');

// persiapan upload foto

if($_FILES['foto']['error'] == 0){
	$ekstensi = $_FILES['foto']['name'];
	$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

	$nama_foto = $tanggal . '-';
	$nama_foto = $nama_foto . strtolower($judul);
	$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;

	$asal = $_FILES['foto']['tmp_name'];
} else {
	// hapus foto sebelumnya
	$query_struktur = mysqli_query($koneksi, "SELECT foto FROM tbl_struktur_organisasi WHERE id = 1");
	$row = mysqli_fetch_assoc($query_struktur);
	

	$nama_foto = $row['foto'];
}

$tujuan = '../../images/struktur/';
		
if($_FILES['foto']['error'] == 0){
	if($_FILES['foto']['size'] < 5000000){
		if (file_exists('../../images/struktur/' . $nama_foto)) unlink('../../images/struktur/' . $nama_foto . '.' . $ekstensi);
		if(file_exists('../../images/struktur/' . $row['foto'])) unlink('../../images/struktur/' . $row['foto']);
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');

		// ubah data
		$query = mysqli_query($koneksi, "UPDATE tbl_struktur_organisasi SET judul = '$judul', foto = '$nama_foto' WHERE id = 1") or die(mysqli_error($koneksi));
		if($query){
			$_SESSION['sukses'] = 'Struktur Organisasi Berhasil Diubah!';
			header('Location: struktur.php');
		} else {
			$_SESSION['gagal'] = 'Struktur Organisasi Gagal Diubah!';
			header('Location: struktur.php');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 5Mb!';
		header('Location: index.php');
	}
} else {
	$query = mysqli_query($koneksi, "UPDATE tbl_struktur_organisasi SET judul = '$judul', foto = '$nama_foto' WHERE id = 1") or die(mysqli_error($koneksi));

	if($query){
			$_SESSION['sukses'] = 'Struktur Organisasi Berhasil Diubah!';
			header('Location: struktur.php');
		} else {
			$_SESSION['gagal'] = 'Struktur Organisasi Gagal Diubah!';
			header('Location: struktur.php');
		}
}