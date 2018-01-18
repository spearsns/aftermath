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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/charSkills.js" type="text/javascript"></script>
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
<p class='error'>RED BUTTONS INDICATE 2 SKILL CHOICES</p>
<form id="charsheet" action="inc/uploadchar.php" method="post">
<table>
<!--PLAYER-->
    <tr>
      <td>PLAYER NAME</td>
      <td><input type="text" id="username" name="username" value="<?php $username = $_SESSION['username']; echo $username; ?>" /></td>
      <td>CHARACTER NAME</td>
      <td><input type="text" id="charName" name="charName" placeholder="Character Name" onBlur="checkAvail();" required/>
        
        <script>
            function checkAvail() {
            jQuery.ajax({
            url: "inc/charName.php",
            data:'charName='+$("#charName").val(),
            type: "POST",
            success:function(data){
            $("#charName_avail").html(data);
            },
            error:function (){}
          });
        }
        </script>

      <span id="charName_avail"></span>
      </td>

      <td colspan="2">BACKGROUND</td>
      <td colspan="2"><input type="text" id="background" name="background" value="" readonly />
      <script>document.getElementById("background").setAttribute('value', String(sessionStorage.getItem('background')));</script>
      </td>
    </tr>
<!--DEMO 2nd-->
    <tr>
      <td>ETHNICITY</td>
      <td><input type="text" id="ethnicity" name="ethnicity" placeholder="Character lineage" required /></td>
      <td>SEX</td>
      <td><input type="text" id="sex" name="sex" value="" required /></td>
      <td>AGE</td>
      <td><input type="text" id="age" name="age" placeholder="NUMBERS ONLY!!! 16 - 60 (FATE mod stats if old)" onBlur="checkAge();" required /></td>
      <td>EYE COLOR</td>
      <td><input type="text" id="eyeColor" name="eyeColor" placeholder="..." required /></td>     
    </tr>   
<!--DEMO 4th-->
    <tr>
      <td>BUILD</td>
      <td><input type="text" id="build" name="build" placeholder="Based on STR, END, and SPD" required /></td>
      <td>HABITAT</td>
      <td><input type="text" id="habitat" name="habitat" placeholder="Environs char is most familiar in" required /></td>
      <td>HAIR COLOR</td>
      <td><input type="text" id="hairColor" name="hairColor" placeholder="..." required /></td>
      <td>HAIR STYLE</td>
      <td><input type="text" id="hairStyle" name="hairStyle" placeholder="..." required /></td>
      
    </tr>
<!--TRAIT-->
    <tr>
      <td colspan="2">MENTAL TRAITS</td>
      <td colspan="2">PHYSICAL TRAITS</td>
      <td colspan="4">COMBAT STATS</td>
    </tr>   
<!--TRAIT 1st-->
    <tr>
      <td>MEMORY</td>
        <td>     
        <input type="text" id="MEM" name="MEM" readonly />
        <script>document.getElementById("MEM").setAttribute('value', Number(sessionStorage.getItem('MEM')));</script>
        </td>
      <td>STRENGTH</td>
        <td>
        <input type="text" id="STR" name="STR" readonly />
        <script>document.getElementById("STR").setAttribute('value', Number(sessionStorage.getItem('STR')));</script>
        </td>
        <td>ACTIONS</td>
        <td><input type="text" id="act" name="act" readonly /><script>document.getElementById("act").setAttribute('value', act);</script></td>
        <td>SEQUENCE</td>
        <td><input type="text" id="seq" name="seq" readonly /><script>document.getElementById("seq").setAttribute('value', seq);</script></td>
    </tr>
<!--TRAIT 2nd-->
    <tr>
      <td>LOGIC</td>
        <td>         
        <input type="text" id="LOG" name="LOG" readonly />
        <script>document.getElementById("LOG").setAttribute('value', Number(sessionStorage.getItem('LOG')));</script>
        </td>
      <td>ENDURANCE</td>
        <td>          
        <input type="text" id="END" name="END" readonly />
        <script>document.getElementById("END").setAttribute('value', Number(sessionStorage.getItem('END')));</script>   
        </td>
        <td>BLOCK</td>
        <td><input type="text" id="block" name="block" class="skill" readonly /><script>document.getElementById("block").setAttribute('value', block);</script>
        <button onclick="trainblock();" class="trainBtn" type="button" id="blockTrnBtn">+</button></td></td>
        <td>DODGE</td>
        <td><input type="text" id="dodge" name="dodge" class="skill" readonly /><script>document.getElementById("dodge").setAttribute('value', dodge);</script>
        <button onclick="traindodge();" class="advTrainBtn" type="button" id="dodgeTrnBtn">+</button></td></td>
    </tr>
<!--TRAIT 3rd-->
    <tr>
      <td>PERCEPTION</td>
        <td>            
        <input type="text" id="PER" name="PER" readonly />
        <script>document.getElementById("PER").setAttribute('value', Number(sessionStorage.getItem('PER')));</script>
        </td>
      <td>DEXTERITY</td>
        <td>         
        <input type="text" id="DEX" name="DEX" readonly />
        <script>document.getElementById("DEX").setAttribute('value', Number(sessionStorage.getItem('DEX')));</script>
        </td>
        <td colspan="2">MELEE</td>
        <td colspan="2">RANGED</td>
    </tr>
<!--TRAIT 4th-->
    <tr>
      <td>WILLPOWER</td>
        <td>            
        <input type="text" id="WILL" name="WILL" readonly />
        <script>document.getElementById("WILL").setAttribute('value', Number(sessionStorage.getItem('WILL')));</script>
        </td>
      <td>SPEED</td>
        <td>           
        <input type="text" id="SPD" name="SPD" readonly />
        <script>document.getElementById("SPD").setAttribute('value', Number(sessionStorage.getItem('SPD')));</script>
        </td>
        <td>UNARM</td>
        <td><input type="text" id="unarm" name="unarm" class="skill" readonly /><script>document.getElementById("unarm").setAttribute('value', unarm);</script>
        <button onclick="trainunarm();" class="trainBtn" type="button" id="unarmTrnBtn">+</button></td>
        <td>THROW</td>
        <td><input type="text" id="thrown" name="thrown" class="skill" readonly /><script>document.getElementById("thrown").setAttribute('value', thrown);</script>
        <button onclick="trainthrown();" class="trainBtn" type="button" id="thrownTrnBtn">+</button></td>
    </tr>
