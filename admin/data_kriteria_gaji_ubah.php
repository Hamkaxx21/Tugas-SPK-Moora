<?php include_once 'atribut/head.php'; ?>

<?php
$id_gaji = $_GET['id_gaji'];
$sql    = "SELECT * FROM kriteriagajibulanan WHERE id_gaji = '$id_gaji'";
$query  = mysqli_query($konek, $sql);
$row    = mysqli_fetch_array($query);
if (!$row) {
  echo "<script>alert('Data tidak ditemukan'); window.location.href='data_kriteria.php';</script>";
  exit;
}
?>


<!-- Page Wrapper -->
<div id="wrapper">
  <!-- begin:: siderbar -->
  <?php include_once 'atribut/sidebar.php'; ?>
  <!-- end:: siderbar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      
      <?php include_once 'atribut/navbar.php'; ?>
      <!-- begin:: content -->
      <div class="container-fluid">
        <!-- <div class="row"> -->
        <div class="col-xl-12  col-lg-8">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h5 class="m-0 font-weight-bold text-primary"> <b> Ubah Data Kriteria Gaji Bulanan </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">No</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="id_gaji" value="<?php echo $row['id_gaji']; ?>"
                      readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Penghasilan Orang Tua</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="gaji_bulanan" value="<?php echo $row['gaji_bulanan']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nilai</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="number" name="nilai" value="<?php echo $row['nilai']; ?>">
                  </div>
                </div>
                <!-- Button -->
                <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
                <a href="data_kriteria.php">
                  <button type="button" name="button" class="btn btn-danger">Batal</button>
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end:: content -->
    </div>
  </div>
</div>
<!-- End of Page Content -->
<!-- end -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php include_once 'atribut/foot.php'; ?>

<?php

if (isset($_POST['simpan'])) {
  $id_gaji    = $_POST ['id_gaji'];
  $gaji_bulanan      = $_POST ['gaji_bulanan'];
  $nilai      = $_POST ['nilai'];

  $query = "UPDATE kriteriagajibulanan SET gaji_bulanan = '$gaji_bulanan', nilai = '$nilai' WHERE id_gaji = '$id_gaji'";
  $simpan = mysqli_query($konek, $query);
  if ($simpan === true) {
    echo "<script>alert('Kriteria Berhasil Di Ubah') </script>";
    echo "<script>window.location.href = \"data_kriteria.php\" </script>";
  }
  else {
    echo "<script>alert('Kriteria Gagal Di Ubah') </script>";
    echo "<script>window.location.href = \"data_kriteria.php\" </script>";
  }
}
