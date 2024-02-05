<!-- proses_ubah_petugas.php -->

<?php
include_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan data yang dikirim menggunakan metode POST

    $id_petugas = $_POST['id_petugas'];
    $nm_petugas = $_POST['nm_petugas'];
    $hp_petugas = $_POST['hp_petugas'];
    $alamat_petugas = $_POST['alamat_petugas'];

    // Lakukan validasi data jika diperlukan

    // Update data ke database
    $update_query = "UPDATE petugas SET  nm_petugas ='$nm_petugas', hp_petugas='$hp_petugas' ,alamat_petugas='$alamat_petugas' WHERE id_petugas='$id_petugas'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        // Jika berhasil, arahkan kembali ke halaman utama
        header("Location: daftarpetugas.php");
        exit();
    } else {
        echo "Gagal menyimpan perubahan. Error: " . mysqli_error($con);
    }
} else {
    echo "Metode pengiriman data tidak valid.";
}
?>