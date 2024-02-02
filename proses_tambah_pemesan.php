<?php
// Include your database connection file
include_once("koneksi.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $no_pemesan = $_POST["no_pemesan"];
    $nm_pemesan = $_POST["nm_pemesan"];
    $hp_pemesan = $_POST["hp_pemesan"];
    $alamat_pemesan = $_POST["alamat_pemesan"];


    // You may need to validate and sanitize the input data before using it in the query

    // Insert data into the database
    $query = "INSERT INTO pemesan (no_pemesan, nm_pemesan, hp_pemesan, alamat_pemesan) VALUES ('$no_pemesan', '$nm_pemesan', '$hp_pemesan','$alamat_pemesan')";
    $result = mysqli_query($con, $query);

    // Check if the insertion was successful
    if ($result) {
        // Redirect to the list_mobil.php page after successful insertion
        header("Location: daftarpemesan.php");
        exit();
    } else {
        // Handle the error (you may want to customize this part based on your needs)
        echo "Error: " . mysqli_error($con);
    }
} else {
    // If the form is not submitted, redirect to the tambahmobil.php page
    header("Location: daftarpemesan.php");
    exit();
}

// Close the database connection
mysqli_close($con);
?>