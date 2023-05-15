<?php
require_once '../database/dbkoneksi.php';
?>
<?php
$_kode = $_POST['id'];
$_nama = $_POST['tipe'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_id; // ? 1
$ar_data[] = $_tipe; // ? 2




if ($_proses == "Simpan") {
   // data baru
   $query = "INSERT INTO tipe_pakaian (id,tipe) VALUES (?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit']; // ? 8
   $query = "UPDATE tipe_pakaian SET id=?,tipe=?, WHERE id=?";
}
if (isset($query)) {
   $st = $dbh->prepare($query);
   $st->execute($ar_data);
}

header('location:../pages/tipe_pakaian.php');
?>