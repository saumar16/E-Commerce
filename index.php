<?php
require 'common.php';
if (isset($_SESSION['email'])) {
    header('location: Home.php'); }
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <title>Welcome Ctrl Budget</title>
  </head>
<body background="black">
  <?php
include "header.php";
?>
    <div class="banner_image">
      <div class="container" align="center">
          
      <div class="banner_content">
          <h1>We Help You Control Your Budget</h1>
                            <br/>
        <a class ="btn btn-danger btn-lg active" href="login.php">Start Now</a>
    </div>
    </div>
</div>
 <?php
include "footer.php";
?>

  </body>
</html>
