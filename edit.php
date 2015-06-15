<?php
require( 'database.php' );
$id = isset($_GET['id']) ? $_GET['id'] : '';
$test->edit($id);

// tampilkan data berdasarkan where
foreach($test->edit($id) as $value){
    $NIK = $value['NIK'];
    $tanggal = $value['tanggal'];
	$jam = $value['jam'];
    $ruang = $value['ruang'];
    $id = $value['id'];
}
?>
<b>Edit user</b>
<form action="epro.php" method="get">
  <input type="hidden" value="<?php echo $id; ?>" name="id" />
  <table border="0">
    <tr>
      <td>NIK</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $NIK; ?>" name="NIK" /></td>
    </tr>
    <tr>
      <td>Tanggal</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $tanggal; ?>" name="tanggal" /></td>
    </tr>
	 <tr>
      <td>jam</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $jam; ?>" name="jam" /></td>
    </tr>
    <tr>
      <td>Ruang</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $ruang; ?>" name="ruang" /></td>
    </tr>
    <tr>
      <td><input type="submit" value="Update" name="Update" /></td>
    </tr>
  </table>
</form>