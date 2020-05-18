<?php
	include '../../conf.php';
	include '../../conn.php';
	
	$tgl_pesan = post('tgl_pesan');
	$tgl_pinjam = post('tgl_pinjam');
	$tgl_rencanakmbl = post('tgl_rencanakmbl');
	$jam_rencanakmbl = post('jam_rencanakmbl');
	$tgl_aktualkmbl = post('tgl_aktualkmbl');
	$jam_aktualkmbl = post('jam_aktualkmbl');
	$denda = post('denda');
	$km_pinjam = post('km_pinjam');
	$km_kembali = post('km_kembali');
	$bbm_pinjam = post('bbm_pinjam');
	$bbm_kembali = post('bbm_kembali');
	$kondisi_pinjam = post('kondisi_pinjam');
	$kondisi_kembali = post('kondisi_kembali');
	$kerusakan = post('kerusakan');
	$biaya_rusak = post('biaya_rusak');
	$biaya_bbm = post('biaya_bbm');
	
	$simpan = $koneksi->prepare("INSERT INTO transaksi(`tgl_pesan`,`tgl_pinjam`,`tgl_rencanakmbl`,`jam_rencanakmbl`,`tgl_aktualkmbl`,`jam_aktualkmbl`,`denda`,`km_pinjam`,`km_kembali`,`bbm_pinjam`,`bbm_kembali`,`kondisi_pinjam`,`kondisi_kembali`,`kerusakan`,`biaya_rusak`,`biaya_bbm`) VALUES('".$tgl_pesan."','".$tgl_pinjam."','".$tgl_rencanakmbl."','".$jam_rencanakmbl."','".$tgl_aktualkmbl."','".$jam_aktualkmbl."','".$denda."','".$km_pinjam."','".$km_kembali."','".$bbm_pinjam."','".$bbm_kembali."','".$kondisi_pinjam."','".$kondisi_kembali."','".$kerusakan."','".$biaya_rusak."','".$biaya_bbm."')");
	$simpan->execute();
	header("location:../../index.php?p=sewa");
?>