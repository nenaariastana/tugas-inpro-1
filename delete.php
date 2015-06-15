<?php
require( 'database.php' );
$id = isset($_GET['id']) ? $_GET['id'] : '';
$test->Delete($id);
?>
Kembali ke : <a href="index.php">Home</a>