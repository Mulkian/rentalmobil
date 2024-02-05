<!-- proses_ubah_sistem.php -->

<?php
include_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan data yang dikirim menggunakan metode POST

    $kd_mobil = $_POST['kd_mobil'];
    $plat_mobil = $_POST['plat_mobil'];
    $lepas_kunci = $_POST['lepas_kunci'];
    $driver = $_POST['driver'];
    $non_driver = $_POST['non_driver'];

    // Lakukan validasi data jika diperlukan

    // Update data ke database
    $update_query = "UPDATE sistempenyewaan SET  plat_mobil ='$plat_mobil', lepas_kunci='$lepas_kunci' ,driver='$driver',non_driver='$non_driver' WHERE kd_mobil='$kd_mobil'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        // Jika berhasil, arahkan kembali ke halaman utama
        header("Location: daftarsistempenyewaan.php");
        exit();
    } else {
        echo "Gagal menyimpan perubahan. Error: " . mysqli_error($con);
    }
} else {
    echo "Metode pengiriman data tidak valid.";
}
?>