<?php
require( 'database.php' );
$id = isset($_GET['id']) ? $_GET['id'] : '';
$NIK = isset($_GET['NIK']) ? $_GET['NIK'] : '';
$tanggal = isset($_GET['tanggal']) ? $_GET['tanggal'] : '';
$jam = isset($_GET['jam']) ? $_GET['jam'] : '';
$ruang = isset($_GET['ruang']) ? $_GET['ruang'] : '';

$test->epro($id,$NIK,$tanggal,$jam,$ruang);
?>
Kembali ke : <a href="seminar.php">Home</a>