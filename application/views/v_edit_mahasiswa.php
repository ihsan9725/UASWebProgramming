<html>

<body>
	<center>
		
		<h3>Edit Data</h3>
	</center>
	<?php foreach($mahasiswa as $data){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nim</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data->id ?>">
					<input type="text" name="nim" value="<?php echo $data->nim ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="uts" value="<?php echo $data->uts ?>"></td>
			</tr>
			<tr>
				<td>Pass</td>
				<td><input type="text" name="nama" value="<?php echo $data->nama ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>