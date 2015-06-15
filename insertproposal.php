<?php
require( 'database.php' );
$judul = isset($_GET['judul']) ? $_GET['judul'] : '';
$NIK = isset($_GET['NIK']) ? $_GET['NIK'] : '';
$Nilaiangka = isset($_GET['Nilaiangka']) ? $_GET['Nilaiangka'] : '';
$nilaiHuruf = isset($_GET['nilaiHuruf']) ? $_GET['nilaiHuruf'] : '';

// eksekusi class
$test->Createp($judul,$NIK,$Nilaiangka,$nilaiHuruf);
?>

Kembali ke : <a href="proposal.php">Home</a>