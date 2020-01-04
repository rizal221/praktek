<?php
// Load file koneksi.php
include "config.php";

// Ambil Data yang Dikirim dari Form
$hasil = $_POST['hasil'];
$nim = $_POST['nim'];
$namalengkap = $_POST['namalengkap'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$hp = $_POST['hp'];
$kampus = $_POST['kampus'];
$alamatkampus = $_POST['alamatkampus'];
$tanggalmulai = $_POST['tanggalmulai'];
$tanggal = $_POST['tanggal'];
$tema = $_POST['tema'];
			// Proses simpan ke Database
			$query = "INSERT INTO tbl_dat (hasil,nim,namalengkap,jk,agama,hp,kampus,alamatkampus,tanggalmulai,tanggal,tema) VALUES
			('".$hasil."','".$nim."','".$namalengkap."','".$jk."','".$agama."','".$hp."','".$kampus."','".$alamatkampus."','".$tanggalmulai."','".$tanggal."','".$tema."')";
			$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
			
			if($sql){ // Cek jika proses simpan ke database sukses atau tidak
				// Jika Sukses, Lakukan :
				header("location: biodata.php"); 
			}else{
				// Jika Gagal, Lakukan :
				echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
				echo "<br><a href='form.php'>Kembali Ke Form</a>";
			}