<!--TRAIT 5th-->
    <tr>
      <td>CHARISMA</td>
        <td>          
        <input type="text" id="CHA" name="CHA" readonly />
        <script>document.getElementById("CHA").setAttribute('value', Number(sessionStorage.getItem('CHA')));</script>
        </td>
      <td>BEAUTY</td>
        <td>             
        <input type="text" id="BTY" name="BTY" readonly />
        <script>document.getElementById("BTY").setAttribute('value', Number(sessionStorage.getItem('BTY')));</script>
        </td>
      <td>GRAPPLE</td>
        <td><input type="text" id="grap" name="grap" class="skill" readonly /><script>document.getElementById("grap").setAttribute('value', grap);</script>
        <button onclick="traingrap();" class="trainBtn" type="button" id="grapTrnBtn">+</button></td>
       <td>ARCH</td>
        <td><input type="text" id="arch" name="arch" class="skill" readonly /><script>document.getElementById("arch").setAttribute('value', arch);</script>
        <button onclick="trainarch();" class="trainBtn" type="button" id="archTrnBtn">+</button></td>
    </tr>

<!--COMBAT 3rd-->
    <tr>
      <td colspan="4">UNIVERSAL SKILLS</td>
      <td>OFF</td>
      <td><input type="text" id="off" name="off" class="skill" readonly /><script>document.getElementById("off").setAttribute('value', off);</script>
      <button onclick="trainoff();" class="advTrainBtn" type="button" id="offTrnBtn">+</button></td>
      <td>1H GUNS</td>
      <td><input type="text" id="oneHguns" name="oneHguns" class="skill" readonly /><script>document.getElementById("oneHguns").setAttribute('value', oneHguns);</script>
      <button onclick="trainoneHguns();" class="trainBtn" type="button" id="oneHgunsTrnBtn">+</button></td>
      
    </tr>
<!--COMBAT 4th-->
    <tr>
      <td>STEALTH</td>
      <td><input type="text" id="stealth" name="stealth" class="skill" readonly /><script>document.getElementById("stealth").setAttribute('value', stealth);</script>
      <button onclick="trainstealth();" class="trainBtn" type="button" id="stealthTrnBtn">+</button></td>
      <td>CLIMBING</td>
      <td><input type="text" id="climb" name="climb" class="skill" readonly /><script>document.getElementById("climb").setAttribute('value', climb);</script>
      <button onclick="trainclimb();" class="trainBtn" type="button" id="climbTrnBtn">+</button></td>
      <td>SHORT W</td>
      <td><input type="text" id="shortW" name="shortW" class="skill" readonly /><script>document.getElementById("shortW").setAttribute('value', shortW);</script>
      <button onclick="trainshortW();" class="trainBtn" type="button" id="shortWTrnBtn">+</button></td>
      <td>2H GUNS</td>
      <td><input type="text" id="twoHguns" name="twoHguns" class="skill" readonly /><script>document.getElementById("twoHguns").setAttribute('value', twoHguns);</script>
      <button onclick="traintwoHguns();" class="trainBtn" type="button" id="twoHgunsTrnBtn">+</button></td>
      
    </tr>
<!--COMBAT 5th-->
    <tr>
      <td>NAVIG.</td>
      <td><input type="text" id="navig" name="navig" class="skill" readonly /><script>document.getElementById("navig").setAttribute('value', navig);</script>
      <button onclick="trainnavig();" class="trainBtn" type="button" id="navigTrnBtn">+</button></td>
      <td>NEGOT.</td>
      <td><input type="text" id="negot" name="negot" class="skill" readonly /><script>document.getElementById("negot").setAttribute('value', negot);</script>
      <button onclick="trainnegot();" class="trainBtn" type="button" id="negotTrnBtn">+</button></td>
      <td>LONG W</td>
      <td><input type="text" id="longW" name="longW" class="skill" readonly /><script>document.getElementById("longW").setAttribute('value', longW);</script>
      <button onclick="trainlongW();" class="trainBtn" type="button" id="longWTrnBtn">+</button></td>
      <td>BURST</td>
      <td><input type="text" id="burst" name="burst" class="skill" readonly /><script>document.getElementById("burst").setAttribute('value', burst);</script>
      <button onclick="trainburst();" class="advTrainBtn" type="button" id="burstTrnBtn">+</button></td>
      
    </tr>
<!--COMBAT 6th-->
    <tr>
      <td>CRAFTING</td>
      <td><input type="text" id="craft" name="craft" class="skill" readonly /><script>document.getElementById("craft").setAttribute('value', craft);</script>
      <button onclick="traincraft();" class="trainBtn" type="button" id="craftTrnBtn">+</button></td>
      <td>SURVIVAL</td>
      <td><input type="text" id="survival" name="survival" class="skill" readonly /><script>document.getElementById("survival").setAttribute('value', survival);</script>
      <button onclick="trainsurvival();" class="trainBtn" type="button" id="survivalTrnBtn">+</button></td>
      <td>2H W</td>
      <td><input type="text" id="twoH" name="twoH" class="skill" readonly /><script>document.getElementById("twoH").setAttribute('value', twoH);</script>
      <button onclick="traintwoH();" class="trainBtn" type="button" id="twoHTrnBtn">+</button></td>
      <td>SPECIAL</td>
      <td><input type="text" id="special" name="special" class="skill" readonly /><script>document.getElementById("special").setAttribute('value', special);</script>
      <button onclick="trainspecial();" class="advTrainBtn" type="button" id="specialTrnBtn">+</button></td>
      
    </tr>
<!--COMBAT 7th-->
    <tr>
      <td colspan="3">SKILL CHOICES<br><p class="error">Some know more than they realize...</p></td>
      <td><input type="text" id="skillChoice" value="" readonly />
      <script>document.getElementById("skillChoice").setAttribute("value", skillChoice);</script>
      </td>
      <td>CHAIN</td>
      <td><input type="text" id="chain" name="chain" class="skill" readonly /><script>document.getElementById("chain").setAttribute('value', chain);</script>
      <button onclick="trainchain();" class="trainBtn" type="button">+</button></td>
      <td>W SYS</td>
      <td><input type="text" id="wsys" name="wsys" class="skill" readonly /><script>document.getElementById("wsys").setAttribute('value', wsys);</script>
      <button onclick="trainwsys();" class="advTrainBtn" type="button">+</button></td>
    </tr>

    <tr>
      <td colspan="8">BASIC SKILLS</td>
    </tr>
<!--SKILLS 1st-->
    <tr>
      <td><input type="text"  id="skill1" name="skill1" value="" readonly /></td>
      <td><input type="text"  id="skillRate1" name="skillRate1" value="" readonly /></td>
      <td><input type="text"  id="skill2" name="skill2" value="" readonly /></td>
      <td><input type="text"  id="skillRate2" name="skillRate2" value="" readonly /></td>
      <td><input type="text"  id="skill3" name="skill3" value="" readonly /></td>
      <td><input type="text"  id="skillRate3" name="skillRate3" value="" readonly /></td>
      <td><input type="text"  id="skill4" name="skill4" value="" readonly /></td>
      <td><input type="text"  id="skillRate4" name="skillRate4" value="" readonly /></td>
    </tr>    
