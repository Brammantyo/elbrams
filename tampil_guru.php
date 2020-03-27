<?php include "header.php"; ?>

<h3>Data Guru</h3>
<a href="tambah_guru.php">Tambah data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Guru</th>
	</tr>
	<?php
	$sql=mysqli_query($koneksi, "SELECT * FROM guru ORDER BY idguru ASC");
	$no=1;
	while($d=mysqli_fetch_array($sql)){
		echo "<tr>
			<td>$no</td>
			<td>$d[namaguru]/<td>
		</tr>";
		$no++;
	}
	?>
</table>

<?php include "footer.php"; ?>