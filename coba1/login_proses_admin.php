<?php

include('config.php');
$username=$_POST['username'];
$password=$_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);

$sql="SELECT * FROM tbladmin WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1){
echo "<script>window.location = 'admin.php';</script>";
}
else {
echo "<script type=\"text/javascript\">alert('username atau password yang anda masukkan salah')</script>";
echo "<meta http-equiv='refresh' content='0;url=../login_admin.php'>";
}
?>