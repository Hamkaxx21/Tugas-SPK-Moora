<?php include_once 'atribut/head.php'; ?>
<?php


$id_siswa = $_GET['id_pegawai'];
$sql     = "SELECT * FROM data_siswa WHERE id_pegawai= '$id_siswa'";
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
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Detail Pegawai </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-outline-dark font-weight-bold" href="data_pegawai.php"><span class="icon "><i class="fas fa-arrow-left mr-lg-2"></i>Kembali</a>
                 
                    <a class="btn btn-outline-primary font-weight-bold" href="data_pegawai_ubah.php?id_pegawai=<?php echo $row['id_pegawai'] ?>"><span class="icon ">
                              <i class="fas fa-edit mr-lg-2"></i>
                            </span>Ubah Data Pegawai</a>

                  </div>

                </div>
              </div>
              <div class="card-body" style="background-color: #ecf0f1;">
                <div class=" ml-4">
                  <div class="col  ">
                    <div class=" mt-md-4 mb-4">
                      <h5>Id Pegawai</h5>
                      <?= $row['id_pegawai'] ?>
                      <div class=" mt-md-4 mb-4">
                        <h5>Nama Pegawai</h5>
                        <?= $row['namapegawai'] ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Jam Kerja</h5>
                        <?= $row['jam_kerja'] ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Jumlah Proyek</h5>
                        <?= ($row['jumlah_proyek']) ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Hari Sakit</h5>
                        <?php echo ($row['hari_sakit']) ?>
                      </div>
                      <div class=" mt-md-4 mb-4">
                        <h5>Gaji Bulanan</h5>
                        <?= ($row['gaji_bulanan']) ?>
                        <div class=" mt-md-4 mb-4">
                          <h5>Jam Training</h5>
                          <?= ($row['jam_training']) ?>
                          <!-- <h2>Pictures</h2> -->


                        </div>
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