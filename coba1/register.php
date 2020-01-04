<html >
<head>
	<title>Perum Jasa Tirta II</title>
	<link rel="stylesheet" href="css/css.css" type="text/css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TES</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="img/logo.png">
			</div>
			<ul>
				<li><a href="index.php">home</a></li>
				<li><a href="alur.php">Alur</a></li>
				<li><a href="pengumuman.php">Pegumuman</a></li>
				<li class="active"><a href="index1.php">Login</a></li>
			</ul>
		</div>
       <div class="login">
		<div class="avatar">
			<i class="fa fa-user"></i>
		</div>
		<form method="post" action="regis_proses.php">
		<h2>Buat Akun</h2>
		
		<div class="box-login">
			<i class="fas fa-envelope"></i>
				<input type="text" name="namadepan" id="namadepan" placeholder="Nama Depan" autocomplete="off">
		</div>
		
		<div class="box-login">
			<i class="fas fa-envelope"></i>
				<input type="text" name="namabelakang" id="namabelakang" placeholder="Nama Belakang" autocomplete="off">
		</div>
		
		<div class="box-login">
			<i class="fas fa-envelope"></i>
				<input type="text" name="nim" id="nim" placeholder="NIM" autocomplete="off">
		</div>
		
		<div class="box-login">
			<i class="fas fa-lock"></i>
				<input type="password" name="password" id="pwd" placeholder="Enter password">
		</div>
		
		<button type="submit" name="create" value="simpan" class="btn-login"> REGISTRASI
		</button>
		
		<div class="butto">
			<p> </p>
			<p style="color:white;">Sudah Punya Akun ?   <a style="color:white;" href="login.php">Masuk</a></p>
		</div>
		</form>
	</div>
    </header>
</body>
</html>