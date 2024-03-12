<?php 

	require 'functions.php';
	$petugas = query("SELECT * FROM petugas");
	if(isset($_POST['cariPetugas'])){
    $petugas = cariPetugas($_POST['keyword']);
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
	<h3>Daftar Petugas</h3>
	<a href="tambahPetugas.php">Tambah data Petugas</a>
<form action="" method="post"><br>
	<input type="text" name="keyword" placeholder="Cari...">
            <button type="submit" name="cari">Cari</button>
	<a href="index.php">Kembali</a>
<form action="" method="post">
	<br>
	<br>
	 <link rel="stylesheet" type="text/css" href="css5.css">
	</form>
	<br>
	<table border="1" cellpadding="9" cellspacing="0">
		<tr>
			<th>id_petugas</th>
			<th>nama_petugas</th>
			<th>username</th>
			<th>password</th>
			<th>telp</th>
			<th>level</th>
			<th>Aksi</th>

		</tr>
	</br>
		
		<?php  foreach($petugas as $row) : ?>
		<tr>
			
			<td><?php echo $row["id_petugas"]; ?></td>
			<td><?php echo $row["nama_petugas"]; ?></td>
			<td><?php echo $row["username"]; ?></td>
			<td><?php echo $row["password"]; ?></td>
			<td><?php echo $row["telp"]; ?></td>
			<td><?php echo $row["level"]; ?></td>

			<td>
				<a href="ubahPetugas.php?id_petugas=<?php echo $row["id_petugas"]; ?>">Ubah</a> 
                <a href="DeletePetugas.php?id_petugas=<?php echo $row["id_petugas"]; ?>">Delete</a> 
			</td>
		</tr>
	
	<?php endforeach; ?>
	</table>
</center>
</body>
</html>