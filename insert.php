<?php
require( 'database.php' );
$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : '';

// eksekusi class
$test->Create($nama,$alamat);
?>

Kembali ke : <a href="index.php">Home</a>