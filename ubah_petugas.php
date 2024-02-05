<!-- ubah_mobil.php -->

<?php
include_once("koneksi.php");

if (isset($_GET['id_petugas'])) {
    $id_petugas = $_GET['id_petugas'];
    
    $qry = "SELECT * FROM petugas WHERE id_petugas = '$id_petugas'";
    $result = mysqli_query($con, $qry);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit petugas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Petugas</h2>
    <form action="proses_ubah_petugas.php" method="POST">
        <div class="form-group">
            <label for="id_petugas">Id Petugas:</label>
            <input type="text" class="form-control" id="id_petugas" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nm_petugas">Nama Petugas:</label>
            <input type="text" class="form-control" id="nm_petugas" name="nm_petugas" value="<?php echo $data['nm_petugas']; ?>">
        </div>
        
        <div class="form-group">
            <label for="hp_petugas">Hp Petugas:</label>
            <input type="text" class="form-control" id="hp_petugas" name="hp_petugas" value="<?php echo $data['hp_petugas']; ?>">
        </div>
        <div class="form-group">
            <label for="alamat_petugas">Alamat Petugas:</label>
            <input type="text" class="form-control" id="alamat_petugas" name="alamat_petugas" value="<?php echo $data['alamat_petugas']; ?>">
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