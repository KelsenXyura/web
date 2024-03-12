<?php 

    session_start();

    require 'functions.php';

    if(isset($_POST["submit"])){
        $nik = $_POST["nik"];
        $nama = $_POST["nama"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $telp = $_POST["telp"];

        $query = "SELECT * FROM masyarakat WHERE username = '$username'";

        $result = mysqli_query($conn, $query);

        if(mysqli_fetch_assoc($result)){
            echo "
                    <script>
                    alert('username telah digunakan');
                    </script>
                ";

            return false;
        }

        $query = "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp')";
        mysqli_query($conn, $query);

        echo " <script>
                    alert('Register telah berhasil dibuat');
                    document.location.href = 'login.php';
                    </script>";
    }

 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style12.css">
    <title>Halaman - Register</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label>nik</label>
                <input type="text" name="nik" placeholder="Enter nik" required>
            </li>
            <br>

            <li>
                <label>nama</label>
                <input type="text" name="nama" placeholder="Enter nama" required>
            </li>
            <br>

            <li>
                <label>username</label>
                <input type="text" name="username" placeholder="Enter username" required>
            </li>
            <br>

            <li>
                <label>password</label>
                <input type="text" name="password" placeholder="Enter password" required>
            </li>
            <br>

            <li>
                <label>telp</label>
                <input type="text" name="telp" placeholder="Enter telp" required>
            </li>
            <br>
        </ul>

        <button type="submit" name="submit">Kirim</button>
    </form>

</body>
</html>