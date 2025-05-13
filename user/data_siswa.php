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
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Pemilihan Karyawan</b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive">
                <table border="border-left-info" class="table table-bordered shadow table-striped table table-hover table-sm" id="dataTable">
                  <thead align="center" class="thead-light">
                    <th>No</th>
                    <th>Nama Karyawan</th>
                    <?php
                    $sqlNamakriteria = "SELECT * FROM moo_kriteria ORDER BY id_kriteria ASC";
                    $resultNamaKriteria = mysqli_query($konek, $sqlNamakriteria);
                    while ($hasilNamaKriteria = mysqli_fetch_assoc($resultNamaKriteria)) {
                    ?>
                      <th><?= $hasilNamaKriteria['kriteria'] ?></th>
                    <?php
                    }
                    ?>
                    <th>Detail</th>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM data_siswa";
                    $result = $konek->query($query);
                    while ($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                      <tr>
                        <td align="center"><?php echo $row['id_pegawai']; ?></td>
                        <td align="center"><?php echo $row['namapegawai']; ?></td>
                        <td align="center" style="width: 20.66%"> <?php echo ($row['gaji_bulanan']); ?></td>
                        <td align="center" style="width: 5.66%"><?php echo $row['hari_sakit']; ?></td>
                        <td align="center"><?php echo $row['jam_kerja']; ?></td>
                        <td align="center"><?php echo $row['jumlah_proyek']; ?></td>
                        <td align="center" style="width: 5.66%"><?php echo $row['jam_lembur']; ?></td>
                        <td align="center" style="width: 3.66%"><?php echo $row['jam_training']; ?></td>
                        <td align="center">
                          <a class="btn btn-info btn rounded-circle border-0 btn-outline-info" href="data_siswa_detail.php?id_pegawai=<?php echo $row['id_pegawai'] ?>">
                            <span class="icon ">
                              <i class="fas fa-info-circle"></i>
                            </span>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
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
