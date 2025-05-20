<?php
session_start();
include_once '../db/koneksi.php';

$id_gaji   = $_GET['id_gaji'];
$sql        = "DELETE FROM kriteriagajibulanan WHERE id_gaji = '$id_gaji' ";
$query      = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
