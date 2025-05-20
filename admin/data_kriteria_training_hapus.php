<?php
session_start();
include_once '../db/koneksi.php';

$id_training   = $_GET['id_training'];
$sql        = "DELETE FROM kriteriajamtraining WHERE id_training = '$id_training' ";
$query      = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
