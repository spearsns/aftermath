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
    <script src="js/newChar.js" type="text/javascript"></script>
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
    $username = $_SESSION['username'];

    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    
    echo "<p class='error'>Currently logged in as:  " .$username ."</p>";
?>
</div>
<div class="large-2 columns"><a href="signup.php" class="button">JOIN</a></div>
</div>

<!--banner-->
<div class="row banner">
<div class="large-12 columns"><a href="index.php?logged"><img src="img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></a></div>
</div>

<!--content-->
<div class="row content">
    <div class="large-4 large-centered error">PLEASE SELECT CHARACTER:</div>
    <br>
    <div class="large-4 large-centered">
        <?php
            $sql = "SELECT charName FROM characters WHERE username ='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<a href='charMgmt.php?". $row["charName"]."' class='button'>". $row["charName"]."</a><br>";
                }
            } else {
            echo "0 results";
            }

        ?>
    </div>
    <br>
</div>

<!--footer-->
<div class="row footer">
<div class="large-12 columns">&nbsp;</div>
</div>

</body>
</html>