<?php
require("common.php");
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
    <br><br><br><br>
    <div class="container">
      <div class="col-xs-6 col-xs-offset-3">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr><th>Item Number</th> <th>Item Name</th> <th>Price </th> <th>   </th> </tr>
                        <tr><td></td> <td></td> <td></td></tr>
                        <tr><td> </td> <td><b>Total</b></td> <td>Rs 0</td> <td><a href="success.html" class="btn btn-primary" role="button">Confirm Order</a></td></tr>
                    </tbody>
                </table>
            </div>  </div>

            <?php
            include "footer.php";
            ?>

  </body>
</html>
