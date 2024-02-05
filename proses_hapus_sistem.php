<?php
include_once("koneksi.php");

if (isset($_GET['kd_mobil'])) {
    $kd_mobil = $_GET['kd_mobil'];

    // Query to delete the record
    $query = "DELETE FROM sistempenyewaan WHERE kd_mobil = '$kd_mobil'";
    
    // Execute the query
    $result = mysqli_query($con, $query);

    if ($result) {
        // Record deleted successfully
        header("Location: daftarsistempenyewaan.php");
        exit();
    } else {
        // Error in deleting the record
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Redirect if id_mobil is not set
    header("Location: daftarsistempenyewaan.php");
    exit();
}

// Close the connection
mysqli_close($con);
?>
