<?php
   include("inc/config.php");
   if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
  }
  session_start();
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

<form id="login" method="post" action="inc/confirmLI.php">
<div class="row content">
<div class="large-3 columns">&nbsp;</div>

<div class="large-2 columns">
<label style="font-family: impact;">USERNAME:<input type="text" name="username" placeholder="ENTER USERNAME" /></label>  
</div>

<div class="large-2 columns">
<label style="font-family: impact;">PASSWORD:<input type="password" name="password" placeholder="ENTER PASSWORD" /></label> 
</div>

<div class="large-2 columns">&nbsp;</div>
<div class="large-2 columns"><br><input type="submit" value="SUBMIT" class="button"/>
</div>

</div>
<div class="row content">
<div class="large-12 columns">
<?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=fail')){
    echo '<p class="error">INVALID USERNAME OR PASSWORD</p>';
}
?>
</div>
</div>

</form>
</body>
</html>