<?php 
	include_once 'query.php';

	tambah_produk($_POST["id_merk"], $_POST["nama_merk"]);

	header("Location:../view/tambah-merk.php");
 ?>