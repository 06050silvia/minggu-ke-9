<?php

	$engi = "mysql";
	$host = "localhost";
	$dbse = "sewa_mobil";
	$user = "root";
	$pass = "";
	$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host,$user,$pass);
	
?>