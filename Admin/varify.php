<?php
	session_start();
	include_once 'connnect2.php';
	if (isset($_POST['submm'])) {
		$PID = $_POST['submm'];
		$sql = "SELECT Amout, ownerid, productid FROM temp_product WHERE productid ='".$_POST['submm']."'";
		$result = $conn->query($sql);
		    if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $amt = $row["Amout"]; $owner = $row["ownerid"]; $product = $row["productid"];
		    }
		} else {
		    echo "0 results";
		}

	}else{
		header("location:home.php");
	}

	if ($amt == 500 || $amt == 1500) {
		echo "you have set for 500Rs or for 1500Rs";
	}
	else{
		echo "you have selected for 100Rs";
	}
	
 ?>

