<html >
<head>
	<title>SMP IT MUHAMMADIYAH</title>
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
		<form method="post" action="proses_login_admin.php">
		<h2>ADMIN</h2>
		
		<div class="box-login">
			<i class="fas fa-envelope"></i>
				<input type="text" name="username" id="username" placeholder="Username" autocomplete="off">
		</div>
		
		<div class="box-login">
			<i class="fas fa-lock"></i>
				<input type="password" name="password" id="pwd" placeholder="Enter password">
		</div>
		
		<button type="submit" name="login_user" value="Login" class="btn-login"> Login
		</button>
		
		</form>
	</div>
    </header>
</body>
</html>