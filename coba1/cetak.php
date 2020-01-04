<?php
session_start();
$nim = $_SESSION['nim'];
require_once('config.php');

$no_urut = $_SESSION['no_urut'];
$sql = "SELECT * FROM tbluser WHERE NO_URUT='$no_urut'";
$result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_array($result))
	{
		$named = $row["NamaDepan"];
		$nameb = $row["NamaBelakang"];
		$nim = $row["NIM"];
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
		$nisn = $row['nisn'];
		$jk = $row['jk'];
		$tempat = $row['tempat'];
		$tanggal = $row['tanggal'];
		$agama = $row['agama'];
		$namaayah = $row['namaayah'];
		$namaibu = $row['namaibu'];
		$alamatlengkap = $row['alamatlengkap'];
		$kodepos = $row['kodepos'];
		$hp = $row['hp'];
		$asalsekolah = $row['asalsekolah'];
		$tahunlulus = $row['tahunlulus'];
		$alamatsekolah = $row['alamatsekolah'];
		$kewarganegaraan = $row['kewarganegaraan'];
		$jk=$row['jk'];
	}
}
?>
<center>
<table border="0" width="100%">
	<tr>
		<td width="20px"><img style="padding-left: 40px" width="70" height="70" src="img/logo.png"></td>
		<th height="20px" style="font-size : 30px";>SMP IT MUHAMMADIYAH CIKAMPEK</th>
	</tr>
</table>
</center>
	<center>
	<h2>FORM PENDAFTARAN</h2>
	<table width="500" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
	<form action="upload_dat.php" method="post">
		<tr>
			<td width="50" height="20"> </td>
			<td width="20"> </td>
			<td width="50"> </td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">NIS</td>
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
			<td height="27" align="left" valign="middle">NISN</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $nisn;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">JENIS KELAMIN</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $jk;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">TEMPAT TANGGAL LAHIR</td>
			<td align="center" valign="top">:</td>
			<td valign="middle">
			<?php echo $tempat.",".date("d F Y", strtotime($tanggal));?>
			</td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">AGAMA</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $agama;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">NAMA AYAH</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $namaayah;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">NAMA IBU</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $namaibu;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">ALAMAT LENGKAP</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $alamatlengkap;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">KODE POS</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $kodepos;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">TELPON/HP</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $hp;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">ASAL SEKOLAH</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $asalsekolah;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">TAHUN LULUS</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $tahunlulus;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">ALAMAT SEKOLAH</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $alamatsekolah;?></td>
		</tr>
		<tr>
			<td height="27" align="left" valign="middle">KEWARGANEGARAAN</td>
			<td align="center" valign="top">:</td>
			<td valign="middle"><?php echo $kewarganegaraan;?></td>
		</tr>
		</table>
	</center>
<script>
window.print();
</script>
</div>
