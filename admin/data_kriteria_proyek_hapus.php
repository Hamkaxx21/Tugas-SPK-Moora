<?php
session_start();
include_once '../db/koneksi.php';

$id_proyek   = $_GET['id_proyek'];
$sql        = "DELETE FROM kriteriajumlahproyek WHERE id_proyek = '$id_proyek' ";
$query      = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
