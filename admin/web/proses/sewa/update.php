<?php
		include '../../conf.php';
		include '../../conn.php';

		$no_transaksi = post('no_transaksi');
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

		$simpan = $koneksi->prepare("UPDATE transaksi SET `tgl_pesan`='".$tgl_pesan."',`tgl_pinjam`='".$tgl_pinjam."',`tgl_rencanakmbl`='".$tgl_rencanakmbl."',`jam_rencanakmbl`='".$jam_rencanakmbl."',`tgl_aktualkmbl`='".$tgl_aktualkmbl."',`jam_aktualkmbl`='".$jam_aktualkmbl."',`denda`='".$denda."',`km_pinjam`='".$km_pinjam."',`km_kembali`='".$km_kembali."',`bbm_pinjam`='".$bbm_pinjam."',`bbm_kembali`='".$bbm_kembali."',`kondisi_pinjam`='".$kondisi_pinjam."',`kondisi_kembali`='".$kondisi_kembali."',`kerusakan`='".$kerusakan."',`biaya_rusak`='".$biaya_rusak."',`biaya_bbm`='".$biaya_bbm."', WHERE `no_transaksi` ='".$no_transaksi."'");
		$simpan->execute();
		header("location:../../index.php?p=sewa");
?>