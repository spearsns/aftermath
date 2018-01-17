<?php
    include("inc/config.php");
    session_start();

    if (isset($_SESSION['id']) == false){
        header("Location: login.php?charCreate");
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

<!--form-->
<div class="row content">
<div class="large-12 columns">
<h2 class="error">YOU CAN ALWAYS REFRESH THE PAGE IF YOU AREN'T HAPPY WITH YOUR TRAIT ROLLS</h2>
<br>
<table>
<!--PLAYER-->
    <tr>
      <td colspan="4">PLAYER NAME</td>
      <td colspan="4">
        <?php
          $username = $_SESSION['username'];
          echo $username;
        ?>
      </td>
    </tr>
    <tr>
      <td colspan="4">BACKGROUND</td>
      <td colspan="4"><input type="text" id="background" readonly /><script>sessionStorage.setItem('background', String(document.getElementById('background')));
      </script></td>
    <tr>
      <td colspan="4">MENTAL TRAITS</td>
      <td colspan="4">PHYSICAL TRAITS</td>
    </tr>   

<!--TRAIT 1st-->
    <tr>
      <td colspan="2">MEMORY</td>
        <td colspan="2">     
        <button onclick="decMem();" class="modButton" type="button">-</button>   
        <input type="text" id="MEM" class="trait" readonly /><script>document.getElementById("MEM").setAttribute('value', Mem);</script>
        <button onclick="incMem();" class="modButton" type="button">+</button>
      </td>
      <td colspan="2">STRENGTH</td>
        <td colspan="2">
        <button onclick="decStr();" class="modButton" type="button">-</button>         
        <input type="text" id="STR" class="trait" readonly /><script>document.getElementById("STR").setAttribute('value', Str);</script>
        <button onclick="incStr();" class="modButton" type="button">+</button>
      </td>
    </tr>
<!--TRAIT 2nd-->
    <tr>
      <td colspan="2">LOGIC</td>
        <td colspan="2">
        <button onclick="decLog();" class="modButton" type="button">-</button>         
        <input type="text" id="LOG" class="trait" readonly /><script>document.getElementById("LOG").setAttribute('value', Log);</script>
        <button onclick="incLog();" class="modButton" type="button">+</button>
        </td>
      <td colspan="2">ENDURANCE</td>
        <td colspan="2">
        <button onclick="decEnd();" class="modButton" type="button">-</button>            
        <input type="text" id="END" class="trait" readonly /><script>document.getElementById("END").setAttribute('value', End);</script>
        <button onclick="incEnd();" class="modButton" type="button">+</button>    
      </td>
    </tr>
<!--TRAIT 3rd-->
    <tr>
      <td colspan="2">PERCEPTION</td>
        <td colspan="2">
        <button onclick="decPer();" class="modButton" type="button">-</button>            
        <input type="text" id="PER" class="trait" readonly /><script>document.getElementById("PER").setAttribute('value', Per);</script>
        <button onclick="incPer();" class="modButton" type="button">+</button>
        </td>
      <td colspan="2">DEXTERITY</td>
        <td colspan="2">
        <button onclick="decDex();" class="modButton" type="button">-</button>            
        <input type="text" id="DEX" class="trait" readonly /><script>document.getElementById("DEX").setAttribute('value', Dex);</script>
        <button onclick="incDex();" class="modButton" type="button">+</button>
        </td>
    </tr>
<!--TRAIT 4th-->
    <tr>
      <td colspan="2">WILLPOWER</td>
        <td colspan="2">
        <button onclick="decWill();" class="modButton" type="button">-</button>            
        <input type="text" id="WILL" class="trait" readonly /><script>document.getElementById("WILL").setAttribute('value', Will);</script>
        <button onclick="incWill();" class="modButton" type="button">+</button>
        </td>
      <td colspan="2">SPEED</td>
        <td colspan="2">
        <button onclick="decSpd();" class="modButton" type="button">-</button>            
        <input type="text" id="SPD" class="trait" readonly /><script>document.getElementById("SPD").setAttribute('value', Spd);</script>
        <button onclick="incSpd();" class="modButton" type="button">+</button>
        </td>
    </tr>
<!--TRAIT 5th-->
    <tr>
      <td colspan="2">CHARISMA</td>
        <td colspan="2">
        <button onclick="decCha();" class="modButton" type="button">-</button>           
        <input type="text" id="CHA" class="trait" readonly /><script>document.getElementById("CHA").setAttribute('value', Cha);</script>
        <button onclick="incCha();" class="modButton" type="button">+</button>
        </td>
      <td colspan="2">BEAUTY</td>
        <td colspan="2"> 
        <input type="text" id="BTY" readonly /><script>document.getElementById("BTY").setAttribute('value', Bty);</script>
        </td>
    </tr>
<!--CHAR MODS-->    
    <tr>
      <td colspan="4">BONUS TRAIT POINTS</td>
        <td colspan="4"><input type="text" id="traitPts" readonly /><script>document.getElementById("traitPts").setAttribute('value', traitPts);</script></td>
    </tr>

</table>

  </div>
</div>

<div class="row">
  <div class="large-6 large-centered">
    <button onclick="advance();" class="button">COMMIT CHANGES</button>
  </div>

</div>
</body>
</html>