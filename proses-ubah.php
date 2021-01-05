<!-- Aplikasi CRUD
 ************************************************
 * Developer    : Indra Styawantoro
 * Company      : Indra Studio
 * Release Date : 1 Maret 2016
 * Website      : http://www.indrasatya.com, http://www.kulikoding.net
 * E-mail       : indra.setyawantoro@gmail.com
 * Phone        : +62-856-6991-9769
 * BBM          : 7679B9D9
 -->
 
 <?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['no_barang'])) {
		$no_barang           = mysqli_real_escape_string($db, trim($_POST['no_barang']));
		$nama_sparepart          = mysqli_real_escape_string($db, trim($_POST['nama_sparepart']));

		$tanggal       = $_POST['tanggal_masuk_barang'];
		$tgl           = explode('-',$tanggal);
		$tanggal_masuk_barang = $tgl[2]."-".$tgl[1]."-".$tgl[0];

		$ketersediaan_barang = $_POST['ketersediaan_barang'];
		$kondisi         = $_POST['kondisi'];
	

		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($db, "UPDATE is_siswa SET nama_sparepart 			= '$nama_sparepart',
														tanggal_masuk_barang 	= '$tanggal_masuk_barang',
														ketersediaan_barang 	= '$ketersediaan_barang',
														kondisi 			= '$kondisi'
													
												  WHERE no_barang 			= '$no_barang'");		

		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: index.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: index.php?alert=1');
		}	
	}
}					
?>