<?php
   include("inc/config.php");
   $_SESSION['id'] = $row['id'];
  
  session_start();

   if (isset($_SESSION['id']) == false){

      header("Location: login.php");
      exit();
    } 
?>
<!doctype html>
  <html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Aftermath</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<body>

<!--ceiling--> 
<div class="row ceiling">
<div class="large-2 columns"><a href="login.php" class="button">LOGIN</a></div>
<div class="large-2 columns"><form action="inc/logout.php" class="button">SIGN OUT</form></div>
<div class="large-6 columns">&nbsp;</div>
<div class="large-2 columns"><a href="signup.php" class="button">JOIN</a></div>
</div>

<!--banner-->
<div class="row banner">
<div class="large-12 columns"><img src="img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></div>
</div>



