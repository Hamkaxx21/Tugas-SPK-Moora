<?php include_once 'atribut/head.php'; ?>

<link rel="stylesheet" type="text/css" href="../assets/datatables/dataTables.bootstrap4.min.css">

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
        <div class="row">
          <div class="col-lg-12 col-xl-12 ">
            <div class="card mb-4 shadow ">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Jenis Dan Bobot Kriteria </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0" id="dataTable">
                  <thead align="center" class="thead-dark">
                    <th> Kode </th>
                    <th> Kriteria </th>
                    <th> Type </th>
                    <th> Bobot </th>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM moo_kriteria";
                    $result = $konek->query($query);

                    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    ?>
                      <tr>
                        <td align="center"><?php echo $row['kode']; ?></td>
                        <td align="center"><?php echo $row['kriteria']; ?></td>
                        <td align="center"><?php echo $row['type']; ?></td>
                        <td align="center"><?php echo $row['bobot']; ?>%</td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header ">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b>Nilai Untuk Kriteria Gaji Bulanan</b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <th> Nomor </th>
                        <th> Gaji Bulanan </th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriagajibulanan";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_gaji']; ?></td>
                            <td align="center"><?php echo $row['gaji_bulanan']; ?></td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> Nilai Untuk Kriteria Hari Sakit </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <th> Nomor </th>
                        <th> Hari Sakit </th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriaharisakit";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_sakit']; ?></td>
                            <td align="center"><?php echo $row['hari_sakit']; ?></td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> Nilai Untuk Kriteria Jam Kerja Perminggu </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <th> Nomor </th>
                        <th> Jam Kerja </th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriajamkerja";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_kerja']; ?></td>
                            <td align="center"><?php echo $row['jam_kerja']; ?></td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> Nilai Untuk Kriteria Jumlah Proyek </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <th> Nomor </th>
                        <th> Jumlah Proyek </th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriajumlahproyek";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_proyek']; ?></td>
                            <td align="center"><?php echo $row['jumlah_proyek']; ?></td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> Nilai Untuk Kriteria Jam Lembur </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <th> Nomor </th>
                        <th> Jam Lembur </th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriajamlembur";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_lembur']; ?></td>
                            <td align="center"><?php echo $row['jam_lembur']; ?></td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> Nilai Untuk Kriteria Jam Training </b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <th> Nomor </th>
                        <th> Jam Training </th>
                        <th> Nilai </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriajamtraining";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_training']; ?></td>
                            <td align="center"><?php echo $row['jam_training']; ?></td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
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
<script src="../assets/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/datatables/dataTables.bootstrap4.js"></script>
