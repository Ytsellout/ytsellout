<?php 
session_start();

	if (isset($_SESSION['user'])) {
		
}
else{
	header("location:index.php");
}
		?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/homestyle.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </head>
 <style type="text/css">
 		#chart-container{
 			width: 640px;
 			height: auto;
 		}
 </style>
 <body>
 	<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
 <div class="w3-row">
  <div class="w3-quarter w3-container w3-rightbar w3-border-blue">
    <h2>DeshBoard</h2> 
    <hr>
    <a href="varification.php" style="text-decoration: none;"><div class="w3-panel w3-red w3-border">
	  <p>Verification</p>
	</div></a>
    <a href="https://www.google.com" style="text-decoration: none;"><div class="w3-panel w3-red w3-border">
	  <p>Money Collection</p>
	</div></a>
    <a href="https://www.techbava.com" style="text-decoration: none;"><div class="w3-panel w3-red w3-border">
	  <p>Money Tranfer Report</p>
	</div></a>
    <a href="notification.php" style="text-decoration: none;"><div class="w3-panel w3-red w3-border">
	  <p>Send Notification</p>
	</div></a>
    <a href="advertisment/advertise.php" style="text-decoration: none;"><div class="w3-panel w3-red w3-border">
	  <p>Ads Management.</p>
	</div></a>
    <a href="https://www.facebook.com" style="text-decoration: none;"><div class="w3-panel w3-red w3-border">
	  <p>Orders</p>
	</div></a>
</div>
  <div class="w3-rest w3-container">
    <h2>Data of the record</h2>
    <label>
    <h3>The Total User Register Per Day</h3><form action="#" method="post"><input type="text" name="dates"> <input type="submit" name="DeleteU" value="Delete"></form></label>
    	<div id="chart-container">
    		<canvas id="mycanvas"></canvas>
    	</div>
  </div>
</div>

<?php 
	include_once 'connnect.php';
  if (isset($_POST['DeleteU'])) {
    $date = $_POST['dates'];
    $sql = "DELETE FROM chart WHERE dates=$date";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
 ?>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<script type="text/javascript"  src="js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

 </body>
 </html>
