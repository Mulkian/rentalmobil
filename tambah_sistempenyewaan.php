<?php
session_start(); 
if(!isset($_SESSION['sid']) AND !isset($_COOKIE['cid'])){
 ?>
 <script>
  document.location="login.php";
  </script>
  <?php
 }

include_once("koneksi.php");

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kd_mobil = $_POST["kd_mobil"];
    $plat_mobil = $_POST["plat_mobil"];
    $lepas_kunci = $_POST["lepas_kunci"];
    $driver = $_POST["driver"];
    $non_driver = $_POST["non_driver"];

    // Perform database insertion (replace this with your actual database insert code)
    $insert_query = "INSERT INTO sistempenyewaan (kd_mobil, plat_mobil, lepas_kunci, driver, non_driver) VALUES ('$kd_mobil', '$plat_mobil', '$lepas_kunci','$driver','$non_driver')";
    mysqli_query($con, $insert_query);

    // Redirect to the page displaying the data table
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Lampiran Sistem Penyewaan</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include_once('navbar.php'); ?>
  <?php include_once('sidebar.php'); ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>tambah Sistem Penyewaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Sistem Penyewann</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-body">
          <form action="proses_tambah_sistempenyewaan.php" method="post">
            <div class="form-group">
              <label for="kd_mobil">Kd Mobil:</label>
              <input type="text" name="kd_mobil" id="kd_mobil" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="plat_mobil">Plat Mobil:</label>
              <input type="text" name="plat_mobil" id="plat_mobil" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="lepas_kunci">Lepas Kunci:</label>
              <input type="text" name="lepas_kunci" id="lepas_kunci" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="driver">Driver:</label>
              <input type="text" name="driver" id="driver" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="non_driver">Non driver:</label>
              <input type="text" name="non_driver" id="non_driver" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </section>
  </div>

  <?php include_once('footer.php')?>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
