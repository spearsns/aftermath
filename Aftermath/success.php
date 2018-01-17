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

<!--ceiling--> 
<div class="row ceiling">
<div class="large-2 columns"><a href="login.php" class="button">LOGIN</a></div>
<form id="logout" action="inc/logout.php" method="post">
<div class="large-2 columns"><input type="submit" value="LOG OUT" class="button" style="font-family: impact;" /></div>
</form>
<div class="large-2 columns"><a href="signup.php" class="button">JOIN</a></div>
</div>

<!--banner-->
<div class="row banner">
<div class="large-12 columns"><a href="index.php"><img src="img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></a></div>
</div>

<div class="row">
  <div class="large 12-columns content">
    <p class="success" style="padding-bottom: 10px;">UPLOAD SUCCESSFUL</p>
    <div class="large 12-columns"><a href="index.php" class="button">RETURN TO HOMEPAGE</a></div>
  </div>
</div>

</form>
</body>
</html>