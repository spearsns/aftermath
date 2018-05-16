<script>
function joinOver(){
    document.getElementById("join").src = "img/buttons/join_1.png";
}
function joinOut(){
    document.getElementById("join").src = "img/buttons/join_0.png";
}
</script>

<div class="row metal">
    <div class="small-3 columns"><a href="login.php"><button class="navbutton">LOGIN</button></a></div>
    <div class="small-2 columns"><a href="signup.php"><img src="img/buttons/join_0.png" id="join" onmouseover="joinOver();" onmouseout="joinOut();" 
        style="margin-top: 1vh;"></a></div>

<div class="small-2 columns noPad"><img src='img/graffiti/usernameX.png' class="enter" /></div>
<div class="small-1 columns">
<?php
    if (isset($_SESSION['id']) == true){
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $username = $_SESSION['username'];
    echo "<p class='head'>" .$username ."</p>";
    } else {
      echo "<p class='head'>----</p>";
    }
?>
</div>

<div class="small-1 columns">&nbsp;</div>

<form id="logout" action="inc/logout.php" method="post">
<div class="small-3 columns"><input type="submit" value="LOG OUT" class="navbutton" style="font-family: Times New Roman;" /></div>
</form>
</div>

<!--banner-->
<div class="row banner">
<div class="small-12 columns"><a href="index.php"><img src="img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></a></div>
</div>
