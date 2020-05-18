<!DOCTYPE html>
<html>
<head>
	<title>Latihan Session</title>
</head>
<body>
	<h2>Anda Berhasil Login!</h2>
	
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! silahkan klik <a href="web/home.php">disini</a>untuk lanjut.</h4>
 
	<br/>
	<br/>
	
</body>
</html>