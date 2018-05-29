<?php
   include("inc/config.php");
  session_start();

  if (isset($_SESSION['id']) == false){
        header("Location: login.php");
    } 
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<body>

<?php include("header.php"); ?>

<div class="row metal">
    <div class="small-4 small-centered error" style="margin-bottom: 2.5vh;">UPLOAD SUCCESSFUL</div>
</div>
<div class="row banner">
    <div class="small-4 small-centered"><a href="index.php"><button class='navbutton' style='font-weight: bold; margin-top: 2.5vh;'>RETURN TO HOMEPAGE</button></a></div>
    <br>
</div>

<?php include("footer.php"); ?>
</body>
</html>