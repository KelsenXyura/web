<?php 
     
     require 'functions.php';

     $id_tanggapan = $_GET['id_tanggapan'];

     $id_tanggapan = query("SELECT * FROM tanggapan WHERE  id_tanggapan = $id_tanggapan")[0];

     if(isset($_POST["submit"] ) ){

        if (ubahTanggapan ($_POST) > 0 ){
            echo "
            <script>
            alert('Data berhasil di ubah');
            document.location.href='Tanggapan.php';
            </script>
            ";
            }else {
                echo "
                <script>
                
                alert('data gagal di ubah');
                document.location.href='Tanggapan.php'
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
    <title>TAMBAH DATA Tanggapan</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<h1 style="text-align: center;">Ubah Data Tanggapan</h1>
<form action="" method="post" enctype="multipart/form-data">
<center>
<div class="form-container">
      <form class="form" action="" method="POST" enctype="multipart/from-data">
<a href="Tanggapan.php">Kembali</a><br>
    </br>
        <div class="form-group">
          <label for="id_tanggapan"></label>
          <input type="text" id="id_tanggapan" name="id_tanggapan" required value="<?php echo $id_tanggapan["id_tanggapan"]; ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="id_pengaduan"></label>
          <input type="text" id="id_pengaduan" name="id_pengaduan" required value="<?php echo $id_tanggapan["id_pengaduan"]; ?>">
        <br>

        <div class="form-group">
          <label for="tgl_tanggapan"></label>
          <input type="text" id="tgl_tanggapan" name="tgl_tanggapan" required value="<?php echo $id_tanggapan["tgl_tanggapan"]; ?>">
        </div>
        <br>

        <div class="form-group">
          <label for="tanggapan"></label>
          <input type="text" id="tanggapan" name="tanggapan" required value="<?php echo $id_tanggapan["tanggapan"]; ?>">
        </div>
        <br>

        <div class="form-group">
          <label for="id_petugas"></label>
          <input type="text" id="id_petugas" name="id_petugas" required value="<?php echo $id_tanggapan["id_petugas"]; ?>">
     
        </div>
      
    
        <button class="form-submit-btn" name="submit" type="submit">Ubah Data Tanggapan</button>

        </form>
    
        </label>


        
    </div>
</body>
</html>