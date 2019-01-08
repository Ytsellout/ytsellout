<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php 
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'ytsellout');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";
session_start();
// $ow = $_SESSION['owner'];

?>
<table class="w3-table w3-striped">
    <tr>
      <td>Channel Name</td>
      <td>Channel Email</td>
      <td>Owner ID</td>
      <td>Total View</td>
      <td>Total Subscriber</td>
      <td>Link</td>
      <td>catagory</td>
      <td>Amount</td>
      <td>Product ID</td>
      <td>Price Setting</td>
      <td><b>Verify</b></td>
      <td><b>Remove <b> </td>

    </tr>
<?php 
$sql = "SELECT prod_name,ownerid, prod_email, channelid, totview, totsub, link, about, adsence,adsencepin, adsencemail, catagory, Amout, productid FROM temp_product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //$_SESSION['ow'] = $row['Amout'];
     // $_SESSION['owner'] = $row['ownerid'];
     // echo $ow . "<br>";
        echo "<tr><td>" . $row["prod_name"]. "</td><td>" . $row["prod_email"]. "</td><td>". $row['ownerid']. "</td><td>" . $row["totview"]. "</td><td>" . $row["totsub"]. "</td><td><a href='". $row["link"]. "' target='_blank'>". $row["link"]."</a></td><td> " . $row["catagory"]. "</td><td>" . $row["Amout"]. "</td><td>" . $row["productid"]. "</td><td><form action='varify.php' method=post>" .'<input type=text name=amt>'. "</td><td><input type='submit' name='submm' value='".$row['productid']."'/></form></td><td><form action='delete.php' method='post'>" . "<input type='submit' name='delete' value='".$row['productid']."'>" . "</form></td></tr>";

    }
} else {
    echo "0 results";
}

 ?>
</table>