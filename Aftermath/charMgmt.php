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
    $username = $_SESSION['username'];
    echo "<p class='error'>Currently logged in as:  " .$username ."</p>";
?>
</div>
<div class="large-2 columns"><a href="signup.php" class="button">JOIN</a></div>
</div>

<!--banner-->
<div class="row banner">
<div class="large-12 columns"><a href="index.php"><img src="img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></a></div>
</div>

<!--form-->
<div class="row content">
<div class="large-12 columns">
<form id="charsheet" action="inc/updateChar.php" method="post">
<table>
<!--PLAYER-->
    <tr>
      <td>PLAYER NAME</td>
      <td><input type="text" id="username" name="username" value="<?php $username = $_SESSION['username']; echo $username; ?>" readonly /></td>
      <td>CHARACTER NAME</td>
      <td><input type="text" id="charName" name="charName" value="<?php $charName = parse_url($url, PHP_URL_QUERY); echo $charName ?>" readonly /></td>
      <td colspan="2">BACKGROUND</td>
      <td colspan="2"><input type="text" id="background" name="background"  
          value="<?php $sql="SELECT background FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['background'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
    </tr>
    
    <tr>
      <td>ETHNICITY</td>
      <td><input type="text" id="ethnicity" name="ethnicity" 
          value="<?php $sql="SELECT ethnicity FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ethnicity'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
      
      <td>SEX</td>
      <td><input type="text" id="sex" name="sex"  
          value="<?php $sql="SELECT sex FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['sex'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
      
      <td>AGE</td>
      <td><input type="text" id="age" name="age"  
          value="<?php $sql="SELECT age FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['age'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
      
      <td>EYE COLOR</td>
      <td><input type="text" id="eyeColor" name="eyeColor"  
          value="<?php $sql="SELECT eyeColor FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['eyeColor'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
    </tr>

<!--DEMO 3rd-->
    <tr>
      <td>BUILD</td>
      <td><input type="text" id="build" name="build"  
          value="<?php $sql="SELECT build FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['build'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
      
      <td>HABITAT</td>
      <td><input type="text" id="habitat" name="habitat"  
          value="<?php $sql="SELECT habitat FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['habitat'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
      
      <td>HAIR COLOR</td>
      <td><input type="text" id="hairColor" name="hairColor"  
          value="<?php $sql="SELECT hairColor FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['hairColor'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
      
      <td>HAIR STYLE</td>
      <td><input type="text" id="hairStyle" name="hairStyle"  
          value="<?php $sql="SELECT hairStyle FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['hairStyle'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
    </tr>

<!--TRAIT-->
    <tr>
      <td colspan="4" style="font-weight: bold;">TRAITS</td>
      <td colspan="4" style="font-weight: bold;">COMBAT STATS</td>
    </tr>   
<!--TRAIT 1st-->
    <tr>
      <td>MEMORY</td>
        <td>
          <button class="trainBtn" type="button" id="decMEM" onclick="decMem();">-</button>
          <input type="text" id="MEM" name="MEM" class="spendexp"
          value="<?php $sql="SELECT MEM FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['MEM'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incMEM" onclick="incMem();">+</button>

        </td>

        <td>STRENGTH</td>
        <td>
          <button class="trainBtn" type="button" id="decSTR" onclick="decStr();">-</button>
          <input type="text" id="STR" name="STR" class="spendexp" 
          value="<?php $sql="SELECT STR FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['STR'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSTR" onclick="incStr();">+</button>
        </td>

        <td style="font-weight: bold;">ACTIONS</td>
        <td><input type="text" id="act" name="act"  
          value="<?php $sql="SELECT ACT FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ACT'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
        <td style="font-weight: bold;">SEQUENCE</td>
        <td><input type="text" id="seq" name="seq"  
          value="<?php $sql="SELECT SEQ FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['SEQ'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
    </tr>
<!--TRAIT 2nd-->
    <tr>
      <td>LOGIC</td>
        <td>
          <button class="trainBtn" type="button" id="decLOG" onclick="decLog();">-</button>
          <input type="text" id="LOG" name="LOG" class="spendexp" 
          value="<?php $sql="SELECT LOG FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LOG'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incLOG" onclick="incLog();">+</button>
        </td>

      <td>ENDURANCE</td>
        <td>
          <button class="trainBtn" type="button" id="decEND" onclick="decEnd();">-</button>
          <input type="text" id="END" name="END" class="spendexp"
          value="<?php $sql="SELECT END FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['END'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incEND" onclick="incEnd();">+</button>
        </td>

        <td style="font-weight: bold;">BLOCK</td>
        <td>
          <button class="trainBtn" type="button" id="decBLOCK" onclick="decBlock();">-</button>
          <input type="text" id="block" name="block" class="spendexp"  
          value="<?php $sql="SELECT BLOCK FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['BLOCK'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incBLOCK" onclick="incBlock();">+</button>

        <td style="font-weight: bold;">DODGE</td>
        <td>
          <button class="trainBtn" type="button" id="decDODGE" onclick="decDodge();">-</button>
          <input type="text" id="dodge" name="dodge" class="spendexp"  
          value="<?php $sql="SELECT DODGE FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['DODGE'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incDODGE" onclick="incDodge();">+</button>
    </tr>
<!--TRAIT 3rd-->
    <tr>
<td>PERCEPTION</td>
        <td>
          <button class="trainBtn" type="button" id="decPER" onclick="decPer();">-</button>
          <input type="text" id="PER" name="PER" class="spendexp" 
          value="<?php $sql="SELECT PER FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['PER'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incPER" onclick="incPer();">+</button>
        </td>

      <td>DEXTERITY</td>
        <td>
          <button class="trainBtn" type="button" id="decDEX" onclick="decDex();">-</button>
          <input type="text" id="DEX" name="DEX" class="spendexp" 
          value="<?php $sql="SELECT DEX FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['DEX'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incDEX" onclick="incDex();">+</button>
        </td>

        <td>UNARM</td>
        <td>
          <button class="trainBtn" type="button" id="decUNARM" onclick="decUnarm();">-</button>
          <input type="text" id="unarm" name="unarm" class="spendexp"  
          value="<?php $sql="SELECT UNARM FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['UNARM'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incUNARM" onclick="incUnarm();">+</button>
        </td>

        <td>THROW</td>
        <td>
          <button class="trainBtn" type="button" id="decTHROW" onclick="decThrow();">-</button>
          <input type="text" id="thrown" name="thrown" class="spendexp"  
          value="<?php $sql="SELECT THROW FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['THROW'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incTHROW" onclick="incThrow();">+</button>
        </td>
 
<!--TRAIT 5th-->
    <tr>
      <td>WILLPOWER</td>
        <td>
          <button class="trainBtn" type="button" id="decWILL" onclick="decWill();">-</button>
          <input type="text" id="WILL" name="WILL" class="spendexp"  
          value="<?php $sql="SELECT WILL FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['WILL'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incWILL" onclick="incWill();">+</button>
        </td>

      <td>SPEED</td>
        <td>
          <button class="trainBtn" type="button" id="decSPD" onclick="decSpd();">-</button>
          <input type="text" id="SPD" name="SPD" class="spendexp" 
          value="<?php $sql="SELECT SPD FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['SPD'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSPD" onclick="incSpd();">+</button>
        </td>

      <td>GRAPPLE</td>
        <td>
          <button class="trainBtn" type="button" id="decGRAP" onclick="decGrap();">-</button>
          <input type="text" id="grap" name="grap" class="spendexp"  
          value="<?php $sql="SELECT GRAPPLE FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['GRAPPLE'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incGRAP" onclick="incGrap();">+</button>
        </td>

       <td>ARCH</td>
        <td>
          <button class="trainBtn" type="button" id="decARCH" onclick="decArch();">-</button>
          <input type="text" id="arch" name="arch" class="spendexp"  
          value="<?php $sql="SELECT ARCH FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ARCH'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incARCH" onclick="incArch();">+</button>
        </td>
    </tr>

<!--COMBAT 3rd-->
    <tr>
      <td>CHARISMA</td>
        <td>
        <button class="trainBtn" type="button" id="decCHA" onclick="decCha();">-</button>
        <input type="text" id="CHA" name="CHA" class="spendexp" 
          value="<?php $sql="SELECT CHA FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['CHA'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incCHA" onclick="incCha();">+</button>
        </td>

      <td>BEAUTY</td>
        <td>
          <input type="text" id="BTY" name="BTY"  
          value="<?php $sql="SELECT BTY FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['BTY'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
        </td>
      
      <td>OFF</td>
      <td>
        <button class="trainBtn" type="button" id="decOFF" onclick="decOff();">-</button>
        <input type="text" id="off" name="off" class="spendexp"  
          value="<?php $sql="SELECT OFF FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['OFF'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incOFF" onclick="incOff();">+</button>
      </td>
      
      <td>1H GUNS</td>
      <td>
        <button class="trainBtn" type="button" id="decONEHG" onclick="decOHG();">-</button>
        <input type="text" id="oneHguns" name="oneHguns" class="spendexp"  
          value="<?php $sql="SELECT ONEHGUNS FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ONEHGUNS'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incONEHG" onclick="incOHG();">+</button>
      </td>
    </tr>
<!--COMBAT 4th-->
    <tr>
      <td colspan="4" style="font-weight: bold;">UNIVERSAL SKILLS</td>

      <td>SHORT W</td>
      <td>
        <button class="trainBtn" type="button" id="decSHORTW" onclick="decShort();">-</button>
        <input type="text" id="shortW" name="shortW" class="spendexp"  
          value="<?php $sql="SELECT SHORTW FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['SHORTW'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incSHORTW" onclick="incShort();">+</button>
      </td>
      
      <td>2H GUNS</td>
      <td>
        <button class="trainBtn" type="button" id="decTWOHG" onclick="decTHG();">-</button>
        <input type="text" id="twoHguns" name="twoHguns" class="spendexp"  
          value="<?php $sql="SELECT TWOHGUNS FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['TWOHGUNS'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incTWOHG" onclick="incTHG();">+</button>
      </td>
    </tr>
<!--COMBAT 5th-->
    <tr>
      <td>STEALTH</td>
      <td>
        <button class="trainBtn" type="button" id="decSTEALTH" onclick="decStealth();">-</button>
        <input type="text" id="stealth" name="stealth" class="spendexp"  
          value="<?php $sql="SELECT STEALTH FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['STEALTH'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incSTEALTH" onclick="incStealth();">+</button>
      </td>

      <td>CLIMBING</td>
      <td>
        <button class="trainBtn" type="button" id="decCLIMB" onclick="decClimb();">-</button>
        <input type="text" id="climb" name="climb" class="spendexp"  
          value="<?php $sql="SELECT CLIMB FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['CLIMB'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incCLIMB" onclick="incClimb();">+</button>
      </td>
      
      <td>LONG W</td>
      <td>
        <button class="trainBtn" type="button" id="decLONGW" onclick="decLong();">-</button>
        <input type="text" id="longW" name="longW" class="spendexp"  
          value="<?php $sql="SELECT LONGW FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LONGW'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incLONGW" onclick="incLong();">+</button>
      </td>
      
      <td>BURST</td>
      <td>
        <button class="trainBtn" type="button" id="decBURST" onclick="decBurst();">-</button>
        <input type="text" id="burst" name="burst" class="spendexp"  
          value="<?php $sql="SELECT BURST FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['BURST'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incBURST" onclick="incBurst();">+</button>
      </td>
    </tr>
<!--COMBAT 6th-->
    <tr>
      <td>NAVIG.</td>
      <td>
        <button class="trainBtn" type="button" id="decNAVIG" onclick="decNav();">-</button>
        <input type="text" id="navig" name="navig" class="spendexp"  
          value="<?php $sql="SELECT NAVIG FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['NAVIG'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incNAVIG" onclick="incNav();">+</button>
      </td>

      <td>NEGOT.</td>
      <td>
        <button class="trainBtn" type="button" id="decNEGOT" onclick="decNegot();">-</button>
        <input type="text" id="negot" name="negot" class="spendexp"  
          value="<?php $sql="SELECT NEGOT FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['NEGOT'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incNEGOT" onclick="incNegot();">+</button>
      </td>

      <td>2H W</td>
      <td>
        <button class="trainBtn" type="button" id="decTWOHW" onclick="decTHW();">-</button>
        <input type="text" id="twoHW" name="twoHW" class="spendexp"  
          value="<?php $sql="SELECT TWOHW FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['TWOHW'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incTWOHW" onclick="incTHW();">+</button>
      </td>
      
      <td>SPECIAL</td>
      <td>
        <button class="trainBtn" type="button" id="decSPEC" onclick="decSpec();">-</button>
        <input type="text" id="special" name="special" class="spendexp"  
          value="<?php $sql="SELECT SPECIAL FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['SPECIAL'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incSPEC" onclick="incSpec();">+</button>
      </td>
    </tr>
<!--COMBAT 7th-->
    <tr>
      <td>CRAFTING</td>
      <td>
        <button class="trainBtn" type="button" id="decCRAFT" onclick="decCraft();">-</button>
        <input type="text" id="craft" name="craft" class="spendexp"  
          value="<?php $sql="SELECT CRAFTING FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['CRAFTING'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incCRAFT" onclick="incCraft();">+</button>
      </td>
      
      <td>SURVIVAL</td>
      <td>
        <button class="trainBtn" type="button" id="decSURV" onclick="decSurv();">-</button>
        <input type="text" id="survival" name="survival" class="spendexp"  
          value="<?php $sql="SELECT SURVIVAL FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['SURVIVAL'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incSURV" onclick="incSurv();">+</button>
      </td>
      
      <td>CHAIN</td>
      <td>
        <button class="trainBtn" type="button" id="decCHAIN" onclick="decChain();">-</button>
        <input type="text" id="chain" name="chain" class="spendexp"  
          value="<?php $sql="SELECT CHAIN FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['CHAIN'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incCHAIN" onclick="incChain();">+</button>
      </td>
      
      <td>W SYS</td>
      <td>
        <button class="trainBtn" type="button" id="decWSYS" onclick="decWsys();">-</button>
        <input type="text" id="wsys" name="wsys" class="spendexp"  
          value="<?php $sql="SELECT WSYS FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['WSYS'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            <button class="trainBtn" type="button" id="incWSYS" onclick="incWsys();">+</button>
      </td>
    </tr>

    <tr>
      <td colspan="8" style="font-weight: bold;">BASIC SKILLS</td>
    </tr>
<!--SKILLS 1st-->
    <tr>
      <td><input type="text"  id="skill1" name="skill1"  
          value="<?php $sql="SELECT skill1 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill1'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL1" onclick="decBasic1();">-</button>
        <input type="text"  id="skillRate1" name="skillRate1" class="spendexp"
          value="<?php $sql="SELECT skillRate1 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate1'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL1" onclick="incBasic1(); n = 1;">+</button>
      </td>

      <td><input type="text"  id="skill2" name="skill2"  
          value="<?php $sql="SELECT skill2 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill2'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL2" onclick="decBasic2();">-</button>
        <input type="text"  id="skillRate2" name="skillRate2" class="spendexp" 
          value="<?php $sql="SELECT skillRate2 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate2'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL2" onclick="incBasic2(); n = 2;">+</button>
      </td>

      <td><input type="text"  id="skill3" name="skill3"  
          value="<?php $sql="SELECT skill3 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill3'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL3" onclick="decBasic3();">-</button>
        <input type="text"  id="skillRate3" name="skillRate3" class="spendexp" 
          value="<?php $sql="SELECT skillRate3 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate3'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL3" onclick="incBasic3(); n = 3;">+</button>
      </td>
      
      <td><input type="text"  id="skill4" name="skill4"  
          value="<?php $sql="SELECT skill4 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill4'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL4" onclick="decBasic4();">-</button>
        <input type="text"  id="skillRate4" name="skillRate4" class="spendexp" 
          value="<?php $sql="SELECT skillRate4 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate4'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL4" onclick="incBasic4(); n = 4;">+</button>
        </td>
    </tr>    
<!--SKILLS 2nd-->
    <tr>
      <td><input type="text"  id="skill5" name="skill5"  
          value="<?php $sql="SELECT skill5 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill5'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL5" onclick="decBasic5();">-</button>
        <input type="text"  id="skillRate5" name="skillRate5" class="spendexp" 
          value="<?php $sql="SELECT skillRate5 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate5'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL5" onclick="incBasic5(); n = 5;">+</button>
        </td>

      <td><input type="text"  id="skill6" name="skill6"  
          value="<?php $sql="SELECT skill6 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill6'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL6" onclick="decBasic6();">-</button>
        <input type="text"  id="skillRate6" name="skillRate6" class="spendexp" 
          value="<?php $sql="SELECT skillRate6 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate6'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL6" onclick="incBasic6(); n = 6;">+</button>
        </td>

      <td><input type="text"  id="skill7" name="skill7"  
          value="<?php $sql="SELECT skill7 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill7'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL7" onclick="decBasic7();">-</button>
        <input type="text"  id="skillRate7" name="skillRate7" class="spendexp"  
          value="<?php $sql="SELECT skillRate7 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate7'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL7" onclick="incBasic7(); n = 7;">+</button>
        </td>

      <td><input type="text"  id="skill8" name="skill8"  
          value="<?php $sql="SELECT skill8 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill8'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL8" onclick="decBasic8();">-</button>
        <input type="text"  id="skillRate8" name="skillRate8" class="spendexp"  
          value="<?php $sql="SELECT skillRate8 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate8'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL8" onclick="incBasic8(); n = 8;">+</button>
        </td>
    </tr>    
<!--SKILLS 3rd-->
    <tr>
      <td><input type="text"  id="skill9" name="skill9"  
          value="<?php $sql="SELECT skill9 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill9'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL9" onclick="decBasic9();">-</button>
        <input type="text"  id="skillRate9" name="skillRate9" class="spendexp" 
          value="<?php $sql="SELECT skillRate9 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate9'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL9" onclick="incBasic9(); n = 9;">+</button>
        </td>

      <td><input type="text"  id="skill10" name="skill10"  
          value="<?php $sql="SELECT skill10 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill10'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL10" onclick="decBasic10();">-</button>
        <input type="text"  id="skillRate10" name="skillRate10" class="spendexp" 
          value="<?php $sql="SELECT skillRate10 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate10'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL10" onclick="incBasic10(); n = 10;">+</button>
        </td>

      <td><input type="text"  id="skill11" name="skill11"  
          value="<?php $sql="SELECT skill11 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill11'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL11" onclick="decBasic11();">-</button>
        <input type="text"  id="skillRate11" name="skillRate11" class="spendexp"
          value="<?php $sql="SELECT skillRate11 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate11'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL11" onclick="incBasic11(); n = 11;">+</button>
        </td>

      <td><input type="text"  id="skill12" name="skill12"  
          value="<?php $sql="SELECT skill12 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill12'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL12" onclick="decBasic12();">-</button>
        <input type="text"  id="skillRate12" name="skillRate12" class="spendexp"  
          value="<?php $sql="SELECT skillRate12 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate12'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL12" onclick="incBasic12(); n = 12;">+</button>
        </td>
    </tr> 
<!--SKILLS 4th-->
    <tr>
      <td><input type="text"  id="skill13" name="skill13"  
          value="<?php $sql="SELECT skill13 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill13'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL13" onclick="decBasic13();">-</button>
        <input type="text"  id="skillRate13" name="skillRate13" class="spendexp" 
          value="<?php $sql="SELECT skillRate13 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate13'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL13" onclick="incBasic13(); n = 13;">+</button>
        </td>

      <td><input type="text"  id="skill14" name="skill14"  
          value="<?php $sql="SELECT skill14 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill14'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL14" onclick="decBasic14();">-</button>
        <input type="text"  id="skillRate14" name="skillRate14" class="spendexp" 
          value="<?php $sql="SELECT skillRate14 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate14'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL14" onclick="incBasic14(); n = 14;">+</button>
        </td>

      <td><input type="text"  id="skill15" name="skill15"  
          value="<?php $sql="SELECT skill15 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill15'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL15" onclick="decBasic15();">-</button>
        <input type="text"  id="skillRate15" name="skillRate15" class="spendexp" 
          value="<?php $sql="SELECT skillRate15 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate15'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL15" onclick="incBasic15(); n = 15;">+</button>
        </td>

      <td><input type="text"  id="skill16" name="skill16"  
          value="<?php $sql="SELECT skill16 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill16'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL16" onclick="decBasic16();">-</button>
        <input type="text"  id="skillRate16" name="skillRate16" class="spendexp" 
          value="<?php $sql="SELECT skillRate16 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate16'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL16" onclick="incBasic16(); n = 16;">+</button>
        </td>
    </tr>   
<!--SKILLS 5TH-->
    <tr>
      <td><input type="text"  id="skill17" name="skill17"  
          value="<?php $sql="SELECT skill17 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill17'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL17" onclick="decBasic17();">-</button>
        <input type="text"  id="skillRate17" name="skillRate17" class="spendexp" 
          value="<?php $sql="SELECT skillRate17 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate17'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL17" onclick="incBasic17(); n = 17;">+</button>
        </td>

      <td><input type="text"  id="skill18" name="skill18"  
          value="<?php $sql="SELECT skill18 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill18'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL18" onclick="decBasic18();">-</button>
        <input type="text" id="skillRate18" name="skillRate18" class="spendexp"  
          value="<?php $sql="SELECT skillRate18 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate18'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL18" onclick="incBasic18(); n = 18;">+</button>
        </td>

      <td><input type="text"  id="skill19" name="skill19"  
          value="<?php $sql="SELECT skill19 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill19'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL19" onclick="decBasic19();">-</button>
        <input type="text"  id="skillRate19" name="skillRate19" class="spendexp" 
          value="<?php $sql="SELECT skillRate19 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate19'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL19" onclick="incBasic19(); n = 19;">+</button>
        </td>

      <td><input type="text"  id="skill20" name="skill20"  
          value="<?php $sql="SELECT skill20 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skill20'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decSKL20" onclick="decBasic20();">-</button>
        <input type="text" id="skillRate20" name="skillRate20" class="spendexp" 
          value="<?php $sql="SELECT skillRate20 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate20'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incSKL20" onclick="incBasic20(); n = 20;">+</button>
        </td>
    </tr> 
<!--ADVANCED SKILLS-->
    <tr>
      <td colspan="8" style="font-weight: bold;">ADVANCED SKILLS</td>
    </tr>
    <tr>
      <td><input type="text"  id="advSkill1" name="advSkill1"  
          value="<?php $sql="SELECT advSkill1 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill1'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV1" onclick="decAdv1();">-</button>
        <input type="text"  id="advSkillRate1" name="advSkillRate1" class="spendexp" 
          value="<?php $sql="SELECT advSkillRate1 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate1'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV1" onclick="incAdv1();">+</button>
        </td>

      <td><input type="text"  id="advSkill2" name="advSkill2"  
          value="<?php $sql="SELECT advSkill2 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill2'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV2" onclick="decAdv2();">-</button>
        <input type="text"  id="advSkillRate2" name="advSkillRate2" class="spendexp"  
          value="<?php $sql="SELECT advSkillRate2 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate2'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV2" onclick="incAdv2();">+</button>
        </td>

      <td><input type="text"  id="advSkill3" name="advSkill3"  
          value="<?php $sql="SELECT advSkill3 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill3'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV3" onclick="decAdv3();">-</button>
        <input type="text"  id="advSkillRate3" name="advSkillRate3" class="spendexp"  
          value="<?php $sql="SELECT advSkillRate3 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate3'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV3" onclick="incAdv3();">+</button>
        </td>

      <td><input type="text"  id="advSkill4" name="advSkill4"  
          value="<?php $sql="SELECT advSkill4 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill4'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV4" onclick="decAdv4();">-</button>
        <input type="text"  id="advSkillRate4" name="advSkillRate4" class="spendexp" 
          value="<?php $sql="SELECT advSkillRate4 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate4'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV4" onclick="incAdv4();">+</button>
        </td>
    </tr>
<!--ADV 2nd-->
    <tr>
      <td><input type="text"  id="advSkill5" name="advSkill5"  
          value="<?php $sql="SELECT advSkill5 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill5'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV5" onclick="decAdv5();">-</button>
        <input type="text" id="advSkillRate5" name="advSkillRate5" class="spendexp" 
          value="<?php $sql="SELECT advSkillRate5 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate5'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV5" onclick="incAdv5();">+</button>
        </td>

      <td><input type="text"  id="advSkill6" name="advSkill6"  
          value="<?php $sql="SELECT advSkill6 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill6'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV6" onclick="decAdv6();">-</button>
        <input type="text" id="advSkillRate6" name="advSkillRate6" class="spendexp" 
          value="<?php $sql="SELECT advSkillRate6 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate6'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV6" onclick="incAdv6();">+</button>
        </td>

      <td><input type="text"  id="advSkill7" name="advSkill7"  
          value="<?php $sql="SELECT advSkill7 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill7'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV7" onclick="decAdv7();">-</button>
        <input type="text" id="advSkillRate7" name="advSkillRate7" class="spendexp" 
          value="<?php $sql="SELECT advSkillRate7 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate7'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV7" onclick="incAdv7();">+</button>
        </td>

      <td><input type="text"  id="advSkill8" name="advSkill8"  
          value="<?php $sql="SELECT advSkill8 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill8'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV8" onclick="decAdv8();">-</button>
        <input type="text" id="advSkillRate8" name="advSkillRate8" class="spendexp" 
          value="<?php $sql="SELECT advSkillRate8 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate8'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV8" onclick="incAdv8();">+</button>
        </td>
    </tr>

    <tr>
      <td><input type="text"  id="advSkill9" name="advSkill9"  
          value="<?php $sql="SELECT advSkill9 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill9'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV9" onclick="decAdv9();">-</button>
        <input type="text" id="advSkillRate9" name="advSkillRate9" class="spendexp" 
          value="<?php $sql="SELECT advSkillRate9 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate9'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV9" onclick="incAdv9();">+</button>
        </td>

      <td><input type="text"  id="advSkill10" name="advSkill10"  
          value="<?php $sql="SELECT advSkill10 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill10'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV10" onclick="decAdv10();">-</button>
        <input type="text" id="advSkillRate10" name="advSkillRate10" class="spendexp" 
          value="<?php $sql="SELECT advSkillRate10 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate10'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV10" onclick="incAdv10();">+</button>
        </td>

      <td><input type="text"  id="advSkill11" name="advSkill11"  
          value="<?php $sql="SELECT advSkill11 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill11'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV11" onclick="decAdv11();">-</button>
        <input type="text" id="advSkillRate11" name="advSkillRate11" class="spendexp" 
          value="<?php $sql="SELECT advSkillRate11 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate11'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV11" onclick="incAdv11();">+</button>
        </td>

      <td><input type="text"  id="advSkill12" name="advSkill12"  
          value="<?php $sql="SELECT advSkill12 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkill12'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td>
        <button class="trainBtn" type="button" id="decADV12" onclick="decAdv12();">-</button>
        <input type="text" id="advSkillRate12" name="advSkillRate12" class="spendexp" 
          value="<?php $sql="SELECT advSkillRate12 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate12'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          <button class="trainBtn" type="button" id="incADV12" onclick="incAdv12();">+</button>
        </td>
    </tr>
<!--ABILITIES-->
    <tr>
      <td colspan="8" style="font-weight: bold;">ABILITIES</td>
    </tr> 
    
    <tr>
      <td colspan="8">
        <button class="button" style="max-width: 50%;" type="button" id="abilityBtn" onclick="document.getElementById('abilityModal').style.display = 'block';">
          ADD NEW ABILITY</button>
      </td>
    </tr> 

    <tr>
      <td colspan="2"><input type="text" id="ability1" name="ability1" 
          value="<?php $sql="SELECT ability1 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability1'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td colspan="2"><input type="text" id="ability2" name="ability2" 
          value="<?php $sql="SELECT ability2 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability2'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td colspan="2"><input type="text" id="ability3" name="ability3" 
          value="<?php $sql="SELECT ability3 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability3'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td colspan="2"><input type="text" id="ability4" name="ability4" 
          value="<?php $sql="SELECT ability4 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability4'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
    </tr>

    <tr>
      <td colspan="2"><input type="text" id="ability5" name="ability5" 
          value="<?php $sql="SELECT ability5 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability5'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td colspan="2"><input type="text" id="ability6" name="ability6" 
          value="<?php $sql="SELECT ability6 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability6'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td colspan="2"><input type="text" id="ability7" name="ability7" 
          value="<?php $sql="SELECT ability7 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability7'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td colspan="2"><input type="text" id="ability8" name="ability8" 
          value="<?php $sql="SELECT ability8 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability8'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
    </tr>

    <tr>
      <td colspan="2"><input type="text" id="ability9" name="ability9" 
          value="<?php $sql="SELECT ability9 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability9'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td colspan="2"><input type="text" id="ability10" name="ability10" 
          value="<?php $sql="SELECT ability10 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability10'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td colspan="2"><input type="text" id="ability11" name="ability11" 
          value="<?php $sql="SELECT ability11 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability11'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td colspan="2"><input type="text" id="ability12" name="ability12" 
          value="<?php $sql="SELECT ability12 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ability12'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
    </tr>
<!--EXP-->
    <tr>
      <td colspan="2">TOTAL EXP</td>
      <td colspan="2"><input type="text" id="totalEXP" name="totalEXP"  
          value="<?php $sql="SELECT totalEXP FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['totalEXP'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>

      <td colspan="2">REMAINING EXP</td>
      <td colspan="2"><input type="text"  id="remEXP" name="remEXP"  
          value="<?php $sql="SELECT remEXP FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['remEXP'];
                }
            } else {
            echo "0 results";
            } ?>" readonly /></td>
    </tr>
<!--ID MARKS-->
    <tr>
      <td colspan="8">
        <button class="button" style="max-width: 50%;" type="button" id="idMarksBtn" onclick="document.getElementById('idMarksModal').style.display = 'block';">
          VIEW ID MARKS</button>
      </td>
    </tr> 
    <br>
<!--SUBMIT-->
    <tr>
      <td colspan="8"><input style="max-width: 50%;" type="submit" name="submit" value="CONFIRM & UPLOAD" class="button" /></td>
    </tr>
    <br>

</table>
</form>
</div>

<!--idMarksModal-->
<div id="idMarksModal" class="editModal">
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
            } ?>" readonly />

      <p style="color: white; text-align: center;">NECK</p>
      <input type="text" id="neck" name="neck" value="<?php $sql="SELECT neck FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['neck'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />

      <p style="color: white; text-align: center;">LEFT SHOULDER</p>
      <input type="text" id="LShoulder" name="LShoulder" value="<?php $sql="SELECT LShoulder FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LShoulder'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />

      <p style="color: white; text-align: center;">LEFT RIBS</p>          
      <input type="text" id="LRibs" name="LRibs" value="<?php $sql="SELECT LRibs FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LRibs'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />

      <p style="color: white; text-align: center;">LEFT UPPER ARM</p>         
      <input type="text" id="LUpperArm" name="LUpperArm" value="<?php $sql="SELECT LUpperArm FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LUpperArm'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />

      <p style="color: white; text-align: center;">STOMACH</p>         
      <input type="text" id="stomach" name="stomach" value="<?php $sql="SELECT stomach FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['stomach'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />

      <p style="color: white; text-align: center;">LEFT FOREARM</p>
      <input type="text" id="LForearm" name="LForearm" value="<?php $sql="SELECT LForearm FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LForearm'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />

      <p style="color: white; text-align: center;">REAR</p>
      <input type="text" id="rear" name="rear" value="<?php $sql="SELECT rear FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['rear'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />

      <p style="color: white; text-align: center;">LEFT HAND</p>
      <input type="text" id="LHand" name="LHand" value="<?php $sql="SELECT LHand FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LHand'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />

      <p style="color: white; text-align: center;">LEFT THIGH</p>
      <input type="text" id="LThigh" name="LThigh" value="<?php $sql="SELECT LThigh FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LThigh'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />

      <p style="color: white; text-align: center;">LEFT CALF</p>
      <input type="text" id="LCalf" name="LCalf" value="<?php $sql="SELECT LCalf FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LCalf'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />

      <p style="color: white; text-align: center;">LEFT FOOT</p>
      <input type="text" id="LFoot" name="LFoot" value="<?php $sql="SELECT LFoot FROM idmarks WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LFoot'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
            } ?>" readonly />

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
            } ?>" readonly />
      
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
            } ?>" readonly />

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
            } ?>" readonly />

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
            } ?>" readonly />

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
            } ?>" readonly />

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
            } ?>" readonly />

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
            } ?>" readonly />

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
            } ?>" readonly />

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
            } ?>" readonly />

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
            } ?>" readonly />
  </div>
<button type="button" style="margin-bottom: 2vh;" onclick="document.getElementById('idMarksModal').style.display='none';" class="button">CLOSE</button></td>
<br>
</div>

<!--SWEEP MODAL-->
<div id="sweepModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">SWEEP ATTACK</td>
  </tr>

  <tr>
    <td colspan="12" class="box">
    A SWEEP ATTACK IS USED TO STRIKE MULTIPLE TARGETS WITHIN RANGE OF THE CHARACTER.  IN THE CASE OF MELEE ATTACKS IT COSTS 2 ACTIONS, ONE TO SWING AND ANOTHER TO REGAIN THEIR BALANCE.  IN THE CASE OF A BURST FIRE SWEEP ATTACK IT IS SIMPLY PUTTING FIRE OVER A WIDER TARGET AREA THAN THE STANDARD 6FT CONE.  IN THE EVENT OF A SUCCESSFUL SWEEP ATTACK EACH TARGET RECIEVES ONE HIT DETERMINED BY THE RANDOM HIT CHART WITH STANDARD COVER RULES AND COMMON SENSE IN PLAY.
    </td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addUnSwp(); document.getElementById('sweepModal').style.display='none';" class="button">UNARMED</button></td>
    <td colspan="4"><button type="button" onclick="addShortSwp(); document.getElementById('sweepModal').style.display='none';" class="button">SHORT</button></td>
    <td colspan="4"><button type="button" onclick="addLongSwp(); document.getElementById('sweepModal').style.display='none';" class="button">LONG</button></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">STR >= 14<br>UNARMED >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 14<br>SHORT >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 10<br>LONG >= 100<br>7,500 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addTHWSwp(); document.getElementById('sweepModal').style.display='none';" class="button">TWO-HANDED</button>
      </td>
    <td colspan="4"><button type="button" onclick="addChainSwp(); document.getElementById('sweepModal').style.display='none';" class="button">CHAIN</button></td>
    <td colspan="4"><button type="button" onclick="addBurstSwp(); document.getElementById('sweepModal').style.display='none';" class="button">BURST-FIRE</button>
      </td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">STR >= 10<br>TWO HANDED >= 75<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 8<br>BURST >= 75<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">CHAIN >= 75<br>5,000 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('sweepModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>
<!--ABILITY MODAL-->
<div id="abilityModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">PRE-REQUISITES LISTED IN GRAY</td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="3"><button type="button" onclick="addTake(); document.getElementById('abilityModal').style.display='none';" class="button">TAKEDOWN</button></td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('sweepModal').style.display='block';" class="button">SWEEP-ATTACK</button></td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('disarmModal').style.display='block';" class="button">DISARM</button></td>
    <td colspan="3"><button type="button" onclick="addStun(); document.getElementById('abilityModal').style.display='none';" class="button">STUN</button></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="3" style="background-color: darkgray;">5,000 EXP</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">STR >= 8<br>10,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="3"><button type="button" onclick="addCripple(); document.getElementById('abilityModal').style.display='none';" class="button">CRIPPLE</button>
      </td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('parryModal').style.display='block';" class="button">PARRY</button></td>
    <td colspan="3"><button type="button" onclick="addDodge(); document.getElementById('abilityModal').style.display='none';" class="button">AUTO-DODGE</button>
      </td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('counterModal').style.display='block';" class="button">COUNTER-ATTACK</button></td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="3" style="background-color: darkgray;">STR >= 10<br>15,000 EXP</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">SPD >= 14<br>DEX >= 12<br>50,000 EXP</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
  </tr>

<!--3RD ROW-->  
  <tr>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('drawModal').style.display='block';" class="button">QUICKDRAW</button></td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('loadModal').style.display='block';" class="button">SPEEDLOAD</button></td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('volleyModal').style.display='block';" class="button">VOLLEY</button></td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('blindModal').style.display='block';" class="button">BLINDFIRE</button></td>
  </tr>
<!--3RD ROW REQS-->
  <tr>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
  </tr> 

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--SWEEP MODAL-->
<div id="sweepModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">SWEEP ATTACK</td>
  </tr>

  <tr>
    <td colspan="12" class="box">
    A SWEEP ATTACK IS USED TO STRIKE MULTIPLE TARGETS WITHIN RANGE OF THE CHARACTER.  IN THE CASE OF MELEE ATTACKS IT COSTS 2 ACTIONS, ONE TO SWING AND ANOTHER TO REGAIN THEIR BALANCE.  IN THE CASE OF A BURST FIRE SWEEP ATTACK IT IS SIMPLY PUTTING FIRE OVER A WIDER TARGET AREA THAN THE STANDARD 6FT CONE.  IN THE EVENT OF A SUCCESSFUL SWEEP ATTACK EACH TARGET RECIEVES ONE HIT DETERMINED BY THE RANDOM HIT CHART WITH STANDARD COVER RULES AND COMMON SENSE IN PLAY.
    </td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addUnSwp(); document.getElementById('sweepModal').style.display='none';" class="button">UNARMED</button></td>
    <td colspan="4"><button type="button" onclick="addShortSwp(); document.getElementById('sweepModal').style.display='none';" class="button">SHORT</button></td>
    <td colspan="4"><button type="button" onclick="addLongSwp(); document.getElementById('sweepModal').style.display='none';" class="button">LONG</button></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">STR >= 14<br>UNARMED >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 14<br>SHORT >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 10<br>LONG >= 100<br>7,500 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addTHWSwp(); document.getElementById('sweepModal').style.display='none';" class="button">TWO-HANDED</button>
      </td>
    <td colspan="4"><button type="button" onclick="addChainSwp(); document.getElementById('sweepModal').style.display='none';" class="button">CHAIN</button></td>
    <td colspan="4"><button type="button" onclick="addBurstSwp(); document.getElementById('sweepModal').style.display='none';" class="button">BURST-FIRE</button>
      </td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">STR >= 10<br>TWO HANDED >= 75<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 8<br>BURST >= 75<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">CHAIN >= 75<br>5,000 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('sweepModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--DISARM MODAL-->
<div id="disarmModal" class="editModal">
<div>
<table>

  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">DISARM ATTACK</td>
  </tr>

  <tr>
    <td colspan="12" class="box">
      A DISARM ATTACK IS USED TO STRIP THE WEAPON FROM AN OPPONENTS HAND WITHOUT ACTUALLY INFLICTING ANY SERIOUS DAMAGE UPON THE TARGET.  EACH WEAPON TYPE REPRESENTS TRAINING IN THE TOOLS NECESSARY TO ACCOMPLISH THE EFFECT QUICKLY, IE: UNARMED IS THE STRIKE THAT FORCES TARGET TO LOSE HIS GRIP, GRAPPLE IS WRESTLING THE WEAPON AWAY; SHORT, LONG, AND TWO HANDED USE THE WEAPONS LEVERAGE AGAINST GRIP STRENGTH; AND CHAINS TEND TO ENSNARE THE WEAPON.
    </td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addUnDis(); document.getElementById('disarmModal').style.display='none';" class="button">UNARMED</button></td>
    <td colspan="4"><button type="button" onclick="addGrapDis(); document.getElementById('disarmdisarmModal').style.display='none';" class="button">GRAPPLE
    </button></td>
    <td colspan="4"><button type="button" onclick="addShortDis(); document.getElementById('disarmModal').style.display='none';" class="button">SHORT</button></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">UNARMED >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">GRAPPLE >= 75<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">SHORT >= 100<br>10,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addLongDis(); document.getElementById('disarmModal').style.display='none';" class="button">LONG</button>
      </td>
    <td colspan="4"><button type="button" onclick="addTHWDis(); document.getElementById('disarmModal').style.display='none';" class="button">TWO-HANDED</button>
      </td>
    <td colspan="4"><button type="button" onclick="addChainDis(); document.getElementById('disarmModal').style.display='none';" class="button">CHAIN</button></td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">LONG >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">TWO-HANDED >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">CHAIN >= 75<br>7,500 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('disarmModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--PARRY MODAL-->
<div id="parryModal" class="editModal">
<div>
<table>
  
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">PARRY</td>
  </tr>
  <tr>
    <td colspan="12" class="box">
    A PARRY ATTACK IS ESSENTIALLY AN AUTOMATIC BLOCK, MEANING THAT IF THE CHARACTER HAS THIS ABILITY THEY NO LONGER NEED TO SAVE AN ACTION TO BLOCK AS LONG AS THEY HAVE THE WEAPON OR EQUIPMENT IN HAND.  BLOCK RULES APPLY AS NORMAL, THOUGH THE WEAPON SKILL PREREQUISITES ARE WHATS NEEDED TO MAKE THE OPTION AVAILABLE.  THE SHIELD WAS DESIGNED FOR THIS, AND AS SUCH IS SIGNIFICANTLY EASIER TO USE!
    </td>
  </tr>

<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addUnBlk(); document.getElementById('parryModal').style.display='none';" class="button">UNARMED</button></td>
    <td colspan="4"><button type="button" onclick="addShieldBlk(); document.getElementById('parryModal').style.display='none';" class="button">SHIELD</button>
    </td>
    <td colspan="4"><button type="button" onclick="addShortBlk(); document.getElementById('parryModal').style.display='none';" class="button">SHORT</button></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">UNARMED >= 100<br>SPD >= 10<br>20,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">UNARMED >= 75<br>SPD >= 8<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">SHORT >= 100<br>SPD >= 10<br>20,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addLongBlk(); document.getElementById('parryModal').style.display='none';" class="button">LONG</button>
      </td>
    <td colspan="4"><button type="button" onclick="addTHWBlk(); document.getElementById('parryModal').style.display='none';" class="button">TWO-HANDED</button>
      </td>
    <td colspan="4"><button type="button" onclick="addChainBlk(); document.getElementById('parryModal').style.display='none';" class="button">CHAIN</button></td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">LONG >= 100<br>SPD >= 10<br>20,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">TWO-HANDED >= 100<br>SPD >= 10<br>20,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">CHAIN >= 100<br>SPD >= 10<br>7,500 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('parryModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--COUNTER-ATTACK MODAL-->
<div id="counterModal" class="editModal">
<div>
<table>

  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">COUNTER-ATTACK</td>
  </tr>
    <tr>
    <td colspan="12" class="box">
    THE COUNTER ATTACK ALLOWS THE CHARACTER TO PERFORM A FREE ATTACK WITH THE SELECTED WEAPON AT NO ACTION COST WHENEVER THEY SUCCESSFULLY BLOCK.  IF THEY STRIKE THEIR OPPONENT THEN THE TARGET RECIEVES DAMAGE TO A LOCATION DETERMINED BY THE RANDOM HIT CHART WITH STANDARD COVER RULES AND COMMON SENSE IN PLAY  
    </td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addUnCA(); document.getElementById('counterModal').style.display='none';" class="button">UNARMED</button></td>
    <td colspan="4"><button type="button" onclick="addShortCA(); document.getElementById('counterModal').style.display='none';" class="button">SHORT</button></td>
    <td colspan="4"><button type="button" onclick="addLongCA(); document.getElementById('counterModal').style.display='none';" class="button">LONG</button>
      </td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">UNARMED >= 100<br>SPD >= 10<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">SHORT >= 100<br>SPD >= 10<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">LONG >= 100<br>SPD >= 12<br>10,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addTHWCA(); document.getElementById('counterModal').style.display='none';" class="button">TWO-HANDED</button>
      </td>
    <td colspan="4"><button type="button" onclick="addChainCA(); document.getElementById('counterModal').style.display='none';" class="button">CHAIN</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">TWO-HANDED >= 100<br>SPD >= 12<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">CHAIN >= 100<br>SPD >= 10<br>10,000 EXP</td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('counterModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--QUICKDRAW MODAL-->
<div id="drawModal" class="editModal">
<div>
<table>

  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">QUICKDRAW</td>
  </tr>
    <tr>
    <td colspan="12" class="box">
    LIFE ON EDGE HAS LEAD THE CHARACTER TO ALWAYS HAVE A WEAPON OR ITEM AT THE READY.  EACH LOCATION REPRESENTS AN AREA OF THE BODY WHERE THE CHARACTER CAN SPEND ZERO ACTION POINTS IN ORDER TO DRAW A PIECE OF EQUIPMENT.  THIS IS NOT ONLY HIGHLY USEFUL FOR WEAPONS THEMSELVES BUT ALSO MUNITIONS, MAGAZINES, THROWN WEAPONS, ETC.  IN THE CASE OF THE SHOULDER LISTING, IT REFERS TO THE AREA UNDER THE ARMPIT, DEFINED BY ITS REQUIRED SHOULDER HARNESS.  AS FOR THE REAR, THIS REFERS TO THE BACK OF THE BELT. IT SHOULD BE NOTED HOWEVER, THAT THIS ONLY COVERS THE EQUIPMENT EASILY ACCESSIBLE TO THE DOMINANT HAND UNLESS THE CHARACTERS OFF-HAND HAS REACHED 0 AND AMBIDEXTERITY IS ACHIEVED
    </td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addHipDraw(); document.getElementById('drawModal').style.display='none';" class="button">HIP</button></td>
    <td colspan="4"><button type="button" onclick="addBackDraw(); document.getElementById('drawModal').style.display='none';" class="button">BACK</button></td>
    <td colspan="4"><button type="button" onclick="addShouldDraw(); document.getElementById('drawModal').style.display='none';" class="button">SHOULDER</button>
      </td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">DEX >= 10<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 12<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">5,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addRearDraw(); document.getElementById('drawModal').style.display='none';" class="button">REAR</button>
      </td>
    <td colspan="4"><button type="button" onclick="addThighDraw(); document.getElementById('drawModal').style.display='none';" class="button">THIGH</button></td>
    <td colspan="4"><button type="button" onclick="addBootDraw(); document.getElementById('drawModal').style.display='none';" class="button">BOOT</td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">DEX >= 10<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 14<br>2,500 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('drawModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--SPEED LOAD MODAL-->
<div id="loadModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">SPEEDLOAD</td>
  </tr>
    <tr>
    <td colspan="12" class="box">
    SPEED LOADING IS TRAINING IN RELOADING A PARTICULAR TYPE OF WEAPON.  FOR BOWS, CROSSBOWS, AND REVOLVERS THIS IS SIGNIFICANTLY MORE COMPLICATED THAN SIMPLY EJECTING AND RELOADING A MAGAZINE THEN HITTING A SLIDE RELEASE.  THE IDEA IS TRAINING YOUR CHARACTER TO RETURN TO OR NEVER STOP AIMING AT THEIR TARGET WHILE SPEEDING UP THE PROCESS OF RELOADING THEIR WEAPON<br>  
    <br>FOR THE ARCHERY WEAPONS, IT MEANS THAT THE ACT OF NOTCHING, DRAWING, AND AIMING ARE COMBINED INTO ONE FLUID MOTION REMOVING THEM AS A REQUIREMENT FOR THE CHARACTER.  SO RATHER THAN THE SEQUENCE BEING 1-GRAB ARROW/BOLT, 2-NOTCH, 3-DRAW, 4-AIM, 5-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>IT BECOMES: 1-GRAB ARROW/BOLT, 2-SPEEDLOAD, 3-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>FOR REVOLVERS ITS HAND TRAINING REDUCING THE CHAMBER TIME FOR THE WEAPON.  RATHER THAN 1-OPEN & DUMP EMPTIES, 2-GRAB ROUNDS IN LEFT HAND, 3 THRU 8 FACING AND CHAMBERING ROUNDS (DEX CHECK), 9-CLOSE, 10-AIM, 11-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>IT BECOMES: 1-OPEN & DUMP WHILE GRABBING ROUNDS, FINGER ROLLS LEADING TO 2 THRU 4 CHAMBERING AS A SPEED LOAD, 5-CLOSE AND AIM, 6-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>FOR RIFLES AND PISTOLS RATHER THAN 1-EJECT MAG, 2-GRAB MAG, 3-LOAD MAG, 4-RELEASE SLIDE, 5-AIM, 6-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>IT BECOMES: 1-EJECT & GRAB MAG, 2-LOAD & RELEASE SLIDE WHILE BRINGING UP AIM, 3-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>AND FINALLY FOR MAGAZINE TUBE WEAPONS (PUMP ACTION SHOTGUNS OR LEVER ACTION RIFLES) ITS ANOTHER FINGER ROLL EXERCISE SO RATHER THAN 1-GRAB ROUNDS, 2 THRU 8 ON PUMP ACTION SHOTGUN (HOWEVER MANY ROUNDS THE WEAPON HOLDS, IN THIS CASE 7) FACING & CHAMBERING (DEX CHECK), 9-SLIDE RELEASE, 10-AIM, 11-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>IT BECOMES: 1-GRAB & FACE ROUNDS, 2 THRU 5 (HOWEVER MANY ROUNDS / 2) CHAMBERING, 6-SLIDE & AIM, 7-FIRE (+1 FOR TARGETED STRIKES)
    </td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addQBow(); document.getElementById('loadModal').style.display='none';" class="button">BOW & ARROW</button></td>
    <td colspan="4"><button type="button" onclick="addQCross(); document.getElementById('loadModal').style.display='none';" class="button">CROSSBOW</button></td>
    <td colspan="4"><button type="button" onclick="addQRev(); document.getElementById('loadModal').style.display='none';" class="button">REVOLVER</button>
      </td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">DEX >= 14<br>12,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 12<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 14<br>15,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addQPistol(); document.getElementById('loadModal').style.display='none';" class="button">PISTOL</button></td>
    <td colspan="4"><button type="button" onclick="addQRifle(); document.getElementById('loadModal').style.display='none';" class="button">RIFLE</button></td>
    <td colspan="4"><button type="button" onclick="addQTube(); document.getElementById('loadModal').style.display='none';" class="button">MAGAZINE TUBE</td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">DEX >= 10<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 10<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 12<br>10,000 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('loadModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--VOLLEY MODAL-->
<div id="volleyModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">VOLLEY ATTACK</td>
  </tr>
    <tr>
    <td colspan="12" class="box">
    A VOLLEY ATTACK ESSENTIALLY TREATS A SEMI AUTOMATIC WEAPON AS IF IT WERE FULLY AUTOMATIC IN THE ABILITY TO FIRE OFF A BURST FIRE ATTACK USING THE APPROPRIATE WEAPON SKILL.  THE DETERMINATION OF NUMBER OF SUCCESSFUL HITS FOLLOWS THE SAME RULES AS THE BURST FIRE ATTACK ON THE APPROPRIATE SKILL TYPE, AND THE AMMUNITION SPENT IS THE SAME AS A BURST ATTACK AS WELL (5 ROUNDS EXCEPT IN THE CASE OF USING A REVOLVER IN WHICH ALL 6 ARE USED).  ACTION POINT USE IS TYPICALLY 1-AIM, 2 THRU 6 FIRE.
    </td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="addVP(); document.getElementById('volleyModal').style.display='none';" class="button">PISTOL</button></td>
    <td colspan="4"><button type="button" onclick="addVR(); document.getElementById('volleyModal').style.display='none';" class="button">RIFLE</button></td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4" style="background-color: darkgray;">ONE HAND GUNS >= 100<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">TWO HAND GUNS >= 100<br>5,000 EXP</td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('volleyModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--BLINDFIRE MODAL-->
<div id="blindModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">BLINDFIRE ATTACK</td>
  </tr>
    <tr>
    <td colspan="12" class="box">
    THE CHARACTER HAS BECOME SO FAMILIAR WITH THEIR WEAPON THAT THEY HAVE LEARNED TO FIRE IT AT A SIGNIFICANT PENALTY WITHOUT TAKING AN ACTION TO ACTUALLY AIM.  NEGATIVE SHOULD BE CONSIDERABLE AND DETERMINED BY WHOEVER IS HOSTING THE GAME, BUT USE OF THIS ATTACK SAVES THE CHARACTER ONE ACTION POINT IN USING THEIR WEAPON.
    </td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="addBThrow(); document.getElementById('blindModal').style.display='none';" class="button">THROWN</button></td>
    <td colspan="4"><button type="button" onclick="addBArch(); document.getElementById('blindModal').style.display='none';" class="button">BOW & ARROW</button>
    </td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4" style="background-color: darkgray;">THROW >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">ARCHERY >= 100<br>10,000 EXP</td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>

<!--1ST ROW-->  
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="addBPistol(); document.getElementById('blindModal').style.display='none';" class="button">PISTOL</button></td>
    <td colspan="4"><button type="button" onclick="addBRifle(); document.getElementById('blindModal').style.display='none';" class="button">RIFLE</button></td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4" style="background-color: darkgray;">ONE HAND GUNS >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">TWO HAND GUNS >= 100<br>10,000 EXP</td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>


  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('blindModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>


<!--LANGUAGE MODAL-->
    <div id="langModal" class="editModal">
      <div>
        <div style="width: 50%; float: left;">
        <p style="font-weight: bold;">PLEASE SELECT A LANGUAGE</p>
        <ul>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'SPANISH_LANG');" 
            data-name="SPANISH_LANG" id="SPANISH_LANG" class="button">SPANISH</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'FRENCH_LANG');" 
            data-name="FRENCH_LANG" id="FRENCH_LANG" class="button">FRENCH</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'ITALIAN_LANG');" 
            data-name="ITALIAN_LANG" id="ITALIAN_LANG" class="button">ITALIAN</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'GERMAN_LANG');" 
            data-name="GERMAN_LANG" id="GERMAN_LANG" class="button">GERMAN</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'ARABIC_LANG');" 
            data-name="ARABIC_LANG" id="ARABIC_LANG" class="button">ARABIC</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'YIDDISH_LANG');" 
            data-name="YIDDISH_LANG" id="YIDDISH_LANG" class="button">YIDDISH</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'RUSSIAN_LANG');" 
            data-name="RUSSIAN_LANG" id="RUSSIAN_LANG" class="button">RUSSIAN</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'POLISH_LANG');" 
            data-name="POLISH_LANG" id="POLISH_LANG" class="button">POLISH</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'US_SIGN_LANG');" 
            data-name="US_SIGN_LANG" id="US_SIGN_LANG" class="button">US SIGN</button>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
          <p>&nbsp;</p>
        <ul>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'MANDARIN_LANG');" 
            data-name="MANDARIN_LANG" id="MANDARIN_LANG" class="button">MANDARIN</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'CANTONESE_LANG');" 
            data-name="CANTONESE_LANG" id="CANTONESE_LANG" class="button">CANTONESE</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'JAPANESE_LANG');" 
            data-name="CANTONESE_LANG" id="CANTONESE_LANG" class="button">JAPANESE</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'KHMER_LANG');" 
            data-name="KHMER_LANG" id="KHMER_LANG" class="button">KHMER</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'VIETNAMESE_LANG');" 
            data-name="VIETNAMESE_LANG" id="VIETNAMESE_LANG" class="button">VIETNAMESE</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'FINNISH_LANG');" 
            data-name="FINNISH_LANG" id="FINNISH_LANG" class="button">FINNISH</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'SWEDISH_LANG');" 
            data-name="SWEDISH_LANG" id="SWEDISH_LANG" class="button">SWEDISH</button>
          <li><button type="button" onclick="langModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'WELSH_LANG');" 
            data-name="WELSH_LANG" id="WELSH_LANG" class="button">WELSH</button>
        </ul>
      </div>
    </div>
  </div>  

<!--LITERACY MODAL-->
    <div id="litModal" class="editModal">
      <div>
        <div style="width: 50%; float: left;">
        <p style="font-weight: bold;">PLEASE SELECT A LANGUAGE</p>
        <ul>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'SPANISH_LIT');" 
            data-name="SPANISH_LIT" id="SPANISH_LIT" class="button">SPANISH</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', ''FRENCH_LIT'');" 
            data-name="FRENCH_LIT" id="FRENCH_LIT" class="button">FRENCH</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', ''ITALIAN_LIT'');" 
            data-name="ITALIAN_LIT" id="ITALIAN_LIT" class="button">ITALIAN</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', ''GERMAN_LIT'');" 
            data-name="GERMAN_LIT" id="GERMAN_LIT" class="button">GERMAN</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', ''ARABIC_LIT'');" 
            data-name="ARABIC_LIT" id="ARABIC_LIT" class="button">ARABIC</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', ''YIDDISH_LIT'');" 
            data-name="YIDDISH_LIT" id="YIDDISH_LIT" class="button">YIDDISH</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', ''RUSSIAN_LIT'');" 
            data-name="RUSSIAN_LIT" id="RUSSIAN_LIT" class="button">RUSSIAN</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', ''POLISH_LIT'');" 
            data-name="POLISH_LIT" id="POLISH_LIT" class="button">POLISH</button>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
          <p>&nbsp;</p>
        <ul>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'MANDARIN_LIT');" 
            data-name="MANDARIN_LIT" class="button">MANDARIN</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'CANTONESE_LIT');" 
            data-name="CANTONESE_LIT" class="button">CANTONESE</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'JAPANESE_LIT');" 
            data-name="JAPANESE_LIT" class="button">JAPANESE</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'KHMER_LIT');" 
            data-name="KHMER_LIT" class="button">KHMER</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'VIETNAMESE_LIT');" 
            data-name="VIETNAMESE_LIT" class="button">VIETNAMESE</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'FINNISH_LIT');" 
            data-name="FINNISH_LIT" class="button">FINNISH</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'SWEDISH_LIT');" 
            data-name="SWEDISH_LIT" class="button">SWEDISH</button>
          <li><button type="button" onclick="litModal.style.display='none'; document.getElementById('skill' + n).setAttribute('value', 'WELSH_LIT');" 
            data-name="WELSH_LIT" class="button">WELSH</button>
        </ul>
        </div>
      </div>
    </div>

<!--SKILL CHOICES-->
<div id="skillModal" class="editModal">
<div>
<table>
  
  <tr>
    <td colspan="8" style="background-color: lightblue; font-weight: bold;">STANDARD SKILLS<br>(LIGHT GRAY REPRESENT PRE REQUISITES)</td>
  </tr>

  <tr>
    <td colspan="3">SCIENCE SKILLS</td>
    <td colspan="3">PILOTING SKILLS</td>
    <td colspan="2">SURVIVAL SKILLS</td>
  </tr>
<!--1ST ROW-->
    <tr>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'MATH'); skillModal.style.display='none';" class="button" 
        id="mathBtn" data-name="MATH">MATH</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'BIOLOGY'); skillModal.style.display='none';" class="button" 
        id="bioBtn" data-name="BIOLOGY">BIOLOGY</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'BOTANY'); skillModal.style.display='none';" class="button" 
        id="botBtn" data-name="BOTANY">BOTANY</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'HORSEMANSHIP'); skillModal.style.display='none';" 
        class="button" id="horseBtn" data-name="HORSEMANSHIP">HORSEMANSHIP</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'MOTORCYCLE'); skillModal.style.display='none';" class="button" id="cycleBtn" data-name="MOTORCYCLE">MOTORCYCLE</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'AUTOMOBILE'); skillModal.style.display='none';" class="button" id="autoBtn" data-name="AUTOMOBILE">AUTOMOBILE</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'TRAPS'); skillModal.style.display='none';" class="button" 
        id="trapsBtn" data-name="TRAPS">TRAPS</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'FIRST_AID'); skillModal.style.display='none';" class="button"  id="firstAidBtn" data-name="FIRST_AID">FIRST AID</button></td>
    </tr>   
<!--2ND ROW-->
    <tr>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'CHEMISTRY'); skillModal.style.display='none';" class="button"  id="chemBtn" data-name="CHEMISTRY" disabled="true">CHEMISTRY</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'HISTORY'); skillModal.style.display='none';" class="button" 
        id="histBtn" data-name="HISTORY" disabled="true">HISTORY</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'MYCOLOGY'); skillModal.style.display='none';" class="button" 
        id="mycoBtn" data-name="MYCOLOGY">MYCOLOGY</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'BOATING'); skillModal.style.display='none';" class="button" 
        id="boatBtn" data-name="BOATING">BOATING</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'SAILING'); skillModal.style.display='none';" class="button" 
        id="sailBtn" data-name="SAILING">SAILING</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'JET_SKI'); skillModal.style.display='none';" class="button" 
        id="jetSkiBtn" data-name="JET_SKI">JET SKI</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'TRACKING'); skillModal.style.display='none';" class="button" 
        id="trackBtn" data-name="TRACKING">TRACKING</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'PICKPOCKET'); skillModal.style.display='none';" 
        class="button" id="pickBtn" data-name="PICKPOCKET">PICKPOCKET</button></td>
    </tr>
