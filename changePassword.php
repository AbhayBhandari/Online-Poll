<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Change Password</title>

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

    
    <div class="container" style="padding-top:100px;">
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4" style="border:2px solid gray;padding:50px;
          box-shadow: 8px 8px 20px rgb(162, 220, 247);">
    			
    			<div class="page-header">
    				<h2 class="specialHead">Change Password</h2>
    			</div>
          
          <form action="updatePassword.php" method="POST">
      			<div class="form-group">
      				<label for="">Old Password</label><br>
      				<input type="password" name="existingPassword" placeholder="Enter Old Password" class="form-control"required/><br>

      				<label for="">New Password</label><br>
      				<input type="password" id = "password" name="newPassword" class="form-control" 
                placeholder="Enter New Password" required/><br>

              <label for="">Retype Password</label><br>
              <input type="password" id = "confirm_password" name="retypePassword" class="form-control" 
                placeholder="Enter New Password Again" required/><br>

      				<button type="submit" class="btn btn-block span btn-primary "> <span class="glyphicon"></span> Change Password</button>
      			</div>
          </form>
    		</div>
    		<div class="col-sm-4"></div>
    	</div>
    </div>

    </div>
    <script>
        var password = document.getElementById("password");
        var confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Doesn't Matched");
          } else {
            confirm_password.setCustomValidity('');
          }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
  </body>
</html>