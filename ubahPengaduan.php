<?php 
     
     require 'functions.php';

     $id_pengaduan = $_GET['id_pengaduan'];

     $id_pengaduan = query("SELECT * FROM pengaduan WHERE  id_pengaduan = $id_pengaduan")[0];

     if(isset($_POST["submit"] ) ){

        if (ubahPengaduan($_POST) > 0 ){
            echo "
            <script>
            alert('Data berhasil di ubah');
            document.location.href='Pengaduan.php';
            </script>
            ";
            }else {
                echo "
                <script>
                
                alert('data gagal di ubah');
                document.location.href='Pengaduan.php'
                </scrit>

            ";
        }
    }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA Pengaduan</title>
    <link rel="stylesheet" type="text/css" href="cssPengaduan.css">
</head>
<body>
<h1 style="text-align: center;">Ubah Data Pengaduan</h1>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="fotolama" value="<?php echo $id_pengaduan["foto"]; ?>">
<center>
<div class="form-container">
      <form class="form" action="" method="POST" enctype="multipart/from-data">
<a href="Pengaduan.php">Kembali</a><br>
    </br>
        <div class="form-group">
          <label for="id_pengaduan"></label>
          <input type="text" id="id_pengaduan" name="id_pengaduan" required value="<?php echo $id_pengaduan["id_pengaduan"]; ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="tgl_pengaduan"></label>
          <input type="text" id="tgl_pengaduan" name="tgl_pengaduan" required value="<?php echo $id_pengaduan["tgl_pengaduan"]; ?>">
        <br>

        <div class="form-group">
          <label for="nik"></label>
          <input type="text" id="nik" name="nik" required value="<?php echo $id_pengaduan["nik"]; ?>">
        </div>
        <br>

        <div class="form-group">
          <label for="isi_laporan"></label>
          <input type="text" id="isi_laporan" name="isi_laporan" required value="<?php echo $id_pengaduan["isi_laporan"]; ?>">
        </div>
        <br>

        <div class="form-group">
          <label for="status"></label>
          <input type="text" id="status" name="status" required value="<?php echo $id_pengaduan["status"]; ?>">
     
        </div>
        <br>
           <label for="foto">foto :</label>
            <img src="img/<?php echo $id_pengaduan["foto"]; ?>" width="90px"><br>
            <input type="file" name="foto" id_pengaduan="foto" >
        <br>
        <form>
            <br>
        <button class="form-submit-btn" name="submit" type="submit">Ubah Data Pengaduan</button>

        </form>
    
        </label>


        
    </div>
</body>
</html>