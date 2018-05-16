<?php
   include("inc/config.php");
   if(isset($_POST['submit'])){
      $username = htmlentities(stripslashes($_POST['username']));
      $password = htmlentities(stripslashes($_POST['password']));
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

<?php include("header.php"); ?>

<div class="row metal">
  <div class="small-12 columns" style="height: 10vh;">&nbsp;</div>
</div>

<div class="row banner">
  <form id="login" method="post" action="inc/confirmLI.php">
  
  <div class="small-1 columns">&nbsp;</div>
  <div class="small-2 columns"><img src="img/graffiti/username.png" class="enter" /></div>
  <div class="small-2 columns noPad"><input type="text" class="full" name="username" placeholder="ENTER USERNAME" /></div>  

  <div class="small-2 columns"><img src="img/graffiti/password.png" class="enter" /></div>
  <div class="small-2 columns noPad"><input type="password" class="full" name="password" placeholder="ENTER PASSWORD" /></div>

  <div class="small-1 columns">&nbsp;</div>
  <div class="small-2 columns"><input type="submit" value="SUBMIT" class="navbutton"/></div>

</div>

<div class="row content">
<div class="small-12 columns">
<?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=fail')){
    echo '<p class="error">INVALID USERNAME OR PASSWORD</p>';
}
?>
</div>
</div>
</form>

<?php include("footer.php"); ?>

</body>
</html>