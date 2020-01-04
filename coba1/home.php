<?php
session_start();
$nis = $_SESSION['nis'];
?>

<?php
require_once('config.php');

$no_urut = $_SESSION['no_urut'];
$named = $nameb = '';
$sql = "SELECT * FROM tbluser WHERE NO_URUT='$no_urut'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$named = $row["NamaDepan"];
		$nameb = $row["NamaBelakang"];
	}
}
?>

<html >
<head>
	<title>SMP IT MUHAMMADIYAH</title>
	<link rel="stylesheet" href="css/css2.css" type="text/css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="img/logo.png">
			</div>
			<ul>
				<li class="active"><a href="home.php">Home</a></li>
				<li><a href="form.php">Isi Form</a></li>
				<li><a href="biodata.php">Lihat Biodata</a></li>
				<li><a href="index.php">Logout</a></li>
			</ul>
		</div>
		<div class="title">
			<center>
			<h1 style= "padding-top : 100px">HALLO <?php echo $named." ".$nameb; ?> !</h1>
			<h2 style= "padding-top : 20px">SELAMAT DATANG DI WEB PENERIMAAN SISWA BARU SMP IT MUHAMMADIYAH CIKAMPEK</h2>
			</center>
		</div>
	</header>
</body>
</html>