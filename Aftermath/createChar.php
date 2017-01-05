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
    <script src="js/charCreateEdit.js" type="text/javascript"></script>
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
<form style="margin-top: 10px;" id="charsheet" action="inc/uploadchar.php" method="post">
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
<!--DEMOGRAPHICS-->
    <tr>
      <td colspan="4">DEMOGRAPHIC INFO</td>
      <td colspan="4">IDENTIFYING MARKS</td>
    </tr>
<!--DEMO 1st-->
    <tr>
      <td colspan="2">NAME</td>
      <td colspan="2"><input type="text" id="charName" placeholder="Character Name" /></td>
      <td colspan="2"><input type="text" id="idMarks1" /></td>
      <td colspan="2"><input type="text" id="idMarks2" /></td>
    </tr>
<!--DEMO 2nd-->
    <tr>
      <td colspan="2">ETHNICITY</td>
      <td colspan="2"><input type="text" id="ethnicity" placeholder="Character lineage" /></td>
      <td colspan="2"><input type="text" id="idMarks3" /></td>
      <td colspan="2"><input type="text" id="idMarks4" /></td>
    </tr>
<!--DEMO 3rd-->
    <tr>
      <td colspan="2">AGE</td>
      <td colspan="2"><input type="text" id="age" placeholder="16 - 60 (GM mod stats if old)" /></td>
      <td colspan="2"><input type="text" id="idMarks5" /></td>
      <td colspan="2"><input type="text" id="idMarks6" /></td>
    </tr>   
<!--DEMO 4th-->
    <tr>
      <td colspan="2">HAIR COLOR</td>
      <td colspan="2"><input type="text" id="hairColor" placeholder="..." /></td>
      <td colspan="2"><input type="text" id="idMarks7" /></td>
      <td colspan="2"><input type="text" id="idMarks8" /></td>
    </tr>
<!--DEMO 5th-->
    <tr>
      <td colspan="2">HAIR STYLE</td>
      <td colspan="2"><input type="text" id="hairStyle" placeholder="..."/></td>
      <td colspan="2"><input type="text" id="idMarks9" /></td>
      <td colspan="2"><input type="text" id="idMarks10" /></td>
    </tr>   
<!--DEMO 6th-->
    <tr>
      <td colspan="2">EYECOLOR</td>
      <td colspan="2"><input type="text" id="eyeColor" placeholder="..."/></td>
      <td colspan="2"><input type="text" id="idMarks11" /></td>
      <td colspan="2"><input type="text" id="idMarks12" /></td>
    </tr>   
<!--DEMO 7th-->
    <tr>
      <td colspan="2">BUILD</td>
      <td colspan="2"><input type="text" id="text" placeholder="Based on STR, END, and SPD"/></td>
      <td colspan="2"><input type="text" id="idMarks13" /></td>
      <td colspan="2"><input type="text" id="idMarks14" /></td>
    </tr>   
<!--DEMO 8th-->
    <tr>
      <td colspan="2">HABITAT</td>
      <td colspan="2"><input type="text" id="habitat" placeholder="Environs char is most familiar in"/></td>
      <td colspan="2"><input type="text" id="idMarks15" /></td>
      <td colspan="2"><input type="text" id="idMarks16" /></td>
    </tr>   
<!--DEMO 9th-->
    <tr>
      <td colspan="2">RADIATION</td>
      <td colspan="2" id="radiation">
        <button type="button" onclick="document.getElementById('radiation').innerHTML = radiation;" class="button">ROLL 2D10</button>
      </td>
      <td colspan="2"><input type="text" id="idMarks17" /></td>
      <td colspan="2"><input type="text" id="idMarks18" /></td>
    </tr>   
<!--DEMO 10th-->
    <tr>
      <td colspan="2">BACKGROUND</td>
      <td colspan="2" id="background">
        <button type="button" onclick="document.getElementById('background').innerHTML = background;" class="button">PERCENTILE</button>
      </td>
      <td colspan="2"><input type="text" id="idMarks19" /></td>
      <td colspan="2"><input type="text" id="idMarks20" /></td>
    </tr>   
<!--TRAIT-->
    <tr>
      <td colspan="4">MENTAL TRAITS</td>
      <td colspan="4">PHYSICAL TRAITS</td>
    </tr>   
