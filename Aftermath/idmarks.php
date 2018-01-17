<?php
    include("inc/config.php");
    session_start();

    if (isset($_SESSION['id']) == false){
        header("Location: login.php");
    }
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $charName = parse_url($url, PHP_URL_QUERY);
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
<form id="logout" action="inc/logout.php" method="post">
<div class="large-2 columns"><input type="submit" value="LOG OUT" class="button" style="font-family: impact;" /></div>
</form>

<div class="large-6 columns">
<?php
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $FATE = $_SESSION['username'];
    echo "<p class='error'>Currently logged in as:  " .$FATE ."</p>";
?>
</div>
<div class="large-2 columns"><a href="signup.php" class="button">JOIN</a></div>
</div>

<!--banner-->
<div class="row banner">
<div class="large-12 columns"><a href="index.php"><img src="img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></a></div>
</div>


<form action='inc/idLog.php' method='post'>
<!--IDENTIFIER-->
<div class="row ceiling">
  <div class="large-6 columns">  
    <?php $sql="SELECT username FROM idmarks WHERE charName = '$charName';";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<p class='error'>PLAYER:</p><input type='text' id='charName' name='charName' value='" .$row['username'] ."' readonly />";
                }
            } else {
            echo "0 results";
            } ?>
  </div>
 
  <div class="large-6 columns hotbox"><?php $sql="SELECT charName FROM idmarks WHERE charName = '$charName';";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<p class='error'>CHARACTER:</p><input type='text' id='charName' name='charName' value='" .$row['charName'] ."' readonly /> ";
                }
            } else {
            echo "0 results";
            } ?>
  </div>
</div>

<div class="row">
  <div class="large-12 columns" style="background-color: black;">
    <div style="float: left; width: 15%;">
      <p style="color: white; text-align: center;">HEAD</p>
      <input type="text" id="head" name="head"  
          value="<?php $sql="SELECT head FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['head'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">NECK</p>
      <input type="text" id="neck" name="neck" value="<?php $sql="SELECT neck FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['neck'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">LEFT SHOULDER</p>
      <input type="text" id="LShoulder" name="LShoulder" value="<?php $sql="SELECT LShoulder FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LShoulder'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">LEFT RIBS</p>          
      <input type="text" id="LRibs" name="LRibs" value="<?php $sql="SELECT LRibs FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LRibs'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">LEFT UPPER ARM</p>         
      <input type="text" id="LUpperArm" name="LUpperArm" value="<?php $sql="SELECT LUpperArm FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LUpperArm'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">STOMACH</p>         
      <input type="text" id="stomach" name="stomach" value="<?php $sql="SELECT stomach FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['stomach'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">LEFT FOREARM</p>
      <input type="text" id="LForearm" name="LForearm" value="<?php $sql="SELECT LForearm FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LForearm'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">REAR</p>
      <input type="text" id="rear" name="rear" value="<?php $sql="SELECT rear FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['rear'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">LEFT HAND</p>
      <input type="text" id="LHand" name="LHand" value="<?php $sql="SELECT LHand FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LHand'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">LEFT THIGH</p>
      <input type="text" id="LThigh" name="LThigh" value="<?php $sql="SELECT LThigh FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LThigh'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">LEFT CALF</p>
      <input type="text" id="LCalf" name="LCalf" value="<?php $sql="SELECT LCalf FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LCalf'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">LEFT FOOT</p>
      <input type="text" id="LFoot" name="LFoot" value="<?php $sql="SELECT LFoot FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LFoot'];
                }
            } else {
            echo "0 results";
            } ?>" />
</div>

<div style="float: left; width: 70%;">
<img src="img/virtruvian/sketchvirtruvian.jpg" style="padding: 1vw; width: 100%; height: 125vh;" />
</div>

<div style="float: left; width: 15%;">
      <p style="color: white; text-align: center;">FACE</p>
      <input type="text" id="face" name="face" value="<?php $sql="SELECT face FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['face'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <br>      
      <br>
      <br> 

      <p style="color: white; text-align: center;">RIGHT SHOULDER</p>
      <input type="text" id="RShoulder" name="RShoulder"  
          value="<?php $sql="SELECT RShoulder FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['RShoulder'];
                }
            } else {
            echo "0 results";
            } ?>" />
      
      <p style="color: white; text-align: center;">RIGHT RIBS</p>
      <input type="text" id="RRibs" name="RRibs"  
          value="<?php $sql="SELECT RRibs FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['RRibs'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">RIGHT UPPER ARM</p>
      <input type="text" id="RUpperArm" name="RUpperArm"  
          value="<?php $sql="SELECT RUpperArm FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['RUpperArm'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">LOWER BACK</p>
      <input type="text" id="lowerBack" name="lowerBack"  
          value="<?php $sql="SELECT lowerBack FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['lowerBack'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">RIGHT FOREARM</p>
      <input type="text" id="RForearm" name="RForearm"  
          value="<?php $sql="SELECT RForearm FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['RForearm'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">GROIN</p>        
      <input type="text" id="groin" name="groin"  
          value="<?php $sql="SELECT groin FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['groin'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">RIGHT HAND</p>
      <input type="text" id="RHand" name="RHand"  
          value="<?php $sql="SELECT RHand FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['RHand'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">RIGHT THIGH</p>
      <input type="text" id="RThigh" name="RThigh"  
          value="<?php $sql="SELECT RThigh FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['RThigh'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">RIGHT CALF</p>        
      <input type="text" id="RCalf" name="RCalf"  
          value="<?php $sql="SELECT RCalf FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['RCalf'];
                }
            } else {
            echo "0 results";
            } ?>" />

      <p style="color: white; text-align: center;">RIGHT FOOT</p>
      <input type="text" id="RFoot" name="RFoot"  
          value="<?php $sql="SELECT RFoot FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['RFoot'];
                }
            } else {
            echo "0 results";
            } ?>" />
  </div>
<input type="submit" name="submit" value="CONFIRM & UPLOAD" class="button" /></td>
</form>
<br>
<br>
</div>
</div>

</body>
</html>