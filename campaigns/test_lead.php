<?php
    include("../inc/config.php");
    session_start();
    $username = $_SESSION['username'];

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
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/chat.js"></script>
    <script type="text/javascript">
    
     var name =  "STORYTELLER";
      // kick off chat
        var chat =  new Chat();
      $(function() {
      
         chat.getState(); 
         
         // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
                });
         // watch textarea for release of key press
         $('#sendie').keyup(function(e) { 
                   
            if (e.keyCode == 13) { 
                    var text = $(this).val();
                    var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                      chat.send(text, name);  
                      $(this).val("");
                    
                    } else {
                    $(this).val(text.substring(0, maxLength));
                    } 
                  }
             });
            
      });
    </script>
  </head>

<body onload="setInterval('chat.update()', 1000)">

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
<div class="large-12 columns"><a href="index.php?logged"><img src="img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></a></div>
</div>

<!--INFO-->
<div class="row ceiling">
  <div class="large-6 columns">  
    <?php $sql="SELECT campaignName FROM campaigns WHERE FATE = '$username';";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<p class='error'>Campaign: " .$row['campaignName'] ." </p>";
                }
            } else {
            echo "0 results";
            } ?>
  </div>
 
  <div class="large-6 columns hotbox">
    <p class='error'>Playing as: FATE ITSELF</p>
  </div>

</div>

<!--CONTENT-->
<div class="row ceiling">

<script type="text-javascript">
    var checkFocus = function() {
    var container = $('.chatbox');
    var height = container.height();
    var scrollHeight = container[0].scrollHeight;
    var st = container.scrollTop();
    var sum = scrollHeight - height - 32;
    if(st >= sum) {
        return true;
    } else {
        return false;
    }
}
</script>


  <div class="large-5 columns">
      <div id="chatbox"></div>
        
        <form id="send-message-area">
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
  
    <div class="large-6 columns"><input type="button" value="PERCENTILE" class="button" onclick="percentile();" /></div>
    <div class="large-6 columns"><input type="button" value="(2)D10" class="button" onclick="test();" /></div>
    <div class="large-12 columns hotbox"><input type="button" value="RANDOM HIT CHART" class="button" onclick="RHC();" /></div>
</div>

<!--CHARACTER LIST-->
  <div class="large-7 columns">
    <div class="playerlist">
      <table><tr>
        <td style="font-weight: bolder;">PLAYER</td>
        <td style="font-weight: bolder;">CHARACTER</td>
        <td style="font-weight: bolder;">ID&nbsp;MARKS</td>
        <td style="font-weight: bolder;">EXPERIENCE</td>
        <td style="font-weight: bolder;">&nbsp;</td>
      </tr>
        
      <?php
            $sql = "SELECT * FROM campaigns WHERE player_status ='1' AND campaignName = '$campaignName'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<tr><form action='inc/expLog.php' method='post'>
                <td><input type='text' value='" .$row["player"] . "' readonly /></td>"
                . "<td><a href='viewChar.php?" .$row["charName"] . "' target='_blank'>
                  <input id='charName' name='charName' value='" .$row["charName"] . "' class='button' /></a></td>"
                . "<td><a href='idmarks.php?" .$row["charName"] . "' target='_blank' type='button' class='button'>ID MARKS</a></td>"
                . "<td><input type='text' id='EXP' name='EXP' value='' /></td>"
                . "<td><input type='submit' name='submit' value='POST' class='button' /></td></form></tr>";
                }
            } else {
            echo "0 results";
            }
      ?>
      </table>
    </div>
  </div>

</div>

<!--FOOTER-->
<!--
<div class="row footer">
<div class="large-12 columns">&nbsp;</div>
</div>
-->
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>