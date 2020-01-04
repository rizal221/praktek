<?php
include "config.php";
if(isset($_POST['edit'])){
	
		$hasil = $_POST['hasil'];
		$namalengkap = $_POST['namalengkap'];
		$jk = $_POST['jk'];
		$agama = $_POST['agama'];
		$hp = $_POST['hp'];
		$kampus = $_POST['kampus'];
		$alamatkampus = $_POST['alamatkampus'];
		$tanggalmulai = $_POST['tanggalmulai'];
		$tanggal = $_POST['tanggal'];
		$tema = $_POST['tema'];
		$nim = $_POST['nim'];
	
	$sql	= 'update tbl_dat set hasil="'.$hasil.'", namalengkap="'.$namalengkap.'", jk="'.$jk.'", agama="'.$agama.'", hp="'.$hp.'", kampus="'.$kampus.'", alamatkampus="'.$alamatkampus.'", tanggalmulai="'.$tanggalmulai.'", tanggal="'.$tanggal.'", tema="'.$tema.'" where nim="'.$nim.'"';
	$query	= mysqli_query($conn,$sql);
	
	if($query){
		header('location:sortir_siswa.php');
	}
	else{
		echo 'Gagal';
		
	}
}
?>