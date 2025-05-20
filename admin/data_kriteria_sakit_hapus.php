<?php
session_start();
include_once '../db/koneksi.php';

$id_sakit  = $_GET['id_sakit'];
$sql           = "DELETE FROM kriteriaharisakit WHERE id_sakit = '$id_sakit' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