<!--TRAIT 1st-->
    <tr>
      <td colspan="2">MEMORY</td>
      <td colspan="2" id="MEM">
        <button type="button" onclick="document.getElementById('MEM').innerHTML = mem;" class="button">ROLL 2D10</button>
      </td>
      <td colspan="2">STRENGTH</td>
      <td colspan="2" id="STR">
        <button type="button" onclick="document.getElementById('STR').innerHTML = str;" class="button">ROLL 2D10</button>
      </td>
    </tr>
<!--TRAIT 2nd-->
    <tr>
      <td colspan="2">LOGIC</td>
      <td colspan="2" id="LOG">
        <button type="button" onclick="document.getElementById('LOG').innerHTML = log;" class="button">ROLL 2D10</button>
      </td>
      <td colspan="2">ENDURANCE</td>
      <td colspan="2" id="END">
        <button type="button" onclick="document.getElementById('END').innerHTML = end;" class="button">ROLL 2D10</button>
      </td>
    </tr>
<!--TRAIT 3rd-->
    <tr>
      <td colspan="2">PERCEPTION</td>
      <td colspan="2" id="PER">
        <button type="button" onclick="document.getElementById('PER').innerHTML = per;" class="button">ROLL 2D10</button>
      </td>
      <td colspan="2">DEXTERITY</td>
      <td colspan="2" id="DEX">
        <button type="button" onclick="document.getElementById('DEX').innerHTML = dex;" class="button">ROLL 2D10</button>
      </td>
    </tr>
<!--TRAIT 4th-->
    <tr>
      <td colspan="2">WILLPOWER</td>
      <td colspan="2" id="WILL">
        <button type="button" onclick="document.getElementById('WILL').innerHTML = will;" class="button">ROLL 2D10</button>
      </td>
      <td colspan="2">SPEED</td>
      <td colspan="2" id="SPD">
        <button type="button" onclick= "document.getElementById('SPD').innerHTML = spd;" class="button">ROLL 2D10</button>
      </td>
    </tr>
<!--TRAIT 5th-->
    <tr>
      <td colspan="2">CHARISMA</td>
      <td colspan="2" id="CHA">
        <button type="button" onclick= "document.getElementById('CHA').innerHTML = cha;" class="button">ROLL 2D10</button>
      </td>
      <td colspan="2">BEAUTY</td>
      <td colspan="2" id="BTY">
        <button type="button" onclick= "document.getElementById('BTY').innerHTML = bty;" class="button">ROLL 2D10</button>
      </td>
    </tr>
<!--CHAR MODS-->    
    <tr>
      <td colspan="8">MODIFICATIONS</td>
    </tr>
    <tr>
      <td colspan="4">BONUS TRAIT POINTS</td>
        <td colspan="4" id="traitPts">
        <button type="button" onclick= "document.getElementById('traitPts').innerHTML = traitPts;" class="button">CALCULATE</button>
       </td>
    </tr>  
<!--COMBAT-->
    <tr>
      <td colspan="4">COMBAT SKILLS</td>
      <td colspan="4">COMBAT STATS</td>
    </tr>
<!--COMBAT 1st-->
    <tr>
      <td>UNARM</td>
      <td id="UNARM">
        <button type="button" onclick= "document.getElementById('UNARM').innerHTML = unarm;" class="button">CALCULATE</button>
      </td>
      <td>THROW</td>
      <td id="THROW">
        <button type="button" onclick= "document.getElementById('THROW').innerHTML = thrown;" class="button">CALCULATE</button>
      </td>
      <td colspan="2">SEQUENCE</td>
      <td colspan="2" id="SEQ">
      <button type="button" onclick= "document.getElementById('SEQ').innerHTML = seq;" class="button">CALCULATE</button>
      </td>
    </tr>
<!--COMBAT 2nd-->
    <tr>
      <td>GRAPPLE</td>
      <td id="GRAPPLE">
        <button type="button" onclick= "document.getElementById('GRAPPLE').innerHTML = grap;" class="button">CALCULATE</button>
      </td>
      <td>ARCH</td>
      <td id="ARCH">
        <button type="button" onclick= "document.getElementById('ARCH').innerHTML = arch;" class="button">CALCULATE</button>
      </td>
      <td colspan="2">ACTIONS</td>
      <td colspan="2" id="ACT">
        <button type="button" onclick= "document.getElementById('ACT').innerHTML = act;" class="button">CALCULATE</button>
      </td>
      </tr>
