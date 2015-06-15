<?php
require( 'database.php' );
$id = isset($_GET['id']) ? $_GET['id'] : '';
$test->Update($id);

// tampilkan data berdasarkan where
foreach($test->Update($id) as $value){
    $nama = $value['nama'];
    $alamat = $value['alamat'];
    $id = $value['id'];
}
?>
<b>Edit user</b>
<form action="update-proses.php" method="get">
  <input type="hidden" value="<?php echo $id; ?>" name="id" />
  <table border="0">
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $nama; ?>" name="nama" /></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><input type="text" value="<?php echo $alamat; ?>" name="alamat" /></td>
    </tr>
    <tr>
      <td><input type="submit" value="Update" name="Update" /></td>
    </tr>
  </table>
</form>