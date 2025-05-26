<?php include_once 'atribut/head.php'; ?>

<?php
// Generate new id_pegawai automatically
$sql = "SELECT MAX(id_pegawai) AS maxid FROM data_siswa";
$carkod = mysqli_query($konek, $sql);
$datkod = mysqli_fetch_array($carkod, MYSQLI_ASSOC);
if ($datkod) {
  $nilkod  = $datkod['maxid'];
  $kode    = $nilkod + 1;
  $kodeoto = $kode;
} else {
  $kodeoto = "1";
}
?>

<!-- Page Wrapper -->
<div id="wrapper">
  <!-- begin:: sidebar -->
  <?php include_once 'atribut/sidebar.php'; ?>
  <!-- end:: sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">

      <?php include_once 'atribut/navbar.php'; ?>

      <!-- Begin Page Content -->
      <div class="col">
        <div class="container">
          <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary"><b> Tambah Data Pegawai </b></h5>
              </div>
              <div class="card-body">
                <form class="form" method="post">
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Id Pegawai</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" type="text" name="id_pegawai" value="<?= $kodeoto ?>" readonly="readonly">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Pegawai</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" type="text" name="namapegawai" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Jam Kerja</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" type="number" name="jam_kerja" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Jumlah Proyek</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" type="number" name="jumlah_proyek" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Jam Lembur</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" type="number" name="jam_lembur" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Hari Sakit</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" type="number" name="hari_sakit" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Gaji Bulanan</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" type="number" name="gaji_bulanan" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-12 col-sm-12 col-xs-12">Jam Training</label>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input class="form-control" type="number" name="jam_training" required>
                    </div>
                  </div>

                  <br>

                  <div class="col text-center mt-3 mb-3">
                    <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                    <a href="data_pegawai.php" class="btn btn-danger">Batal</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Page Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php include_once 'atribut/foot.php'; ?>

<?php
if (isset($_POST['simpan'])) {
  $id_pegawai    = $_POST['id_pegawai'];
  $namapegawai   = $_POST['namapegawai'];
  $jam_kerja     = $_POST['jam_kerja'];
  $jumlah_proyek = $_POST['jumlah_proyek'];
  $jam_lembur    = $_POST['jam_lembur'];
  $hari_sakit    = $_POST['hari_sakit'];
  $gaji_bulanan  = $_POST['gaji_bulanan'];
  $jam_training  = $_POST['jam_training'];

  $query = "INSERT INTO data_siswa (id_pegawai, namapegawai, jam_kerja, jumlah_proyek, jam_lembur, hari_sakit, gaji_bulanan, jam_training) VALUES ('$id_pegawai', '$namapegawai', '$jam_kerja', '$jumlah_proyek', '$jam_lembur', '$hari_sakit', '$gaji_bulanan', '$jam_training')";
  $simpan = $konek->query($query);
  if ($simpan === true) {
    echo "<script>alert('Data Berhasil Ditambahkan') </script>";
    echo "<script>window.location.href = \"data_pegawai.php\" </script>";
  } else {
    echo "<script>alert('Data Gagal Ditambahkan') </script>";
    echo "<script>window.location.href = \"data_pegawai.php\" </script>";
  }
}
?>

<script>
function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
  return true;
}

function isNumericKey(evt) {
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
    return true;
  return false;
}
</script>
