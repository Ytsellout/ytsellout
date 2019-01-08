<!DOCTYPE html>
<html>
<head>
	<title>Adsmenagment for Youtube channel || banner ads || widgets ads</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="bann.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >
	<div class="w3-row">
  <div class="w3-threequarter w3-container">
    <h2 style="font-family: 'Charm', cursive;">Manage Your Banner Ads Show</h2> 
  </div>
  <div class="w3-quarter w3-container w3-padding-16">
    <a href="http://localhost/Akhil/Admin/home.php"><button class="w3-button w3-red w3-round-xxlarge">Back</button></a>
  </div>
</div>
	  <div class="panel panel-default">
		<div class="panel-body">
			<form action="banneract.php" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		      <label for="name">Name:</label>	
		      <input type="text" class="form-control" id="email" placeholder="Enter Name" name="naam">
		    </div>
		    <div class="form-group">
		      <label for="date1">Date (FROM):</label>
		      <input type="Date" class="form-control" id="email" placeholder="Date from" name="date1">
		    </div>
		    <div class="form-group">
		      <label for="date2">Date (TO):</label>
		      <input type="Date" class="form-control" id="email" placeholder="Date to" name="date2">
		    </div>
		      <label>Upload the Banner of (width : 700px)</label>
		      <input type="file" name="pic" accept="image/*" >
		    <p align="center"><button type="submit" class="btn btn-default" name="submit">Submit</button></p>
		  </form>
		</div>
	  </div>

<ul class="menu w3-container" style="list-style-type: none; ">
  <li>
    <a href="#">Banner Advertising </a>
    <ul style="list-style-type: none;">
    	<table class='w3-table w3-striped'>
    		 <tr>
				      <th>Name</th>
				      <th>Date (FROM)</th>
				      <th>Date (TO)</th>
				      <th>Delete</th>
				    </tr>
      <?php 
      session_start();
      include_once 'connect01.php';
      $sql = "SELECT name, date1, date2 FROM banner";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row

		    while($row = mysqli_fetch_assoc($result)) {
		    	$_SESSION['day'] = $row['name'];
		        echo "<tr><td>".$row['name']."</td><td>".$row['date1']."</td><td>".$row['date2']."</td><td><form action='delete.php' method=post><input type='submit'value='".$row['name']."' name='submit'> </form></td></tr>";

		    }
		} else {
		    echo "0 results";
		} ?>
	</table>
    </ul>
  </li>
</ul>


  <div class="panel panel-default" style="margin-top: 200px;">
  	<h2 style="font-family: 'Charm', cursive;">Manage The Widget Ads Show</h2>
  		<div class="panel panel-default">
		<div class="panel-body">
			<form action="banneract.php" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		      <label for="name">Name:</label>
		      <input type="text" class="form-control" id="email" placeholder="Enter Name" name="naam">
		    </div>
		    <div class="form-group">
		      <label for="date1">Date (FROM):</label>
		      <input type="Date" class="form-control" id="email" placeholder="Date from" name="date1">
		    </div>
		    <div class="form-group">
		      <label for="date2">Date (TO):</label>
		      <input type="Date" class="form-control" id="email" placeholder="Date to" name="date2">
		    </div>
		      <label>Upload the Banner of (width : 700px)</label>
		      <input type="file" name="pic" accept="image/*" >
		    <p align="center"><button type="submit" class="btn btn-default" name="submit">Submit</button></p>
		  </form>
		</div>
	  </div>
</div> 
</body>
</html>