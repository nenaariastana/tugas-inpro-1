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
				<a href = "index.php">Peneliti</a>
				<a href = "seminar.php">Seminar</a><br><br>
				<b>Daftar Nilai Proposal</b><br>
				<a href = "add1.php">tambah</a>
					<table border="1" style="border-collapse:collapse;text-align:left;" width="500px;">
						<tr>
							<th>Judul</th>
							<th>NIK</th>
							<th>Nilai Angka</th>
							<th>Nilai Huruf</th>
							<th colspan="2">Action</th>
						</tr>
						<?php foreach($test->Selectp() as $value){ ?>
						<tr>
							<td><?php echo $value['judul']; ?></td>
							<td><?php echo $value['NIK']; ?></td>
							<td><?php echo $value['Nilaiangka']; ?></td>
							<td><?php echo $value['nilaiHuruf']; ?></td>
							<td><a href="up.php?id=<?php echo $value['id']; ?>">Edit</a></td>
							<td><a href="del.php?id=<?php echo $value['id']; ?>">Delete</a></td>
						</tr>
						<?php } ?>
					</table>
			</td>
		</tr>
	</table>
</body>
</html>