<?php
require( 'database.php' );
$id = isset($_GET['id']) ? $_GET['id'] : '';
$test->hapus($id);
?>
Kembali ke : <a href="seminar.php">Home</a>