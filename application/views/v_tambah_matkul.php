<!DOCTYPE html>
<html>
<head>
	<title>Tambah Matakuliah</title>
</head>
<body>
	<center>
		
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi_matkul'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Senin</td>
				<td><input type="text" name="senin"></td>
			</tr>
			<tr>
				<td>Selasa</td>
				<td><input type="text" name="selasa"></td>
			</tr>
			<tr>
				<td>Rabu</td>
				<td><input type="text" name="rabu"></td>
			</tr>
			<tr>
				<td>Kamis</td>
				<td><input type="text" name="kamis"></td>
			</tr>
			<tr>
				<td>Jumat</td>
				<td><input type="text" name="jumat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>