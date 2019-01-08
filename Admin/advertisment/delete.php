<?php 
session_start();
include_once 'connect01.php';
if (isset($_POST['submit'])) {
	$neww = $_POST['submit'];
}
		$sql = "DELETE FROM banner WHERE name='$neww'";

if (mysqli_query($conn, $sql)) {
    header("location:advertise.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

 ?>