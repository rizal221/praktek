<!DOCTYPE html>
<html >
<head>
	<title>SMP IT MUHAMMADIYAH</title>
	<link rel="stylesheet" href="css/css6.css" type="text/css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="img/logo.png">
			</div>
			<ul>
				<li><a href="index.php">home</a></li>
				<li><a href="alur.php">Alur</a></li>
				<li class="active"><a href="pengumuman.php">Pegumuman</a></li>
				<li><a href="index1.php">Login</a></li>
			</ul>
		</div>
				
<div class="title">
<center>
<h2>Hasil Tes</h2>
</br>	
	<table border="1">
		<tr>
			<th width="100px">NIM</th>
			<th width="200px">NAMA</th>
			<th width="100px">Hasil Tes</th>
		</tr>
		<?php
			include 'config.php';
			$queri="Select nim,namalengkap,hasil From tbl_dat" ;
			$hasil=mysqli_query ($conn,$queri);
			while ($data = mysqli_fetch_array ($hasil)){
		?>
			<tr>
			<th><?php echo $data ["nim"];?></th>
			<th><?php echo $data ["namalengkap"];?></th>
			<th><?php echo $data ["hasil"];?></th>
			</tr>
		<?php
		}
		?>
	</table></br>
</center>
</div>
	</header>
</body>
</html>