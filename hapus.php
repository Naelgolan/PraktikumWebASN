<?php
include 'connect.php';

$isbn = $_GET['isbn'];
$query = "DELETE FROM mahasiswa WHERE isbn=$isbn";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
