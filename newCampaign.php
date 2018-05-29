<?php
   include("inc/config.php");
    session_start();

    $username = $_SESSION['username'];

    if (isset($_SESSION['id']) == false){
        header("Location: login.php?charCreate");
    }
    
    if(isset($_POST['submit'])){
      $FATE = $username;
      $FATE_PW = htmlentities(strip_tags($_POST['password']));
      $passwordConfirm = htmlentities(strip_tags($_POST['passwordConfirm']));
      $campaignName = htmlentities(strip_tags($_POST['campaignName']));
      $description = htmlentities(strip_tags($_POST['description']));
   }
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Campaign</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
<body>

<?php include("header.php"); ?>

<div class="row metal">
  <div class="small-12 columns" style="height: 10vh;">&nbsp;</div>
</div>

<form id="newcamp" method="post" action="inc/newcamp.php">

<div class="row banner">
  <div class="small-2 columns">&nbsp;</div>
  <div class="small-4 columns"><img src="img/graffiti/storyteller.png" /></div>
  <div class="small-4 columns"><input type="text" name="FATE" value="<?php echo $username ?>" readonly /></div>
  <div class="small-2 columns">&nbsp;</div>
</div>

<div class="row banner">
  <div class="small-2 columns">&nbsp;</div>
  <div class="small-4 columns"><img src="img/graffiti/campaignName.png" /></div>
  <div class="small-4 columns"><input type="text" name="campaignName" placeholder="ENTER CAMPAIGN NAME" /></div>
  <div class="small-2 columns">&nbsp;</div>
</div>

<div class="row banner">
  <div class="small-2 columns">&nbsp;</div>
  <div class="small-4 columns"><img src="img/graffiti/description1.png" /></div>
  <div class="small-4 columns"><input type="text" name="description" placeholder="PLEASE ENTER A CAMPAIGN DESCRIPTION" /></div>
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
  <div class="small-3 columns">&nbsp;</div>
  <div class="small-6 columns"><input type="submit" name="submit" value="SUBMIT" class="navbutton"/></div>
  <div class="small-3 columns">&nbsp;</div>
</div>

<div class="row metal">
<div class="large-12 columns">
  <?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=empty')){
    echo '<p class="error">ALL FIELDS ARE REQUIRED</p><br>';
    } elseif (strpos($url, 'error=name')) {
      echo '<p class="error">CAMPAIGN NAME ALREADY TAKEN</p><br>';
    } elseif (strpos($url, 'error=password')){
      echo '<p class="error">PASSWORD VALUES DO NOT MATCH</p><br>';
    }
  ?>
</div>  
</div>
</form>

<?php include("footer.php"); ?>

</body>
</html>  