<!--SKILLS 2nd-->
    <tr>
      <td><input type="text"  id="skill5" name="skill5" value="" readonly /></td>
      <td><input type="text"  id="skillRate5" name="skillRate5" value="" readonly /></td>
      <td><input type="text"  id="skill6" name="skill6" value="" readonly /></td>
      <td><input type="text"  id="skillRate6" name="skillRate6" value="" readonly /></td>
      <td><input type="text"  id="skill7" name="skill7" value="" readonly /></td>
      <td><input type="text"  id="skillRate7" name="skillRate7" value="" readonly /></td>
      <td><input type="text"  id="skill8" name="skill8" value="" readonly /></td>
      <td><input type="text"  id="skillRate8" name="skillRate8" value="" readonly /></td>
    </tr>    
<!--SKILLS 3rd-->
    <tr>
      <td><input type="text"  id="skill9" name="skill9" value="" readonly /></td>
      <td><input type="text"  id="skillRate9" name="skillRate9" value="" readonly /></td>
      <td><input type="text"  id="skill10" name="skill10" value="" readonly /></td>
      <td><input type="text"  id="skillRate10" name="skillRate10" value="" readonly /></td>
      <td><input type="text"  id="skill11" name="skill11" value="" readonly /></td>
      <td><input type="text"  id="skillRate11" name="skillRate11" value="" readonly /></td>
      <td><input type="text"  id="skill12" name="skill12" value="" readonly /></td>
      <td><input type="text"  id="skillRate12" name="skillRate12" value="" readonly /></td>
    </tr> 
<!--SKILLS 4th-->
    <tr>
      <td><input type="text"  id="skill13" name="skill13" value="" readonly /></td>
      <td><input type="text"  id="skillRate13" name="skillRate13" value="" readonly /></td>
      <td><input type="text"  id="skill14" name="skill14" value="" readonly /></td>
      <td><input type="text"  id="skillRate14" name="skillRate14" value="" readonly /></td>
      <td><input type="text"  id="skill15" name="skill15" value="" readonly /></td>
      <td><input type="text"  id="skillRate15" name="skillRate15" value="" readonly /></td>
      <td><input type="text"  id="skill16" name="skill16" value="" readonly /></td>
      <td><input type="text"  id="skillRate16" name="skillRate16" value="" readonly /></td>
    </tr>   
<!--SKILLS 5TH-->
    <tr>
      <td><input type="text"  id="skill17" name="skill17" value="" readonly /></td>
      <td><input type="text"  id="skillRate17" name="skillRate17" value="" readonly /></td>
      <td><input type="text"  id="skill18" name="skill18" value="" readonly /></td>
      <td><input type="text"  id="skillRate18" name="skillRate18" value="" readonly /></td>
      <td><input type="text"  id="skill19" name="skill19" value="" readonly /></td>
      <td><input type="text"  id="skillRate19" name="skillRate19" value="" readonly /></td>
      <td><input type="text"  id="skill20" name="skill20" value="" readonly /></td>
      <td><input type="text"  id="skillRate20" name="skillRate20" value="" readonly /></td>
    </tr> 
<!--ADVANCED SKILLS-->
    <tr>
      <td colspan="8">ADVANCED SKILLS</td>
    </tr>
    <tr>
      <td><input type="text"  id="advSkill1" name="advSkill1" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate1" name="advSkillRate1" value="" readonly /></td>
      <td><input type="text"  id="advSkill2" name="advSkill2" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate2" name="advSkillRate2" value="" readonly /></td>
      <td><input type="text"  id="advSkill3" name="advSkill3" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate3" name="advSkillRate3" value="" readonly /></td>
      <td><input type="text"  id="advSkill4" name="advSkill4" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate4" name="advSkillRate4" value="" readonly /></td>
    </tr>
<!--ADV 2nd-->
    <tr>
      <td><input type="text"  id="advSkill5" name="advSkill5" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate5" name="advSkillRate5" value="" readonly /></td>
      <td><input type="text"  id="advSkill6" name="advSkill6" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate6" name="advSkillRate6" value="" readonly /></td>
      <td><input type="text"  id="advSkill7" name="advSkill7" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate7" name="advSkillRate7" value="" readonly /></td>
      <td><input type="text"  id="advSkill8" name="advSkill8" value="" readonly /></td>
      <td><input type="text"  id="advSkillRate8" name="advSkillRate8" value="" readonly /></td>
    </tr>
<!--EXP-->
    <tr>
      <td colspan="2">TOTAL EXP</td>
      <td colspan="2"><input type="text"  id="EXP" name="EXP" value="" readonly /></td>
      <td colspan="2">REMAINING EXP</td>
      <td colspan="2"><input type="text"  id="remEXP" name="remEXP" value="" readonly /></td>
    </tr> 
