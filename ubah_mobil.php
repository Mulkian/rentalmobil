<!-- ubah_mobil.php -->

<?php
include_once("koneksi.php");

if (isset($_GET['kd_mobil'])) {
    $kd_mobil = $_GET['kd_mobil'];
    
    $qry = "SELECT * FROM jenismobil WHERE kd_mobil = '$kd_mobil'";
    $result = mysqli_query($con, $qry);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Mobil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Mobil</h2>
    <form action="proses_ubah_mobil.php" method="POST">
        <div class="form-group">
            <label for="kd_mobil">Kode Mobil:</label>
            <input type="text" class="form-control" id="kd_mobil" name="kd_mobil" value="<?php echo $data['kd_mobil']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="type_mobil">Tipe Mobil:</label>
            <input type="text" class="form-control" id="type_mobil" name="type_mobil" value="<?php echo $data['type_mobil']; ?>">
        </div>
        
        <div class="form-group">
            <label for="tahun_mobil">Tahun Mobil:</label>
            <input type="text" class="form-control" id="tahun_mobil" name="tahun_mobil" value="<?php echo $data['tahun_mobil']; ?>">
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