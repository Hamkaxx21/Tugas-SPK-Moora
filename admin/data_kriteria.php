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

      <!-- begin:: content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-xl-12">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col">
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Nilai kriteria </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-primary shadow" href="data_kriteria_tambah.php">
                      <span class="icon ">
                        <i class="fas fa-book mr-lg-2"></i>
                      </span>Tambah Kriteria</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table shadow table-bordered table table-striped table table-hover table-sm " width="100%" cellspacing="0">
                  <thead align="center" class="thead-dark">
                    <th> Kode </th>
                    <th> Kriteria </th>
                    <th> Type </th>
                    <th> Bobot </th>
                    <th> Aksi </th>
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
                        <td align="center" style="width: 15.66%">
                          <a class="btn btn-outline-primary btn-sm border-0" href="data_kriteria_ubah.php?id_kriteria=<?php echo $row['id_kriteria'] ?>">
                            <span class="icon">
                              <i class="fas fa-edit mr-2"></i>
                            </span>
                            Ubah
                            </button>
                            <a class="btn btn-outline-danger btn-sm border-0" href="data_kriteria_hapus.php?id_kriteria=<?php echo $row['id_kriteria'] ?>">
                              <span class="icon">
                                <i class="fas fa-trash"></i>
                              </span>
                              Hapus
                            </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-xl-12">
                <div class="card shadow mb-4">
                  <div class="card-header">
                    <div class="row">
                      <div class="col">
                        <h5 class="mt-2 font-weight-bold text-dark text-primary text-center"> <b> Nilai Sub-kriteria </b></h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-xl-6">
                <div class="card shadow mb-4">
                  <div class="card-header ">
                    <div class="row">
                      <div class="col-lg-6 col-xl-12">
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> 
                            <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 1";
                            $result = $konek->query($query);
                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                              $meaning = $row["kriteria"];
                              echo $meaning;
                            } ?>
                          </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_gaji_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 1";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?> </th>
                        <th> Nilai </th>
                        <th> Aksi </th>
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
                            <td align="center">
                            <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_gaji_ubah.php?id_gaji=<?php echo $row['id_gaji'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_gaji_hapus.php?id_gaji=<?php echo $row['id_gaji'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 2";
                                                                            $result = $konek->query($query);
                                                                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                                                              $meaning = $row["kriteria"];
                                                                              echo $meaning;
                                                                            } ?> </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_sakit_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 2";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?> </th>
                        <th> Nilai </th>
                        <th> Aksi </th>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM kriteriaharisakit";
                        $result = $konek->query($query);

                        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                          <tr>
                            <td align="center"><?php echo $row['id_sakit']; ?> </td>
                            <td align="center"><?php echo $row['hari_sakit']; ?></td>
                            <td align="center"><?php echo $row['nilai']; ?></td>
                            <td align="center">
                              <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_sakit_ubah.php?id_sakit=<?php echo $row['id_sakit'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_sakit_hapus.php?id_sakit=<?php echo $row['id_sakit'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 3";
                                                                            $result = $konek->query($query);
                                                                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                                                              $meaning = $row["kriteria"];
                                                                              echo $meaning;
                                                                            } ?> </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_kerja_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 3";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?> </th>
                        <th> Nilai </th>
                        <th> Aksi </th>
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
                            <td align="center">
                              <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_kerja_ubah.php?id_kerja=<?php echo $row['id_kerja'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_kerja_hapus.php?id_kerja=<?php echo $row['id_kerja'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 5";
                                                                            $result = $konek->query($query);
                                                                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                                                              $meaning = $row["kriteria"];
                                                                              echo $meaning;
                                                                            } ?> </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_lembur_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 5";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?></th>
                        <th> Nilai </th>
                        <th> Aksi </th>
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
                            <td align="center">
                              <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_lembur_ubah.php?id_lembur=<?php echo $row['id_lembur'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_lembur_hapus.php?id_lembur=<?php echo $row['id_lembur'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 6";
                                                                            $result = $konek->query($query);
                                                                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                                                              $meaning = $row["kriteria"];
                                                                              echo $meaning;
                                                                            } ?> </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_training_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 6";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?></th>
                        <th> Nilai </th>
                        <th> Aksi </th>
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
                            <td align="center">
                              <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_training_ubah.php?id_training=<?php echo $row['id_training'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_training_hapus.php?id_training=<?php echo $row['id_training'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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
                        <h5 class="mt-2 font-weight-bold text-primary"> <b> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 4";
                                                                            $result = $konek->query($query);
                                                                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                                                              $meaning = $row["kriteria"];
                                                                              echo $meaning;
                                                                            } ?> </b></h5>
                        <div class=" mt-2 col-lg-12 col-xl-12" style="text-align: right;">
                          <a class="btn btn-primary shadow" href="data_kriteria_proyek_tambah.php">
                            <span class="icon ">
                              <i class="fas fa-plus mr-lg-2"></i>
                            </span>Tambah</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table border="border-left-info" class="table table-bordered table-striped table table-hover table-sm" width="100%" cellspacing="0">
                      <thead align="center" class="thead-dark">
                        <!-- <th>Nomor</th> -->
                        <th> Nomor </th>
                        <th> <?php $query  = "SELECT * FROM moo_kriteria where id_kriteria = 4";
                              $result = $konek->query($query);
                              while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                $meaning = $row["kriteria"];
                                echo $meaning;
                              } ?></th>
                        <th> Nilai </th>
                        <th> Aksi </th>
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
                            <td align="center">
                              <a class="btn btn-outline-primary border-0 btn-sm" href="data_kriteria_proyek_ubah.php?id_proyek=<?php echo $row['id_proyek'] ?>">
                                <span class="icon">
                                  <i class="fas fa-edit"></i>
                                </span>
                              </a>
                              <a class="btn btn-outline-danger btn-sm border-0 btn-sm" href="data_kriteria_proyek_hapus.php?id_proyek=<?php echo $row['id_proyek'] ?>">
                                <span class="icon">
                                  <i class="fas fa-trash"></i>
                                </span>
                              </a>
                            </td>
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
