
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

<?php
    include("header.php");
?>

<!--content nav-->
<div class="row metal">
    <div class="small-4 columns"><a href="newcampaign.php"><button class="navbutton" visited="true">NEW CAMPAIGN</button></a></div>
    <div class="small-4 columns"><a href="newChar.php"><button class="navbutton">NEW CHARACTER</button></a></div>
    <div class="small-4 columns"><a href="charSelect.php"><button class="navbutton">CHARACTER MGMT</button></a></div>
</div>

<div class="row metal" style="min-height: 5vh;">
    <div class="small-1 columns">&nbsp;</div>
    <div class="small-2 columns"><img src="img/graffiti/campaignsX.png" style="margin-left: 2.5vw;"></div>
    <div class="small-1 columns">&nbsp;</div>
    <div class="small-2 columns"><img src="img/graffiti/description.png" style="margin-left: 5vw;"></div>
    <div class="small-3 columns">&nbsp;</div> 
    <div class="small-2 columns"><img src="img/graffiti/onlineX.png" style="margin-left: -2vw;"></div> 
</div>

<!--content-->
<div class="row contentbox">
<!--container-->
<div class="small-10 columns" style="background-color: black;">

<?php
            $sql = "SELECT * FROM campaigns WHERE FATE != ''";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<div class='row'>"
. "<div class='small-2 columns noPad indexList'><a href='charChoice.php?". $row["campaignName"] ."'><button class='button'>PLAY</button></a></div>"
. "<div class='small-2 columns noPad'><input type='text' value='". $row["campaignName"] ."' class='indexFull' readonly /></div>"
. "<div class='small-6 columns noPad'><input type='text' value='". $row["description"] ."' class='indexFull' readonly /></div>"
. "<div class='small-2 columns noPad indexList'><a href='leadLog.php?". $row["campaignName"] ."'><button class='button'>TELL</button></a></div>"
. "</div>";
                }
            } else {
            echo "0 results";
            }
      ?>
</div>

<div class="small-2 columns onlinebox noPad">
        <?php
            $sql = "SELECT * FROM users WHERE user_status ='1'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<button class='button'>". $row["username"] ."</button>";
                }
            } 
        ?>
  
</div>
</div>

<?php
    include("footer.php")
?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>
</html>