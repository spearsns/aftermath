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

<?php include("header.php"); ?>

<div class="row metal">
  <div class="small-12 columns"><p class="error hotbox">PLEASE SELECT CHARACTER:</p></div>
</div>
<!--content-->
<div class="row charSelBox">
    <div class="small-4 small-centered">
        <?php
            $sql = "SELECT charName FROM characters WHERE username ='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<a href='charMgmt.php?". $row["charName"]."'><button class='navbutton'>". $row["charName"]."</button></a><br>";
                }
            } else {
            echo "0 results";
            }

        ?>
    </div>
</div>

<?php include("footer.php"); ?>

</body>
</html>