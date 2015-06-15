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
				<a href = "seminar.php">seminar</a><br><br>
				<b>Daftar Nama peneliti</b><br>
				<a href = "add.php">tambah</a>
					<table border="1" style="border-collapse:collapse;text-align:left;" width="500px;">
						<tr>
							<th>Nama</th>
							<th>Alamat</th>
							<th colspan="2">Action</th>
						</tr>
						<?php foreach($test->Select() as $value){ ?>
						<tr>
							<td><?php echo $value['nama']; ?></td>
							<td><?php echo $value['alamat']; ?></td>
							<td><a href="update.php?id=<?php echo $value['id']; ?>">Edit</a></td>
							<td><a href="delete.php?id=<?php echo $value['id']; ?>">Delete</a></td>
						</tr>
						<?php } ?>
					</table>
			</td>
		</tr>
	</table>
</body>
</html>