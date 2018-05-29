<?php
   include("inc/config.php");

  session_start();
   if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $passwordConfirm = $_POST['passwordConfirm'];
      $email = $_POST['email'];
   }
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<body>

<?php include("header.php"); ?>

<div class="row metal">
  <div class="small-12 columns" style="height: 10vh;">&nbsp;</div>
</div>

<form id="signup" method="post" action="inc/confirmSU.php">

<div class="row banner">
  <div class="small-2 columns">&nbsp;</div>
  <div class="small-4 columns"><img src="img/graffiti/username.png" /></div>
  <div class="small-4 columns"><input type="text" name="username" class="enter" placeholder="ENTER USERNAME" /></div>
  <div class="small-2 columns">&nbsp;</div>
</div>

<div class="row banner">
  <div class="small-2 columns">&nbsp;</div>
  <div class="small-4 columns"><img src="img/graffiti/password.png" /></div>
  <div class="small-4 columns"><input type="password" name="password" class="enter" placeholder="ENTER PASSWORD" /></div>
  <div class="small-2 columns">&nbsp;</div>
</div>

<div class="row banner">
  <div class="small-2 columns">&nbsp;</div>
  <div class="small-4 columns"><img src="img/graffiti/confirmpassword.png" /></div>
  <div class="small-4 columns"><input type="password" name="passwordConfirm" placeholder="RE-ENTER PASSWORD" /></div>
  <div class="small-2 columns">&nbsp;</div>
</div>

<div class="row banner">
  <div class="small-2 columns">&nbsp;</div>
  <div class="small-4 columns"><img src="img/graffiti/email.png" /></div>
  <div class="small-4 columns"><input type="text" name="email" placeholder="ENTER EMAIL" /></div>
  <div class="small-2 columns">&nbsp;</div>
</div>

<div class="row banner">
  <div class="small-3 columns">&nbsp;</div>
  <div class="small-6 columns"><input type="submit" name="submit" value="SUBMIT" class="navbutton"/></div>
  <div class="small-3 columns">&nbsp;</div>
</div>

<div class="row banner">
<div class="small-12 columns">
  <?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=empty')){
    echo '<p class="error">ALL FIELDS ARE REQUIRED</p>';
    } elseif (strpos($url, 'error=username')) {
      echo '<p class="error">USERNAME ALREADY TAKEN</p>';
    } elseif (strpos($url, 'error=email')){
      echo '<p class="error">PLEASE ENTER A VALID EMAIL</p>';
    } elseif (strpos($url, 'error=password')){
      echo '<p class="error">PASSWORD VALUES DO NOT MATCH</p>';
    }
  ?>
</div>  
</div>
</form>

<?php include("footer.php"); ?>
</body>
</html>  
