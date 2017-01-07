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
      <td colspan="2"><input type="text" id="idMarks1" value="" /></td>
      <td colspan="2"><input type="text" id="idMarks2" value="" /></td>
    </tr>
<!--DEMO 2nd-->
    <tr>
      <td colspan="2">ETHNICITY</td>
      <td colspan="2"><input type="text" id="ethnicity" placeholder="Character lineage" /></td>
      <td colspan="2"><input type="text" id="idMarks3" value="" /></td>
      <td colspan="2"><input type="text" id="idMarks4" value="" /></td>
    </tr>
<!--DEMO 3rd-->
    <tr>
      <td colspan="2">AGE</td>
      <td colspan="2"><input type="text" id="age" placeholder="16 - 60 (GM mod stats if old)" /></td>
      <td colspan="2"><input type="text" id="idMarks5" value="" /></td>
      <td colspan="2"><input type="text" id="idMarks6" value="" /></td>
    </tr>   
<!--DEMO 4th-->
    <tr>
      <td colspan="2">HAIR COLOR</td>
      <td colspan="2"><input type="text" id="hairColor" placeholder="..." /></td>
      <td colspan="2"><input type="text" id="idMarks7" value="" /></td>
      <td colspan="2"><input type="text" id="idMarks8" value="" /></td>
    </tr>
<!--DEMO 5th-->
    <tr>
      <td colspan="2">HAIR STYLE</td>
      <td colspan="2"><input type="text" id="hairStyle" placeholder="..."/></td>
      <td colspan="2"><input type="text" id="idMarks9" value="" /></td>
      <td colspan="2"><input type="text" id="idMarks10" value="" /></td>
    </tr>   
<!--DEMO 6th-->
    <tr>
      <td colspan="2">EYECOLOR</td>
      <td colspan="2"><input type="text" id="eyeColor" placeholder="..."/></td>
      <td colspan="2"><input type="text" id="idMarks11" value="" /></td>
      <td colspan="2"><input type="text" id="idMarks12" value="" /></td>
    </tr>   
<!--DEMO 7th-->
    <tr>
      <td colspan="2">BUILD</td>
      <td colspan="2"><input type="text" id="text" placeholder="Based on STR, END, and SPD"/></td>
      <td colspan="2"><input type="text" id="idMarks13" value="" /></td>
      <td colspan="2"><input type="text" id="idMarks14" value="" /></td>
    </tr>   
<!--DEMO 8th-->
    <tr>
      <td colspan="2">HABITAT</td>
      <td colspan="2"><input type="text" id="habitat" placeholder="Environs char is most familiar in"/></td>
      <td colspan="2"><input type="text" id="idMarks15" value="" /></td>
      <td colspan="2"><input type="text" id="idMarks16" value="" /></td>
    </tr>   
<!--DEMO 9th-->
    <tr>
      <td colspan="2">RADIATION</td>
      <td colspan="2"><input type="text" id="radiation" readonly/><script>document.getElementById("radiation").setAttribute('value', radiation);</script></td>
      <td colspan="2"><input type="text" id="idMarks17" value="" /></td>
      <td colspan="2"><input type="text" id="idMarks18" value="" /></td>
    </tr>   
<!--DEMO 10th-->
    <tr>
      <td colspan="2">BACKGROUND</td>
      <td colspan="2"><input type="text" id="background" readonly /><script>document.getElementById("background").setAttribute('value', background);</script></td>
      <td colspan="2"><input type="text" id="idMarks19" value="" /></td>
      <td colspan="2"><input type="text" id="idMarks20" value="" /></td>
    </tr>   
<!--TRAIT-->
    <tr>
      <td colspan="4">MENTAL TRAITS</td>
      <td colspan="4">PHYSICAL TRAITS</td>
    </tr>   
<!--TRAIT 1st-->
    <tr>
      <td colspan="2">MEMORY</td>
        <td colspan="2">
        <button onclick="decMem();" class="decbutton" type="button">-</button>
        <input type="text" id="MEM" class="trait" readonly /><script>document.getElementById("MEM").setAttribute('value', mem);</script>
        <button onclick="incMem();" class="incbutton" type="button">+</button>
        </td>
      <td colspan="2">STRENGTH</td>
        <td colspan="2">
        <button onclick="decStr();" class="decbutton" type="button">-</button> 
        <input type="text" id="STR" class="trait" readonly /><script>document.getElementById("STR").setAttribute('value', str);</script>
        <button onclick="incStr();" class="incbutton" type="button">+</button>
        </td>
    </tr>
