<?php include_once 'connnect2.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Send Notification to the User</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- 00ink rel="stylesheet" type="text/css" href="notify.css"> -->
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Send Notification To The User</a>
</nav>

<div class="container-fluid">
  <div class="jumbotron">
    <h1>Notification</h1>
    <?php  
   if(@$_GET['msg']==true){
   	echo $_GET['msg'];
}?>
    <form action="notification.php" method="post">
  <div class="form-group">
    <label for="code">Type the user code of the User</label>
    <input type="text" class="form-control" id="name" name="usercode">
  </div>
	<div class="form-group">
	  <label for="comment">Type the Massage:</label>
	  <textarea class="form-control" rows="5" id="comment" name="usertext"></textarea>
	</div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form> 
  </div>
</div>
<?php 
	if (isset($_POST['submit'])) {
		if ($_POST['usercode']=="" && $_POST['usertext']=="") {
			header("location:notification.php?msg=Please enter the filed");
		}else{
			$sql = "SELECT user_code, user_catagory FROM user_info WHERE user_code='".$_POST['usercode']."'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        if ($row["user_catagory"] == "Buyer"){
			        	 $ucata = "buy" . $_POST['usercode'] . "01";
			        }else{
			        	 $ucata = "sell" . $_POST['usercode'] . "01";
			        }
			    }
			} else {
			    echo "0 results";
			}
		}

		$sql = "INSERT INTO $ucata (notification)
		VALUES ('".$_POST['usertext']."')";

		if (mysqli_query($conn, $sql)) {
		    header("location:notification.php");
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

 ?>
</body>
</html>