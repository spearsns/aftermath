<?php
    include("inc/config.php");
    session_start();

    if (isset($_SESSION['id']) == false){
        header("Location: login.php");
    }
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $charName = parse_url($url, PHP_URL_QUERY);

    $idmarks="SELECT * FROM idmarks WHERE charName = '$charName'";
          $results = $conn->query($idmarks);
            if ($results->num_rows > 0) {
              while($row = $results->fetch_assoc()) {

              $face =         $row['face'];
              $head =         $row['head'];
              $neck =         $row['neck'];
              $groin =        $row['groin'];
              $rear =         $row['rear'];
              $stomach =      $row['stomach'];
              $lowerBack =    $row['lowerBack'];
              $LRibs =        $row['LRibs'];
              $RRibs =        $row['RRibs'];
              $LShoulder =    $row['LShoulder'];
              $RShoulder =    $row['RShoulder'];
              $LUpperArm =    $row['LUpperArm'];
              $RUpperArm =    $row['RUpperArm'];
              $LThigh =       $row['LThigh'];
              $RThigh =       $row['RThigh'];
              $LForearm =     $row['LForearm'];
              $RForearm =     $row['RForearm'];
              $LCalf =        $row['LCalf'];
              $RCalf =        $row['RCalf'];
              $LHand =        $row['LHand'];
              $RHand =        $row['RHand'];
              $LFoot =        $row['LFoot'];
              $RFoot =        $row['RFoot']; 
              } 
                } else { echo "0 results"; }
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

<?php include('header.php'); ?>


<form action='inc/idLog.php' method='post'>
<!--IDENTIFIER-->
<div class="row metal">
  <div class="small-6 columns">  
    <?php $sql="SELECT username FROM idmarks WHERE charName = '$charName';";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<img src='img/graffiti/playerX.png' style='margin: 0 auto;' /><input type='text' id='charName' name='charName' value='" .$row['username'] ."' readonly />";
                }
            } else {
            echo "0 results";
            } ?>
  </div>
 
  <div class="small-6 columns hotbox"><?php $sql="SELECT charName FROM idmarks WHERE charName = '$charName';";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<img src='img/graffiti/characterX.png' style='margin: 0 auto;' /><input type='text' id='charName' name='charName' value='" .$row['charName'] ."' readonly /> ";
                }
            } else {
            echo "0 results";
            } ?>
  </div>
</div>

<div class="row">
  <div class="large-12 columns" style="background-color: black;">
    <div style="float: left; width: 25%;">
      <p style="color: white; text-align: center;">HEAD</p>
      <input type="text" id="head" name="head" value="<?php echo $head; ?>" readonly />

      <p style="color: white; text-align: center;">NECK</p>
      <input type="text" id="neck" name="neck" value="<?php echo $neck; ?>" readonly />

      <p style="color: white; text-align: center;">L SHOULD</p>
      <input type="text" id="LShoulder" name="LShoulder" value="<?php echo $LShoulder; ?>" readonly />

      <p style="color: white; text-align: center;">L RIBS</p>          
      <input type="text" id="LRibs" name="LRibs" value="<?php echo $LRibs; ?>" readonly />

      <p style="color: white; text-align: center;">L BICEP</p>         
      <input type="text" id="LUpperArm" name="LUpperArm" value="<?php echo $LUpperArm; ?>" readonly />

      <p style="color: white; text-align: center;">STOMACH</p>         
      <input type="text" id="stomach" name="stomach" value="<?php echo $stomach; ?>" readonly />

      <p style="color: white; text-align: center;">L FORE</p>
      <input type="text" id="LForearm" name="LForearm" value="<?php echo $LForearm; ?>" readonly />

      <p style="color: white; text-align: center;">REAR</p>
      <input type="text" id="rear" name="rear" value="<?php echo $rear; ?>" readonly />

      <p style="color: white; text-align: center;">L HAND</p>
      <input type="text" id="LHand" name="LHand" value="<?php echo $LHand; ?>" readonly />

      <p style="color: white; text-align: center;">L THIGH</p>
      <input type="text" id="LThigh" name="LThigh" value="<?php echo $LThigh; ?>" readonly />

      <p style="color: white; text-align: center;">L CALF</p>
      <input type="text" id="LCalf" name="LCalf" value="<?php echo $LCalf; ?>" readonly />

      <p style="color: white; text-align: center;">L FOOT</p>
      <input type="text" id="LFoot" name="LFoot" value="<?php echo $LFoot; ?>" readonly />
</div>

<div style="float: left; width: 50%;">
<img src="img/virtruvian/sketchyvirtruvian.jpg" style="padding: 1vw; width: 100%; height: 105vh;" />
<input type="submit" name="submit" value="CONFIRM & UPLOAD" class="navbutton" /></td>
</div>

<div style="float: left; width: 25%;">
      <p style="color: white; text-align: center;">FACE</p>
      <input type="text" id="face" name="face" value="<?php echo $face; ?>" readonly />

      <p>&nbsp;</p>
      <input type="text" value="" style="visibility: hidden;" readonly />

      <p style="color: white; text-align: center;">R SHOULD</p>
      <input type="text" id="RShoulder" name="RShoulder" value="<?php echo $RShoulder; ?>" readonly />
      
      <p style="color: white; text-align: center;">R RIBS</p>
      <input type="text" id="RRibs" name="RRibs" value="<?php echo $RRibs; ?>" readonly />

      <p style="color: white; text-align: center;">R BICEP</p>
      <input type="text" id="RUpperArm" name="RUpperArm" value="<?php echo $RUpperArm; ?>" readonly />

      <p style="color: white; text-align: center;">LOWER BACK</p>
      <input type="text" id="lowerBack" name="lowerBack" value="<?php echo $lowerBack; ?>" readonly />

      <p style="color: white; text-align: center;">R FORE</p>
      <input type="text" id="RForearm" name="RForearm" value="<?php echo $RForearm; ?>" readonly />

      <p style="color: white; text-align: center;">GROIN</p>        
      <input type="text" id="groin" name="groin" value="<?php echo $groin; ?>" readonly />

      <p style="color: white; text-align: center;">R HAND</p>
      <input type="text" id="RHand" name="RHand" value="<?php echo $RHand; ?>" readonly />

      <p style="color: white; text-align: center;">R THIGH</p>
      <input type="text" id="RThigh" name="RThigh" value="<?php echo $RThigh; ?>" readonly />

      <p style="color: white; text-align: center;">R CALF</p>        
      <input type="text" id="RCalf" name="RCalf" value="<?php echo $RCalf; ?>" readonly />

      <p style="color: white; text-align: center;">R FOOT</p>
      <input type="text" id="RFoot" name="RFoot" value="<?php echo $RFoot; ?>" readonly />
  </div>
  </div>

</form>
<br>
<br>
</div>
</div>

</body>
</html>