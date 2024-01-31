<?php
// Include your database connection file
include_once("koneksi.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id_jadwal = $_POST["id_jadwal"];
    $tanggal_pemesanan = $_POST["tanggal_pemesanan"];
    $tanggal_pengembalian = $_POST["tanggal_pengembalian"];
    $jam_pemesanan = $_POST["jam_pemesanan"];
    $jam_pengembalian = $_POST["jam_pengembalian"];


    // You may need to validate and sanitize the input data before using it in the query

    // Insert data into the database
    $query = "INSERT INTO jdwlrental (id_jadwal, tanggal_pemesanan, tanggal_pengembalian,jam_pemesanan,jam_pengembalian) VALUES ('$id_jadwal', '$tanggal_pemesanan','$tanggal_pengembalian','$jam_pemesanan','$jam_pengembalian')";
    $result = mysqli_query($con, $query);

    // Check if the insertion was successful
    if ($result) {
        // Redirect to the list_mobil.php page after successful insertion
        header("Location: jadwalrental.php");
        exit();
    } else {
        // Handle the error (you may want to customize this part based on your needs)
        echo "Error: " . mysqli_error($con);
    }
} else {
    // If the form is not submitted, redirect to the tambahmobil.php page
    header("Location: jadwalrental.php");
    exit();
}

// Close the database connection
mysqli_close($con);
?>