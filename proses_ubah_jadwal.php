<!-- proses_ubah_mobil.php -->

<?php
include_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan data yang dikirim menggunakan metode POST

    $id_jadwal = $_POST['id_jadwal'];
    $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $jam_pemesanan = $_POST['jam_pemesanan'];
    $jam_pengembalian = $_POST['jam_pengembalian'];

    // Lakukan validasi data jika diperlukan

    // Update data ke database
    $update_query = "UPDATE jdwlrental SET tanggal_pemesanan ='$tanggal_pemesanan', tanggal_pengembalian='$tanggal_pengembalian', jam_pemesanan='$jam_pemesanan', jam_pengembalian='$jam_pengembalian' WHERE id_jadwal='$id_jadwal'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        // Jika berhasil, arahkan kembali ke halaman utama
        header("Location: jadwalrental.php");
        exit();
    } else {
        echo "Gagal menyimpan perubahan. Error: " . mysqli_error($con);
    }
} else {
    echo "Metode pengiriman data tidak valid.";
}
?>

