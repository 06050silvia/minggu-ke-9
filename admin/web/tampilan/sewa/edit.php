<?php
	$hasil = $koneksi->prepare("SELECT * FROM transaksi WHERE `no_transaksi` = '".get('no_transaksi')."'");
	$hasil->execute();
	$data = $hasil->fetch(PDO::FETCH_ASSOC);
?>

<form method="POST" action="proses/sewa/update.php"enctype="multipart/form-data">
	<input type="hidden" name="no_transaksi" value="<?php echo $data['no_transaksi'];?>">
		<table>
				<tr>
					<td>Tanggal Pesan</td>
					<td><input type="date" name="tgl_pesan" value="<?php echo $data['tgl_pesan'];?>"></td>
				</tr>
				<tr>
					<td>Tanggal Pinjam</td>
					<td><input type="date" name="tgl_pinjam" value="<?php echo $data['tgl_pinjam'];?>"></td>
				</tr>
				<tr>
					<td>Tanggal Rencana Kembali</td>
					<td><input type="date" name="tgl_rencanakmbl" value="<?php echo $data['tgl_rencanakmbl'];?>"></td>
				</tr>
				<tr>
					<td>Waktu Rencana Kembali</td>
					<td><input type="time" name="jam_rencanakmbl" value="<?php echo $data['jam_rencanakmbl'];?>"></td>
				</tr>
				<tr>
					<td>Tanggal Aktual Kembali</td>
					<td><input type="date" name="tgl_aktualkmbl" value="<?php echo $data['tgl_aktualkmbl'];?>"></td>
				</tr>
				<tr>
					<td>Waktu Aktual Kembali</td>
					<td><input type="time" name="jam_aktualkmbl" value="<?php echo $data['jam_aktualkmbl'];?>"></td>
				</tr>
				<tr>
					<td>Denda</td>
					<td><input type="text" name="denda" value="<?php echo $data['denda'];?>"></td>
				</tr>
				<tr>
					<td>Kilometer (Km) Pinjam</td>
					<td><input type="number" name="km_pinjam" value="<?php echo $data['km_pinjam'];?>"></td>
				</tr>
				<tr>
					<td>Kilometer (Km) Kembali</td>
					<td><input type="number" name="km_kembali" value="<?php echo $data['km_kembali'];?>"></td>
				</tr>
				<tr>
					<td>BBM Pinjam</td>
					<td><input type="number" name="bbm_pinjam" value="<?php echo $data['bbm_pinjam'];?>"></td>
				</tr>
				<tr>
					<td>BBM Kembali</td>
					<td><input type="number" name="bbm_kembali" value="<?php echo $data['bbm_kembali'];?>"></td>
				</tr>
				<tr>
					<td>Kondisi Pinjam</td>
					<td><input type="text" name="kondisi_pinjam" value="<?php echo $data['kondisi_pinjam'];?>"></td>
				</tr>
				<tr>
					<td>Kondisi Kembali</td>
					<td><input type="text" name="kondisi_kembali" value="<?php echo $data['kondisi_kembali'];?>"></td>
				</tr>
				<tr>
					<td>Kerusakan</td>
					<td><input type="text" name="kerusakan" value="<?php echo $data['kerusakan'];?>"></td>
				</tr>
				<tr>
					<td>Biaya Kerusakan</td>
					<td><input type="text" name="biaya_rusak" value="<?php echo $data['biaya_rusak'];?>"></td>
				</tr>
				<tr>
					<td>Biaya BBM</td>
					<td><input type="text" name="biaya_bbm" value="<?php echo $data['biaya_bbm'];?>"></td>
				</tr>
			<tr>
				<td></td>
				<td><button type="submit">Update</button></td>
			</tr>
		</table>
</form>