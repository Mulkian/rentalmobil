<?php
include_once("koneksi.php");

if (isset($_GET['id_petugas'])) {
    $id_petugas = $_GET['id_petugas'];

    // Query to delete the record
    $query = "DELETE FROM petugas WHERE id_petugas = '$id_petugas'";
    
    // Execute the query
    $result = mysqli_query($con, $query);

    if ($result) {
        // Record deleted successfully
        header("Location: daftarpetugas.php");
        exit();
    } else {
        // Error in deleting the record
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Redirect if id_mobil is not set
    header("Location: daftarpetugas.php");
    exit();
}

// Close the connection
mysqli_close($con);
?>
