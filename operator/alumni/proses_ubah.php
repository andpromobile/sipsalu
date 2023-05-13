<?php 

if(!isset($_POST['ubah'])) header('Location: ubah.php');


require_once '../../koneksi.php';
$nama_alumni = mysqli_real_escape_string($koneksi, isset($_POST['nama_alumni']) ? $_POST['nama_alumni'] : '');
$angkatan = mysqli_real_escape_string($koneksi, isset($_POST['angkatan']) ? $_POST['angkatan'] : '');
$id_jurusan = mysqli_real_escape_string($koneksi, isset($_POST['id_jurusan']) ? $_POST['id_jurusan'] : '');
$isi = mysqli_real_escape_string($koneksi, isset($_POST['isi']) ? $_POST['isi'] : '');
$id = $_GET['id'];

// persiapan upload foto

if($_FILES['foto']['error'] == 0){
	$ekstensi = $_FILES['foto']['name'];
	$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

	$nama_foto = strtolower($nama_alumni);
	$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;

	$asal = $_FILES['foto']['tmp_name'];
} else {
	// hapus foto sebelumnya
	$query_alumni = mysqli_query($koneksi, "SELECT foto FROM tbl_alumni WHERE id = $id");
	$row = mysqli_fetch_assoc($query_alumni);
	
	$nama_foto = $row['foto'];
}

$tujuan = '../../images/alumni/';
		
if($_FILES['foto']['error'] == 0){
	if($_FILES['foto']['size'] < 1000000){
		if (file_exists('../../images/alumni/' . $nama_foto)) unlink('../../images/alumni/' . $nama_foto);
		if(file_exists('../../images/alumni/' . $nama_foto)) unlink('../../images/alumni/' . $nama_foto);
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');

		// ubah data
		$query = mysqli_query($koneksi, "UPDATE tbl_alumni SET nama_alumni = '$nama_alumni', angkatan = $angkatan, isi = '$isi', foto = '$nama_foto', id_jurusan = $id_jurusan WHERE id = $id") or die(mysqli_error($koneksi));
		if($query){
			$_SESSION['sukses'] = 'Data Berhasil Diubah!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Diubah!';
			header('Location: index.php');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 1000kb!';
		header('Location: index.php');
	}
} else {
	$query = mysqli_query($koneksi, "UPDATE tbl_alumni SET nama_alumni = '$nama_alumni', angkatan = $angkatan, isi = '$isi', foto = '$nama_foto', id_jurusan = $id_jurusan WHERE id = $id") or die(mysqli_error($koneksi));

	if($query){
			$_SESSION['sukses'] = 'Data Berhasil Diubah!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Diubah!';
			header('Location: index.php');
		}
}