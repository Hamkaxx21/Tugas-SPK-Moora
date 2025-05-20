<?php
session_start();
include_once '../db/koneksi.php';

$id_lembur = $_GET['id_lembur'];
$sql           = "DELETE FROM kriteriajamlembur WHERE id_lembur = '$id_lembur' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