<!--3RD ROW-->
    <tr>
      <td style="background-color: lightgray; text-align: center;">MATH</td>
      <td style="background-color: lightgray; text-align: center;">LITERACY</td>
      <td style="background-color: darkgray;"></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'BICYCLES'); skillModal.style.display='none';" class="button" id="bikeBtn" data-name="BICYCLES">BICYCLES</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'SKATEBOARD'); skillModal.style.display='none';" 
        class="button" id="boardBtn" data-name="SKATEBOARD">SKATEBOARD</button></td>
      <td style="background-color: darkgray;"></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'SURVEILLANCE'); skillModal.style.display='none';" 
        class="button" id="survBtn" data-name="SURVEILLANCE">SURVEILLANCE</button></td>
      <td style="background-color: darkgray;"></td>
    <tr>
<!--4TH ROW-->
    <tr>  
      <td colspan="3">SOCIAL SKILLS</td>
      <td colspan="5">TECHNOLOGY SKILLS</td>
    </tr>
<!--5TH ROW-->
    <tr>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'LITERACY'); skillModal.style.display='none';" class="button" 
        id="litBtn" data-name="LITERACY">LITERACY</button></td>
      <td><button type="button" onclick="langModal.style.display='block'; skillModal.style.display='none';" class="button" id="forLanBtn" 
        data-name="FOREIGN_LANG">FOREIGN LANG</button></td>
      <td><button type="button" onclick="litModal.style.display='block'; skillModal.style.display='none';" class="button" id="forLitBtn" 
        data-name="FOREIGN_LIT">FOREIGN LIT</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'MECHANICS'); skillModal.style.display='none';" class="button"  id="mechBtn" data-name="MECHANICS">MECHANICS</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'ELECTRONICS'); skillModal.style.display='none';" 
        class="button" id="electBtn" data-name="ELECTRONICS">ELECTRONICS</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'COMPUTERS'); skillModal.style.display='none';" class="button"  id="compBtn" data-name="COMPUTERS" disabled="true">COMPUTERS</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'LOCKPICK'); skillModal.style.display='none';" class="button" 
        id="lockBtn" data-name="LOCKPICK">LOCKPICK</button></td>
      <td><button type="button" onclick="document.getElementById('skill' + n).setAttribute('value', 'COMM_SYSTEMS'); skillModal.style.display='none';" 
        class="button" id="commSysBtn" data-name="COMM_SYSTEMS">COMM. SYSTEMS</button></td>
    </tr>