<!--TRAIT 2nd-->
    <tr>
      <td colspan="2">LOGIC</td>
        <td colspan="2">
        <button onclick="decLog();" class="decbutton" type="button">-</button> 
        <input type="text" id="LOG" class="trait" readonly /><script>document.getElementById("LOG").setAttribute('value', log);</script>
        <button onclick="incLog();" class="incbutton" type="button">+</button>
        </td>
      <td colspan="2">ENDURANCE</td>
        <td colspan="2">
        <button onclick="decEnd();" class="decbutton" type="button">-</button> 
        <input type="text" id="END" class="trait" readonly /><script>document.getElementById("END").setAttribute('value', end);</script>
        <button onclick="incEnd();" class="incbutton" type="button">+</button>    
        </td>
    </tr>
<!--TRAIT 3rd-->
    <tr>
      <td colspan="2">PERCEPTION</td>
        <td colspan="2">
        <button onclick="decPer();" class="decbutton" type="button">-</button> 
        <input type="text" id="PER" class="trait" readonly /><script>document.getElementById("PER").setAttribute('value', per);</script>
        <button onclick="incPer();" class="incbutton" type="button">+</button>
        </td>
      <td colspan="2">DEXTERITY</td>
        <td colspan="2">
        <button onclick="decDex();" class="decbutton" type="button">-</button> 
        <input type="text" id="DEX" class="trait" readonly /><script>document.getElementById("DEX").setAttribute('value', dex);</script>
        <button onclick="incDex();" class="incbutton" type="button">+</button>
        </td>
    </tr>
<!--TRAIT 4th-->
    <tr>
      <td colspan="2">WILLPOWER</td>
        <td colspan="2">
        <button onclick="decWill();" class="decbutton" type="button">-</button> 
        <input type="text" id="WILL" class="trait" readonly /><script>document.getElementById("WILL").setAttribute('value', will);</script>
        <button onclick="incWill();" class="incbutton" type="button">+</button>
        </td>
      <td colspan="2">SPEED</td>
        <td colspan="2">
        <button onclick="decSpd();" class="decbutton" type="button">-</button> 
        <input type="text" id="SPD" class="trait" readonly /><script>document.getElementById("SPD").setAttribute('value', spd);</script>
        <button onclick="incSpd();" class="incbutton" type="button">+</button>
        </td>
    </tr>
<!--TRAIT 5th-->
    <tr>
      <td colspan="2">CHARISMA</td>
        <td colspan="2">
        <button onclick="decCha()" class="decbutton" type="button">-</button> 
        <input type="text" id="CHA" class="trait" readonly /><script>document.getElementById("CHA").setAttribute('value', cha);</script>
        <button onclick="incCha();" class="incbutton" type="button">+</button>
        </td>
      <td colspan="2">BEAUTY</td>
        <td colspan="2">
        <button onclick="decBty();" class="decbutton" type="button">-</button>   
        <input type="text" id="BTY" class="trait" readonly /><script>document.getElementById("BTY").setAttribute('value', bty);</script>
        <button onclick="incBty();" class="incbutton" type="button">+</button>
        </td>
    </tr>
<!--CHAR MODS-->    
    <tr>
      <td colspan="8">MODIFICATIONS</td>
    </tr>
    <tr>
      <td colspan="4">BONUS TRAIT POINTS</td>
        <td colspan="4"><input type="text" id="traitPts" readonly /><script>document.getElementById("traitPts").setAttribute('value', traitPts);</script></td>
    </tr>  
<!--COMBAT-->
    <tr>
      <td colspan="4">COMBAT SKILLS</td>
      <td colspan="4">COMBAT STATS</td>
    </tr>
