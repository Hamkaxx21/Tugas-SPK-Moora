<?php
session_start();
include_once '../db/koneksi.php';

$id_kerja   = $_GET['id_kerja'];
$sql          = "DELETE FROM kriteriajamkerja WHERE id_kerja = '$id_kerja' ";
$query        = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
