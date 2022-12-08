
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login</title>

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
        <div class="col-sm-4 text-center" style="border:2px solid gray; padding:50px;
            box-shadow: 8px 8px 20px rgb(162, 220, 247);">
          
        <?php
            require('config.php');

            $loginEmail = $_POST["loginEmailId"];
            $loginPassword = $_POST["loginPassword"];

            $conn= mysqli_connect($hostname, $username, $password, $database);
            if(!$conn)
            {
                die("Connection Failed : ".mysqli_connect_error());
            }  

            $sql = "SELECT * FROM db_evoting.registered_users WHERE email = '$loginEmail' AND password = '$loginPassword'";
            
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);  
              
            if($num == 1){
                echo "<h3 class='text-info specialHead text-center'>YOU ARE LOGGED IN</h3><br>";
                echo "<a href='vault.html' class='btn btn-primary'> <span class='glyphicon'></span>Press Here To Vote</a>";
            }
            else{
                $error="INVALID DETAILS";
                
                echo "<p class='alert alert-danger'>$error</p>";

                echo "<p class='normalFont text-primary'>Username or Password is Incorrect. Please Enter Correct Details. </p>";
                echo "<br><a href='loginPage.html' class='btn btn-primary'><span class='glyphicon glyphicon-refresh'></span>Try Again</a>";
            }
        ?>

          </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

    </div>
  </body>
</html>


