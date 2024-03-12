<?php 
     
     require 'functions.php';

     $id_petugas = $_GET['id_petugas'];

     $id_petugas = query("SELECT * FROM petugas WHERE  id_petugas = $id_petugas")[0];

     if(isset($_POST["submit"] ) ){

        if (ubahPetugas ($_POST) > 0 ){
            echo "
            <script>
            alert('Data berhasil di ubah');
            document.location.href='Petugas.php';
            </script>
            ";
            }else {
                echo "
                <script>
                
                alert('data gagal di ubah');
                document.location.href='Petugas.php'
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
    <title>TAMBAH DATA Petugas</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<h1 style="text-align: center;">Ubah Data Petugas</h1>
<form action="" method="post" enctype="multipart/form-data">
<center>
<div class="form-container">
      <form class="form" action="" method="POST" enctype="multipart/from-data">
<a href="Petugas.php">Kembali</a><br>
    </br>
        <div class="form-group">
          <label for="id_petugas"></label>
          <input type="text" id="id_petugas" name="id_petugas" required value="<?php echo $id_petugas["id_petugas"]; ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="nama_petugas"></label>
          <input type="text" id="nama_petugas" name="nama_petugas" required value="<?php echo $id_petugas["nama_petugas"]; ?>">
        <br>

        <div class="form-group">
          <label for="username"></label>
          <input type="text" id="username" name="username" required value="<?php echo $id_petugas["username"]; ?>">
        </div>
        <br>

        <div class="form-group">
          <label for="password"></label>
          <input type="text" id="password" name="password" required value="<?php echo $id_petugas["password"]; ?>">
        </div>
        <br>

        <div class="form-group">
          <label for="telp"></label>
          <input type="text" id="telp" name="telp" required value="<?php echo $id_petugas["telp"]; ?>">
     
        </div>
      
    
        <button class="form-submit-btn" name="submit" type="submit">Ubah Data Petugas</button>

        </form>
    
        </label>


        
    </div>
</body>
</html>