<!--COMBAT 1st-->
    <tr>
      <td>UNARM</td>
      <td><input type="text" id="unarm" readonly /><script>document.getElementById("unarm").setAttribute('value', unarm);</script></td>
      <td>THROW</td>
      <td><input type="text" id="thrown" readonly /><script>document.getElementById("thrown").setAttribute('value', thrown);</script></td>
      <td colspan="2">SEQUENCE</td>
      <td colspan="2"><input type="text" id="seq" readonly /><script>document.getElementById("seq").setAttribute('value', seq);</script></td>
    </tr>
<!--COMBAT 2nd-->
    <tr>
      <td>GRAPPLE</td>
      <td><input type="text" id="grapple" readonly /><script>document.getElementById("grapple").setAttribute('value', grap);</script></td>
      <td>ARCH</td>
      <td><input type="text" id="arch" readonly /><script>document.getElementById("arch").setAttribute('value', arch);</script></td>
      <td colspan="2">ACTIONS</td>
      <td colspan="2"><input type="text" id="act" readonly /><script>document.getElementById("act").setAttribute('value', act);</script></td>
      </tr>
<!--COMBAT 3rd-->
    <tr>
      <td>OFF</td>
      <td><input type="text" id="off" readonly /><script>document.getElementById("off").setAttribute('value', off);</script></td>
      <td>1H GUNS</td>
      <td><input type="text" id="oneHguns" readonly /><script>document.getElementById("oneHguns").setAttribute('value', oneHguns);</script></td>
      <td colspan="2">BLOCK</td>
      <td colspan="2"><input type="text" id="block" readonly /><script>document.getElementById("block").setAttribute('value', block);</script></td>
    </tr>
<!--COMBAT 4th-->
    <tr>
      <td>SHORT W</td>
      <td><input type="text" id="short" readonly /><script>document.getElementById("short").setAttribute('value', short);</script></td>
      <td>2H GUNS</td>
      <td><input type="text" id="twoHguns" readonly /><script>document.getElementById("twoHguns").setAttribute('value', twoHguns);</script></td>
      <td colspan="2">DODGE</td>
      <td colspan="2"><input type="text" id="dodge" readonly /><script>document.getElementById("dodge").setAttribute('value', dodge);</script></td>
    </tr>
<!--COMBAT 5th-->
    <tr>
      <td>LONG W</td>
      <td><input type="text" id="long" readonly /><script>document.getElementById("long").setAttribute('value', long);</script></td>
      <td>BURST</td>
      <td><input type="text" id="burst" readonly /><script>document.getElementById("burst").setAttribute('value', burst);</script></td>
      <td colspan="4">ADVANCED SKILLS</td>
    </tr>
<!--COMBAT 6th & ADVANCED SKILLS-->
    <tr>
      <td>2H W</td>
      <td><input type="text" id="twoH" readonly /><script>document.getElementById("twoH").setAttribute('value', twoH);</script></td>
      <td>SPECIAL</td>
      <td><input type="text" id="special" readonly /><script>document.getElementById("special").setAttribute('value', special);</script></td>
      <td><input type="text"  id="advSkill1" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate1" value="" readonly /></td>
      <td><input type="text"  id="advSkill2" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate2" value="" readonly /></td>
    </tr>
<!--COMBAT 7th-->
    <tr>
      <td>CHAIN</td>
      <td><input type="text" id="chain" readonly /><script>document.getElementById("chain").setAttribute('value', chain);</script></td>
      <td>W SYS</td>
      <td><input type="text" id="wsys" readonly /><script>document.getElementById("wsys").setAttribute('value', wsys);</script></td>
      <td><input type="text"  id="advSkill3" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate3" value="" readonly /></td>
      <td><input type="text"  id="advSkill4" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate4" value="" readonly /></td>
    </tr>
<!--UNIVERSAL-->
    <tr>
      <td colspan="4">UNIVERSAL SKILLS</td>
      <td><input type="text"  id="advSkill5" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate5" value="" readonly /></td>
      <td><input type="text"  id="advSkill6" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate6" value="" readonly /></td>
    </tr>
