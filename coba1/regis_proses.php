<!--
Here, we write code for registration.
-->
<?php
require_once('config.php');
$named = $nameb = $nim = $password = $pwd = '';

$named = $_POST['namadepan'];
$nameb = $_POST['namabelakang'];
$nim = $_POST['nim'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbluser (NamaDepan,NamaBelakang,NIM,Password) VALUES ('$named','$nameb','$nim','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location:login.php");
}
else
{
	echo "Error :".$sql;
 }
?>