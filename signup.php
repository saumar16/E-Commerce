<?php
require "common.php";
if (isset($_SESSION['email'])) { header('location: products.php'); }
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
                    <h2>SIGN UP</h2>
                    <form method="POST" action="signup_script.php">
                      <div class="form-group">
                              <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                          </div>
                          <div class="form-group">
                              <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                          </div>
                          <div class="form-group">
                              <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                          </div>
                          <div class="form-group">
                              <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                          </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div><br><br><br><br><br><br><br><br><br>
        <?php
      include "footer.php";
      ?>

  </body>
</html>
