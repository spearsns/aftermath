<?php
  include("inc/config.php");
  session_start();
  if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $campaignName = $_POST['campaignName'];
  }
  if (isset($_SESSION['id']) == false){
        header("Location: login.php");
    } 

  $username = $_SESSION['username'];
  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $campaignName = parse_url($url, PHP_URL_QUERY);
  $_SESSION['campaignName'] = $campaignName;
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

<form id="login" method="post" action="inc/storytellerLI.php">
<div class="row content">
  <div class="large-1 columns">&nbsp;</div>
  <div class="large-3 columns">
    <label style='font-family: impact;'>CAMPAIGN:<input type='text' name='campaignName' value='<?php echo $campaignName; ?>' readonly /></label>
  </div>

<div class="large-2 columns">
<label style="font-family: impact;">USERNAME:<input type="text" name="username" value="<?php echo $username; ?>" readonly /></label>  
</div>

<div class="large-2 columns">
<label style="font-family: impact;">PASSWORD:<input type="password" name="password" class="full" placeholder="ENTER PASSWORD" /></label> 
</div>

<div class="large-2 columns">&nbsp;</div>
<div class="large-2 columns hotbox"><br><input type="submit" value="SUBMIT" class="button"/>
</div>

</div>
</form>

<?php include("footer.php"); ?>
</body>
</html>