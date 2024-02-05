<?php
include_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- jsGrid -->
    <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once('navbar.php'); ?>

        <!-- Main Sidebar Container -->
        <?php include_once('sidebar.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Mobil Tersedia</h3>
                        <!-- Tambah Mobil Button -->
                        <a href="tambah_mobil.php" class="btn btn-primary float-right">Tambah Mobil</a>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>kode mobil</th>
                                    <th>Tipe Mobil</th>
                                    <th>Tahun Mobil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qry = "SELECT * FROM jenismobil";
                                $tampil = mysqli_query($con, $qry);
                                $nomor = 1;
                                foreach ($tampil as $data) {
                                ?>
                                    <tr>
                                        <td><?php echo $nomor++ ?></td>
                                        <td><?php echo $data['kd_mobil'] ?></td>
                                        <td><?php echo $data['type_mobil'] ?></td>
                                        <td><?php echo $data['tahun_mobil'] ?></td>
                                        <td><a href="ubah_mobil.php?kd_mobil=<?php echo $data['kd_mobil'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-alt"></i></a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>

        <!-- Include your script tags at the end of the body section -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="dist/js/adminlte.min.js"></script>
    </body>
</html>
