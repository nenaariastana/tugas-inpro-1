<?php
require( 'database.php' );
$id = isset($_GET['id']) ? $_GET['id'] : '';
$test->Deletep($id);
?>
Kembali ke : <a href="proposal.php">Home</a>