<!--COMBAT 3rd-->
    <tr>
      <td>OFF</td>
      <td id="OFF">
        <button type="button" onclick= "document.getElementById('OFF').innerHTML = off;" class="button">CALCULATE</button>
      </td>
      <td>1H GUNS</td>
      <td id="1HGUNS">
        <button type="button" onclick= "document.getElementById('1HGUNS').innerHTML = oneHguns;" class="button">CALCULATE</button>
      </td>
      <td colspan="2">BLOCK</td>
      <td colspan="2" id="BLOCK">
        <button type="button" onclick= "document.getElementById('BLOCK').innerHTML = block;" class="button">CALCULATE</button>
      </td>
    </tr>
<!--COMBAT 4th-->
    <tr>
      <td>SHORT W</td>
      <td id="SHORTW">
        <button type="button" onclick= "document.getElementById('SHORTW').innerHTML = short;" class="button">CALCULATE</button>
      </td>
      <td>2H GUNS</td>
      <td id="2HGUNS">
        <button type="button" onclick= "document.getElementById('2HGUNS').innerHTML = twoHguns;" class="button">CALCULATE</button>
      </td>
      <td colspan="2">DODGE</td>
      <td colspan=2 id="DODGE">
        <button type="button" onclick= "document.getElementById('DODGE').innerHTML = dodge;" class="button">CALCULATE</button>
      </td>
    </tr>
<!--COMBAT 5th-->
    <tr>
      <td>LONG W</td>
      <td id="LONGW">
        <button type="button" onclick= "document.getElementById('LONGW').innerHTML = long;" class="button">CALCULATE</button>
      </td>
      <td>BURST</td>
      <td id="BURST">
        <button type="button" onclick= "document.getElementById('BURST').innerHTML = burst;" class="button">CALCULATE</button>
      </td>
      <td colspan="4">ADVANCED SKILLS</td>
    </tr>
<!--COMBAT 6th & ADVANCED SKILLS-->
    <tr>
      <td>2H W</td>
      <td id="2HW">
        <button type="button" onclick= "document.getElementById('2HW').innerHTML = twoH;" class="button">CALCULATE</button>
      </td>
      <td>SPECIAL</td>
      <td id="SPECIAL">
        <button type="button" onclick= "document.getElementById('SPECIAL').innerHTML = special;" class="button">CALCULATE</button>
      </td>
      <td id="advSkill1"></td>
      <td id="advSkillRate1"></td>
      <td id="advSkill2"></td>
      <td id="advSkillRate2"></td>
    </tr>
<!--COMBAT 7th-->
    <tr>
      <td>CHAIN</td>
      <td id="CHAIN">
        <button type="button" onclick= "document.getElementById('CHAIN').innerHTML = chain;" class="button">CALCULATE</button>
      </td>
      <td>W SYS</td>
      <td id="WSYS">
        <button type="button" onclick= "document.getElementById('WSYS').innerHTML = wsys;" class="button">CALCULATE</button>
      </td>
      <td id="advSkill3"></td>
      <td id="advSkillRate3"></td>
      <td id="advSkill4"></td>
      <td id="advSkillRate4"></td>
    </tr>
<!--UNIVERSAL-->
    <tr>
      <td colspan="4">UNIVERSAL SKILLS</td>
      <td id="advSkill5"></td>
      <td id="advSkillRate5"></td>
      <td id="advSkill6"></td>
      <td id="advSkillRate6"></td>
    </tr>
<!--UNI 1st-->
    <tr>
      <td>STEALTH</td>
      <td id="STEALTH">
        <button type="button" onclick= "document.getElementById('STEALTH').innerHTML = stealth;" class="button">CALCULATE</button>
      </td>
      <td>CLIMBING</td>
      <td id="CLIMB">
        <button type="button" onclick= "document.getElementById('CLIMB').innerHTML = climb;" class="button">CALCULATE</button>
      </td>
      <td id="advSkill7"></td>
      <td id="advSkillRate7"></td>
      <td id="advSkill8"></td>
      <td id="advSkillRate8"></td>
    </tr>