<!--UNI 1st-->
    <tr>
      <td>STEALTH</td>
      <td><input type="text" id="stealth" readonly /><script>document.getElementById("stealth").setAttribute('value', stealth);</script></td>
      <td>CLIMBING</td>
      <td><input type="text" id="climb" readonly /><script>document.getElementById("climb").setAttribute('value', climb);</script></td>
      <td><input type="text"  id="advSkill7" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate7" value="" readonly /></td>
      <td><input type="text"  id="advSkill8" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate8" value="" readonly /></td>
    </tr>
<!--UNI 2nd-->
    <tr>
      <td>NAVIG.</td>
      <td><input type="text" id="navig" readonly /><script>document.getElementById("navig").setAttribute('value', navig);</script></td>
      <td>NEGOT.</td>
      <td><input type="text" id="negot" readonly /><script>document.getElementById("negot").setAttribute('value', negot);</script></td>
      <td><input type="text"  id="advSkill9" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate9" value="" readonly /></td>
      <td><input type="text"  id="advSkill10" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate10" value="" readonly /></td>
    </tr>
<!--STANDARD SKILLS-->
    <tr>
      <td colspan="8">SKILLS</td>
    </tr>
<!--SKILLS 1st-->
    <tr>
      <td><input type="text"  id="skill1" value="" readonly /></td>
      <td><input type="text"  id="skillRate1" value="" readonly /></td>
      <td><input type="text"  id="skill2" value="" readonly /></td>
      <td><input type="text"  id="skillRate2" value="" readonly /></td>
      <td><input type="text"  id="skill3" value="" readonly /></td>
      <td><input type="text"  id="skillRate3" value="" readonly /></td>
      <td><input type="text"  id="skill4" value="" readonly /></td>
      <td><input type="text"  id="skillRate4" value="" readonly /></td>
    </tr>    
<!--SKILLS 2nd-->
    <tr>
      <td><input type="text"  id="skill5" value="" readonly /></td>
      <td><input type="text"  id="skillRate5" value="" readonly /></td>
     <td><input type="text"  id="skill6" value="" readonly /></td>
      <td><input type="text"  id="skillRate6" value="" readonly /></td>
      <td><input type="text"  id="skill7" value="" readonly /></td>
      <td><input type="text"  id="skillRate7" value="" readonly /></td>
      <td><input type="text"  id="skill8" value="" readonly /></td>
      <td><input type="text"  id="skillRate8" value="" readonly /></td>
    </tr>    
<!--SKILLS 3rd-->
    <tr>
      <td><input type="text"  id="skill9" value="" readonly /></td>
      <td><input type="text"  id="skillRate9" value="" readonly /></td>
      <td><input type="text"  id="skill10" value="" readonly /></td>
      <td><input type="text"  id="skillRate10" value="" readonly /></td>
      <td><input type="text"  id="skill11" value="" readonly /></td>
      <td><input type="text"  id="skillRate11" value="" readonly /></td>
      <td><input type="text"  id="skill12" value="" readonly /></td>
      <td><input type="text"  id="skillRate12" value="" readonly /></td>
    </tr> 
<!--SKILLS 4th-->
    <tr>
      <td><input type="text"  id="skill13" value="" readonly /></td>
      <td><input type="text"  id="skillRate13" value="" readonly /></td>
      <td><input type="text"  id="skill14" value="" readonly /></td>
      <td><input type="text"  id="skillRate14" value="" readonly /></td>
      <td><input type="text"  id="skill15" value="" readonly /></td>
      <td><input type="text"  id="skillRate15" value="" readonly /></td>
      <td><input type="text"  id="skill16" value="" readonly /></td>
      <td><input type="text"  id="skillRate16" value="" readonly /></td>
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
<table><!-- PRE REQUISITES NEEDED -->
<!--SKILL CHOICES-->
<div class="row content">
<div class="large-12 columns">
<form style="margin-top: 10px;" id="skillSheet" action="#" method="#">
<table>
<!--1st ROW-->  
  <tr>
    <td colspan="4">SKILL CHOICES</td>
    <td colspan="4" id="skillChoice"><script>document.write(skillChoice);</script></td>
  </tr>
<!--2nd ROW-->
  <tr>
    <td colspan="8" style="background-color: lightblue;">STANDARD SKILLS (ONE SKILL CHOICE)</td>
  </tr>
