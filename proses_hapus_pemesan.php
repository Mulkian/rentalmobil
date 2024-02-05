<?php
include_once("koneksi.php");

if (isset($_GET['no_pemesan'])) {
    $no_pemesan = $_GET['no_pemesan'];

    // Query to delete the record
    $query = "DELETE FROM pemesan WHERE no_pemesan = '$no_pemesan'";
    
    // Execute the query
    $result = mysqli_query($con, $query);

    if ($result) {
        // Record deleted successfully
        header("Location: daftarpemesan.php");
        exit();
    } else {
        // Error in deleting the record
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Redirect if id_mobil is not set
    header("Location: daftarpemesan.php");
    exit();
}

// Close the connection
mysqli_close($con);
?>
