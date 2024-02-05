<!-- ubah_mobil.php -->

<?php
include_once("koneksi.php");

if (isset($_GET['id_jadwal'])) {
    $id_jadwal = $_GET['id_jadwal'];
    
    $qry = "SELECT * FROM jdwlrental WHERE id_jadwal = '$id_jadwal'";
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
    <form action="proses_ubah_jadwal.php" method="POST">
        <div class="form-group">
            <label for="id_jadwal">Id Jadwal:</label>
            <input type="text" class="form-control" id="id_jadwal" name="id_jadwal" value="<?php echo $data['id_jadwal']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="tanggal_pemesanan">Tanggal Pemesanan:</label>
            <input type="text" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" value="<?php echo $data['tanggal_pemesanan']; ?>">
        </div>
        
        <div class="form-group">
            <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
            <input type="text" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?php echo $data['tanggal_pengembalian']; ?>">
        </div>
        <div class="form-group">
            <label for="jam_pemesanan">Jam Pemesanan:</label>
            <input type="text" class="form-control" id="jam_pemesanan" name="jam_pemesanan" value="<?php echo $data['jam_pemesanan']; ?>">
        </div>
        <div class="form-group">
            <label for="jam_pengembalian">Jam Pengembalian:</label>
            <input type="text" class="form-control" id="jam_pengembalian" name="jam_pengembalian" value="<?php echo $data['jam_pengembalian']; ?>">
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