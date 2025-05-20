<?php
session_start();
include_once '../db/koneksi.php';

$id_kriteria   = $_GET['id_kriteria'];

// First delete dependent rows in moo_nilai
$sql_nilai = "DELETE FROM moo_nilai WHERE Id_kriteria = '$id_kriteria'";
$query_nilai = mysqli_query($konek, $sql_nilai);

if ($query_nilai) {
    // Now delete from moo_kriteria
    $sql = "DELETE FROM moo_kriteria WHERE id_kriteria = '$id_kriteria'";
    $query = mysqli_query($konek, $sql);
    if ($query) {
        echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
        echo "<script>window.location.href = \"data_kriteria.php\" </script>";
    } else {
        echo "<script>alert('Data Kriteria Belum Terhapus')</script>";
        echo "<script>window.location.href = \"data_kriteria.php\" </script>";
    }
} else {
    echo "<script>alert('Gagal menghapus data terkait di moo_nilai')</script>";
    echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