<!--6TH ROW-->
    <tr>
      <td colspan="5" style="background-color: darkgray;"></td>
      <td style="background-color: lightgray; text-align: center;">LITERACY</td>
      <td colspan="2" style="background-color: darkgray;"></td>
    </tr>
  </table>
</div>
</div>

<!--ADVANCED SKILLS-->
<div id="advSkillModal" class="editModal">
<div>
<table>

<tr>
    <td colspan="8" style="background-color: yellow; font-weight: bold;">ADVANCED SKILLS</td>
</tr>

  <tr>
    <td colspan="2">ADV. SCIENCE SKILLS</td>
    <td colspan="2">ADV. MEDICAL SKILLS</td>
    <td colspan="3">ADV. TECHNOLOGY SKILLS</td>
    <td>ADV. SOCIAL SKILLS</td>
  </tr>
<!--ADV SKILLS 1ST ROW-->
    <tr>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'FORENSICS'); advSkillModal.style.display='none';" 
        class="button" id="forenBtn" data-name="FORENSICS">FORENSICS</button></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'PHYSICS'); advSkillModal.style.display='none';" 
        class="button" id="physicsBtn" data-name="PHYSICS" disabled="true">PHYSICS</button></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'DOCTOR'); advSkillModal.style.display='none';" 
        class="button" id="doctorBtn" data-name="DOCTOR" disabled="true">DOCTOR</button></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'TOXICOLOGY'); advSkillModal.style.display='none';" 
        class="button" id="toxicBtn" data-name="TOXICOLOGY" disabled="true">TOXICOLOGY</button></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'CONSTRUCTION'); advSkillModal.style.display='none';" 
        class="button" id="strEngBtn" data-name="CONSTRUCTION">CONSTRUCTION</button></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'ENCRYPTION'); advSkillModal.style.display='none';" 
        class="button" id="encryptBtn" data-name="ENCRYPTION" disabled="true">ENCRYPTION</button></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'PROGRAMMING'); advSkillModal.style.display='none';" 
        class="button" id="programBtn" data-name="PROGRAMMING" disabled="true">PROGRAMMING</button></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'FEDERAL_LAW'); advSkillModal.style.display='none';" 
        class="button" id="lawBtn" data-name="FEDERAL_LAW">FEDERAL LAW</button></td>
    </tr>
