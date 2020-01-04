<?php
session_start();
$nim = $_SESSION['nim'];
?>

<?php
require_once('config.php');

$no_urut = $_SESSION['no_urut'];
$named = $nameb = $nim = '';
$sql = "SELECT * FROM tbluser WHERE NO_URUT='$no_urut'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$named = $row["NamaDepan"];
		$nameb = $row["NamaBelakang"];
		$nim = $row["NIM"];
	}
}
?>

<?php
include"config.php";

$sql = "SELECT * FROM tbl_dat WHERE nim='$nim'";
$result = mysqli_query($conn, $sql);
error_reporting(0);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$jk = $row['jk'];
		$agama = $row['agama'];
		$hp = $row['hp'];
		$kampus = $row['kampus'];
		$alamatkampus = $row['alamatkampus'];
		$tanggalmulai = $row['tanggalmulai'];
		$tanggal = $row['tanggal'];
		$tema = $row['tema'];
		$jk=$row['jk'];
	}

}
?>
<html >
<head>
	<title>SMP IT MUHAMMADIYAH</title>
	<link rel="stylesheet" href="css/css4.css" type="text/css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="img/logo.png">
			</div>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="form.php">Isi Form</a></li>
				<li class="active"><a href="biodata.php">Lihat Biodata</a></li>
				<li><a href="index.php">Logout</a></li>
			</ul>
		</div>
		
<div class="title">
	<center>
	<h2>BIODATA CALON SISWA</h2>
	<h3>SMP IT MUHAMMADIYAH CIKAMPEK</h3>
	<table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
	<form action="upload_dat.php" method="post">
		<tr>
			<td width="50" height="20"> </td>
			<td width="20"> </td>
			<td width="50"> </td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">NIM</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $nim; ?>
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">NAMA LENGKAP</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
				<?php echo $named." ".$nameb; ?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">JENIS KELAMIN</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $jk;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">AGAMA</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $agama;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">TELPON/HP</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $hp;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">ALAMAT KAMPUS</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $alamatkampus;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">Nama Kampus</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $kampus;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">TANGGAL Mulai</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
			<?php echo date("d F Y", strtotime($tanggalmulai));?> 
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">TANGGAL Selesai</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
			<?php echo date("d F Y", strtotime($tanggal));?>
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">Tema Kerja Praktek</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $tema;?></td>
		</tr>
		</table>
		<div class="button">
		<a href="cetak.php" target="_blank" class="btn">CETAK</a>
		</div>
	</center>
</div>
</div>
</header>
</body>
</html>