<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ytsellout";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$prodcode = $_POST['delete'];
$sql = "SELECT ownerid, productid FROM temp_product WHERE productid = '".$prodcode."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $owner = $row["ownerid"];
    }
} else {
    echo "0 results";
}

$sql = "SELECT user_code, user_catagory FROM user_info WHERE user_code = '".$owner."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($row["ownerid"] == "Seller") {
        	$sub = "sell";
    }else{
    	$sub = "buy";
    }
}
} else {
    echo "0 results";
}
$noti = $sub . $owner . "01";
echo $noti;
$sql = "DELETE FROM temp_product WHERE productid='".$_POST['delete']."'";

if (mysqli_query($conn, $sql)) {
    $sql = "INSERT INTO  $noti (notification)
	VALUES ('Sorry Your product has not been register to our site because it is not accourding to our company policy your payment will soon transfer to your account and our public consultant will soon contact with you thankyou')";
	if (mysqli_query($conn, $sql)) {
    header("location:http://localhost/Akhil/Admin/varification.php");
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
