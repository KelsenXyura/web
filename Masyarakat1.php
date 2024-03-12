<?php 

	require 'functions.php';
	$masyarakat = query("SELECT * FROM masyarakat");
	if(isset($_POST['cari'])){
    $masyarakat = cari($_POST['keyword']);
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
	<h3>Daftar Masyarakat</h3>
	<a href="tambah.php">Tambah data Masyarakat</a>
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
			<th>No.</th>
			<th>nik</th>
			<th>nama</th>
			<th>username</th>
			<th>password</th>
			<th>telp</th>
			<th>Aksi</th>

		</tr>
	</br>
		<?php $i= 1; ?>
		<?php  foreach($masyarakat as $row) : ?>
		<tr>
			<td><?php echo 	$i; ?></td>
			<td><?php echo $row["nik"]; ?></td>
			<td><?php echo $row["nama"]; ?></td>
			<td><?php echo $row["username"]; ?></td>
			<td><?php echo $row["password"]; ?></td>
			<td><?php echo $row["telp"]; ?></td>

			<td>
				<a href="ubah.php?nik=<?php echo $row["nik"]; ?>">Ubah</a> 
                <a href="Delete.php?nik=<?php echo $row["nik"]; ?>">Delete</a> 
			</td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>
</center>
</body>
</html>