<!--SUBMIT-->
    <tr>
      <td colspan="8"><input style="max-width: 50%;" id="upload" type="submit" name="submit" value="CONFIRM & UPLOAD" class="button" /></td>
      <script>
      document.getElementById("upload").addEventListener("click", function(event){
        if (skillChoice > 0){
        alert('YOU MUST SPEND ALL SKILL POINTS AVAILABLE');
        event.preventDefault()
      }
        if (document.getElementById('farmModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      }
        if (document.getElementById('gangModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
        if (document.getElementById('soldModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
        if (document.getElementById('outModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
        if (document.getElementById('tradeModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
        if (document.getElementById('mechModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
        if (document.getElementById('educModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
});
      </script>

    </tr> 
    <br>

</form>
</table>
</div>

<!--SKILL CHOICES-->
<div class="row content">
<div class="large-12 columns">
<table>

<!--MODALS-->
<!--FARMER MODAL-->
<div id="farmModal" class="modal">
      <div>
      <p style="font-weight: bold;">PLEASE SELECT ONE OF THE FOLLOWING:</p>
          <ul>
            <li><button type="button" onclick="addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('horseBtn').disabled = true; farmModal.style.display='none';" class="button" data-name="HORSEMANSHIP">HORSEMANSHIP</button>
            <li><button type="button" onclick="addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('autoBtn').disabled = true; farmModal.style.display='none';" class="button" data-name="AUTOMOBILE">AUTOMOBILE</button>
          </ul>
      </div>
</div> 
<!--GANGSTER MODAL-->
<div id="gangModal" class="modal">
    <div>
        <div style="width: 50%; float: left;">
        <p style="font-weight: bold;">PLEASE SELECT ONE FROM EACH COLUMN</p>
        <ul>
          <li><button type="button" onclick="modunarm(); gangModal();
            document.getElementById('unarmModBtn').disabled = true; 
            document.getElementById('grapModBtn').disabled = true;
            document.getElementById('offModBtn').disabled = true;
            document.getElementById('shortModBtn').disabled = true;
            document.getElementById('longModBtn').disabled = true;
            document.getElementById('twoHModBtn').disabled = true;
            document.getElementById('chainModBtn').disabled = true;" 
            id="unarmModBtn" class="button">UNARMED</button>
          <li><button type="button" onclick="modgrap(); gangModal();
            document.getElementById('unarmModBtn').disabled = true; 
            document.getElementById('grapModBtn').disabled = true;
            document.getElementById('offModBtn').disabled = true;
            document.getElementById('shortModBtn').disabled = true;
            document.getElementById('longModBtn').disabled = true;
            document.getElementById('twoHModBtn').disabled = true;
            document.getElementById('chainModBtn').disabled = true;"
            id="grapModBtn" class="button">GRAPPLING</button>
          <li><button type="button" onclick="modoff(); gangModal();
            document.getElementById('unarmModBtn').disabled = true; 
            document.getElementById('grapModBtn').disabled = true;
            document.getElementById('offModBtn').disabled = true;
            document.getElementById('shortModBtn').disabled = true;
            document.getElementById('longModBtn').disabled = true;
            document.getElementById('twoHModBtn').disabled = true;
            document.getElementById('chainModBtn').disabled = true;"
            id="offModBtn" class="button">OFF HAND</button>
          <li><button type="button" onclick="modshortW(); gangModal();
            document.getElementById('unarmModBtn').disabled = true; 
            document.getElementById('grapModBtn').disabled = true;
            document.getElementById('offModBtn').disabled = true;
            document.getElementById('shortModBtn').disabled = true;
            document.getElementById('longModBtn').disabled = true;
            document.getElementById('twoHModBtn').disabled = true;
            document.getElementById('chainModBtn').disabled = true;"
            id="shortModBtn" class="button">SHORT WEAPONS</button>
          <li><button type="button" onclick="modlongW(); gangModal();
            document.getElementById('unarmModBtn').disabled = true; 
            document.getElementById('grapModBtn').disabled = true;
            document.getElementById('offModBtn').disabled = true;
            document.getElementById('shortModBtn').disabled = true;
            document.getElementById('longModBtn').disabled = true;
            document.getElementById('twoHModBtn').disabled = true;
            document.getElementById('chainModBtn').disabled = true;"
            id="longModBtn" class="button">LONG WEAPONS</button>
          <li><button type="button" onclick="modtwoH(); gangModal();
            document.getElementById('unarmModBtn').disabled = true; 
            document.getElementById('grapModBtn').disabled = true;
            document.getElementById('offModBtn').disabled = true;
            document.getElementById('shortModBtn').disabled = true;
            document.getElementById('longModBtn').disabled = true;
            document.getElementById('twoHModBtn').disabled = true;
            document.getElementById('chainModBtn').disabled = true;"
            id="twoHModBtn" class="button">TWO HANDED</button>
          <li><button type="button" onclick="modchain(); gangModal();
            document.getElementById('unarmModBtn').disabled = true; 
            document.getElementById('grapModBtn').disabled = true;
            document.getElementById('offModBtn').disabled = true;
            document.getElementById('shortModBtn').disabled = true;
            document.getElementById('longModBtn').disabled = true;
            document.getElementById('twoHModBtn').disabled = true;
            document.getElementById('chainModBtn').disabled = true;"
            id="chainModBtn" class="button">CHAIN</button>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
          <p>&nbsp;</p>
        <ul>
          <li><button type="button" onclick="modthrown(); gangModal();
            document.getElementById('throwModBtn').disabled = true; 
            document.getElementById('archModBtn').disabled = true;
            document.getElementById('oneHgunsModBtn').disabled = true;
            document.getElementById('twoHgunsModBtn').disabled = true;
            document.getElementById('burstModBtn').disabled = true;
            document.getElementById('specialModBtn').disabled = true;" 
            id="throwModBtn" class="button">THROWING</button>
          <li><button type="button" onclick="modarch(); gangModal();
            document.getElementById('throwModBtn').disabled = true; 
            document.getElementById('archModBtn').disabled = true;
            document.getElementById('oneHgunsModBtn').disabled = true;
            document.getElementById('twoHgunsModBtn').disabled = true;
            document.getElementById('burstModBtn').disabled = true;
            document.getElementById('specialModBtn').disabled = true;"  
            id="archModBtn" class="button">ARCHERY</button>
          <li><button type="button" onclick="modoneHguns(); gangModal();
            document.getElementById('throwModBtn').disabled = true; 
            document.getElementById('archModBtn').disabled = true;
            document.getElementById('oneHgunsModBtn').disabled = true;
            document.getElementById('twoHgunsModBtn').disabled = true;
            document.getElementById('burstModBtn').disabled = true;
            document.getElementById('specialModBtn').disabled = true;"  
            id="oneHgunsModBtn" class="button">ONE HANDED GUNS</button>
          <li><button type="button" onclick="modtwoHguns(); gangModal();
            document.getElementById('throwModBtn').disabled = true; 
            document.getElementById('archModBtn').disabled = true;
            document.getElementById('oneHgunsModBtn').disabled = true;
            document.getElementById('twoHgunsModBtn').disabled = true;
            document.getElementById('burstModBtn').disabled = true;
            document.getElementById('specialModBtn').disabled = true;"  
            id="twoHgunsModBtn" class="button">TWO HANDED GUNS</button>
          <li><button type="button" onclick="modburst(); gangModal();
            document.getElementById('throwModBtn').disabled = true; 
            document.getElementById('archModBtn').disabled = true;
            document.getElementById('oneHgunsModBtn').disabled = true;
            document.getElementById('twoHgunsModBtn').disabled = true;
            document.getElementById('burstModBtn').disabled = true;
            document.getElementById('specialModBtn').disabled = true;"  
            id="burstModBtn" class="button">BURST CONTROL</button>
          <li><button type="button" onclick="modspecial(); gangModal();
            document.getElementById('throwModBtn').disabled = true; 
            document.getElementById('archModBtn').disabled = true;
            document.getElementById('oneHgunsModBtn').disabled = true;
            document.getElementById('twoHgunsModBtn').disabled = true;
            document.getElementById('burstModBtn').disabled = true;
            document.getElementById('specialModBtn').disabled = true;"  
            id="specialModBtn" class="button">SPECIAL WEAPONS</button>
        </ul>
        </div>
    </div>
</div>
<!--SOLDIER MODAL-->
<div id="soldModal" class="modal">
    <div>
        <div style="width: 50%; float: left;">
        <p style="font-weight: bold;">PLEASE SELECT THREE OF THE FOLLOWING</p>
        <ul>
          <li><button type="button" onclick="modunarm(); soldModal();" 
            id="unarmModBtn" class="button">UNARMED</button>
          <li><button type="button" onclick="modgrap(); soldModal();" 
            id="grapModBtn" class="button melee">GRAPPLING</button>
          <li><button type="button" onclick="modoff(); soldModal();" 
            id="offModBtn" class="button">OFF HAND</button>
          <li><button type="button" onclick="modshortW(); soldModal();" 
            id="shortModBtn" class="button">SHORT WEAPONS</button>
          <li><button type="button" onclick="modlongW(); soldModal();" 
            id="longModBtn" class="button">LONG WEAPONS</button>
          <li><button type="button" onclick="modtwoH(); soldModal();" 
            id="twoHModBtn" class="button">TWO HANDED</button>
          <li><button type="button" onclick="modchain(); soldModal();" 
            id="chainModBtn" class="button">CHAIN</button>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
          <p>&nbsp;</p>
        <ul>
          <li><button type="button" onclick="modthrown(); soldModal();" 
            id="throwModBtn" class="button">THROWING</button>
          <li><button type="button" onclick="modarch(); soldModal();" 
            id="archModBtn" class="button">ARCHERY</button>
          <li><button type="button" onclick="modoneHguns(); soldModal();" 
            id="oneHgunsModBtn" class="button">ONE HANDED GUNS</button>
          <li><button type="button" onclick="modtwoHguns(); soldModal();" 
            id="twoHgunsModBtn" class="button">TWO HANDED GUNS</button>
          <li><button type="button" onclick="modburst(); soldModal();" 
            id="burstModBtn" class="button">BURST CONTROL</button>
          <li><button type="button" onclick="modspecial(); soldModal();" 
            id="specialModBtn" class="button ranged">SPECIAL WEAPONS</button>
          <li><button type="button" onclick="modwsys(); soldModal();" 
            id="wsysModBtn" class="button">WEAPON SYSTEMS</button>
        </ul>
        </div>
    </div>
</div>
<!--OUTDOORSMAN MODAL-->
<div id="outModal" class="modal">
    <div>
        <div>
        <p style="font-weight: bold;">PLEASE SELECT ONE OF THE FOLLOWING</p>
        <ul>
          <li><button type="button" onclick="modthrown(); outModal.style.display='none';" class="button">THROWING</button>
          <li><button type="button" onclick="modarch(); outModal.style.display='none';" class="button">ARCHERY</button>
          <li><button type="button" onclick="modoneHguns(); outModal.style.display='none';" class="button">ONE HANDED GUNS</button>
          <li><button type="button" onclick="modtwoHguns(); outModal.style.display='none';" class="button">TWO HANDED GUNS</button>
        </ul>
        </div>
    </div>
</div>
<!--TRADER MODAL-->
    <div id="tradeModal" class="modal">
      <div>
        <div style="width: 50%; float: left;">
        <p style="font-weight: bold;">PLEASE SELECT ONE FROM EITHER COLUMN</p>
        <ul>
          <li><button type="button" onclick="modunarm(); tradeModal();
            document.getElementById('tunarmModBtn').disabled = true; 
            document.getElementById('tgrapModBtn').disabled = true;
            document.getElementById('toffModBtn').disabled = true;
            document.getElementById('tshortModBtn').disabled = true;
            document.getElementById('tlongModBtn').disabled = true;
            document.getElementById('ttwoHModBtn').disabled = true;
            document.getElementById('tchainModBtn').disabled = true;" 
            id="tunarmModBtn" class="button">UNARMED</button>
          <li><button type="button" onclick="modgrap(); tradeModal();
            document.getElementById('tunarmModBtn').disabled = true; 
            document.getElementById('tgrapModBtn').disabled = true;
            document.getElementById('toffModBtn').disabled = true;
            document.getElementById('tshortModBtn').disabled = true;
            document.getElementById('tlongModBtn').disabled = true;
            document.getElementById('ttwoHModBtn').disabled = true;
            document.getElementById('tchainModBtn').disabled = true;"
            id="tgrapModBtn" class="button">GRAPPLING</button>
          <li><button type="button" onclick="modoff(); tradeModal();
            document.getElementById('tunarmModBtn').disabled = true; 
            document.getElementById('tgrapModBtn').disabled = true;
            document.getElementById('toffModBtn').disabled = true;
            document.getElementById('tshortModBtn').disabled = true;
            document.getElementById('tlongModBtn').disabled = true;
            document.getElementById('ttwoHModBtn').disabled = true;
            document.getElementById('tchainModBtn').disabled = true;"
            id="toffModBtn" class="button">OFF HAND</button>
          <li><button type="button" onclick="modshortW(); tradeModal();
            document.getElementById('tunarmModBtn').disabled = true; 
            document.getElementById('tgrapModBtn').disabled = true;
            document.getElementById('toffModBtn').disabled = true;
            document.getElementById('tshortModBtn').disabled = true;
            document.getElementById('tlongModBtn').disabled = true;
            document.getElementById('ttwoHModBtn').disabled = true;
            document.getElementById('tchainModBtn').disabled = true;"
            id="tshortModBtn" class="button">SHORT WEAPONS</button>
          <li><button type="button" onclick="modlongW(); tradeModal();
            document.getElementById('tunarmModBtn').disabled = true; 
            document.getElementById('tgrapModBtn').disabled = true;
            document.getElementById('toffModBtn').disabled = true;
            document.getElementById('tshortModBtn').disabled = true;
            document.getElementById('tlongModBtn').disabled = true;
            document.getElementById('ttwoHModBtn').disabled = true;
            document.getElementById('tchainModBtn').disabled = true;"
            id="tlongModBtn" class="button">LONG WEAPONS</button>
          <li><button type="button" onclick="modtwoH(); tradeModal();
            document.getElementById('tunarmModBtn').disabled = true; 
            document.getElementById('tgrapModBtn').disabled = true;
            document.getElementById('toffModBtn').disabled = true;
            document.getElementById('tshortModBtn').disabled = true;
            document.getElementById('tlongModBtn').disabled = true;
            document.getElementById('ttwoHModBtn').disabled = true;
            document.getElementById('tchainModBtn').disabled = true;"
            id="ttwoHModBtn" class="button">TWO HANDED</button>
          <li><button type="button" onclick="modchain(); tradeModal();
            document.getElementById('tunarmModBtn').disabled = true; 
            document.getElementById('tgrapModBtn').disabled = true;
            document.getElementById('toffModBtn').disabled = true;
            document.getElementById('tshortModBtn').disabled = true;
            document.getElementById('tlongModBtn').disabled = true;
            document.getElementById('ttwoHModBtn').disabled = true;
            document.getElementById('tchainModBtn').disabled = true;"
            id="tchainModBtn" class="button">CHAIN</button>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
          <p>&nbsp;</p>
        <ul>
          <li><button type="button" onclick="modthrown(); tradeModal();
            document.getElementById('tthrowModBtn').disabled = true; 
            document.getElementById('tarchModBtn').disabled = true;
            document.getElementById('toneHgunsModBtn').disabled = true;
            document.getElementById('ttwoHgunsModBtn').disabled = true;
            document.getElementById('tburstModBtn').disabled = true;
            document.getElementById('tspecialModBtn').disabled = true;" 
            id="tthrowModBtn" class="button">THROWING</button>
          <li><button type="button" onclick="modarch(); tradeModal();
            document.getElementById('tthrowModBtn').disabled = true; 
            document.getElementById('tarchModBtn').disabled = true;
            document.getElementById('toneHgunsModBtn').disabled = true;
            document.getElementById('ttwoHgunsModBtn').disabled = true;
            document.getElementById('tburstModBtn').disabled = true;
            document.getElementById('tspecialModBtn').disabled = true;"  
            id="tarchModBtn" class="button">ARCHERY</button>
          <li><button type="button" onclick="modoneHguns(); tradeModal();
            document.getElementById('tthrowModBtn').disabled = true; 
            document.getElementById('tarchModBtn').disabled = true;
            document.getElementById('toneHgunsModBtn').disabled = true;
            document.getElementById('ttwoHgunsModBtn').disabled = true;
            document.getElementById('tburstModBtn').disabled = true;
            document.getElementById('tspecialModBtn').disabled = true;"  
            id="toneHgunsModBtn" class="button">ONE HANDED GUNS</button>
          <li><button type="button" onclick="modtwoHguns(); tradeModal();
            document.getElementById('tthrowModBtn').disabled = true; 
            document.getElementById('tarchModBtn').disabled = true;
            document.getElementById('toneHgunsModBtn').disabled = true;
            document.getElementById('ttwoHgunsModBtn').disabled = true;
            document.getElementById('tburstModBtn').disabled = true;
            document.getElementById('tspecialModBtn').disabled = true;"  
            id="ttwoHgunsModBtn" class="button">TWO HANDED GUNS</button>
          <li><button type="button" onclick="modburst(); tradeModal();
            document.getElementById('tthrowModBtn').disabled = true; 
            document.getElementById('tarchModBtn').disabled = true;
            document.getElementById('toneHgunsModBtn').disabled = true;
            document.getElementById('ttwoHgunsModBtn').disabled = true;
            document.getElementById('tburstModBtn').disabled = true;
            document.getElementById('tspecialModBtn').disabled = true;"  
            id="tburstModBtn" class="button">BURST CONTROL</button>
          <li><button type="button" onclick="modspecial(); tradeModal();
            document.getElementById('tthrowModBtn').disabled = true; 
            document.getElementById('tarchModBtn').disabled = true;
            document.getElementById('toneHgunsModBtn').disabled = true;
            document.getElementById('ttwoHgunsModBtn').disabled = true;
            document.getElementById('tburstModBtn').disabled = true;
            document.getElementById('tspecialModBtn').disabled = true;"  
            id="tspecialModBtn" class="button">SPECIAL WEAPONS</button>
        </ul>
        </div>

        <div>
          <p style="font-weight: bold; clear: both;">AS WELL AS ONE OF THE FOLLOWING:</p>
          <ul>
            <li><button type="button" onclick=" tradeModal(); addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('horseBtn').disabled = true;" class="button" id='horseModBtn' data-name="HORSEMANSHIP">HORSEMANSHIP</button>
            <li><button type="button" onclick=" tradeModal(); addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('cycleBtn').disabled = true;" class="button" id='cycleModBtn' data-name="MOTORCYCLE">MOTORCYCLE</button>
            <li><button type="button" onclick=" tradeModal(); addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
               getElementById('autoBtn').disabled = true;" class="button" id='autoModBtn' data-name="AUTOMOBILE">AUTOMOBILE</button>
            <li><button type="button" onclick=" tradeModal(); addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
               getElementById('boatBtn').disabled = true;" class="button" id='boatModBtn' data-name="BOATING">BOATING</button>
            <li><button type="button" onclick=" tradeModal(); addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
               getElementById('sailBtn').disabled = true;" class="button" id='sailModBtn' data-name="SAILING">SAILING</button>
            <li><button type="button" onclick="tradeModal(); addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
               getElementById('jetSkiBtn').disabled = true;" class="button" id='skiModBtn' data-name="JET_SKI">JET SKI</button>
            <li><button type="button" onclick="tradeModal(); addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
               getElementById('bikeBtn').disabled = true;" class="button" id='bikeModBtn' data-name="BICYCLE">BICYCLE</button>
          </ul>  
        </div>

    </div>
  </div>
<!--MECHANIC MODAL-->
<div id="mechModal" class="modal">
    <div>
       <p style="font-weight: bold;">PLEASE SELECT ONE OF THE FOLLOWING:</p>
          <ul>
            <li><button type="button" onclick="addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('cycleBtn').disabled = true; mechModal.style.display='none';" class="button" data-name="MOTORCYCLE">MOTORCYCLE</button>
            <li><button type="button" onclick="addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('autoBtn').disabled = true; mechModal.style.display='none';" class="button" data-name="AUTOMOBILE">AUTOMOBILE</button>
            <li><button type="button" onclick="addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('boatBtn').disabled = true; mechModal.style.display='none';" class="button" data-name="BOATING">BOATING</button>
            <li><button type="button" onclick="addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('sailBtn').disabled = true; mechModal.style.display='none';" class="button" data-name="SAILING">SAILING</button>
            <li><button type="button" onclick="addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('jetSkiBtn').disabled = true; mechModal.style.display='none';" class="button" data-name="JET_SKI">JET SKI</button>
            <li><button type="button" onclick="addAdvSkill(this); skillChoice += 2; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('multiGearBtn').disabled = true; mechModal.style.display='none';" class="button" data-name="MULTI_GEARS">MULTI GEARED</button>
            <li><button type="button" onclick="addAdvSkill(this); skillChoice += 2; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('hvyEquipBtn').disabled = true; mechModal.style.display='none';" class="button" data-name="HEAVY_EQUIP">HEAVY EQUIPMENT</button>
            <li><button type="button" onclick="addAdvSkill(this); skillChoice += 2; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('treadBtn').disabled = true; mechModal.style.display='none';" class="button" data-name="TREADED">TREADED VEHICLES</button>
            <li><button type="button" onclick="addAdvSkill(this); skillChoice += 2; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('heliBtn').disabled = true; mechModal.style.display='none';" class="button" data-name="HELICOPTERS">HELICOPTERS</button>
            <li><button type="button" onclick="addAdvSkill(this); skillChoice += 2; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('planesBtn').disabled = true; mechModal.style.display='none';" class="button" data-name="AIRPLANES">AIRPLANES</button>
          </ul>  
    </div>
</div>
<!--EDUCATED MODAL-->
<div id="educModal" class="modal">
      <div>
        <div style="width: 50%; float: left;">
        <p style="font-weight: bold;">PLEASE SELECT ONE FROM EITHER COLUMN</p>
        <ul>
          <li><button type="button" onclick="addSkill(this); skillChoice += 1;  getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('bioBtn').disabled = true; educModal.style.display='none'; bioBtnClk = true;" class="button" data-name="BIOLOGY">BIOLOGY</button>
          <li><button type="button" onclick="addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('botBtn').disabled = true; educModal.style.display='none';" class="button" data-name="BOTANY">BOTANY</button>
          <li><button type="button" onclick="addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('chemBtn').disabled = true; educModal.style.display='none'; chemBtnClk = true;" class="button" data-name="CHEMISTRY">CHEMISTRY</button>
          <li><button type="button" onclick="addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('histBtn').disabled = true; educModal.style.display='none';" class="button" data-name="HISTORY">HISTORY</button>
          <li><button type="button" onclick="addSkill(this); skillChoice += 1; getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('mycoBtn').disabled = true; educModal.style.display='none';" class="button" data-name="MYCOLOGY">MYCOLOGY</button>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
          <p>&nbsp;</p>
        <ul>
          <li><button type="button" onclick="addSkill(this); skillChoice += 1;  getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('mechBtn').disabled = true; educModal.style.display='none';" class="button" data-name="MECHANICS">MECHANICS</button>
          <li><button type="button" onclick="addSkill(this); skillChoice += 1;  getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('electBtn').disabled = true; educModal.style.display='none';" class="button" data-name="ELECTRONICS">ELECTRONICS</button>
          <li><button type="button" onclick="addSkill(this); skillChoice += 1;  getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('lockBtn').disabled = true; educModal.style.display='none';" class="button" data-name="LOCKPICK">LOCKPICK</button>
          <li><button type="button" onclick="addSkill(this); skillChoice += 1;  getElementById('skillChoice').setAttribute('value', skillChoice);
              getElementById('commSysBtn').disabled = true; educModal.style.display='none';" class="button" data-name="COMM_SYSTEMS">COMM. SYSTEMS</button>
        </ul>
      </div>

      </div>
    </div>
<!--LANGUAGE MODAL-->
    <div id="langModal" class="modal">
      <div>
        <div style="width: 50%; float: left;">
        <p style="font-weight: bold;">PLEASE SELECT A LANGUAGE</p>
        <ul>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="SPANISH_LANG" class="button">SPANISH</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="FRENCH_LANG" class="button">FRENCH</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="ITALIAN_LANG" class="button">ITALIAN</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="GERMAN_LANG" class="button">GERMAN</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="ARABIC_LANG" class="button">ARABIC</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="YIDDISH_LANG" class="button">YIDDISH</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="RUSSIAN_LANG" class="button">RUSSIAN</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="POLISH_LANG" class="button">POLISH</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="US_SIGN_LANG" class="button">US SIGN</button>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
          <p>&nbsp;</p>
        <ul>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="MANDARIN_LANG" class="button">MANDARIN</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="CANTONESE_LANG" class="button">CANTONESE</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="CANTONESE_LANG" class="button">JAPANESE</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="KHMER_LANG" class="button">KHMER</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="VIETNAMESE_LANG" class="button">VIETNAMESE</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="FINNISH_LANG" class="button">FINNISH</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="SWEDISH_LANG" class="button">SWEDISH</button>
          <li><button type="button" onclick="addLang(this); langModal.style.display='none';" data-name="WELSH_LANG" class="button">WELSH</button>
        </ul>
      </div>
    </div>
  </div>  
<!--LITERACY MODAL-->
    <div id="litModal" class="modal">
      <div>
        <div style="width: 50%; float: left;">
        <p style="font-weight: bold;">PLEASE SELECT A LANGUAGE</p>
        <ul>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="SPANISH_LIT" class="button">SPANISH</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="FRENCH_LIT" class="button">FRENCH</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="ITALIAN_LIT" class="button">ITALIAN</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="GERMAN_LIT" class="button">GERMAN</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="ARABIC_LIT" class="button">ARABIC</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="YIDDISH_LIT" class="button">YIDDISH</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="RUSSIAN_LIT" class="button">RUSSIAN</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="POLISH_LIT" class="button">POLISH</button>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
          <p>&nbsp;</p>
        <ul>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="MANDARIN_LIT" class="button">MANDARIN</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="CANTONESE_LIT" class="button">CANTONESE</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="CANTONESE_LIT" class="button">JAPANESE</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="KHMER_LIT" class="button">KHMER</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="VIETNAMESE_LIT" class="button">VIETNAMESE</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="FINNISH_LIT" class="button">FINNISH</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="SWEDISH_LIT" class="button">SWEDISH</button>
          <li><button type="button" onclick="addLit(this); litModal.style.display='none';" data-name="WELSH_LIT" class="button">WELSH</button>
        </ul>
        </div>
      </div>
    </div>

<!--SKILL CHOICES-->
<form style="margin-top: 10px;" id="skillSheet" action="#" method="#">
<table>
  
  <tr>
    <td colspan="8" style="background-color: lightblue; font-weight: bold;">STANDARD SKILLS (ONE SKILL CHOICE)<br>(LIGHT GRAY REPRESENT PRE REQUISITES)</td>
  </tr>

  <tr>
    <td colspan="3">SCIENCE SKILLS</td>
    <td colspan="3">PILOTING SKILLS</td>
    <td colspan="2">SURVIVAL SKILLS</td>
  </tr>
<!--1ST ROW-->
    <tr>
      <td><button type="button" onclick="addSkill(this); this.disabled = true; chemBtn.disabled = false; physicsBtn.disabled = false; " class="button" 
        id="mathBtn" data-name="MATH">MATH</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true; bioBtnClk = true;" class="button" id="bioBtn" data-name="BIOLOGY">
        BIOLOGY</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="botBtn" data-name="BOTANY">BOTANY</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="horseBtn" data-name="HORSEMANSHIP">HORSEMANSHIP</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="cycleBtn" data-name="MOTORCYCLE">MOTORCYCLE</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="autoBtn" data-name="AUTOMOBILE">AUTOMOBILE</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="trapsBtn" data-name="TRAPS">TRAPS</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true; firstAidBtnClk = true;" class="button" id="firstAidBtn" data-name="FIRST_AID">
        FIRST AID</button></td>
    </tr>   
<!--2ND ROW-->
    <tr>
      <td><button type="button" onclick="addSkill(this); this.disabled = true; chemBtnClk = true;" class="button" id="chemBtn" data-name="CHEMISTRY" 
        disabled="true">CHEMISTRY</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="histBtn" data-name="HISTORY" disabled="true">
        HISTORY</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="mycoBtn" data-name="MYCOLOGY">MYCOLOGY</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="boatBtn" data-name="BOATING">BOATING</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="sailBtn" data-name="SAILING">SAILING</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="jetSkiBtn" data-name="JET_SKI">JET SKI</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="trackBtn" data-name="TRACKING">TRACKING</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="pickBtn" data-name="PICKPOCKET">PICKPOCKET</button></td>
    </tr>
<!--3RD ROW-->
    <tr>
      <td style="background-color: lightgray; text-align: center;">MATH</td>
      <td style="background-color: lightgray; text-align: center;">LITERACY</td>
      <td style="background-color: darkgray;"></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="bikeBtn" data-name="BICYCLES">BICYCLES</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="skateBtn" data-name="SKATEBOARD">SKATEBOARD</button></td>
      <td style="background-color: darkgray;"></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="survBtn" data-name="SURVEILLANCE">SURVEILLANCE</button></td>
      <td style="background-color: darkgray;"></td>
    <tr>
<!--4TH ROW-->
    <tr>  
      <td colspan="3">SOCIAL SKILLS</td>
      <td colspan="5">TECHNOLOGY SKILLS</td>
    </tr>
<!--5TH ROW-->
    <tr>
      <td><button type="button" onclick="addSkill(this); this.disabled = true; histBtn.disabled = false; compBtn.disabled = false; lawBtn.disabled = false;
        litBtnClk = true;" class="button" id="litBtn" data-name="LITERACY">LITERACY</button></td>
      <td><button type="button" onclick="addSkill(this); langModal.style.display='block';" class="button" id="forLanBtn" data-name="FOREIGN_LANG">
        FOREIGN LANG</button></td>
      <td><button type="button" onclick="addSkill(this); litModal.style.display='block';" class="button" id="forLitBtn" data-name="FOREIGN_LIT">
        FOREIGN LIT</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="mechBtn" data-name="MECHANICS">MECHANICS</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="electBtn" data-name="ELECTRONICS">ELECTRONICS</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true; encryptBtn.disabled = false; programBtn.disabled = false;" 
        class="button" id="compBtn" data-name="COMPUTERS" disabled="true">COMPUTERS</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="lockBtn" data-name="LOCKPICK">LOCKPICK</button></td>
      <td><button type="button" onclick="addSkill(this); this.disabled = true;" class="button" id="commSysBtn" data-name="COMM_SYSTEMS">COMM. SYSTEMS</button></td>
    </tr>
<!--6TH ROW-->
    <tr>
      <td colspan="5" style="background-color: darkgray;"></td>
      <td style="background-color: lightgray; text-align: center;">LITERACY</td>
      <td colspan="2" style="background-color: darkgray;"></td>
    </tr>
<!--ADVANCED SKILLS-->
<tr>
    <td colspan="8" style="background-color: yellow; font-weight: bold;">ADVANCED SKILLS (TWO SKILL CHOICES)</td>
</tr>

  <tr>
    <td colspan="2">ADV. SCIENCE SKILLS</td>
    <td colspan="2">ADV. MEDICAL SKILLS</td>
    <td colspan="3">ADV. TECHNOLOGY SKILLS</td>
    <td>ADV. SOCIAL SKILLS</td>
  </tr>
<!--ADV SKILLS 1ST ROW-->
    <tr>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" class="button" id="forenBtn" data-name="FORENSICS">FORENSICS</button></td>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" class="button" id="physicsBtn" data-name="PHYSICS" 
        disabled="true">PHYSICS</button>
      </td>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" onmouseover="docReq();" class="button" id="doctorBtn" data-name="DOCTOR" 
        disabled="true">DOCTOR</button></td>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" onmouseover="medReq();" class="button" id="toxicBtn" data-name="TOXICOLOGY" 
        disabled="true">TOXICOLOGY</button></td>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" class="button" id="strEngBtn" data-name="CONSTRUCTION">
        CONSTRUCTION</button></td>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" class="button" id="encryptBtn" data-name="ENCRYPTION" 
        disabled="true">ENCRYPTION</button></td>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" class="button" id="programBtn" data-name="PROGRAMMING"
        disabled="true">PROGRAMMING</button></td>
        <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" class="button" id="lawBtn" data-name="FEDERAL_LAW">FEDERAL LAW
        </button></td>
    </tr>
<!--ADV SKILLS 2ND ROW-->
    <tr>
      <td style="background-color: darkgray;"></td>
      <td style="background-color: lightgray; text-align: center;">MATH</td>
      <td style="background-color: lightgray; text-align: center;">BIOLOGY<br>CHEMISTRY<br>FIRST AID<br>(hover to unlock)</td>
      <td style="background-color: lightgray; text-align: center;">LITERACY<br>CHEMISTRY<br>BIOLOGY<br>(hover to unlock)</td>
      <td style="background-color: darkgray;"></td>
      <td style="background-color: lightgray; text-align: center;">COMPUTERS</td>
      <td style="background-color: lightgray; text-align: center;">COMPUTERS</td>
      <td style="background-color: darkgray;"></td>
    </tr>

    <tr>
      <td colspan="8">ADV. PILOTING SKILLS</td>
    </tr>

    <tr>
      <td style="background-color: darkgray;"></td>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" class="button" id="multiGearBtn" data-name="MULTI_GEARS">MULTI GEARED
      </button></td>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" class="button" id="hvyEquipBtn" data-name="HEAVY_EQUIP">HEAVY EQUIPMENT
      </button></td>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" class="button" id="treadBtn" data-name="TREADED">TREADED VEHICLES
      </button></td>
      <td style="background-color: darkgray;"></td>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" class="button" id="heliBtn" data-name="HELICOPTERS">HELICOPTERS</button></td>
      <td><button type="button" onclick="addAdvSkill(this); this.disabled = true;" class="button" id="planesBtn" data-name="PLANES">AIRPLANES</button></td>
      <td style="background-color: darkgray;"></td>
    </tr>

</div>
</div>
</body>
</html>