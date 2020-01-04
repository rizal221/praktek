<?php

include_once("config.php");
$ni = $_GET['ni'];
$query = 'DELETE FROM tbl_dat WHERE nim="'.$ni.'"';
mysqli_query($conn, $query);
header('location:home_admin.php');

?>