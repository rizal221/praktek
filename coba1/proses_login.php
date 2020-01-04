<?php

require_once('config.php');
$nim = $password = $pwd = '';

$nim = $_POST['nim'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM tbluser WHERE NIM='$nim' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$no_urut = $row["NO_URUT"];
		$nim = $row["NIM"];
		session_start();
		$_SESSION['no_urut'] = $no_urut;
		$_SESSION['nim'] = $nim;
	}
	header("Location: home.php");
}
else
{
	 echo "<script type=\"text/javascript\">alert('username atau password yang anda masukkan salah')</script>";
     echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}
?>
