<!DOCTYPE html>
<html>
<head>
	<title>Tambah Nilai Mahasiswa</title>
</head>
<body>
	<center>
		
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'daftar/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Pelajaran</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Uts</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Uas</td>
				<td><input type="text" name="pass"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>