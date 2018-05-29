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
    <link type="text/css" media="screen" rel="stylesheet" href="inc/zurb-responsive-tables/responsive-tables.css" />
    <script type="text/javascript" src="inc/zurb-responsive-tables/responsive-tables.js"></script>
    <script src="js/newChar.js" type="text/javascript"></script>
  </head>
<body>

<?php include("header.php"); ?>

<!--form-->
<div class="row metal">
<div class="small-4 columns">&nbsp;</div>
<div class="small-4 columns"><img src="img/graffiti/refresh.png" style="margin: 0 auto;"></div>
<div class="small-4 columns">&nbsp;</div>
</div>

<div class="row">
<table class="responsive">
<!--PLAYER-->
    <tr>
      <td colspan="4">PLAYER NAME</td>
      <td colspan="4"><input type="text" id="playerName" value="<?php $username = $_SESSION['username']; echo $username; ?>" readonly />
        
      </td>
    </tr>
    <tr>
      <td colspan="4">BACKGROUND</td>
      <td colspan="4"><input type="text" id="background" readonly /><script>sessionStorage.setItem('background', String(document.getElementById('background')));
      </script></td>
    <tr>
      <td colspan="4" class="header">MENTAL TRAITS</td>
      <td colspan="4" class="header">PHYSICAL TRAITS</td>
    </tr>   

<!--TRAIT 1st-->
    <tr>
      <td colspan="2">MEMORY</td>
      <td><img src="img/symbols/mem.png" style="height: 5vh; margin: 0 auto;"></td>
        <td>     
          <button onclick="decMem();" class="modButton" type="button">-</button>   
          <input type="text" id="MEM" class="trait" readonly /><script>document.getElementById("MEM").setAttribute('value', Mem);</script>
          <button onclick="incMem();" class="modButton" type="button">+</button>
        </td>
      <td colspan="2">STRENGTH</td>
        <td><img src="img/symbols/str.png" style="height: 5vh; margin: 0 auto;"></td>
          <td>
            <button onclick="decStr();" class="modButton" type="button">-</button>         
            <input type="text" id="STR" class="trait" readonly /><script>document.getElementById("STR").setAttribute('value', Str);</script>
            <button onclick="incStr();" class="modButton" type="button">+</button>
          </td>
    </tr>
<!--TRAIT 2nd-->
    <tr>
      <td colspan="2">LOGIC</td>
        <td><img src="img/symbols/log.png" style="height: 5vh; margin: 0 auto;"></td>
          <td>
            <button onclick="decLog();" class="modButton" type="button">-</button>         
            <input type="text" id="LOG" class="trait" readonly /><script>document.getElementById("LOG").setAttribute('value', Log);</script>
            <button onclick="incLog();" class="modButton" type="button">+</button>
          </td>
      <td colspan="2">ENDURANCE</td>
        <td><img src="img/symbols/end.png" style="height: 5vh; margin: 0 auto;"></td>
          <td>
            <button onclick="decEnd();" class="modButton" type="button">-</button>            
            <input type="text" id="END" class="trait" readonly /><script>document.getElementById("END").setAttribute('value', End);</script>
            <button onclick="incEnd();" class="modButton" type="button">+</button>    
          </td>
    </tr>
<!--TRAIT 3rd-->
    <tr>
      <td colspan="2">PERCEPTION</td>
        <td><img src="img/symbols/per.png" style="height: 5vh; margin: 0 auto;"></td>
          <td>
            <button onclick="decPer();" class="modButton" type="button">-</button>            
            <input type="text" id="PER" class="trait" readonly /><script>document.getElementById("PER").setAttribute('value', Per);</script>
            <button onclick="incPer();" class="modButton" type="button">+</button>
          </td>
      <td colspan="2">DEXTERITY</td>
        <td><img src="img/symbols/dex.png" style="height: 5vh; margin: 0 auto;"></td>
          <td>
            <button onclick="decDex();" class="modButton" type="button">-</button>            
            <input type="text" id="DEX" class="trait" readonly /><script>document.getElementById("DEX").setAttribute('value', Dex);</script>
            <button onclick="incDex();" class="modButton" type="button">+</button>
          </td>
    </tr>
<!--TRAIT 4th-->
    <tr>
      <td colspan="2">WILLPOWER</td>
        <td><img src="img/symbols/will.png" style="height: 5vh; margin: 0 auto;"></td>
          <td>
            <button onclick="decWill();" class="modButton" type="button">-</button>            
            <input type="text" id="WILL" class="trait" readonly /><script>document.getElementById("WILL").setAttribute('value', Will);</script>
            <button onclick="incWill();" class="modButton" type="button">+</button>
          </td>
      <td colspan="2">SPEED</td>
        <td><img src="img/symbols/spd.png" style="height: 5vh; margin: 0 auto;"></td>
          <td>
            <button onclick="decSpd();" class="modButton" type="button">-</button>            
            <input type="text" id="SPD" class="trait" readonly /><script>document.getElementById("SPD").setAttribute('value', Spd);</script>
            <button onclick="incSpd();" class="modButton" type="button">+</button>
          </td>
    </tr>
<!--TRAIT 5th-->
    <tr>
      <td colspan="2">CHARISMA</td>
        <td><img src="img/symbols/cha.png" style="height: 5vh; margin: 0 auto;"></td>
          <td>
            <button onclick="decCha();" class="modButton" type="button">-</button>           
            <input type="text" id="CHA" class="trait" readonly /><script>document.getElementById("CHA").setAttribute('value', Cha);</script>
            <button onclick="incCha();" class="modButton" type="button">+</button>
          </td>
      <td colspan="2">BEAUTY</td>
        <td><img src="img/symbols/bty.png" style="height: 5vh; margin: 0 auto;"></td> 
          <td>
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

<div class="row banner">
  <div class="small-4 columns">&nbsp;</div>
  <div class="small-4 columns"><button onclick="advance();" class="navbutton">COMMIT CHANGES</button></div>
  <div class="small-4 columns">&nbsp;</div>
</div>

<?php include("footer.php"); ?>

</body>
</html>