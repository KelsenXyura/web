<?php
require 'functions.php';
if (isset($_POST["submit"])) {
    if(tambahPetugas($_POST) > 0){
        echo "<script>
            alert('Data Berhasil di Tambahkan');
            document.location.href = 'Petugas.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal di Tambahkan');
            document.location.href = 'Petugas.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA PETUGAS</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<h1 style="text-align: center;">TAMBAH DATA PETUGAS</h1>
<center>
<div class="form-container">
      <form class="form" action="" method="POST" enctype="multipart/form-data">
<a href="Petugas.php">Kembali</a><br>
    </br>
        <div class="form-group">
          <label for="id_petugas"></label>
          <input type="text" id="id_petugas" name="id_petugas" required="" placeholder="Masukkan id_petugas">
        </div>
        <br>
        <div class="form-group">
          <label for="nama_petugas"></label>
          <input type="text" id="nama_petugas" name="nama_petugas" required="" placeholder="Masukkan nama_petugas">
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
      <div class="form-group">
          <label for="level"></label>
          <input type="text" id="level" name="level" required="" placeholder="Masukkan level">
        </div>

<br></br>

		<form>
        <button class="form-submit-btn" name="submit" type="submit">Tambah</button>

     	</form>

		</label>


        
    </div>
</body>
</html>