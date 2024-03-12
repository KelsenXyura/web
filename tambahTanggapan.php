<?php
require 'functions.php';
if (isset($_POST["submit"])) {
    if(tambahTanggapan($_POST) > 0){
        echo "<script>
            alert('Data Berhasil di Tambahkan');
            document.location.href = 'Tanggapan.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal di Tambahkan');
            document.location.href = 'Tanggapan.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA TANGGAPAN</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<h1 style="text-align: center;">TAMBAH DATA TANGGAPAN</h1>
<center>
<div class="form-container">
      <form class="form" action="" method="POST" enctype="multipart/form-data">
<a href="Tanggapan.php">Kembali</a><br>
    </br>
        <div class="form-group">
          <label for="id_tanggapan"></label>
          <input type="text" id="id_tanggapan" name="id_tanggapan" required="" placeholder="Masukkan id_tanggapan">
        </div>
        <br>
        <div class="form-group">
          <label for="id_pengaduan"></label>
          <input type="text" id="id_pengaduan" name="id_pengaduan" required="" placeholder="Masukkan id_pengaduan">
        </div>
        <br>

        <div class="form-group">
          <label for="tgl_tanggapan"></label>
          <input type="text" id="tgl_tanggapan" name="tgl_tanggapan" required="" placeholder="Masukkan tgl_tanggapan">
        </div>
        <br>

        <div class="form-group">
          <label for="tanggapan"></label>
          <input type="text" id="tanggapan" name="tanggapan" required="" placeholder="Masukkan tanggapan">
        </div>
        <br>

        <div class="form-group">
          <label for="id_petugas"></label>
          <input type="text" id="id_petugas" name="id_petugas" required="" placeholder="Masukkan id_petugas">
     
        </div>

		<form>
        <button class="form-submit-btn" name="submit" type="submit">Tambah</button>

     	</form>

		</label>


        
    </div>
</body>
</html>