<!--UNI 2nd-->
    <tr>
      <td>NAVIG.</td>
      <td id="NAVIG">
        <button type="button" onclick= "document.getElementById('NAVIG').innerHTML = navig;" class="button">CALCULATE</button>
      </td>
      <td>NEGOT.</td>
      <td id="NEGOT">
        <button type="button" onclick= "document.getElementById('NEGOT').innerHTML = negot;" class="button">CALCULATE</button>
      </td>
      <td id="advSkill9"></td>
      <td id="advSkillRate9"></td>
      <td id="advSkill10"></td>
      <td id="advSkillRate10"></td>
    </tr>
<!--STANDARD SKILLS-->
    <tr>
      <td colspan="8">SKILLS</td>
    </tr>
<!--SKILLS 1st-->
    <tr>
      <td id="skill1">&nbsp;</td>
      <td id="skillRate1"></td>
      <td id="skill2"></td>
      <td id="skillRate2"></td>
      <td id="skill3"></td>
      <td id="skillRate3"></td>
      <td id="skill4"></td>
      <td id="skillRate4"></td>
    </tr>    
<!--SKILLS 2nd-->
    <tr>
      <td id="skill5">&nbsp;</td>
      <td id="skillRate5"></td>
      <td id="skill6"></td>
      <td id="skillRate6"></td>
      <td id="skill7"></td>
      <td id="skillRate7"></td>
      <td id="skill8"></td>
      <td id="skillRate8"></td>
    </tr>    
<!--SKILLS 3rd-->
    <tr>
      <td id="skill9">&nbsp;</td>
      <td id="skillRate9"></td>
      <td id="skill10"></td>
      <td id="skillRate10"></td>
      <td id="skill11"></td>
      <td id="skillRate11"></td>
      <td id="skill12"></td>
      <td id="skillRate12"></td>
    </tr> 
<!--SKILLS 4th-->
    <tr>
      <td id="skill13">&nbsp;</td>
      <td id="skillRate13"></td>
      <td id="skill14"></td>
      <td id="skillRate14"></td>
      <td id="skill15"></td>
      <td id="skillRate15"></td>
      <td id="skill16"></td>
      <td id="skillRate16"></td>
    </tr>   
<!--EXP-->
    <tr>
      <td colspan="2">TOTAL EXP</td>
      <td colspan="2"></td>
      <td colspan="2">REMAINING EXP</td>
      <td colspan="2"></td>
    </tr>    
</form>
</table>
</div>
</div>
&nbsp;
<!--SKILL CHOICES-->
<div class="row content">
<div class="large-12 columns">
<form style="margin-top: 10px;" id="skillsheet" action="inc/uploadchar.php" method="post">
<table>
<!--1st ROW-->  
  <tr>
    <td colspan="4">SKILL CHOICES</td>
    <td colspan="4" id="CHOICES">
      <button type="button" onclick= "document.getElementById('CHOICES').innerHTML = skillChoice;" class="button">CALCULATE</button>  
    </td>
  </tr>
<!--2nd ROW-->
  <tr>
    <td colspan="8" style="background-color: lightblue;">STANDARD SKILLS (ONE SKILL CHOICE)</td>
  </tr>
<!--3rd ROW-->
  <tr>
    <td colspan="2" style="background-color: lightblue;">SCIENCE SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">TECHNOLOGY SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">TRAINING SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">PILOTING SKILLS</td>
  </tr>
<!--4th ROW-->
    <tr>
      <td>MATH</td>
      <td>BIOLOGY</td>
      <td>MECHANICS</td>
      <td>ELECTRONICS</td>
      <td>STEALTH</td>
      <td>NEGOTIATION</td>
      <td>HORSEMANSHIP</td>
      <td>MOTORCYCLE</td>
    </tr>   
<!--5th ROW-->
    <tr>
      <td>MARINE BIO</td>
      <td>BOTANY</td>
      <td>COMPUTERS</td>
      <td>CARPENTRY</td>
      <td>CLIMBING</td>
      <td>NAVIGATION</td>
      <td>AUTOMOBILE</td>
      <td>BOATING</td>
    </tr>
