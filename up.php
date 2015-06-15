<?php
require( 'database.php' );
$id = isset($_GET['id']) ? $_GET['id'] : '';
$test->Updatep($id);

// tampilkan data berdasarkan where
foreach($test->Updatep($id) as $value){
    $judul = $value['judul'];
    $NIK = $value['NIK'];
	$Nilaiangka = $value['Nilaiangka'];
    $nilaiHuruf = $value['nilaiHuruf'];
    $id = $value['id'];
}
?>

<b>Edit user</b>
<form action="up-pro.php" method="get">
  <input type="hidden" value="<?php echo $id; ?>" name="id" />
  <table border="0">
    <tr>
      <td>judul</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $judul; ?>" name="judul" /></td>
    </tr>
    <tr>
      <td>NIK</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $NIK; ?>" name="NIK" /></td>
    </tr>
	 <tr>
      <td>Nilaiangka</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $Nilaiangka; ?>" name="Nilaiangka" /></td>
    </tr>
    <tr>
      <td>nilaiHuruf</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $nilaiHuruf; ?>" name="nilaiHuruf" /></td>
    </tr>
    <tr>
      <td><input type="submit" value="Update" name="Update" /></td>
    </tr>
  </table>
</form>