<!--3rd ROW-->
  <tr>
    <td colspan="2" style="background-color: lightblue;">SCIENCE SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">TECHNOLOGY SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">TRAINING SKILLS <br>(MAX TWICE ON THE SAME)</td>
    <td colspan="2" style="background-color: lightblue;">PILOTING SKILLS</td>
  </tr>
<!--4th ROW-->
    <tr>
      <td><button type="button" onclick="addSkill();" class="button" id="math">MATH</button></td>
      <td><button type="button" onclick="addSkill();" class="button" id="bio">BIOLOGY</button></td>
      <td><button type="button" onclick="addSkill();" class="button" id="mech">MECHANICS</button></td>
      <td><button type="button" onclick="addSkill();" class="button" id="elect">ELECTRONICS</button></td>
      <td><button type="button" onclick="stealthT();" class="button" id="stealthT">STEALTH</button></td>
      <td><button type="button" onclick="" class="button" id="negotT">NEGOTIATION</button></td>
      <td><button type="button" onclick="addSkill();" class="button" id="horse">HORSEMANSHIP</button></td>
      <td><button type="button" onclick="addSkill();" class="button" id="cycle">MOTORCYCLE</button></td>
    </tr>   
<!--5th ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="marBio">MARINE BIO</button></td>
      <td><button type="button" onclick="" class="button" id="bot">BOTANY</button></td>
      <td><button type="button" onclick="" class="button" id="comp">COMPUTERS</button></td>
      <td><button type="button" onclick="" class="button" id="carp">CARPENTRY</button></td>
      <td><button type="button" onclick="" class="button" id="climbT">CLIMBING</button></td>
      <td><button type="button" onclick="" class="button" id="navigT">NAVIGATION</button></td>
      <td><button type="button" onclick="" class="button" id="auto">AUTOMOBILE</button></td>
      <td><button type="button" onclick="" class="button" id="boat">BOATING</button></td>
    </tr>
<!--6th ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="geo">GEOLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="chem">CHEMISTRY</button></td>
      <td><button type="button" onclick="" class="button" id="metal">METALWORK</button></td>
      <td><button type="button" onclick="" class="button" id="bind">BINDING</button></td>
      <td><button type="button" onclick="" class="button" id="unarmT">UNARMED</button></td>
      <td><button type="button" onclick="" class="button" id="grapT">GRAPPLING</button></td>
      <td><button type="button" onclick="" class="button" id="sail">SAILING</button></td>
      <td><button type="button" onclick="" class="button" id="jetski">JET SKI</button></td>
    </tr>
<!--7th ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="hist">HISTORY</button></td>
      <td><button type="button" onclick="" class="button" id="myco">MYCOLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="lock">LOCKPICK</button></td>
      <td><button type="button" onclick="" class="button" id="comm">COMM. SYSTEMS</button></td>
      <td><button type="button" onclick="" class="button" id="shortT">SHORT WEAPONS</button></td>
      <td><button type="button" onclick="" class="button" id="longT">LONG WEAPONS</button></td>
      <td colspan="2" style="background-color: lightblue;">SURVIVAL SKILLS</td></td>
    </tr>
<!--8th ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="meteo">METEOROLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="astro">ASTROLOGY</button></td>
      <td colspan="2" style="background-color: lightblue;">SOCIAL SKILLS</td></td>
      <td><button type="button" onclick="" class="button" id="twoHT">TWO HANDED</button></td>
      <td><button type="button" onclick="" class="button" id="chainT">CHAIN</button></td>
      <td><button type="button" onclick="" class="button" id="traps">TRAPS</button></td>
      <td><button type="button" onclick="" class="button" id="surv">SURVEILLANCE</button></td>
    </tr>
<!--9th ROW-->
    <tr>
      <td colspan="2" style="background-color: lightblue;">MEDICAL SKILLS</td></td>
      <td><button type="button" onclick="" class="button" id="lit">LITERACY</button></td>
      <td><button type="button" onclick="" class="button" id="forlan">SIMPLE FOREIGN LANG</button></td>
      <td><button type="button" onclick="" class="button" id="thrownT">THROWING</button></td>
      <td><button type="button" onclick="" class="button" id="archT">ARCHERY</button></td>
      <td><button type="button" onclick="" class="button" id="track">TRACKING</button></td>
      <td><button type="button" onclick="" class="button" id="outdoor">OUTDOORSMAN</button></td>
    </tr>
