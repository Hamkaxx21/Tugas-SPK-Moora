<?php include_once 'atribut/head.php'; ?>

<!-- Page Wrapper -->
<div id="wrapper">
  <!-- begin:: siderbar -->
  <?php include_once 'atribut/sidebar.php'; ?>
  <!-- end:: siderbar -->

  <div id="content-wrapper" class="d-flex flex-column">
    <!-- begin:: main content -->
    <div id="content">
      
      <?php include_once 'atribut/navbar.php'; ?>
      <link rel="stylesheet" type="text/css" href="../assets/datatables/dataTables.bootstrap4.css">
      <!-- begin:: content -->
      <div class = "container">
          <div class="row">
          <div class="col-lg-12 col-xl-12">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Daftar Karyawan </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-primary shadow" href="data_siswa_tambah.php">
                    <span class="icon ">
                              <i class="fas fa-user-plus mr-lg-2"></i>
                            </span>Tambah Data Karyawan</a>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive ">
                <table border="border-left-info" class=" shadow table table-bordered table-striped table table-hover table-sm " id="dataTable" >
                  <thead align="center" class="thead-light">
                    <th style="width: 3.66%">No</th>
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
                    <th style="width: 15.66%">Aksi</th>
                  </thead>
                  <tbody>
                    <?php
                      $query  = "SELECT * FROM data_siswa";
                      $result = $konek->query($query);
                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
                      <tr>
                      <td align="center" style="width: 1.66%"><?php echo $row['id_pegawai']; ?></td>
                      <td align="center" style="width: 55.66%"><?php echo $row['namapegawai']; ?></td>
                      <td align="center" style="width: 25.66%"><?php echo ($row['gaji_bulanan']);?></td>
                      <td align="center" style="width: 5.66%"><?php echo $row['jumlah_proyek']; ?></td>
                      <td align="center"><?php echo $row['hari_sakit']; ?></td>
                      <td align="center" style="width: 5.66%"><?php echo $row['jam_kerja']; ?></td>
                      <td align="center" style="width: 3.66%"><?php echo $row['jam_lembur']; ?></td>
                      <td align="center" style="width: 3.66%"><?php echo $row['jam_training']; ?></td>
                        <td align="center" style="width: 1.66%">
                          <a class="btn btn-outline-info btn-sm  border-0"
                            href="data_siswa_detail.php?id_pegawai=<?php echo $row['id_pegawai'] ?>">
                            <span class="icon">
                              <i class="fas fa-info-circle"></i>
                            </span>
                          </a>
                          <a class="btn btn-outline-info btn-sm  border-0"
                            href="data_siswa_ubah.php?id_pegawai=<?php echo $row['id_pegawai'] ?>">
                            <span class="icon">
                              <i class="fas fa-edit"></i>
                            </span>
                          </a>
                          <a class="btn btn-info  btn-sm btn-outline-danger border-0"
                            href="data_siswa_hapus.php?id_pegawai=<?php echo $row['id_pegawai'] ?>">
                            <span class="icon">
                              <i class="fas fa-trash"></i>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../assets/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/datatables/dataTables.bootstrap4.js"></script>
