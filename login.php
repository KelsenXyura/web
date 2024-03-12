<?php
    session_start();

    require 'functions.php';

    if(isset($_SESSION["login"])){
        header("Location: index.php");
        exit;
    }

    if(isset($_POST["submit"])){
        $username   = $_POST["username"];
        $password   = $_POST["password"];

        $query_petugas = "SELECT * FROM petugas WHERE username = '$username'";
        $result_petugas = mysqli_query($conn, $query_petugas);
        $cek_petugas   = mysqli_num_rows($result_petugas);

        // Pemeriksaan untuk tabel "masyarakat"
        $query_masyarakat = "SELECT * FROM masyarakat WHERE username = '$username'";
        $result_masyarakat = mysqli_query($conn, $query_masyarakat);
        $cek_masyarakat   = mysqli_num_rows($result_masyarakat);

        if($cek_petugas > 0){
            $row = mysqli_fetch_assoc($result_petugas);
            if($password == $row["password"]){
                $_SESSION["login"] = true;
                if($row["level"] == "admin"){
                    $_SESSION["admin"] = true;
                    $_SESSION["level"] = "admin";
                    header("Location: index.php");
                } else if($row["level"] == "petugas"){
                    $_SESSION["petugas"] = true;
                    $_SESSION["level"] = "petugas";
                    header("Location: index.php");
                }
            } else {
                echo "
                    <script>
                    alert('Password SALAH!!!!');
                    document.location.href = 'login.php';
                    </script>
                ";
            }
        } else if ($cek_masyarakat > 0) {
            $row_masyarakat = mysqli_fetch_assoc($result_masyarakat);
            if($password == $row_masyarakat["password"]){
                $_SESSION["login"] = true;
                $_SESSION["masyarakat"] = true;
                $_SESSION["level"] = "masyarakat";
                header("Location: index.php");
            } else {
                echo "
                    <script>
                    alert('Password SALAH!!!!');
                    document.location.href = 'login.php';
                    </script>
                ";
            }
        } else {
            echo "
                    <script>
                    alert('username salah!!!');
                    document.location.href = 'login.php';
                    </script>
                ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- costum css -->
<link rel="stylesheet" href="style.css">
</head>
<body>
        <section class="container-fluid mb-4">
            <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
            <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container" action="login.php" method="POST">
                    <h4 class="text-center font-weight-bold"> Sign-In </h4>
                   
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password" required>
                    </div>
                 
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
                    
                </form>
            </section>
            </section>
        </section>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
