<?php include_once 'atribut/head.php'; ?>
<?php include_once 'validasi.php'; ?>

<?php
$id_user    = $_GET['id_user'];
$sql        = "SELECT * FROM user_acc WHERE id_user= '$id_user'";
$query      = mysqli_query($konek, $sql);
$row        = mysqli_fetch_array($query);
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

      <!-- Begin Page Content -->
      <div class="col">
      <div class="container">
        <!-- <div class="row"> -->

        <div class="col-xl-12  col-lg-8">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
              <h5 class="m-0 font-weight-bold text-primary"> <b> Ubah detail Akun </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post" >
                <div class="form-group ">
                  <label class="control-label">ID Account</label>
                  <div class="col">
                    <input class="form-control  " type="text" name="id_user" value="<?php echo $row['id_user']; ?>"
                      readonly="readonly">
                  </div>
                </div>
                <div class="form-group ">
                  <label class="control-label">Nama User</label>
                  <div class="col">
                    <input class="form-control  " type="text" name="nama_user" value="<?php echo $row['nama_user']; ?>"
                      required>
                  </div>
                </div>
                <div class="form-row">
                <div class="form-group col-sm-6 col-sm-6">
                  <label class="control-label col">Username</label>
                  <div class="col">
                    <input class="form-control type="text" name="username" required value="<?php echo $row['username']; ?>">
                  </div>
                </div>
                <div class="form-group col-sm-6 col-sm-6">
                  <label class="control-label col">Password</label>
                  <div class="col">
                    <input class="form-control" type="password" name="password"  required >
                  </div>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label col-md-12 col-sm-12 col-xs-12">Level Akun</label> 
                <div class="input-group-prepend col-sm-1 col-sm-3 col-sm-3 ">
                <select class="custom-select" type=text name="level"  required value="<?php echo $row['level']; ?>">
                  <option value="User">User</option>
                </select>
              </div>
                </div>
                <div class="mb-4"></div>
                <!-- Button -->
                <div class = "container">
                <div class ="col text-center mb-4">
                <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                <a href="registrasi_user.php">
                  <button type="button" name="button" class="btn btn-danger">Batal</button>
                </a>


                

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Page Content -->
<!-- end -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->


</body>

</html>

<?php
//proses Input
if (isset($_POST['simpan'])) {
  $id_user   = $_POST['id_user'];
  $nama_user   = $_POST['nama_user'];
  $username = $_POST['username'];
  $password     =  md5($_POST['password']);
  $level  = $_POST['level'];

  $query = "UPDATE user_acc SET username = '$username', nama_user = '$nama_user', password = '$password', level = '$level' WHERE id_user = '$id_user'";
  $simpan = $konek->query($query);
  if ($simpan === true)
   {
    echo "<script>alert('Data Berhasil Di Ubah') </script>";
		echo "<script>window.location.href = \"registrasi_user.php\" </script>";
  }
  else {
    echo "<script>alert('Data Gagal Di Ubah') </script>";
		echo "<script>window.location.href = \"registrasi_user.php\" </script>";
  }
}
 ?>
 