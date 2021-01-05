<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

	$no_barang = $_GET['id'];
	
	// perintah query untuk menghapus data pada tabel spare
	$query = mysqli_query($db, "DELETE FROM spare WHERE no_barang='$no_barang'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: index.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}	
}							
?>