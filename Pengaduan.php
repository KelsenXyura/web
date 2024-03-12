<?php
session_start();

require 'functions.php';

$pengaduan = query("SELECT * FROM pengaduan");

if(isset($_POST['cariP'])){
    $pengaduan = cariP($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Pengaduan</title>
    <style type="text/css">
        body {
            width: 100%;
            background-color: blueviolet;
            background-image: url("img/logo.png");
            border: none;
            outline: none;
            color: white;
            box-sizing: border-box !important;
        }

        table {
            margin: 0 auto;
            width: 90%;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

       
        }
    </style>
</head>
<body>
    <center>
        <h3>Daftar Pengaduan</h3>
        <?php if(isset($_SESSION["masyarakat"])) : ?>
            <a href="tambahPengaduan.php">Tambah data Pengaduan</a>
         <?php endif; ?>
        <form action="" method="post">
            <input type="text" name="keyword" placeholder="Cari...">
            <button type="submit" name="cariP">Cari</button>
        </form>
        <br>
        <a href="index.php">Kembali</a>
        <br><br>
        <table border="1" cellpadding="9" cellspacing="0">
            <tr>
                <th>id_pengaduan</th>
                <th>tgl_pengaduan</th>
                <th>nik</th>
                <th>isi_laporan</th>
                <th>foto</th>
                <th>Status</th>
            </tr>
            <?php foreach($pengaduan as $row) : ?>
            <tr>
                <td><?php echo $row["id_pengaduan"]; ?></td>
                <td><?php echo $row["tgl_pengaduan"]; ?></td>
                <td><?php echo $row["nik"]; ?></td>
                <td><?php echo $row["isi_laporan"]; ?></td>
                <td><img src="img/<?php echo $row["foto"]; ?>" width="120px"></td>
                <td><?php echo $row["status"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </center>
</body>
</html>
