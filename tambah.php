<?php
require 'functions.php';
if (isset($_POST["submit"])) {
    if(tambah($_POST) > 0){
        echo "<script>
            alert('Data Berhasil di Tambahkan');
            document.location.href = 'Masyarakat1.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal di Tambahkan');
            document.location.href = 'Masyarakat1.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA MASYARAKAT</title>
    <link rel="stylesheet" type="text/css" href="css.css">

</head>
<body>
<h1 style="text-align: center;">TAMBAH DATA MASYARAKAT</h1>
<center>
<div class="form-container">
      <form class="form" action="" method="POST" enctype="multipart/form-data">
      <a href="Masyarakat1.php">Kembali</a><br>
    </br>
        <div class="form-group">
          <label for="nik"></label>
          <input type="text" id="nik" name="nik" required="" placeholder="Masukkan nik">
        </div>
        <br>
        <div class="form-group">
          <label for="nama"></label>
          <input type="text" id="nama" name="nama" required="" placeholder="Masukkan nama">
        </div>
        <br>

        <div class="form-group">
          <label for="username"></label>
          <input type="text" id="username" name="username" required="" placeholder="Masukkan username">
        </div>
        <br>

        <div class="form-group">
          <label for="password"></label>
          <input type="text" id="password" name="password" required="" placeholder="Masukkan password">
        </div>
        <br>

        <div class="form-group">
          <label for="telp"></label>
          <input type="text" id="telp" name="telp" required="" placeholder="Masukkan telp">
        </div>
<br></br>
		<form>
        <button class="form-submit-btn" name="submit" type="submit">Tambah</button>

     	</form>

		</label>


        
    </div>
</body>
</html>