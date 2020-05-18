<?php
	$addonq = '';
	if(get("q")!="")
	{ $addonq = " WHERE no_transaksi LIKE'%".get('q')."%'"; }
	
	$hasil = $koneksi->prepare("SELECT * FROM transaksi".$addonq." ORDER BY no_transaksi ASC");
	$hasil->execute();
	$data = $hasil->fetchAll();
?>

<html>
	<head>
	</head>
	<body>
		<a class="btn pull-right" href="index.php?p=sewa&m=add">Tambah Baru</a>
		
		<h2>Data Sewa</h2>
			<div style="clear:both;width:200px;margin-right:12px;" class="pull-right">
				<form action="index.php?p=sewa&m=search">
					<input autocomplete="off" type="hidden" name="p" value="sewa">
					<input autocomplete="off" type="text" name="q" placeHolder="Masukan Nomor Transaksi" value="<?php echo(get("q"));?>">
				</form>
			</div>
			<div><?php echo get('q')!=""?"hasil pencarian untuk'".(get('q'))."'":"";?></div>
			<div style="clear:both">&nbsp;</div>
			
			<table class="data">
			<thead>
				<tr>
					<th>Nomor Transaksi</th>
					<th>Tanggal Pesan</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Rencana Kembali</th>
					<th>Waktu Rencana Kembali</th>
					<th>Tanggal Aktual Kembali</th>
					<th>Waktu Aktual Kembali</th>
					<th>Denda</th>
					<th>Kilometer(km) Pinjam</th>
					<th>Kilometer(km) Kembali</th>
					<th>BBM Pinjam</th>
					<th>BBM Kembali</th>
					<th>Kondisi Pinjam</th>
					<th>Kondisi Kembali</th>
					<th>Kerusakan</th>
					<th>Biaya Kerusakan</th>
					<th>Biaya BBM</th>
					<th colspan="4">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no_transaksi = 1;
					foreach ($data as $key) {
				?>
				<tr>
					
					<td><?php echo $key['no_transaksi'];?></td>
					<td><?php echo $key['tgl_pesan'];?></td>
					<td><?php echo $key['tgl_pinjam'];?></td>
					<td><?php echo $key['tgl_rencanakmbl'];?></td>
					<td><?php echo $key['jam_rencanakmbl'];?></td>
					<td><?php echo $key['tgl_aktualkmbl'];?></td>
					<td><?php echo $key['jam_aktualkmbl'];?></td>
					<td><?php echo $key['denda'];?></td>
					<td><?php echo $key['km_pinjam'];?></td>
					<td><?php echo $key['km_kembali'];?></td>
					<td><?php echo $key['bbm_pinjam'];?></td>
					<td><?php echo $key['bbm_kembali'];?></td>
					<td><?php echo $key['kondisi_pinjam'];?></td>
					<td><?php echo $key['kondisi_kembali'];?></td>
					<td><?php echo $key['kerusakan'];?></td>
					<td><?php echo $key['biaya_rusak'];?></td>
					<td><?php echo $key['biaya_bbm'];?></td>
					
					<td><a href="index.php?p=sewa&m=edit&id=<?php echo $key['no_transaksi'];?>">Ubah</a></td>
					<td><a onclick="return confirm('Hapus Data<?php echo $key['no_transaksi'];?>')" <a href="proses/sewa/hapus.php?id=<?php echo $key['no_transaksi'];?>">Hapus</a></td>
				</tr>
					<?php
						$no_transaksi++;
						} ?>
			</tbody>
			</table>
	</body>
</html>