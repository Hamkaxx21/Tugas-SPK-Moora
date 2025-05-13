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
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-primary"> <b> Perhitungan dengan metode MOORA </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <form method="post">
                      <input type="submit" name="kosongkan" value="Kosongkan Tabel" class="btn btn-danger shadow rounded mr-1">
                      <input type="submit" name="proses" value="Hitung!" class="btn btn-primary shadow rounded mr-1">
                      <a class="btn btn-dark rounded shadow" href="perangkingan.php">
                              <i class="fas fa-trophy mr-lg-2"></i>Perangkingan</a>
                    </form>
                    
                  </div>
                </div>
              </div>

              <?php include_once 'metode_hasil.php'; ?>

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

<?php
if (isset($_POST['proses'])) {

  // Query to get employee data from new schema
  $sql = "SELECT * FROM data_siswa ORDER BY id_pegawai ASC";
  $result = $konek->query($sql);
  $data_post = [];
  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $data_post[] = array(
      'id_alternatif' => $row['id_pegawai'],
      'id_pegawai' => $row['id_pegawai'],
      'namapegawai' => $row['namapegawai'],
      'jam_kerja' => $row['jam_kerja'],
      'jumlah_proyek' => $row['jumlah_proyek'],
      'jam_lembur' => $row['jam_lembur'],
      'hari_sakit' => $row['hari_sakit'],
      'gaji_bulanan' => $row['gaji_bulanan'],
      'jam_training' => $row['jam_training']
    );
  }

  // Get criteria ids and weights from moo_kriteria
  $query_k = $konek->query('SELECT * FROM moo_kriteria ORDER BY id_kriteria ASC');
  $id_kriteria = [];
  $bobot_kriteria = [];
  $type_kriteria = [];
  while ($row_k = $query_k->fetch_array(MYSQLI_ASSOC)) {
    $id_kriteria[] = $row_k['id_kriteria'];
    $bobot_kriteria[$row_k['id_kriteria']] = $row_k['bobot'];
    $type_kriteria[$row_k['id_kriteria']] = $row_k['type'];
  }

  foreach ($data_post as $key => $value) {
    // Map employee attributes to nilai values based on criteria
    // Assuming criteria order: C1: Gaji bulanan (Cost), C2: Hari sakit (Cost), C3: Jam kerja perminggu (Benefit), C4: Jumlah proyek (Benefit), C5: Jam lembur (Benefit), C6: Waktu training (Benefit)

    // For Gaji bulanan (Cost) - lower is better
    if ($value['gaji_bulanan'] <= 5000) {
      $gaji_nilai = 40;
    } else if ($value['gaji_bulanan'] <= 6500) {
      $gaji_nilai = 30;
    } else if ($value['gaji_bulanan'] <= 8000) {
      $gaji_nilai = 20;
    } else {
      $gaji_nilai = 10;
    }

    // For Hari sakit (Cost) - lower is better
    if ($value['hari_sakit'] <= 3) {
      $sakit_nilai = 40;
    } else if ($value['hari_sakit'] <= 7) {
      $sakit_nilai = 30;
    } else if ($value['hari_sakit'] <= 10) {
      $sakit_nilai = 20;
    } else {
      $sakit_nilai = 10;
    }

    // For Jam kerja perminggu (Benefit) - higher is better
    if ($value['jam_kerja'] >= 60) {
      $kerja_nilai = 40;
    } else if ($value['jam_kerja'] >= 50) {
      $kerja_nilai = 30;
    } else if ($value['jam_kerja'] >= 40) {
      $kerja_nilai = 20;
    } else {
      $kerja_nilai = 10;
    }

    // For Jumlah proyek (Benefit) - higher is better
    if ($value['jumlah_proyek'] >= 42) {
      $proyek_nilai = 40;
    } else if ($value['jumlah_proyek'] >= 32) {
      $proyek_nilai = 30;
    } else if ($value['jumlah_proyek'] >= 20) {
      $proyek_nilai = 20;
    } else {
      $proyek_nilai = 10;
    }

    // For Jam lembur (Benefit) - higher is better
    if ($value['jam_lembur'] >= 22) {
      $lembur_nilai = 40;
    } else if ($value['jam_lembur'] >= 15) {
      $lembur_nilai = 30;
    } else if ($value['jam_lembur'] >= 8) {
      $lembur_nilai = 20;
    } else {
      $lembur_nilai = 10;
    }

    // For Waktu training (Benefit) - higher is better
    if ($value['jam_training'] >= 76) {
      $training_nilai = 40;
    } else if ($value['jam_training'] >= 51) {
      $training_nilai = 30;
    } else if ($value['jam_training'] >= 26) {
      $training_nilai = 20;
    } else {
      $training_nilai = 10;
    }

    $nilai = array(
      $gaji_nilai,
      $sakit_nilai,
      $kerja_nilai,
      $proyek_nilai,
      $lembur_nilai,
      $training_nilai
    );

    // Insert into moo_alternatif
    $sql = "INSERT INTO moo_alternatif (id_alternatif, id_pegawai, namapegawai, jam_kerja, jumlah_proyek, jam_lembur, hari_sakit, gaji_bulanan, jam_training) VALUES (
      '{$value['id_alternatif']}', '{$value['id_pegawai']}', '{$value['namapegawai']}', '{$value['jam_kerja']}', '{$value['jumlah_proyek']}', '{$value['jam_lembur']}', '{$value['hari_sakit']}', '{$value['gaji_bulanan']}', '{$value['jam_training']}'
    )";
    $konek->query($sql);

    // Insert into moo_nilai
    for ($i = 0; $i < count($id_kriteria); $i++) {
      $sql = "INSERT INTO moo_nilai (Id_alternatif, Id_kriteria, nilai) VALUES ('{$value['id_alternatif']}', '{$id_kriteria[$i]}', '{$nilai[$i]}')";
      $konek->query($sql);
    }
  }

  echo "<script>alert('Perhitungan berhasil!');</script>";
  echo "<script>window.location.href = \"metode_proses.php\"</script>";

} else if (isset($_POST['kosongkan'])) {

  // Disable foreign key checks to allow truncation
  $konek->query("SET FOREIGN_KEY_CHECKS=0");
  $sql_k_moo_nilai = "TRUNCATE TABLE moo_nilai";
  $konek->query($sql_k_moo_nilai);
  $sql_k_moo_alternatif = "TRUNCATE TABLE moo_alternatif";
  $konek->query($sql_k_moo_alternatif);
  $konek->query("SET FOREIGN_KEY_CHECKS=1");

  echo "<script>alert('Berhasil mengosongkan tabel!')</script>";
  echo "<script>window.location.href = \"metode_proses.php\"</script>";
}
?>
