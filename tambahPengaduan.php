<?php
require 'functions.php';
if (isset($_POST["submit"])) {
    if(tambahPengaduan($_POST) > 0){
        echo "<script>
            alert('Data Berhasil di Tambahkan');
            document.location.href = 'Pengaduan.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal di Tambahkan');
            document.location.href = 'Pengaduan.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA PENGADUAN</title>
    <link rel="stylesheet" type="text/css" href="cssPengaduan.css">
</head>
<body>
<h1 style="text-align: center;">TAMBAH DATA PENGADUAN</h1>
<center>
<div class="form-container">
      <form class="form" action="" method="POST" enctype="multipart/form-data">
<a href="Pengaduan.php">Kembali</a><br>
    </br>
        <div class="form-group">
          <label for="id_pengaduan"></label>
          <input type="text" id="id_pengaduan" name="id_pengaduan" required="" placeholder="Masukkan id_pengaduan">
        </div>
        <br>
        <div class="form-group">
          <label for="tgl_pengaduan"></label>
          <input type="text" id="tgl_pengaduan" name="tgl_pengaduan" required="" placeholder="Masukkan tgl_pengaduan">
        </div>
        <br>

        <div class="form-group">
          <label for="nik"></label>
          <input type="text" id="nik" name="nik" required="" placeholder="Masukkan nik">
        </div>
        <br>

        <div class="form-group">
          <label for="isi_laporan"></label>
          <input type="text" id="isi_laporan" name="isi_laporan" required="" placeholder="Masukkan isi_laporan">
        </div>
        <br>

        <div class="form-group">
          <label for="status"></label>
          <input type="text" id="status" name="status" required="" placeholder="Masukkan status">
        </div>
        <br>
			<input type="file" name="foto" id_pengaduan="foto" required >
		<br>
		<form>
      <br></br>
        <button class="form-submit-btn" name="submit" type="submit">Tambah</button>

     	</form>

		</label>


        
    </div>
</body>
</html>