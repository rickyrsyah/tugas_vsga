<?php 
	function tambah_produk($id_produk, $nama_produk, $warna, $jumlah, $harga, $id_merk, $id_kategori)
	{
		require 'koneksi.php';

		$sql = "INSERT INTO produk (id_produk, nama_produk, warna, jumlah, harga, id_merk, id_kategori)
		VALUES ('$id_produk', '$nama_produk', '$warna', '$jumlah', '$harga', '$id_merk', '$id_kategori')";

		if(!mysqli_query($conn, $sql)) {
			echo mysqli_error($conn);
		}

		// close connection
		$conn->close();

	}

	function tambah_kategori($id_kategori, $nama_kategori)
	{
		require 'koneksi.php';

		$sql = "INSERT INTO kategori (id_kategori, nama_kategori)
		VALUES ($id_kategori', '$nama_kategori')";

		if(!mysqli_query($conn, $sql)) {
			echo mysqli_error($conn);
		}

		// close connection
		$conn->close();

	}

	function tambah_merk($id_merk, $nama_merk)
	{
		require 'koneksi.php';

		$sql = "INSERT INTO merk (id_merk, nama_merk)
		VALUES ($id_merk', '$nama_merk')";

		if(!mysqli_query($conn, $sql)) {
			echo mysqli_error($conn);
		}

		// close connection
		$conn->close();

	}

	function tambah_pelanggan($nama_pelanggan, $alamat, $jenis_kelamin, $username, $password)
	{
		require 'koneksi.php';

		$md5pwd = md5($password);

		$sql = "INSERT INTO produk (nama_pelanggan, alamat, jenis_kelamin, username, password)
		VALUES ('$nama_pelanggan', '$alamat', '$jenis_kelamin', '$username', '$md5pwd')";

		if(!mysqli_query($conn, $sql)) {
			echo mysqli_error($conn);
		}

		// close connection
		$conn->close();

	}

	function data_semua_produk()
	{
		require 'koneksi.php';

		$sql = "SELECT id_produk, nama_produk, jumlah, id_merk, id_kategori FROM produk ORDER BY id_produk";

		$result = mysqli_query($conn, $sql);

		$saved =  mysqli_fetch_all($result);

		// close connection
		$conn->close();

		return $saved;
	}

	function data_semua_transaksi()
	{
		require 'koneksi.php';

		$sql = "SELECT tanggal_transaksi, nama_pelanggan, nama_produk, nama_merk, harga FROM transaksi ORDER BY tanggal_transaksi
		INNER JOIN pelanggan ON pelanggan.id_pelanggan = transaksi.id_pelanggan
		INNER JOIN produk ON produk.id_produk = transaksi.id_produk";

		$result = mysqli_query($conn, $sql);

		$saved =  mysqli_fetch_all($result);

		// close connection
		$conn->close();

		return $saved;
	}
 ?>