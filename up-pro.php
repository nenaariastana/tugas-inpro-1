<?php
require( 'database.php' );
$id = isset($_GET['id']) ? $_GET['id'] : '';
$judul = isset($_GET['judul']) ? $_GET['judul'] : '';
$NIK = isset($_GET['NIK']) ? $_GET['NIK'] : '';
$Nilaiangka = isset($_GET['Nilaiangka']) ? $_GET['Nilaiangka'] : '';
$nilaiHuruf = isset($_GET['nilaiHuruf']) ? $_GET['nilaiHuruf'] : '';

$test->UpdateSavep($id,$judul,$NIK,$nilaiHuruf,$Nilaiangka,$nilaiHuruf);
?>
Kembali ke : <a href="proposal.php">Home</a>