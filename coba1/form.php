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
	}
}
?>
<html >
<head>
	<title>SMP IT MUHAMMADIYAH</title>
	<link rel="stylesheet" href="css/css5.css" type="text/css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="img/logo.png">
			</div>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li class="active"><a href="form.php">Isi Form</a></li>
				<li><a href="biodata.php">Lihat Biodata</a></li>
				<li><a href="index.php">Logout</a></li>
			</ul>
		</div>
		
<div class="title">

	<center>
	<h2>FORM PENDAFTARAN</h2>
	<table width="400" border="0" cellpadding="0" cellspacing="0" align="center">
	<form action="upload_dat.php" method="post">
		<tr>
			<td width="50" height="20"> </td>
			<td width="20"> </td>
			<td width="50"> </td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">Hasil Tes Akhir</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
				<input type="text" name="hasil" value="Belum Ada" readonly="readonly">
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">NIM</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
				<input type="text" name="nim" value="<?php echo $nim; ?>" readonly="readonly">
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">NAMA LENGKAP</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
				<input type="text" name="namalengkap" value="<?php echo $named." ".$nameb; ?>" readonly="readonly">
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">JENIS KELAMIN</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
				<input type="radio" name="jk" value="Laki-Laki">L
				<input type="radio" name="jk" value="Perempuan">P
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">AGAMA</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
			<select name='agama'>
				<option value='islam'>Islam</option>
				<option value='Kristen'>kriten</option>
				<option value='Katholik'>Katholik</option>
				<option value='Hindu'>Hindu</option>
				<option value='Budha'>Budha</option>
			</select>
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">TELPON/HP</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
			<input type="text" name="hp" id="hp" placeholder="TELPON/HP"  value="<?php echo $hp;?>" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">Nama Kampus</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
			<input type="text" name="kampus" id="kampus" value="<?php echo $kampus;?>" placeholder="Nama Kampus" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">ALAMAT KAMPUS</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
			<input type="text" name="alamatkampus" id="alamatkampus"  value="<?php echo $alamatkampus;?>" placeholder="ALAMAT KAMPUS" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">Pengajuan Tanggal</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
			<input type="date" name="tanggalmulai" value="<?php echo $tanggalmulai;?>" id="tanggalmulai" placeholder="Tanggal Mulai" autocomplete="off">
			<input type="date" name="tanggal" value="<?php echo $tanggal;?>" id ="tanggal" placeholder="Tanggal Selesai" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="top">Tema Kerja Praktek</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
			<textarea class="form-control border-input" name="tema" id="tema"  value="<?php echo $tema;?>" placeholder="Tema Kerja Praktek" rows="7" autocomplete="off"></textarea>
			</td>
		</tr>
		</table>
		</button>
		<div class="button">
		<input type="submit" name="create'" value="simpan" class="btn"></input>
		<h6 style="color: white">*APABILA SUDAH PERNAH MENGISI ABAIKAN SAJA</h6>
		<h6 style="color: white">*DATA YANG SUDAH DI ISI TIDAK BOLEH DI UBAH, APABILA ADA KESALAHAN KONFIRMASI KE PIHAK SEKOLAH</h6>
		</div>
	</center>
</div>
</div>
</header>
</body>
</html>