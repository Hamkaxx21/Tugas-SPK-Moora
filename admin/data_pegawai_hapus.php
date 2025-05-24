<?php
session_start();
include_once '../db/koneksi.php';

$id_pegawai   = $_GET['id_pegawai'];

// Get all id_alternatif for this employee
$sql_get_alternatif = "SELECT id_alternatif FROM moo_alternatif WHERE id_pegawai = '$id_pegawai'";
$result_alternatif = mysqli_query($konek, $sql_get_alternatif);

if ($result_alternatif) {
    $id_alternatif_list = [];
    while ($row = mysqli_fetch_assoc($result_alternatif)) {
        $id_alternatif_list[] = $row['id_alternatif'];
    }

    if (count($id_alternatif_list) > 0) {
        $id_alternatif_str = implode(',', $id_alternatif_list);

        // Delete from moo_nilai where Id_alternatif in the list
        $sql_delete_nilai = "DELETE FROM moo_nilai WHERE Id_alternatif IN ($id_alternatif_str)";
        $query_delete_nilai = mysqli_query($konek, $sql_delete_nilai);

        if (!$query_delete_nilai) {
            echo "<script>alert('Gagal menghapus data nilai terkait') </script>";
            echo "<script>window.location.href = \"data_pegawai.php\" </script>";
            exit;
        }
    }

    // Delete from moo_alternatif for this employee
    $sql_delete_alternatif = "DELETE FROM moo_alternatif WHERE id_pegawai = '$id_pegawai'";
    $query_delete_alternatif = mysqli_query($konek, $sql_delete_alternatif);

    if (!$query_delete_alternatif) {
        echo "<script>alert('Gagal menghapus data alternatif terkait') </script>";
        echo "<script>window.location.href = \"data_siswa.php\" </script>";
        exit;
    }

    // Delete from data_pegawai
    $sql_delete_pegawai = "DELETE FROM data_siswa WHERE id_pegawai = '$id_pegawai'";
    $query_delete_pegawai = mysqli_query($konek, $sql_delete_pegawai);

    if ($query_delete_pegawai) {
        echo "<script>alert('Data Berhasil Di Hapus') </script>";
        echo "<script>window.location.href = \"data_pegawai.php\" </script>";
    } else {
        echo "<script>alert('Data Pegawai Gagal Di Hapus') </script>";
        echo "<script>window.location.href = \"data_pegawai.php\" </script>";
    }
} else {
    echo "<script>alert('Gagal mengambil data alternatif') </script>";
    echo "<script>window.location.href = \"data_pegawai.php\" </script>";
}
?>
