<?php
session_start(); 
if(!isset($_SESSION['sid']) AND !isset($_COOKIE['cid'])){
 ?>
 <script>
  document.location="login.php";
  </script>
  <?php
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Jadwal Rental</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Jadwal Rental</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
          <form action="process_jadwal_rental.php" method="post">
            <div class="form-group">
              <label for="tanggal_pemesanan">Tanggal Pemesanan:</label>
              <input type="date" name="tanggal_pemesanan" id="tanggal_pemesanan" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
              <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="jam_pemesanan">Jam Pemesanan:</label>
              <input type="time" name="jam_pemesanan" id="jam_pemesanan" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="jam_pengembalian">Jam Pengembalian:</label>
              <input type="time" name="jam_pengembalian" id="jam_pengembalian" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include_once('footer.php')?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
