<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Voters Feedback</title>

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

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid rgb(204, 204, 204);
       box-shadow: 8px 8px 20px rgb(162, 220, 247);">
          
          <div class="page-header">
            <h2 class="specialHead">Voter's Feedback</h2>
            <p class="normalFont">Your Feedback makes us better.</p>

            <?php
              require('config.php');
              $conn= mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                  die("Connection Failed : ".mysqli_connect_error());
              }
              else
              {
                  $sql= "SELECT id, voter_id, email, feedback FROM db_evoting.voters_feedback";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          echo "<br> ". $row["id"]. ". &nbsp&nbsp;VoterID: ". $row["voter_id"]. " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;Email: " . $row["email"]. "<br>". "&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;Feedback: ". $row["feedback"]. "<br>";
                      }
                  } else {
                      echo "No feedback yet.";
                  }

                  $conn->close();
              }
            ?>
          </div>