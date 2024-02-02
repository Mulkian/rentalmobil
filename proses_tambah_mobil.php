<?php
// Include your database connection file
include_once("koneksi.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $kd_mobil = $_POST["kd_mobil"];
    $type_mobil= $_POST["type_mobil"];
    $tahun_mobil= $_POST["tahun_mobil"];
    


    // You may need to validate and sanitize the input data before using it in the query

    // Insert data into the database
    $query = "INSERT INTO jenismobil (kd_mobil, type_mobil, tahun_mobil) VALUES ('$kd_mobil', '$type_mobil', '$tahun_mobil')";
    $result = mysqli_query($con, $query);

    // Check if the insertion was successful
    if ($result) {
        // Redirect to the list_mobil.php page after successful insertion
        header("Location: daftarmobil.php");
        exit();
    } else {
        // Handle the error (you may want to customize this part based on your needs)
        echo "Error: " . mysqli_error($con);
    }
} else {
    // If the form is not submitted, redirect to the tambahmobil.php page
    header("Location: daftarmobil.php");
    exit();
}

// Close the database connection
mysqli_close($con);
?>