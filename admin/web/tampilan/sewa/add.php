<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<h2>Tambah Data Sewa</h2>
		<form method="POST" action="proses/sewa/save.php" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Tanggal Pesan</td>
					<td><input type="date" name="tgl_pesan"></td>
				</tr>
				<tr>
					<td>Tanggal Pinjam</td>
					<td><input type="date" name="tgl_pinjam"></td>
				</tr>
				<tr>
					<td>Tanggal Rencana Kembali</td>
					<td><input type="date" name="tgl_rencanakmbl"></td>
				</tr>
				<tr>
					<td>Waktu Rencana Kembali</td>
					<td><input type="time" name="jam_rencanakmbl"></td>
				</tr>
				<tr>
					<td>Tanggal Aktual Kembali</td>
					<td><input type="date" name="tgl_aktualkmbl"></td>
				</tr>
				<tr>
					<td>Waktu Aktual Kembali</td>
					<td><input type="time" name="jam_aktualkmbl"></td>
				</tr>
				<tr>
					<td>Denda</td>
					<td><input type="text" name="denda"></td>
				</tr>
				<tr>
					<td>Kilometer (Km) Pinjam</td>
					<td><input type="number" name="km_pinjam"></td>
				</tr>
				<tr>
					<td>Kilometer (Km) Kembali</td>
					<td><input type="number" name="km_kembali"></td>
				</tr>
				<tr>
					<td>BBM Pinjam</td>
					<td><input type="number" name="bbm_pinjam"></td>
				</tr>
				<tr>
					<td>BBM Kembali</td>
					<td><input type="number" name="bbm_kembali"></td>
				</tr>
				<tr>
					<td>Kondisi Pinjam</td>
					<td><input type="text" name="kondisi_pinjam"></td>
				</tr>
				<tr>
					<td>Kondisi Kembali</td>
					<td><input type="text" name="kondisi_kembali"></td>
				</tr>
				<tr>
					<td>Kerusakan</td>
					<td><input type="text" name="kerusakan"></td>
				</tr>
				<tr>
					<td>Biaya Kerusakan</td>
					<td><input type="text" name="biaya_rusak"></td>
				</tr>
				<tr>
					<td>Biaya BBM</td>
					<td><input type="text" name="biaya_bbm"></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit">Simpan</button></td>
				</tr>
			</table>
		</form>
	</body>
</html>