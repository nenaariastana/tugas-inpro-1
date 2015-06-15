<?php
require( 'database.php' );
$id = isset($_GET['id']) ? $_GET['id'] : '';
$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : '';

$test->UpdateSave($id,$nama,$alamat);
?>
Kembali ke : <a href="index.php">Home</a>