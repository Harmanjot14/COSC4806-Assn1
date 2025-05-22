<?php

session_start();
//check if user is authenticated and if not redirecting to login page
if(!isset($_SESSION['username'])){
  header('Location: /login.php');
}

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Harman</title>
  </head>

  <body>
    
    <h1>Assingment 1</h1>
    <p>Welcome, <?=$_SESSION['username']?></p>

    <?php
    date_default_timezone_set('America/Toronto');
    $mydate=getdate(date("U"));
    echo "$mydate[month] $mydate[mday], $mydate[year]";
    ?>
    
    
  </body>

  <footer>
    <p><a href="/logout.php">Click here to logout</a></p>
  </footer>

</html>