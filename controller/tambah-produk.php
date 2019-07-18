<?php 
	include_once 'query.php';

	tambah_produk($_POST["id_produk"], $_POST["nama_produk"], $_POST["warna"], 
		$_POST["jumlah"], $_POST["harga"], $_POST["id_merk"], $_POST["id_kategori"]);

	header("Location:../view/tambah-produk.php");
 ?>