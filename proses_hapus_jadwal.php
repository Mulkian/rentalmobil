<?php
include_once("koneksi.php");

if (isset($_GET['id_jadwal'])) {
    $id_jadwal = $_GET['id_jadwal'];

    // Query to delete the record
    $query = "DELETE FROM jdwlrental WHERE id_jadwal = '$id_jadwal'";
    
    // Execute the query
    $result = mysqli_query($con, $query);

    if ($result) {
        // Record deleted successfully
        header("Location: jadwalrental.php");
        exit();
    } else {
        // Error in deleting the record
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Redirect if id_mobil is not set
    header("Location: jadwalrental.php");
    exit();
}

// Close the connection
mysqli_close($con);
?>
