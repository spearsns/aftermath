
<?php
    include("inc/config.php");
    session_start();
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
    if (isset($_SESSION['id']) == true){
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $username = $_SESSION['username'];
    echo "<p class='error'>Currently logged in as:  " .$username ."</p>";
    } else {
      echo "<p class='error'>Please sign in to continue</p>";
    }
?>
</div>
<div class="large-2 columns"><a href="signup.php" class="button">JOIN</a></div>
</div>

<!--banner-->
<div class="row banner">
<div class="large-12 columns"><img src="img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></div>
</div>

<!--content nav-->
<div class="row ceiling">
<div class="large-1 columns">&nbsp;</div>
<!--container nav-->
<div class="large-10 columns">
<div class="row">
	<div class="large-3 columns"><a href="newcampaign.php" class="button" visited="true">NEW CAMPAIGN</a></div>
	<div class="large-3 columns"><a href="newChar.php" class="button">NEW CHARACTER</a></div>
  <div class="large-3 columns"><a href="charSelect.php" class="button">CHARACTER MGMT</a></div>
	<div class="large-3 columns"><a href="#" class="button">DOCUMENTS</a></div>
</div>
</div>

<div class="large-1 columns">&nbsp;</div>

</div>

<!--content-->
<div class="row content">
<!--container-->
<div class="large-10 columns" style="background-color: black;">
<div class="row contentbox">

<div class="row content">
<div class="large-2 columns" style="border: 2px solid;">&nbsp;</div>
<div class="large-2 columns" style="text-align: center; font-weight: bold; border: 2px solid;">CAMPAIGN</div>
<div class="large-6 columns" style="text-align: center; font-weight: bold; border: 2px solid;">DESCRIPTION</div>
<div class="large-2 columns" style="border: 2px solid;">&nbsp;</div>
</div>

                <div class="row">
                <div class='large-2 columns'><a href='charChoice.php?play'><button class='button'>PLAY</button></a></div>
                <div class='large-2 columns'><input type='text' value='WORKS' style='margin-top: 0.5vh; border: solid 2px;' readonly /></div>
                <div class='large-6 columns'><input type='text' value='WORKS' style='margin-top: 0.5vh; border: solid 2px;' readonly /></div>
                <div class='large-2 columns hotbox'><a href='leadLog.php?lead'><button class='button'>LEAD</button></a></div>
                </div>
<?php
            $sql = "SELECT * FROM campaigns WHERE FATE != ''";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<div class='row'>"
                . "<div class='large-2 columns'><a href='charChoice.php?" .$row["campaignName"] . "'><button class='button'>PLAY</button></a></div>"
                . "<div class='large-2 columns'><input type='text' value='" .$row["campaignName"] . "'
                    style='margin-top: 0.5vh; border: solid 2px;' readonly /></div>"
                . "<div class='large-6 columns'><input type='text' value='" .$row["description"] . "' 
                    style='margin-top: 0.5vh; border: solid 2px;' readonly /></div>"
                . "<div class='large-2 columns hotbox'><a href='leadLog.php?" .$row["campaignName"] . "'><button class='button'>LEAD</button></a></div>"
                . "</div>";
                }
            } else {
            echo "0 results";
            }
      ?>
</div>
</div>

<div class="large-2 columns">
  <div class="row contentbox">
  <table>
    <tr><td class="error">ONLINE</td></tr>
  <?php
            $sql = "SELECT * FROM users WHERE user_status ='1'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<tr><td><button class='button'>". $row["username"] ."</button></td></tr>";
                }
            } 
      ?>
  </table>
</div>
</div>
</div>
<!--footer-->
<div class="row footer">
<div class="large-12 columns">&nbsp;</div>
</div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>
</html>