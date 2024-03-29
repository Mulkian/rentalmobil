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
    $id_petugas = $_POST["id_petugas"];
    $nm_petugas = $_POST["nm_petugas"];
    $hp_petugas = $_POST["hp_petugas"];
    $alamat_petugas = $_POST["alamat_petugas"];

    // Perform database insertion (replace this with your actual database insert code)
    $insert_query = "INSERT INTO petugas (id_petugas, nm_petugas, hp_petugas, alamat_petugas) VALUES ('$id_petugas', '$nama_petugas', '$hp_petugas','$alamat_petugas')";
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
  <title>AdminLTE 3 | Tambah Petugas</title>
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
            <h1>Tambah Petugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Petugas</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-body">
          <form action="proses_tambah_petugas.php" method="post">
            <div class="form-group">
              <label for="no_pemesan">Id Petugas:</label>
              <input type="text" name="id_petugas" id="id_petugas" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="nm_pemesan">Nama Petugas:</label>
              <input type="text" name="nm_petugas" id="nm_petugas" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="hp_pemesan">HP Petugas:</label>
              <input type="text" name="hp_petugas" id="hp_petugas" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="alamat_pemesan">Alamat Petugas:</label>
              <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control" required>
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
