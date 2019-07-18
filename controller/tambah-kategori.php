<?php 
	include_once 'query.php';

	tambah_produk($_POST["id_kategori"], $_POST["nama_kategori"]);

	header("Location:../view/tambah-kategori.php");
 ?>