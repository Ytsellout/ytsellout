<?php 
  include_once 'connnect.php';
  session_start();

  if (isset($_POST['submit'])) {
   
  	 $query="select * from adminslist where email='".$_POST['email']."' and password='".$_POST['pass']."'";
  	  $result=mysqli_query($conn,$query);
 
       if(mysqli_fetch_assoc($result))
       {
         $_SESSION['user']=$_POST['email'];
         header("location:home.php");
        }
         else
        {
         header("location:index.php?wrg= Please Enter Correct User Name and Password ");
        }
}
else{
	echo "Not Working Guys";
 }


?>			                