<!--ADV SKILLS 2ND ROW-->
    <tr>
      <td style="background-color: darkgray;"></td>
      <td style="background-color: lightgray; text-align: center;">MATH</td>
      <td style="background-color: lightgray; text-align: center;">BIOLOGY<br>CHEMISTRY<br>FIRST AID</td>
      <td style="background-color: lightgray; text-align: center;">LITERACY<br>CHEMISTRY<br>BIOLOGY</td>
      <td style="background-color: darkgray;"></td>
      <td style="background-color: lightgray; text-align: center;">COMPUTERS</td>
      <td style="background-color: lightgray; text-align: center;">COMPUTERS</td>
      <td style="background-color: darkgray;"></td>
    </tr>

    <tr>
      <td colspan="8">ADV. PILOTING SKILLS</td>
    </tr>

    <tr>
      <td style="background-color: darkgray;"></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'MULTI_GEARS'); advSkillModal.style.display='none';" 
        class="button" id="multiGearBtn" data-name="MULTI_GEARS">MULTI GEARED</button></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'HEAVY_EQUIP'); advSkillModal.style.display='none';" 
        class="button" id="hvyEquipBtn" data-name="HEAVY_EQUIP">HEAVY EQUIPMENT</button></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'TREADED'); advSkillModal.style.display='none';" 
        class="button" id="treadBtn" data-name="TREADED">TREADED VEHICLES</button></td>
      <td style="background-color: darkgray;"></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'HELICOPTERS'); advSkillModal.style.display='none';" 
        class="button" id="heliBtn" data-name="HELICOPTERS">HELICOPTERS</button></td>
      <td><button type="button" onclick="document.getElementById('advSkill' + an).setAttribute('value', 'PLANES'); advSkillModal.style.display='none';" 
        class="button" id="planesBtn" data-name="PLANES">AIRPLANES</button></td>
      <td style="background-color: darkgray;"></td>
    </tr>
</table>
</div>
</div>


</div>

  <script src="js/charEdit.js" type="text/javascript"></script>
	<script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
</body>
</html>