<?php 
     
     require 'functions.php';

     $nik = $_GET['nik'];

     $nik = query("SELECT * FROM masyarakat WHERE  nik = $nik")[0];

     if(isset($_POST["submit"] ) ){

        if (ubah ($_POST) > 0 ){
            echo "
            <script>
            alert('Data berhasil di ubah');
            document.location.href='Masyarakat1.php';
            </script>
            ";
            }else {
                echo "
                <script>
                
                alert('data gagal di ubah');
                document.location.href='Masyarakat1.php'
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
    <title>TAMBAH DATA masyarakat</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<h1 style="text-align: center;">Ubah Data masyarakat</h1>
<form action="" method="post" enctype="multipart/form-data">
<center>
<div class="form-container">
      <form class="form" action="" method="POST" enctype="multipart/from-data">
<a href="Masyarakat1.php">Kembali</a><br>
    </br>
        <div class="form-group">
          <label for="nik"></label>
          <input type="text" id="nik" name="nik" required value="<?php echo $nik["nik"]; ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="nama"></label>
          <input type="text" id="nama" name="nama" required value="<?php echo $nik["nama"]; ?>">
        <br>

        <div class="form-group">
          <label for="username"></label>
          <input type="text" id="username" name="username" required value="<?php echo $nik["username"]; ?>">
        </div>
        <br>

        <div class="form-group">
          <label for="password"></label>
          <input type="text" id="password" name="password" required value="<?php echo $nik["password"]; ?>">
        </div>
        <br>

        <div class="form-group">
          <label for="telp"></label>
          <input type="text" id="telp" name="telp" required value="<?php echo $nik["telp"]; ?>">
     
        </div>
      
    
        <button class="form-submit-btn" name="submit" type="submit">Ubah Data Masyarakat</button>

        </form>
    
        </label>


        
    </div>
</body>
</html>