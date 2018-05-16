<?php
    include("../inc/config.php");
    session_start();

    if (isset($_SESSION['id']) == false){
        header("Location: login.php");
    } 

    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $username = $_SESSION['username'];
    $campaignName = $_SESSION['campaignName'];

    $charName = parse_url($url, PHP_URL_QUERY);
    
        $query = mysqli_query($conn, "SELECT * FROM campaigns WHERE player = '$username' AND campaignName = '$campaignName';");
        if(mysqli_num_rows($query) > 0){
         $query  = mysqli_query($conn, "UPDATE campaigns
          SET player_status = '1'
          WHERE player = '$username' AND campaignName = '$campaignName' ;");
        } else {
          $query = mysqli_query($conn, "INSERT INTO campaigns (campaignName, player, player_status, charName)
          VALUES ('$campaignName', '$username', '1', '$charName');");
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

     var name = "<?php echo $username; ?>";
      
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
<div class="large-2 columns"><a href="../login.php" class="button">LOGIN</a></div>
<form id="logout" action="../inc/logout.php" method="post">
<div class="large-2 columns"><input type="submit" value="LOG OUT" class="button" style="font-family: impact;" /></div>
</form>

<div class="large-6 columns">
<?php echo "<p class='error'>Currently logged in as:  " .$username ."</p>"; ?>
</div>

<div class="large-2 columns"><a href="../signup.php" class="button">JOIN</a></div>
</div>

<!--banner-->
<div class="row banner">
<div class="large-12 columns"><a href="../index.php?logged"><img src="../img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></a></div>
</div>

<!--INFO-->
<div class="row ceiling">
  <div class="large-6 columns">
    <?php echo "<p class='error'>Campaign: " .$campaignName ." </p>"; ?>          
  </div>

  <div class="large-6 columns hotbox">
    <?php echo "<p class='error'>Character Used:  " .$charName ." </p>"; ?>
  </div>
</div>

<!--CONTENT-->
<div class="row ceiling">
  <div class="large-5 columns">

<script type="text-javascript">
    var checkFocus = function() {
    var container = $('.chat-area');
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

<div id="chat-area"></div><!--!!!-->
        
        <form id="send-message-area">
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>

    <div class="large-6 columns"><input type="button" value="PERCENTILE" class="button" onclick="percentile();" /></div>
    <div class="large-6 columns"><input type="button" value="(2)D10" class="button" onclick="test();" /></div>
    <div class="large-12 columns hotbox"><input type="button" value="RANDOM HIT CHART" class="button" onclick="RHC();" /></div>

</div>
<!--CHARACTER SHEET-->
  <div class="large-7 columns">
    <div class="sheetarea">
    <form style="margin-top: 10px;" id="charsheet" action="#" method="post">
    <table class="playsheet">
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
        <td><input type="text" id="MEM" name="MEM"
          value="<?php $sql="SELECT MEM FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['MEM'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          </td>

        <td>STRENGTH</td>
        <td><input type="text" id="STR" name="STR"
          value="<?php $sql="SELECT STR FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['STR'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <td><input type="text" id="LOG" name="LOG"
          value="<?php $sql="SELECT LOG FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LOG'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
         </td>

      <td>ENDURANCE</td>
        <td><input type="text" id="END" name="END"
          value="<?php $sql="SELECT END FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['END'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          </td>

        <td style="font-weight: bold;">BLOCK</td>
        <td><input type="text" id="block" name="block" 
          value="<?php $sql="SELECT BLOCK FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['BLOCK'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          </td>

        <td style="font-weight: bold;">DODGE</td>
        <td>
          
          <input type="text" id="dodge" name="dodge" 
          value="<?php $sql="SELECT DODGE FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['DODGE'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
    </tr>
<!--TRAIT 3rd-->
    <tr>
<td>PERCEPTION</td>
        <td>
          
          <input type="text" id="PER" name="PER"
          value="<?php $sql="SELECT PER FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['PER'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
        </td>

      <td>DEXTERITY</td>
        <td>
          
          <input type="text" id="DEX" name="DEX"
          value="<?php $sql="SELECT DEX FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['DEX'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
        </td>

        <td>UNARM</td>
        <td>
          
          <input type="text" id="unarm" name="unarm" 
          value="<?php $sql="SELECT UNARM FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['UNARM'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
        </td>

        <td>THROW</td>
        <td>
          
          <input type="text" id="thrown" name="thrown" 
          value="<?php $sql="SELECT THROW FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['THROW'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
        </td>
 
<!--TRAIT 5th-->
    <tr>
      <td>WILLPOWER</td>
        <td>
          
          <input type="text" id="WILL" name="WILL" 
          value="<?php $sql="SELECT WILL FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['WILL'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
        </td>

      <td>SPEED</td>
        <td>
          
          <input type="text" id="SPD" name="SPD"
          value="<?php $sql="SELECT SPD FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['SPD'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
        </td>

      <td>GRAPPLE</td>
        <td>
          
          <input type="text" id="grap" name="grap" 
          value="<?php $sql="SELECT GRAPPLE FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['GRAPPLE'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
        </td>

       <td>ARCH</td>
        <td>
          
          <input type="text" id="arch" name="arch" 
          value="<?php $sql="SELECT ARCH FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ARCH'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
        </td>
    </tr>

<!--COMBAT 3rd-->
    <tr>
      <td>CHARISMA</td>
        <td>
        
        <input type="text" id="CHA" name="CHA"
          value="<?php $sql="SELECT CHA FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['CHA'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text" id="off" name="off" 
          value="<?php $sql="SELECT OFF FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['OFF'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
      
      <td>1H GUNS</td>
      <td>
        
        <input type="text" id="oneHguns" name="oneHguns" 
          value="<?php $sql="SELECT ONEHGUNS FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['ONEHGUNS'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
    </tr>
<!--COMBAT 4th-->
    <tr>
      <td colspan="4" style="font-weight: bold;">UNIVERSAL SKILLS</td>

      <td>SHORT W</td>
      <td>
        
        <input type="text" id="shortW" name="shortW" 
          value="<?php $sql="SELECT SHORTW FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['SHORTW'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
      
      <td>2H GUNS</td>
      <td>
        
        <input type="text" id="twoHguns" name="twoHguns" 
          value="<?php $sql="SELECT TWOHGUNS FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['TWOHGUNS'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
    </tr>
<!--COMBAT 5th-->
    <tr>
      <td>STEALTH</td>
      <td>
        
        <input type="text" id="stealth" name="stealth" 
          value="<?php $sql="SELECT STEALTH FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['STEALTH'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>

      <td>CLIMBING</td>
      <td>
        
        <input type="text" id="climb" name="climb" 
          value="<?php $sql="SELECT CLIMB FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['CLIMB'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
      
      <td>LONG W</td>
      <td>
        
        <input type="text" id="longW" name="longW" 
          value="<?php $sql="SELECT LONGW FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['LONGW'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
      
      <td>BURST</td>
      <td>
        
        <input type="text" id="burst" name="burst" 
          value="<?php $sql="SELECT BURST FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['BURST'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
    </tr>
<!--COMBAT 6th-->
    <tr>
      <td>NAVIG.</td>
      <td>
        
        <input type="text" id="navig" name="navig" 
          value="<?php $sql="SELECT NAVIG FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['NAVIG'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>

      <td>NEGOT.</td>
      <td>
        
        <input type="text" id="negot" name="negot" 
          value="<?php $sql="SELECT NEGOT FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['NEGOT'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>

      <td>2H W</td>
      <td>
        
        <input type="text" id="twoHW" name="twoHW" 
          value="<?php $sql="SELECT TWOHW FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['TWOHW'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
      
      <td>SPECIAL</td>
      <td>
        
        <input type="text" id="special" name="special" 
          value="<?php $sql="SELECT SPECIAL FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['SPECIAL'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
    </tr>
<!--COMBAT 7th-->
    <tr>
      <td>CRAFTING</td>
      <td>
        
        <input type="text" id="craft" name="craft" 
          value="<?php $sql="SELECT CRAFTING FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['CRAFTING'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
      
      <td>SURVIVAL</td>
      <td>
        
        <input type="text" id="survival" name="survival" 
          value="<?php $sql="SELECT SURVIVAL FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['SURVIVAL'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
      
      <td>CHAIN</td>
      <td>
        
        <input type="text" id="chain" name="chain" 
          value="<?php $sql="SELECT CHAIN FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['CHAIN'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
      </td>
      
      <td>W SYS</td>
      <td>
        
        <input type="text" id="wsys" name="wsys" 
          value="<?php $sql="SELECT WSYS FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['WSYS'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
            
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
        
        <input type="text"  id="skillRate1" name="skillRate1"
          value="<?php $sql="SELECT skillRate1 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate1'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate2" name="skillRate2"
          value="<?php $sql="SELECT skillRate2 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate2'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate3" name="skillRate3"
          value="<?php $sql="SELECT skillRate3 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate3'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate4" name="skillRate4"
          value="<?php $sql="SELECT skillRate4 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate4'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate5" name="skillRate5"
          value="<?php $sql="SELECT skillRate5 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate5'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate6" name="skillRate6"
          value="<?php $sql="SELECT skillRate6 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate6'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate7" name="skillRate7" 
          value="<?php $sql="SELECT skillRate7 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate7'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate8" name="skillRate8" 
          value="<?php $sql="SELECT skillRate8 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate8'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate9" name="skillRate9"
          value="<?php $sql="SELECT skillRate9 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate9'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate10" name="skillRate10"
          value="<?php $sql="SELECT skillRate10 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate10'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate11" name="skillRate11"
          value="<?php $sql="SELECT skillRate11 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate11'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate12" name="skillRate12" 
          value="<?php $sql="SELECT skillRate12 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate12'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate13" name="skillRate13"
          value="<?php $sql="SELECT skillRate13 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate13'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate14" name="skillRate14"
          value="<?php $sql="SELECT skillRate14 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate14'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate15" name="skillRate15"
          value="<?php $sql="SELECT skillRate15 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate15'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate16" name="skillRate16"
          value="<?php $sql="SELECT skillRate16 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate16'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        
        <input type="text"  id="skillRate17" name="skillRate17"
          value="<?php $sql="SELECT skillRate17 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate17'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
          
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
        <input type="text" id="skillRate18" name="skillRate18" 
          value="<?php $sql="SELECT skillRate18 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate18'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text"  id="skillRate19" name="skillRate19"
          value="<?php $sql="SELECT skillRate19 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate19'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text" id="skillRate20" name="skillRate20"
          value="<?php $sql="SELECT skillRate20 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['skillRate20'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text"  id="advSkillRate1" name="advSkillRate1"
          value="<?php $sql="SELECT advSkillRate1 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate1'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text"  id="advSkillRate2" name="advSkillRate2" 
          value="<?php $sql="SELECT advSkillRate2 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate2'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text"  id="advSkillRate3" name="advSkillRate3" 
          value="<?php $sql="SELECT advSkillRate3 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate3'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text"  id="advSkillRate4" name="advSkillRate4"
          value="<?php $sql="SELECT advSkillRate4 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate4'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text" id="advSkillRate5" name="advSkillRate5"
          value="<?php $sql="SELECT advSkillRate5 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate5'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text" id="advSkillRate6" name="advSkillRate6"
          value="<?php $sql="SELECT advSkillRate6 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate6'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text" id="advSkillRate7" name="advSkillRate7"
          value="<?php $sql="SELECT advSkillRate7 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate7'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text" id="advSkillRate8" name="advSkillRate8"
          value="<?php $sql="SELECT advSkillRate8 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate8'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text" id="advSkillRate9" name="advSkillRate9"
          value="<?php $sql="SELECT advSkillRate9 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate9'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text" id="advSkillRate10" name="advSkillRate10"
          value="<?php $sql="SELECT advSkillRate10 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate10'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text" id="advSkillRate11" name="advSkillRate11"
          value="<?php $sql="SELECT advSkillRate11 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate11'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
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
        <input type="text" id="advSkillRate12" name="advSkillRate12"
          value="<?php $sql="SELECT advSkillRate12 FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row['advSkillRate12'];
                }
            } else {
            echo "0 results";
            } ?>" readonly />
        </td>
    </tr>
<!--ABILITIES-->
    <tr>
      <td colspan="8" style="font-weight: bold;">ABILITIES</td>
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
</table>
</form>
</div>

<div class="large-12 columns">
  <?php echo "<a href='../charMgmt.php?". $charName. "' class='button'>EDIT CHARACTER</a><br>"; ?>
</div>

</div><!--row end-->

<br>



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