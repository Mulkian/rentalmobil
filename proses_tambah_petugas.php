<?php
// Include your database connection file
include_once("koneksi.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id_petugas = $_POST["id_petugas"];
    $nm_petugas = $_POST["nm_petugas"];
    $hp_petugas = $_POST["hp_petugas"];
    $alamat_petugas = $_POST["alamat_petugas"];



    // Insert data into the database
    $query = "INSERT INTO petugas (id_petugas, nm_petugas, hp_petugas, alamat_petugas) VALUES ('$id_petugas', '$nm_petugas', '$hp_petugas','$alamat_petugas')";
    $result = mysqli_query($con, $query);

    // Check if the insertion was successful
    if ($result) {
       
        header("Location: daftarpetugas.php");
        exit();
    } else {
        // Handle the error (you may want to customize this part based on your needs)
        echo "Error: " . mysqli_error($con);
    }
} else {
    
    header("Location: daftarpetugas.php");
    exit();
}

// Close the database connection
mysqli_close($con);
?>