<!--10th ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="firstA">FIRST AID</button></td>
      <td><button type="button" onclick="" class="button" id="holis">HOLISTICS</button></td>
      <td><button type="button" onclick="" class="button" id="forlit">SIMPLE FOREIGN LIT</button></td>
      <td style="background-color: black;"></td>
      <td><button type="button" onclick="" class="button" id="oneHgunsT">ONE HANDED GUNS</button></td>
      <td><button type="button" onclick="" class="button" id="twoHgunsT">TWO HANDED GUNS</button></td>
      <td><button type="button" onclick="" class="button" id="pick">PICKPOCKET</button></td>
      <td style="background-color: black;"></td>
    </tr>
<tr>
    <td colspan="8" style="background-color: lightblue;">ADVANCED SKILLS (TWO SKILL CHOICES)</td>
</tr>
<!--ADV SKILLS 1ST ROW-->
    <tr>
    <td colspan="2" style="background-color: lightblue;">ADV. SCIENCE SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">ADV. TECHNOLOGY SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">ADV. TRAINING SKILLS <br>(MAX TWICE ON THE SAME)</td>
    <td colspan="2" style="background-color: lightblue;">ADV. PILOTING SKILLS</td>
  </tr>
<!--ADV SKILLS 2ND ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="foren">FORENSICS</button></td>
      <td><button type="button" onclick="" class="button" id="toxic">TOXICOLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="strEng">STRUCTURAL ENGINEERING</button></td>
      <td><button type="button" onclick="" class="button" id="encrypt">ENCRYPTION</button></td>
      <td><button type="button" onclick="" class="button" id="offT">OFF HAND</button></td>
      <td><button type="button" onclick="" class="button" id="burstT">BURST CONTROL</button></td>
      <td><button type="button" onclick="" class="button" id="freight">FREIGHT TRUCKS</button></td>
      <td><button type="button" onclick="" class="button" id="conVeh">CONSTRUCTION VEHICLES</button></td>
    </tr>
<!--ADV SKILLS 3RD ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="pharma">PHARMACOLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="micBio">MICRO BIOLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="program">PROGRAMMING</button></td>
      <td><button type="button" onclick="" class="button" id="robot">ROBOTICS</button></td>
      <td><button type="button" onclick="" class="button" id="specialT">SPECIAL WEAPONS</button></td>
      <td><button type="button" onclick="" class="button" id="wsysT">WEAPON SYSTEMS</button></td>
      <td><button type="button" onclick="" class="button" id="milVeh">MILITARY VEHICLES</button></td>
      <td><button type="button" onclick="" class="button" id="heli">HELICOPTERS</button></td>
    </tr>
<!--ADV SKILLS 4TH ROW-->
    <tr>
      <td colspan="2" style="background-color: lightblue;">ADV. MEDICAL SKILLS</td>
      <td style="background-color: black;"></td>
      <td colspan="3" style="background-color: lightblue;">ADV. SOCIAL SKILLS</td>
      <td><button type="button" onclick="" class="button" id="smPlane">SMALL ENGINE PLANES</button></td>
      <td><button type="button" onclick="" class="button" id="jetPlane">JET ENGINE PLANES</button></td>
    </tr>
<!--ADV SKILLS 5TH ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="doctor">DOCTOR</button></td>
      <td><button type="button" onclick="" class="button" id="cyber">CYBERNETICS</button></td>
      <td style="background-color: black;"></td>
      <td><button type="button" onclick="" class="button" id="diffForLang">DIFF. FOREIGN LANG</button></td>
      <td><button type="button" onclick="" class="button" id="diffForLit">DIFF. FOREIGN LIT</button></td>
      <td><button type="button" onclick="" class="button" id="law">LAW</button></td>
      <td><button type="button" onclick="" class="button" id="lgPlane">LARGE PLANES</button></td>
      <td style="background-color: black;"></td>
    </tr>

</div>
</div>

</body>
</html>