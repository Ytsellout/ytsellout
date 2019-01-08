<?php 
	include_once 'connect01.php';
	if (isset($_POST['submit'])) {
		echo $na = $_POST['naam'];
		echo $dat1 = $_POST['date1'];
		echo $dat2 = $_POST['date2'];
		$ser = $_SERVER['HTTP_HOST'];
		$filename = $_FILES["pic"]["name"];
		$tempname = $_FILES["pic"]["tmp_name"];
	    $folder ="banner/". $filename; 
						if(move_uploaded_file($tempname, $folder)){
					    	echo "alright";
					    }
					    else{
					    		echo "<br> file not moved";
					    	}
	    	$sql = "INSERT INTO banner (name, date1, date2, imgsource)
			VALUES ('$na', '$dat1', '$dat2', '$folder')";

			if (mysqli_query($conn, $sql)) {
				    header("location:advertise.php");
				}

			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	    
 ?>