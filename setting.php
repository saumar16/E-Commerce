<?php

require "common.php";
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <?php
  include "header.php";
  ?>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <h2>Change Password</h2>
                    <form method="POST" action="settings-script.php">

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="password" required = "true">
                        </div>

                        <button type="submit" name="change" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        include "footer.php";
        ?>

  </body>
</html>
