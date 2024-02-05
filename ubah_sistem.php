<!-- ubah_sistem.php -->

<?php
include_once("koneksi.php");

if (isset($_GET['kd_mobil'])) {
    $kd_mobil = $_GET['kd_mobil'];
    
    $qry = "SELECT * FROM sistempenyewaan WHERE kd_mobil = '$kd_mobil'";
    $result = mysqli_query($con, $qry);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Jadwal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Jadwal</h2>
    <form action="proses_ubah_sistem.php" method="POST">
        <div class="form-group">
            <label for="kd_mobil">Kd Mobil:</label>
            <input type="text" class="form-control" id="kd_mobil" name="kd_mobil" value="<?php echo $data['kd_mobil']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="plat_mobil">Plat Mobil:</label>
            <input type="text" class="form-control" id="plat_mobil" name="plat_mobil" value="<?php echo $data['plat_mobil']; ?>">
        </div>
        
        <div class="form-group">
            <label for="lepas_kunci">Lepas Kunci:</label>
            <input type="text" class="form-control" id="lepas_kunci" name="lepas_kunci" value="<?php echo $data['lepas_kunci']; ?>">
        </div>
        <div class="form-group">
            <label for="driver">Driver:</label>
            <input type="text" class="form-control" id="driver" name="driver" value="<?php echo $data['driver']; ?>">
        </div>
        <div class="form-group">
            <label for="non_driver">JNon Driver:</label>
            <input type="text" class="form-control" id="non_driver" name="non_driver" value="<?php echo $data['non_driver']; ?>">
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