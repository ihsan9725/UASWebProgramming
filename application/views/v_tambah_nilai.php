<!DOCTYPE html>
<html>
<head>
	<title>Tambah Nilai Mahasiswa</title>
</head>
<body>
	<center>
		
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Pelajaran</td>
				<td><input type="text" name="namapel"></td>
			</tr>
			<tr>
				<td>Uts</td>
				<td><input type="text" name="uts"></td>
			</tr>
			<tr>
				<td>Uas</td>
				<td><input type="text" name="uas"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>