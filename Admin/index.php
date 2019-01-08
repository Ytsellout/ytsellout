<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
  <head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">Login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
   <div class="panel">
    <?php 
         if(@$_GET['wrg']==true)
            {
            ?>
           <div class="alert-light text-danger text-center py-3"><?php echo $_GET['wrg']; ?></div>                                
         <?php
         }
         ?></div>
    <form action="process.php" method="post">
        <div class="form-group">

            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" name="email">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass">

        </div>
        
        <input type="submit" class="btn btn-primary" name="submit" value="Login">

    </form>
    </div>
<p class="botto-text"> Designed by YTSellout Team</p>
</div></div></div>
x
</body>
</html>
