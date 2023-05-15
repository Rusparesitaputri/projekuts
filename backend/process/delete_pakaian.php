<?php 
require_once '../database/dbkoneksi.php';
// tangkap iddel dari url
$id = $_GET['iddel'];
// bikin quey hapus data
$query = "DELETE FROM pakaian  WHERE id=?";
// prepare query
$st = $dbh->prepare($query);
// jalanin query
$st->execute([$id]);

// pindahin kel hal list_pelanggan
header('location:../pages/pakaian.php');
?>