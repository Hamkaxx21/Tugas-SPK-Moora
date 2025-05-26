<?php include_once 'atribut/head.php'; ?>
<?php

$id_pegawai = $_GET['id_pegawai'];
$sql     = "SELECT * FROM data_siswa WHERE id_pegawai= '$id_pegawai'";
$query   = mysqli_query($konek, $sql);
$row     = mysqli_fetch_array($query);
?>

<!-- Page Wrapper -->
<div id="wrapper">
  <!-- begin:: siderbar -->
  <?php include_once 'atribut/sidebar.php'; ?>
  <!-- end:: siderbar -->

  <div id="content-wrapper" class="d-flex flex-column">
    <!-- begin:: main content -->
    <div id="content">

      <?php include_once 'atribut/navbar.php'; ?>

      <!-- begin:: content -->
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-lg-10 col-xl-10">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Detail Karyawan </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-danger" href="data_pegawai.php">Kembali</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class=" ml-4">
                  <div class="col  ">
                    <div class=" mt-md-4 mb-4">
                      <h5>Nomor Urut</h5>
                      <?= $row['id_pegawai'] ?>
                      <div class=" mt-md-4 mb-4">
                        <h5>Nama Lengkap Karyawan</h5>
                        <?= $row['namapegawai'] ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Jam Kerja Perminggu</h5>
                        <?= $row['jam_kerja'] ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Jumlah Proyek</h5>
                        <?= $row['jumlah_proyek'] ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Jam Lembur</h5>
                        <?= $row['jam_lembur'] ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Hari Sakit</h5>
                        <?= $row['hari_sakit'] ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Gaji Bulanan</h5>
                        <?= $row['gaji_bulanan'] ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Jam Training</h5>
                        <?= $row['jam_training'] ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end:: content -->
          </div>
          <!-- end:: main content -->
        </div>
      </div>
      <!-- End of Page Content -->

      <!-- end -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <?php include_once 'atribut/foot.php'; ?>
