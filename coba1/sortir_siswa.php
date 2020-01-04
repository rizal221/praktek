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
				<li><a href="home_admin.php">Home</a></li>
				<li class="active"><a href="sortir_siswa.php">Data</a></li>
				<li><a href="index.php">Logout</a></li>
			</ul>
		</div>
		
<div class="title">
<center>
<h2>BIODATA SISWA</h2></br>	
	<table border="1">
		<tr>
			<th width="100px">NIM</th>
			<th width="100px">NAMA</th>
			<th width="100px">Hasil Tes</th>
			<th width="100px">OPSI</th>
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
			<th>
			<a href="edit_biodata.php?ni=<?php echo $data['nim'];?>" title="Edit">
			<input class="tombol" type="submit" value="edit"></a>
			
			<a href="hapus_biodata.php?ni=<?php echo $data['nim'];?>" title="Hapus"> 
			<input class="tombol1" type="submit" value="hapus"></a>
			</th>
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