<?php 
	// mengaktifkan session php
	session_start();
 
	// menghubungkan dengan koneksi
	include 'koneksi.php';
 
	// menangkap data yang dikirim dari form
	$username = $_POST['username'];
	$password = $_POST['password'];
	//$nama	  = $_POST['nama'];
	//$hak	  = $_POST['hak'];
 
	// menyeleksi data dari tabel tb_user dengan username dan password yang sesuai
	$data = mysqli_query($koneksi,"select * from tb_user where username='$username' and password='$password'");
 
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);
 
	if($cek > 0)
	{
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		
		header("location:admin/web/home.php");
	}else
	{
		header("location:index.php?pesan=gagal");
	}
?>