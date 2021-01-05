
<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$no_barang           = mysqli_real_escape_string($db, trim($_POST['no_barang']));
	$nama_sparepart          = mysqli_real_escape_string($db, trim($_POST['nama_sparepart']));

	$tanggal       = $_POST['tanggal_masuk_barang'];
	$tgl           = explode('-',$tanggal);
	$tanggal_masuk_barang = $tgl[2]."-".$tgl[1]."-".$tgl[0];

	$ketersediaan_barang = $_POST['ketersediaan_barang'];
	$kondisi         = $_POST['kondisi'];


	// perintah query untuk menyimpan data ke tabel spare
	$query = mysqli_query($db, "INSERT INTO spare(no_barang,
													 nama_sparepart,
													 tanggal_masuk_barang,
													 ketersediaan_barang,
													 kondisi)	
											  VALUES('$no_barang',
													 '$nama_sparepart',
													 '$tanggal_masuk_barang',
													 '$ketersediaan_barang',
													 '$kondisi')");		

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: index.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}	
}					
?>