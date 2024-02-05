<!-- ubah_mobil.php -->

<?php
include_once("koneksi.php");

if (isset($_GET['no_pemesan'])) {
    $no_pemesan = $_GET['no_pemesan'];
    
    $qry = "SELECT * FROM pemesan WHERE no_pemesan = '$no_pemesan'";
    $result = mysqli_query($con, $qry);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit pemesan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Pemesan</h2>
    <form action="proses_ubah_pemesan.php" method="POST">
        <div class="form-group">
            <label for="no_mobil">No Pemesan:</label>
            <input type="text" class="form-control" id="no_pemesan" name="no_pemesan" value="<?php echo $data['no_pemesan']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nm_pemesan">Nama Pemesan:</label>
            <input type="text" class="form-control" id="nm_pemesan" name="nm_pemesan" value="<?php echo $data['nm_pemesan']; ?>">
        </div>
        
        <div class="form-group">
            <label for="hp_pememsan">Hp Pemesan:</label>
            <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" value="<?php echo $data['hp_pemesan']; ?>">
        </div>
        <div class="form-group">
            <label for="alamat_pemesan">Alamat Pemesan:</label>
            <input type="text" class="form-control" id="alamat_pemesan" name="alamat_pemesan" value="<?php echo $data['alamat_pemesan']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">ganti</button>
    </form>
</div>

</body>
</html>

<?php
    } else {
        echo "Gagal mengambil data dari database. Error: " . mysqli_error($con);
    }
} else {
    echo "ID tidak valid.";
}
?>