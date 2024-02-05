<!-- proses_ubah_pemesan.php -->

<?php
include_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan data yang dikirim menggunakan metode POST

    $no_pemesan = $_POST['no_pemesan'];
    $nm_pemesan = $_POST['nm_pemesan'];
    $hp_pemesan = $_POST['hp_pemesan'];
    $alamat_pemesan = $_POST['alamat_pemesan'];

    // Lakukan validasi data jika diperlukan

    // Update data ke database
    $update_query = "UPDATE pemesan SET  nm_pemesan ='$nm_pemesan', hp_pemesan='$hp_pemesan' ,alamat_pemesan='$alamat_pemesan' WHERE no_pemesan='$no_pemesan'";
    $update_result = mysqli_query($con, $update_query);

    if ($update_result) {
        // Jika berhasil, arahkan kembali ke halaman utama
        header("Location: daftarpemesan.php");
        exit();
    } else {
        echo "Gagal menyimpan perubahan. Error: " . mysqli_error($con);
    }
} else {
    echo "Metode pengiriman data tidak valid.";
}
?>