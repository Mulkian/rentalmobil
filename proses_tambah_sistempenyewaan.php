<?php
// Include your database connection file
include_once("koneksi.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $kd_mobil = $_POST["kd_mobil"];
    $plat_mobil = $_POST["plat_mobil"];
    $lepas_kunci = $_POST["lepas_kunci"];
    $driver = $_POST["driver"];
    $non_driver = $_POST["non_driver"];



    // Insert data into the database
    $query = "INSERT INTO sistempenyewaan (kd_mobil, plat_mobil, lepas_kunci, driver, non_driver) VALUES ('$kd_mobil', '$plat_mobil', '$lepas_kunci','$driver','$non_driver')";
    $result = mysqli_query($con, $query);

    // Check if the insertion was successful
    if ($result) {
       
        header("Location: daftarsistempenyewaan.php");
        exit();
    } else {
        // Handle the error (you may want to customize this part based on your needs)
        echo "Error: " . mysqli_error($con);
    }
} else {
    
    header("Location: daftarsistempenyewaan.php");
    exit();
}

// Close the database connection
mysqli_close($con);
?>