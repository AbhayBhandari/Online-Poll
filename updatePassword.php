
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Update Password</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>

  </head>
  <body>
	
	<div class="container">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand headerFont text-lg">Home</a>
        </div>
      </div> 
    </nav>

    
    <div class="container" style="padding-top:150px;">
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4 text-center" style="border:2px solid gray;padding:50px;
          box-shadow: 8px 8px 20px rgb(162, 220, 247);">

<?php
  require('config.php');

    $old = $_POST["existingPassword"];
    $new = $_POST["newPassword"];

    $conn= mysqli_connect($hostname, $username, $password, $database);
    if(!$conn)
    {
        die("Connection Failed : ".mysqli_connect_error());
    }  

    $sql="SELECT * FROM db_evoting.tbl_admin WHERE admin_password = '$old'";
    $query= mysqli_query($conn, $sql);
    $rows= mysqli_num_rows($query);
    if($rows==1)
    {

      $sql="UPDATE db_evoting.tbl_admin SET admin_password ='$new' WHERE admin_username='admin'"; 
      if($query= mysqli_query($conn, $sql))
      {
        echo "<img src='images/Like.png' width='90' height='70'>";
        echo "<h3 class='text-info specialHead text-center'> PASSWORD CHANGED SUCCESSFULLY.</h3>";
        echo "<a href='admin.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> DONE </a>";
      }
    }
    else
    {
      $error= "INCORRECT OLD PASSWORD";

      echo "<img src='images/error.png' width='70' height='70'>";
      echo "<h3 class='text-info specialHead text-center'><strong> $error</strong></h3>";
      echo "<a href='changePassword.php' class='btn btn-primary'> <span class='glyphicon glyphicon-refresh'></span> Try Again </a>";

    }

    mysqli_close($conn);

?>

	
    		</div>
    		<div class="col-sm-4"></div>
    	</div>
    </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

