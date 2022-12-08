<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Voting</title>

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
    		<div class="col-sm-4 text-center" style="border:2px solid gray;padding:50px; box-shadow: 5px 5px 10px rgb(162, 220, 247);">

                <?php

                require('config.php');

                if(isset($_POST["submit"])){
                    if(isset($_POST["RegistrantName"]) && isset($_POST["RegistrantEmail"]) && isset($_POST["RegistrantPassword"]) && isset($_POST["RegistrantvoterID"]))
                    {
                        $rName= test_input($_POST["RegistrantName"]);
                        $rEmail= test_input($_POST["RegistrantEmail"]);
                        $rPassword= test_input($_POST["RegistrantPassword"]);
                        $voterID= test_input($_POST["RegistrantvoterID"]);
                    }       
                }

                
                else
                {
                    echo "<br>All Fields are Required";
                }  

                $DB_HOST= "localhost";
                $DB_USER="root";
                $DB_PASSWORD="";
                $DB_NAME="db_evoting";


                $conn= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME)
                or die("Couldn't Connect to Database :");

                $sql= "INSERT INTO db_evoting.registered_users VALUES(null,'".$rName."','".$rEmail."','".$rPassword."','".$voterID."');";

                if(mysqli_query($conn, $sql)){
                  echo "<img src='images/Like.png' width='90' height='70'>";
                    echo "<h3 class='text-info specialHead text-center'> YOU HAVE SUCCESSFULLY REGISTERED.</h3>";
                    echo "<a href='index.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp;Done</a>";
                }
                else
                {
                    echo "<img src='images/error.png' width='70' height='70'>";
                    echo "<h3 class='text-info specialHead text-center'> SORRY! NOT REGISTERED.</h3>";
                    echo "<a href='index.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> Back to Home </a>";
                }
                                    
                ?>
            </div>
            
    	</div>
            <footer>
                <h1 class="specialHead text-center"><strong>Made By:</strong></h1>
                <h2 class="specialHead text-center">
                Himanshu, Abhay, Kartik, Keerthana, Nakshatra, Manas</h2>
            </footer>
    </div>

    </div>
  </body>
</html>