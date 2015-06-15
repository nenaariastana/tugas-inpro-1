<?php
require( 'database.php' );
$NIK = isset($_GET['NIK']) ? $_GET['NIK'] : '';
$tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : '';
$jam = isset($_GET['jam']) ? $_GET['jam'] : '';
$ruang = isset($_GET['ruang']) ? $_GET['ruang'] : '';

// eksekusi class
$test->Tambah($NIK,$tanggal,$jam,$ruang);
?>

Kembali ke : <a href="seminar.php">Home</a>