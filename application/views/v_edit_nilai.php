<html>

<body>
	<center>
		
		<h3>Edit Data</h3>
	</center>
	<?php foreach($nilai as $data){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data->id ?>">
					<input type="text" name="namapel" value="<?php echo $data->namapel ?>">
				</td>
			</tr>
			<tr>
				<td>UTS</td>
				<td><input type="text" name="uts" value="<?php echo $data->uts ?>"></td>
			</tr>
			<tr>
				<td>UAS</td>
				<td><input type="text" name="uas" value="<?php echo $data->uas ?>"></td>
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