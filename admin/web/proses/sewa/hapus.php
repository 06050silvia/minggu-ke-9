<?php
	include '../../conf.php';
	include '../../conn.php';

	$no_transaksi = get('no_transaksi');
	$hapus = $koneksi->prepare("DELETE FROM transaksi WHERE `no_transaksi` = '".$no_transaksi."'");
	$hapus->execute();
	header("location:../../index.php?p=home");
?>
