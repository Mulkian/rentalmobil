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
    $no_pemesan = $_POST["no_pemesan"];
    $nm_pemesan = $_POST["nm_pemesan"];
    $hp_pemesan = $_POST["hp_pemesan"];
    $alamat_pemesan = $_POST["alamat_pemesan"];

    // Perform database insertion (replace this with your actual database insert code)
    $insert_query = "INSERT INTO pemesan (no_pemesan, nm_pemesan, hp_pemesan, alamat_pemesan) VALUES ('$no_pemesan', '$nama_pemesan', '$hp_pemesan','$alamat_pemesan')";
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
  <title>AdminLTE 3 | Tambah Pemesan</title>
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
            <h1>Tambah Pemesan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Pemesan</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-body">
          <form action="proses_tambah_pemesan.php" method="post">
            <div class="form-group">
              <label for="no_pemesan">No Pemesan:</label>
              <input type="text" name="no_pemesan" id="no_pemesan" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="nm_pemesan">Nama Pemesan:</label>
              <input type="text" name="nm_pemesan" id="nm_pemesan" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="hp_pemesan">HP Pemesan:</label>
              <input type="text" name="hp_pemesan" id="hp_pemesan" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="alamat_pemesan">Alamat Pemesan:</label>
              <input type="text" name="alamat_pemesan" id="alamat_pemesan" class="form-control" required>
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
