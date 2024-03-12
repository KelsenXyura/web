<?php

	session_start();

	require 'functions.php';

	if(!isset($_SESSION["login"])){
		header("Location: login.php");
		exit;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengaduan</title>
	<link rel="stylesheet" type="text/css" href="css1.css">
</head>
<body>
	<div class="header">
		<img src="img/logo.png">
		<div class="header-logo"><?php if(isset($_SESSION["admin"])) : ?>
						Halo <?php echo $_SESSION["level"]; ?>
				<?php endif; ?>

				<?php if(isset($_SESSION["petugas"])) : ?>
						Halo <?php echo $_SESSION["level"]; ?>
				<?php endif; ?>

				<?php if(isset($_SESSION["masyarakat"])) : ?>
						Halo <?php echo $_SESSION["level"]; ?>
				<?php endif; ?></div>
		<div class="header-list">
			<ul>

				
				<li> <a href ="Pengaduan.php">Pengaduan  </li> </a>
			<?php if(isset($_SESSION["admin"]) || isset($_SESSION["petugas"])) : ?>
				<li> <a href ="tanggapan.php">Tanggapan  </li> </a>
			<?php endif; ?>

				<?php if(isset($_SESSION["admin"]) || isset($_SESSION["masyarakat"])) : ?>
                  <li>   <a href="register.php">Register</a></li>
                  <?php endif; ?>

					<li class="nav-item ml-4">
        <a href="logout.php" class="nav-link text-light"> Log Out </a>
			</ul>
		</div>
	</div>

	<div class="bodys">
		<div class="bodys-text">
			<legend><h1> Pengaduan Pelaporan Masyarakat</h1></legend>
			<form action="" method="post" enctype="multipart/from/data">
		</div>
	</div>
	<div class="footer">
		<div class="footer-logo"></div>
		<div class="footer-list">
			<ul>
				<li> <a href ="Pengaduan.php">Pengaduan  </li> </a>
			<?php if(isset($_SESSION["admin"]) || isset($_SESSION["petugas"])) : ?>
				<li> <a href ="tanggapan.php">Tanggapan  </li> </a>
			<?php endif; ?>

					<li class="nav-item ml-4">
        <a href="logout.php" class="nav-link text-light"> Log Out </a>
			</ul>
		</div>
		
	</div>
</body>
</html>