<!--6th ROW-->
    <tr>
      <td>GEOLOGY</td>
      <td>CHEMISTRY</td>
      <td>METALWORK</td>
      <td>BINDING</td>
      <td>UNARMED</td>
      <td>GRAPPLING</td>
      <td>SAILING</td>
      <td>JET SKI</td>
    </tr>
<!--7th ROW-->
    <tr>
      <td>HISTORY</td>
      <td>MYCOLOGY</td>
      <td>LOCKPICK</td>
      <td>COMM. SYSTEMS</td>
      <td>SHORT WEAPONS</td>
      <td>LONG WEAPONS</td>
      <td colspan="2" style="background-color: lightblue;">SURVIVAL SKILLS</td>
    </tr>
<!--8th ROW-->
    <tr>
      <td>METEOROLOGY</td>
      <td>ASTROLOGY</td>
      <td colspan="2" style="background-color: lightblue;">SOCIAL SKILLS</td>
      <td>TWO HANDED</td>
      <td>CHAIN</td>
      <td>TRAPS</td>
      <td>SURVEILLANCE</td>
    </tr>
<!--9th ROW-->
    <tr>
      <td colspan="2" style="background-color: lightblue;">MEDICAL SKILLS</td>
      <td>LITERACY</td>
      <td>SIMPLE FOREIGN LANG</td>
      <td>THROWING</td>
      <td>ARCHERY</td>
      <td>TRACKING</td>
      <td>OUTDOORSMAN</td>
    </tr>
<!--10th ROW-->
    <tr>
      <td>FIRST AID</td>
      <td>HOLISTICS</td>
      <td>SIMPLE FOREIGN LIT</td>
      <td style="background-color: black;"></td>
      <td>ONE HANDED GUNS</td>
      <td>TWO HANDED GUNS</td>
      <td>PICKPOCKET</td>
      <td style="background-color: black;"></td>
    </tr>
<tr>
    <td colspan="8" style="background-color: lightblue;">ADVANCED SKILLS (TWO SKILL CHOICES)</td>
</tr>
<!--ADV SKILLS 1ST ROW-->
    <tr>
    <td colspan="2" style="background-color: lightblue;">ADV. SCIENCE SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">ADV. TECHNOLOGY SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">ADV. TRAINING SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">ADV. PILOTING SKILLS</td>
  </tr>
<!--ADV SKILLS 2ND ROW-->
    <tr>
      <td>FORENSICS</td>
      <td>TOXICOLOGY</td>
      <td>STRUCTURAL ENGINEERING</td>
      <td>ENCRYPTION</td>
      <td>OFF HAND</td>
      <td>BURST CONTROL</td>
      <td>FREIGHT TRUCKS</td>
      <td>CONSTRUCTION VEHICLES</td>
    </tr>
<!--ADV SKILLS 3RD ROW-->
    <tr>
      <td>PHARMACOLOGY</td>
      <td>MICRO BIOLOGY</td>
      <td>PROGRAMMING</td>
      <td>ROBOTICS</td>
      <td>SPECIAL WEAPONS</td>
      <td>WEAPON SYSTEMS</td>
      <td>MILITARY VEHICLES</td>
      <td>HELICOPTERS</td>
    </tr>
<!--ADV SKILLS 4TH ROW-->
    <tr>
      <td colspan="2" style="background-color: lightblue;">ADV. MEDICAL SKILLS</td>
      <td style="background-color: black;"></td>
      <td colspan="3" style="background-color: lightblue;">ADV. SOCIAL SKILLS</td>
      <td>SMALL ENGINE PLANES</td>
      <td>JET ENGINE PLANES</td>
    </tr>
<!--ADV SKILLS 5TH ROW-->
    <tr>
      <td>DOCTOR</td>
      <td>CYBERNETICS</td>
      <td style="background-color: black;"></td>
      <td>DIFF. FOREIGN LANG</td>
      <td>DIFF. FOREIGN LIT</td>
      <td>LAW</td>
      <td>LARGE PLANES</td>
      <td style="background-color: black;"></td>
    </tr>
</table>
</form>
</div>
</div>

</body>
</html>