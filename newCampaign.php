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

<!--ceiling--> 
<div class="row ceiling">
<div class="large-2 columns"><a href="login.php" class="button">LOGIN</a></div>
<form id="logout" action="inc/logout.php" method="post">
<div class="large-2 columns"><input type="submit" value="LOG OUT" class="button" style="font-family: impact;" /></div>
</form>
<div class="large-6 columns">
<?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    echo "<p class='error'>Currently logged in as:  " .$username ."</p>";
?>
</div>
<div class="large-2 columns"><a href="signup.php" class="button">JOIN</a></div>
</div>

<!--banner-->
<div class="row banner">
<div class="large-12 columns"><a href="index.php"><img src="img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></a></div>
</div>

<form id="newcamp" method="post" action="inc/newcamp.php">

<div class="row content">
  <div class="large-2 columns">
  <label style="font-family: impact;">FATE:<input type="text" name="FATE" value="<?php echo $username ?>" readonly /></label>  
  </div>

  <div class="large-2 columns">
  <label style="font-family: impact;">CAMPAIGN NAME:<input type="text" name="campaignName" placeholder="ENTER CAMPAIGN NAME" /></label>  
  </div>

  <div class="large-4 columns">
  <label style="font-family: impact;">DESCRIPTION:<input type="text" name="description" placeholder="PLEASE ENTER A CAMPAIGN DESCRIPTION" /></label> 
  </div>

  <div class="large-2 columns">
  <label style="font-family: impact;">PASSWORD:<input type="password" name="password" placeholder="SELECT PASSWORD" /></label> 
  </div>

  <div class="large-2 columns hotbox">
  <label style="font-family: impact;">CONFIRM PASSWORD:<input type="password" name="passwordConfirm" placeholder="RE-ENTER PASSWORD" /></label> 
  </div>
</div>

<div class="row content">
  <div class="large-3 columns">&nbsp;</div>

  <div class="large-6 columns">
  <input type="submit" name="submit" value="SUBMIT" class="button"/>
  </div>

  <div class="large-3 columns">&nbsp;</div>
</div>

<div class="row content">
<div class="large-12 columns">
  <?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=empty')){
    echo '<p class="error">ALL FIELDS ARE REQUIRED</p>';
    } elseif (strpos($url, 'error=name')) {
      echo '<p class="error">CAMPAIGN NAME ALREADY TAKEN</p>';
    } elseif (strpos($url, 'error=password')){
      echo '<p class="error">PASSWORD VALUES DO NOT MATCH</p>';
    }
  ?>
</div>  
</div>
</form>

</body>
</html>  
