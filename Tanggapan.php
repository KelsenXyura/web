<?php 

	session_start();

	require 'functions.php';
	$tanggapan = query("SELECT * FROM tanggapan");
	if(isset($_POST['cariT'])){
    $tanggapan = cariT($_POST['keyword']);
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Masyarakat</title>
</head>
<body>
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

</style>
<center>
	<h3>Daftar Tanggapan</h3>
	<a href="tambahTanggapan.php">Tambah data Tanggapan</a>
<form action="" method="post"><br>
	<?php if(isset($_SESSION["admin"])) : ?>
	 <a target="_blank" href="cetak.php">Cetak Laporan</a>
	<?php endif; ?>
	<input type="text" name="keyword" placeholder="Cari...">
            <button type="submit" name="cariT">Cari</button>

	<a href="index.php">Kembali</a>
<form action="" method="post">
	<br>
	<br>
	 <link rel="stylesheet" type="text/css" href="css5.css">
	</form>
	<br>
	<table border="1" cellpadding="9" cellspacing="0">
		<tr>
		
			<th>id_tanggapan</th>
			<th>id_pengaduan</th>
			<th>tgl_tanggapan</th>
			<th>Tanggapan</th>
			<th>id_petugas</th>
			<th>Aksi</th>

		</tr>
	</br>
		
		<?php  foreach($tanggapan as $row) : ?>
		<tr>
			
			<td><?php echo $row["id_tanggapan"]; ?></td>
			<td><?php echo $row["id_pengaduan"]; ?></td>
			<td><?php echo $row["tgl_tanggapan"]; ?></td>
			<td><?php echo $row["tanggapan"]; ?></td>
			<td><?php echo $row["id_petugas"]; ?></td>

			<td>
				<a href="ubahTanggapan.php?id_tanggapan=<?php echo $row["id_tanggapan"]; ?>">Ubah</a> 
                <a href="DeleteTanggapan.php?id_tanggapan=<?php echo $row["id_tanggapan"]; ?>">Delete</a> 
			</td>
		</tr>
		
	<?php endforeach; ?>
	</table>
</center>
</body>
</html>