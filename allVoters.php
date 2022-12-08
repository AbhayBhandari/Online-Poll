<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>All Voters</title>

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
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand headerFont text-lg">Home</a>
        </div>

      </div> 
    </nav>

    <div class="container" style="padding-top:150px;">
    	
    <div class="row">
      <div class="col-sm-12">
        <table class="table table-bordered table-hover">
          <tr>
            <th><strong>S.no</strong></th>
            <th><strong>Full Name</strong></th>
            <th><strong>Email ID</strong></th>
            <th><strong>Voter ID</strong></th>
          </tr>

          <?php
                      require('config.php');
                      
                        $conn= mysqli_connect($hostname, $username, $password, $database);

                      
                        if(!$conn)
                        {
                          die("Connection Failed : ".mysqli_connect_error());
                        }
                        $s_no = 1;
                        for ($i=1; $i < 16; $i++) { 
                          
                          $sql= "SELECT * FROM db_evoting.tbl_users where id='".$i."'";
                          $query= mysqli_query($conn, $sql);

                          if(mysqli_num_rows($query)>0)
                            {
                              while($row= mysqli_fetch_assoc($query))
                              {
                                $full_name= $row['full_name'];
                                $email= $row['email'];
                                $voter_id= $row['voter_id'];
                                echo "
                                  <tr>
                                      <td>$s_no</td>
                                      <td>$full_name</td>
                                      <td>$email</td>
                                      <td>$voter_id</td>                                      
                                  </tr>   
                                ";
                                $s_no = $s_no + 1;
                              }
                            }
                        }
                          mysqli_close($conn);
          ?>

        </table>
      </div>
    </div>

    </div>
  </body>
</html>