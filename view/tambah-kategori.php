<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Latihan Pertemuan ke-11</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script src="../assets/js/jquery.slim.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
      <img src="../assets/img/logo.png" height="64px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Entri Data
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../view/tambah-produk.php">Tambah Produk</a>
            <a class="dropdown-item" href="../view/tambah-kategori.php">Tambah Kategori</a>
            <a class="dropdown-item" href="../view/tambah-merk.php">Tambah Merk</a>
          </div>
        </li>
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  View Data
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../view/view-data-produk.php">Data Produk</a>
                  <a class="dropdown-item" href="../view/view-data-transaksi.php">Data Transaksi</a>
                </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</div>
		<!--   start content -->
		    	<div>
  		<h1><center>Kategori Produk</center></h1>
  		    <div class="container">
     	 <form style="padding-top:40px;"action="controller/koneksioutput.php" method="POST" class="form-horizontal">
            <div class="form-group row">
            	<label for="exampleFormControlTextarea1" class="col-2">ID Kategori</label>
            	<input type="text" class="form-control col-5" name="idkategori" placeholder="idkategori">
            </div>
            <div class="form-group row">
            	<label for="exampleFormControlTextarea1" class="col-2">Nama Kategori</label>
            	<input type="text" class="form-control col-5" name="namakategori" placeholder="namakategori">
            </div>
            	<p></p>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          	</div>
  		</div>
</body>
</html>