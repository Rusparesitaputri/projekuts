<?php
require_once '../database/dbkoneksi.php';
?>
<?php
$_kode = $_POST['nama'];
$_nama = $_POST['ukuran'];
$_harga_jual = $_POST['warna'];
$_harga_beli = $_POST['stok'];
$_stok = $_POST['harga'];
$_min_stok = $_POST['tipe_pakaian_id'];


$_proses = $_POST['proses'];

// array data
$ar_data[] = $_nama; // ? 1
$ar_data[] = $_ukuran; // ? 2
$ar_data[] = $_warna; // 3
$ar_data[] = $_stok_beli;
$ar_data[] = $_harga;
$ar_data[] = $_tipe_pakaian_id;

if ($_proses == "Simpan") {
   // data baru
   $query = "INSERT INTO produk (nama,ukuran,warna,stok,harga,tipe_pakaian_id) VALUES (?,?,?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit']; // ? 8
   $query = "UPDATE produk SET nama=?ukuran=?,warna=?,
    stok=?,harga=?,tipe_pakaian_id=?, WHERE id=?";
}
if (isset($query)) {
   $st = $dbh->prepare($query);
   $st->execute($ar_data);
}

header('location:../pages/pakaian.php');
?>