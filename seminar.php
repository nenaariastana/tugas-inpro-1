<html>
<head>
	<title> Penelitian</title>
</head>
<body background="1.jpg">
<?php
require( 'database.php' );
?>
	<table width="100%" height="100%">
		<tr>
			<td align="center" valign="middle">
				<a href = "proposal.php">proposal</a>
				<a href = "index.php">peneliti</a><br><br>
				<b>Jadwal Seminar</b><br>
				<a href = "add1.php">tambah</a>
					<table border="1" style="border-collapse:collapse;text-align:left;" width="500px;">
						<tr>
							<th>NIK</th>
							<th>tanggal</th>
							<th>jam</th>
							<th>ruang</th>
							<th colspan="2">Action</th>
						</tr>
						<?php foreach($test->tampil() as $value){ ?>
						<tr>
							<td><?php echo $value['NIK']; ?></td>
							<td><?php echo $value['tanggal']; ?></td>
							<td><?php echo $value['jam']; ?></td>
							<td><?php echo $value['ruang']; ?></td>
							<td><a href="edit.php?id=<?php echo $value['id']; ?>">Edit</a></td>
							<td><a href="hapus.php?id=<?php echo $value['id']; ?>">Delete</a></td>
						</tr>
						<?php } ?>
					</table>
			</td>
		</tr>
	</table>
</body>
</html>