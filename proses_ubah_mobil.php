<!-- proses_ubah_mobil.php -->

<?php
include_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan data yang dikirim menggunakan metode POST

    $kd_mobil = $_POST['kd_mobil'];
    $type_mobil = $_POST['type_mobil'];
    
    $tahun_mobil = $_POST['tahun_mobil'];

    // Lakukan validasi data jika diperlukan

    // Update data ke database
    $update_query = "UPDATE jenismobil SET type_mobil ='$type_mobil', tahun_mobil='$tahun_mobil' WHERE kd_mobil='$kd_mobil'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        // Jika berhasil, arahkan kembali ke halaman utama
        header("Location: daftarmobil.php");
        exit();
    } else {
        echo "Gagal menyimpan perubahan. Error: " . mysqli_error($con);
    }
} else {
    echo "Metode pengiriman data tidak valid.";
}
?>