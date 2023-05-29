<?php 

require_once ('./koneksi.php');

if(!isset($_POST['kirim'])) header('Location: bukutamu.php');

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$telepon = mysqli_real_escape_string($koneksi, $_POST['telepon']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$subjek = mysqli_real_escape_string($koneksi, $_POST['subjek']);
$isi = mysqli_real_escape_string($koneksi, $_POST['isi']);
$tanggal = date('Ymd');

$query = mysqli_query($koneksi, "INSERT INTO tbl_bukutamu (nama, telepon, email, subjek, isi, tanggal) VALUES ('$nama', '$telepon', '$email', '$subjek', '$isi', '$tanggal')");

if($query){
	?>
		<script>
			alert('Kesan/Pesan Anda telah terkirim!')
			document.location.href = 'kontak.php';
		</script>
	<?php
} else {
	?>
		<script>
			alert('Pesan Gagal Terkirim!')
			document.location.href = 'kontak.php';
		</script>
	<?php
}