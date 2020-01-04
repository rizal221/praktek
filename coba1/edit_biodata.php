<html >
<head>
	<title>SMP IT MUHAMMADIYAH</title>
	<link rel="stylesheet" href="css/css7.css" type="text/css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="img/logo.png">
			</div>
			<ul>
				<li class="active"><a href="home_admin.php">Data</a></li>
				<li><a href="index.php">Logout</a></li>
			</ul>
		</div>

<div class="title">
<center>		
<h2>EDIT DATA
<?php
	include 'config.php';
	if(isset($_GET['ni'])){
		$ni		= $_GET['ni'];
		$query	= mysqli_query($conn,'select * from tbl_dat where nim ="'.$ni.'"');
		$data  	= mysqli_fetch_array($query);
		$hasil = $data['hasil'];
		$namalengkap = $data['namalengkap'];
		$jk = $data['jk'];
		$agama = $data['agama'];
		$hp = $data['hp'];
		$kampus = $data['kampus'];
		$alamatkampus = $data['alamatkampus'];
		$tanggalmulai = $data['tanggalmulai'];
		$tanggal = $data['tanggal'];
		$tema = $data['tema'];	
	}
	else{
		$hasil = '';
		$jk = '';
		$agama = '';
		$hp = '';
		$kampus = '';
		$alamatkampus = '';
		$tanggalmulai = '';
		$tanggal = '';
		$tema = '';
		
	}
?></h2>
<form method="post" name="frm" action="proses_edit.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center">
 
  <tr>
			<td width="50" height="20"> </td>
			<td width="20"> </td>
			<td width="50"> </td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">Hasil Tes</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
			<select name='hasil'>
				<option value='Belum Ada'>Belum Ada</option>
				<option value='Lolos'>Lolos</option>
				<option value='Tidak Lolos'>Tidak Lolos</option>
			</select>
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">NIM</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
				<input type="text" name="nim" value="<?php echo $ni; ?>" readonly="readonly">
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">NAMA LENGKAP</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
				<input type="text" name="namalengkap" value="<?php echo $namalengkap; ?>" readonly="readonly">
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">JENIS KELAMIN</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
				<input type="text" name="jk" value="<?php echo $jk;?>" id="nisn" placeholder="JENIS KELAMIN"  autocomplete="off">
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
			<input type="text" name="kampus" id="kampus"  value="<?php echo $kampus;?>" placeholder="Nama Kampus" autocomplete="off">
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">ALAMAT Kampus</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
			<input type="text" name="alamatkampus" id="alamatkampus" value="<?php echo $alamatkampus;?>" placeholder="ALAMAT Kampus" autocomplete="off">
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
			<input type="text" name="tema" id="tema"  value="<?php echo $tema;?>" placeholder="Tema Kerja Praktek" autocomplete="off">
			</td>
		</tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input class="tombol2" type="submit" name="edit" value="EDIT"></td>
  </tr>
</table>
</form>
</center>
</div>
</header>
</body>
</html>