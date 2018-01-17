function roll(min, max){
	return Math.round(Math.random() * (max - min)) + min;
} 

function checkAge(){
    var age = parseInt(document.getElementById('age').value);
      if(isNaN(age)){
        alert('Not a number'); 
        document.getElementById('age').value = "";
      }
     } 

//TRAITS
var Mem = Number(sessionStorage.getItem('MEM'));
var Log = Number(sessionStorage.getItem('LOG'));
var Per = Number(sessionStorage.getItem('PER'));
var Will = Number(sessionStorage.getItem('WILL'));
var Cha = Number(sessionStorage.getItem('CHA'));

var Str = Number(sessionStorage.getItem('STR'));
var End = Number(sessionStorage.getItem('END'));
var Dex = Number(sessionStorage.getItem('DEX'));
var Spd = Number(sessionStorage.getItem('SPD'));
var Bty = Number(sessionStorage.getItem('BTY'));

//COMBAT STATS
var seq = 	Math.floor((Per + Spd) / 2);
var act = 	Math.floor(Spd / 2);
var block = Math.floor((Dex + Spd) / 2);

function trainblock(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    block += roll(1,10);
    if (block < 50){
    document.getElementById("block").setAttribute('value', block);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    block = 50;
    document.getElementById("block").setAttribute('value', block);
    document.getElementById('blockTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
var dodge = Math.floor((Dex + Spd) / 4);
function traindodge(){
    if (skillChoice > 1){
      do {
    skillChoice -= 2;
    dodge += roll(1,10);
    if (dodge < 50){
    document.getElementById("dodge").setAttribute('value', dodge);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    dodge = 50;
    document.getElementById("dodge").setAttribute('value', dodge);
    document.getElementById('dodgeTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
//UNIVERSAL SKILLS
var stealth = 	(Per * 3) + Dex;
function trainstealth(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    stealth += roll(3,30);
    if (stealth < 150){
    document.getElementById("stealth").setAttribute('value', stealth);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    stealth = 150;
    document.getElementById("stealth").setAttribute('value', stealth);
    document.getElementById('stealthTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
var craft = 	(Log * 2) + Dex + Mem;
function traincraft(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    craft += roll(3,30);
    if (craft < 150){
    document.getElementById("craft").setAttribute('value', craft);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    craft = 150;
    document.getElementById("craft").setAttribute('value', craft);
    document.getElementById('craftTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
var negot = 	Cha * 4;
function trainnegot(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    negot += roll(3,30);
    if (negot < 150){
    document.getElementById("negot").setAttribute('value', negot);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    negot = 150;
    document.getElementById("negot").setAttribute('value', negot);
    document.getElementById('negotTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
var climb = 	(Dex * 3) + Str;
function trainclimb(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    climb += roll(3,30);
    if (climb < 150){
    document.getElementById("climb").setAttribute('value', climb);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    climb = 150;
    document.getElementById("climb").setAttribute('value', climb);
    document.getElementById('climbTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
var survival = 	(Per * 2) + Log + Mem;
function trainsurvival(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    survival += roll(3,30);
    if (survival < 150){
    document.getElementById("survival").setAttribute('value', survival);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    survival = 150;
    document.getElementById("survival").setAttribute('value', survival);
    document.getElementById('survivalTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
var navig = 	(Log * 2) + Per + Mem;
function trainnavig(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    navig += roll(3,30);
    if (navig < 150){
    document.getElementById("navig").setAttribute('value', navig);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    navig = 150;
    document.getElementById("navig").setAttribute('value', navig);
    document.getElementById('navigTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
//MELEE
var unarm = 	(Spd * 3) + (Str * 2) + Dex;
function trainunarm(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    unarm += roll(3,30);
    if (unarm < 150){
    document.getElementById("unarm").setAttribute('value', unarm);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    unarm = 150;
    document.getElementById("unarm").setAttribute('value', unarm);
    document.getElementById('unarmTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modunarm(){
    unarm += roll(3,30);
    document.getElementById("unarm").setAttribute('value', unarm);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var grap = 		(Str * 2) + End + Dex + Spd;
function traingrap(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    grap += roll(3,30);
    if (grap < 150){
    document.getElementById("grap").setAttribute('value', grap);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    grap = 150;
    document.getElementById("grap").setAttribute('value', grap);
    document.getElementById('grapTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modgrap(){
    grap += roll(3,30);
    document.getElementById("grap").setAttribute('value', grap);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}

var off = 0 - ((20 - Dex) * 3);
function trainoff(){
    if (skillChoice > 1){
      do {
        skillChoice -= 2;
        off += roll(1,10);
        if (off < 0){
        document.getElementById("off").setAttribute('value', off);
        document.getElementById("skillChoice").setAttribute('value', skillChoice);
        break;   
        } else {
        off = 0;
        document.getElementById("off").setAttribute('value', off);
        document.getElementById('offTrnBtn').disabled = true;
        document.getElementById("skillChoice").setAttribute('value', skillChoice);
        break;    
       }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modoff(){
    off += roll(2,20);
    document.getElementById("off").setAttribute('value', off);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var shortW = 	(Spd * 3) + Dex + Str;
function trainshortW(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    shortW += roll(3,30);
    if (shortW < 150){
    document.getElementById("shortW").setAttribute('value', shortW);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    shortW = 150;
    document.getElementById("shortW").setAttribute('value', shortW);
    document.getElementById('shortWTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modshortW(){
    shortW += roll(3,30);
    document.getElementById("shortW").setAttribute('value', shortW);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var longW = 	(Spd * 2) + (Dex * 2) + Str;
function trainlongW(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    longW += roll(3,30);
    if (longW < 150){
    document.getElementById("longW").setAttribute('value', longW);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    longW = 150;
    document.getElementById("longW").setAttribute('value', longW);
    document.getElementById('longWTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modlongW(){
    longW += roll(3,30);
    document.getElementById("longW").setAttribute('value', longW);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var twoH = 		(Dex * 2) + (Str * 2) + Spd;
function traintwoH(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    twoH += roll(3,30);
    if (twoH < 150){
    document.getElementById("twoH").setAttribute('value', twoH);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    twoH = 150;
    document.getElementById("twoH").setAttribute('value', twoH);
    document.getElementById('twoHTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modtwoH(){
    twoH += roll(3,30);
    document.getElementById("twoH").setAttribute('value', twoH);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var chain = 	(Dex * 3) + Spd + Log;
function trainchain(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    chain += roll(3,30);
    if (chain < 150){
    document.getElementById("chain").setAttribute('value', chain);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    chain = 150;
    document.getElementById("chain").setAttribute('value', chain);
    document.getElementById('chainTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modchain(){
    chain += roll(3,30);
    document.getElementById("chain").setAttribute('value', chain);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
//RANGED
var thrown = 	(Str * 2) + (Dex * 2) + Log;
function trainthrown(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    thrown += roll(3,30);
    if (thrown < 150){
    document.getElementById("thrown").setAttribute('value', thrown);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    thrown = 150;
    document.getElementById("thrown").setAttribute('value', thrown);
    document.getElementById('thrownTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modthrown(){
    thrown += roll(3,30);
    document.getElementById("thrown").setAttribute('value', thrown);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var arch = 		(Dex * 2) + (Log * 2) + Per;
function trainarch(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    arch += roll(3,30);
    if (arch < 150){
    document.getElementById("arch").setAttribute('value', arch);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    arch = 150;
    document.getElementById("arch").setAttribute('value', arch);
    document.getElementById('archTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modarch(){
    arch += roll(3,30);
    document.getElementById("arch").setAttribute('value', arch);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var oneHguns = 	(Dex * 3) + Per + Log;
function trainoneHguns(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    oneHguns += roll(3,30);
    if (oneHguns < 150){
    document.getElementById("oneHguns").setAttribute('value', oneHguns);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    oneHguns = 150;
    document.getElementById("oneHguns").setAttribute('value', oneHguns);
    document.getElementById('oneHgunsTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modoneHguns(){
    oneHguns += roll(3,30);
    document.getElementById("oneHguns").setAttribute('value', oneHguns);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var twoHguns = 	(Dex * 2) + (Per *2) + Log;
function traintwoHguns(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    twoHguns += roll(3,30);
    if (twoHguns < 150){
    document.getElementById("twoHguns").setAttribute('value', twoHguns);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    twoHguns = 150;
    document.getElementById("twoHguns").setAttribute('value', twoHguns);
    document.getElementById('twoHgunsTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modtwoHguns(){
    twoHguns += roll(3,30);
    document.getElementById("twoHguns").setAttribute('value', twoHguns);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var burst = 	(Log * 2) + Per + Dex + Str;
function trainburst(){
    if (skillChoice > 1){
      do {
    skillChoice -= 2;
    burst +=  roll(2,20);
    if (burst < 150){
    document.getElementById("burst").setAttribute('value', burst);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    burst = 150;
    document.getElementById("burst").setAttribute('value', burst);
    document.getElementById('burstTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modburst(){
    burst +=  roll(2,20);
    document.getElementById("burst").setAttribute('value', burst);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var special = 	(Per * 2) + (Log * 2) + Dex;
function trainspecial(){
    if (skillChoice > 1){
      do {
    skillChoice -= 2;
    special += roll(2,20);
    if (special < 150){
    document.getElementById("special").setAttribute('value', special);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    special = 150;
    document.getElementById("special").setAttribute('value', special);
    document.getElementById('specialTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modspecial(){
    special += roll(2,20);
    document.getElementById("special").setAttribute('value', special);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var wsys = 		(Per * 2) + (Log * 2) + Spd;
function trainwsys(){
    if (skillChoice > 1){
      do {
    skillChoice -= 2;
    wsys += roll(2,20);
    if (wsys < 150){
    document.getElementById("wsys").setAttribute('value', wsys);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    wsys = 150;
    document.getElementById("wsys").setAttribute('value', wsys);
    document.getElementById('wsysTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modwsys(){
    wsys += roll(2,20);
    document.getElementById("wsys").setAttribute('value', wsys);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}

var modChoice = 0;
var skillChoice = Will + roll(1,10);
var background = sessionStorage.getItem('background');

window.onload = function skills(){
//EDUCATED
        if (background === "EDUCATED"){
        do {
        document.getElementById("skill" + n).setAttribute("value", "LITERACY");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
        document.getElementById("litBtn").disabled = true;
        histBtn.disabled = false; 
        compBtn.disabled = false; 
        lawBtn.disabled = false;
        litBtnClk = true;
        n += 1;
        document.getElementById("skill" + n).setAttribute("value", "MATH");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
        document.getElementById("mathBtn").disabled = true;
        chemBtn.disabled = false; 
        physicsBtn.disabled = false;
        n += 1;
        document.getElementById("skill" + n).setAttribute("value", "COMPUTERS");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("COMPUTERS"));
        document.getElementById("compBtn").disabled = true;
        encryptBtn.disabled = false; 
        programBtn.disabled = false;
        n += 1;
        var modal = document.getElementById('educModal');
        modal.style.display = "block";
        skillChoice = skillChoice + roll(1,10);    
        break;
        } while (1 == 1);

//DOCTOR
        } else if (background === "DOCTOR"){
        do {
        document.getElementById("skill" + n).setAttribute("value", "LITERACY");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
        document.getElementById("litBtn").disabled = true;
        histBtn.disabled = false; 
        compBtn.disabled = false; 
        lawBtn.disabled = false;
        n += 1;
        document.getElementById("skill" + n).setAttribute("value", "BIOLOGY");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("BIOLOGY"));
        document.getElementById("bioBtn").disabled = true;
        n += 1;
        document.getElementById("skill" + n).setAttribute("value", "FIRST_AID");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("FIRST_AID"));
        document.getElementById("firstAidBtn").disabled = true;
        n += 1;
        document.getElementById("advSkill" + an).setAttribute("value", "DOCTOR");
        document.getElementById("advSkillRate" + an).setAttribute("value", advSkillMap.get("DOCTOR"));
        document.getElementById("doctorBtn").disabled = true;
        an += 1;
        break;
        } while (1 == 1);

//MECHANIC
        } else if (background === "MECHANIC"){
        do {
        document.getElementById("skill" + n).setAttribute("value", "LITERACY"); 
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
        document.getElementById("litBtn").disabled = true;
        histBtn.disabled = false; 
        compBtn.disabled = false; 
        lawBtn.disabled = false;
        litBtnClk = true;
        n += 1;
        document.getElementById("skill" + n).setAttribute("value", "MATH");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
        document.getElementById("mathBtn").disabled = true;
        chemBtn.disabled = false; 
        physicsBtn.disabled = false; 
        n += 1;
        document.getElementById("skill" + n).setAttribute("value", "MECHANICS");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MECHANICS"));
        document.getElementById("mechBtn").disabled = true;
        n += 1;
        craft += roll(3,30);
        var modal = document.getElementById('mechModal');
        modal.style.display = "block";
        break;
        } while (1 == 1);

//TRADER
        } else if (background === "TRADER"){
        do {
        document.getElementById("skill" + n).setAttribute("value", "LITERACY"); 
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
        document.getElementById("litBtn").disabled = true;
        histBtn.disabled = false; 
        compBtn.disabled = false; 
        lawBtn.disabled = false;
        litBtnClk = true;
        n += 1;
        document.getElementById("skill" + n).setAttribute("value", "MATH");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
        document.getElementById("mathBtn").disabled = true;
        chemBtn.disabled = false; 
        physicsBtn.disabled = false; 
        n += 1;
        negot += roll(3,30);
        var modal = document.getElementById('tradeModal');
        modal.style.display = "block";
        break;
        } while (1 == 1);

//OUTDOORSMAN
        } else if (background === "OUTDOORSMAN"){
        do {
        document.getElementById("skill" + n).setAttribute("value", "TRAPS");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("TRAPS"));
        document.getElementById("trapsBtn").disabled = true;
        n += 1;
        document.getElementById("skill" + n).setAttribute("value", "TRACKING");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("TRACKING"));
        document.getElementById("trackBtn").disabled = true;
        n += 1;
        stealth += roll(3,30);
        survival += roll(3,30);
        navig += roll(3,30);
        var modal = document.getElementById('outModal');
        modal.style.display = "block";
        break;
        } while (1 == 1);

//SOLDIER
        } else if (background === "SOLDIER"){
        do {
        document.getElementById("skill" + n).setAttribute("value", "SURVEILLANCE");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("SURVEILLANCE"));
        document.getElementById("survBtn").disabled = true;
        n += 1;
        stealth += roll(3,30);
        survival += roll(3,30);
        navig += roll(3,30);
        var modal = document.getElementById('soldModal');
        modal.style.display = "block";
        break;
        } while (1 == 1);

//GANGSTER
        } else if (background === "GANGSTER"){
        do {
        negot += roll(3,30);
        var modal = document.getElementById('gangModal');
        modal.style.display = "block";
        break;
        } while (1 == 1);

//LABORER
        } else if (background === "LABORER"){
        do {
        document.getElementById("skill" + n).setAttribute("value", "MATH");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
        document.getElementById("mathBtn").disabled = true;
        chemBtn.disabled = false; 
        physicsBtn.disabled = false; 
        n += 1;
        document.getElementById("advSkill" + an).setAttribute("value", "CONSTRUCTION");
        document.getElementById("advSkillRate" + an).setAttribute("value", advSkillMap.get("CONSTRUCTION"));
        document.getElementById("constBtn").disabled = true;
        an += 1;
        craft += roll(6,60);
        break;
        } while (1 == 1);   

//FARMER
        } else if (background === "FARMER"){
        do {   
        document.getElementById("skill" + n).setAttribute("value", "BOTANY");
        document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("BOTANY") + roll(3,30));
        document.getElementById("botBtn").disabled = true;
        n += 1;
        survival += roll(3,30);
        craft += roll(3,30);
        var modal = document.getElementById('farmModal');
        modal.style.display = "block";
        break;
        } while (1 == 1);

//SCAVENGER
        } else if (background === "SCAVENGER"){
        do {
        skillChoice = skillChoice + roll(1,10); 
        break;
        } while (1 == 1);
    }
}

    var clicks = 1;
function tradeModal(){
if (clicks >= 3){
    var modal = document.getElementById('tradeModal');
    modal.style.display = "none";
} else {
    do {
        clicks += 1;
        break;
    } while (1 == 1);
    
    }
}

function soldModal(){
if (clicks >= 3){
    var modal = document.getElementById('soldModal');
    modal.style.display = "none";
} else {
    do {
        clicks += 1;
        break;
    } while (1 == 1);
    
    }
}

function gangModal(){
if (clicks >= 2){
    var modal = document.getElementById('gangModal');
    modal.style.display = "none";
} else {
    do {
        clicks += 1;
        break;
    } while (1 == 1);
    
    }
}

var hold = false;
var n = 1;
var an = 1;
//-------------------------------------STANDARD SKILLS
var skills = [
//SCIENCE
["MATH", (Mem * 3) + (Log * 2)],
['BIOLOGY' , (Mem * 2) + (Log * 2)],
['BOTANY' , (Mem * 2) + (Log * 2)],
['CHEMISTRY' , (Mem * 3) + Log],
['HISTORY' , Mem * 4],
['MYCOLOGY' , (Mem * 3) + Log],

//TECHNOLOGY
['MECHANICS' , Log * 4],
['ELECTRONICS' , (Mem * 2) + (Log * 2)],
['COMPUTERS' , (Mem * 2) + (Log * 2)],
['LOCKPICK' , (Dex * 2) + Log + Per],
['COMM_SYSTEMS' , (Mem * 3) + Log],

//SURVIVAL
['TRAPS' , (Per * 2) + (Log * 2)],
['TRACKING' , (Per * 3) + Log],
['PICKPOCKET' , (Dex * 2) + Per],
['FIRST_AID' , (Mem * 2) + (Log * 2)],
['SURVEILLANCE', (Per *3) + Log],

//PILOTING
['HORSEMANSHIP' , (Dex * 2) + Log + Per],
['MOTORCYCLE' , (Dex * 2) + Log + Per],
['AUTOMOBILE' , (Log * 2) + Spd + Per],
['BOATING' , (Log * 2) + Spd + Per],
['SAILING' , (Log * 2) + (Per * 2)],
['JET_SKI' , (Dex * 2) + Log + Per],
['BICYCLES' , (Dex * 2) + Log + Per],
['SKATEBOARD' , (Dex * 3) + Per],

//SOCIAL
['LITERACY' , (Mem * 4) + (Log * 2)],
['FOREIGN_LANG' , (Mem * 2) + (Log * 2)],
['FOREIGN_LIT' , (Mem * 3) + (Log * 2)],
];

var skillMap = new Map(skills);
function addSkill(skill){
	var dataset = skill.dataset;
	  if (skillChoice > 0 && hold == false){
	  do {
    	document.getElementById("skill" + n).setAttribute("value", dataset.name);
    	document.getElementById("skillRate" + n).setAttribute("value", Number(skillMap.get(dataset.name)));
    	document.getElementById("skillChoice").setAttribute("value", skillChoice -= 1);
    	this.disabled = true;
        n ++;
    	break;
  } while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

//-------------------------------------ADVANCED SKILLS
var advSkills = [
//SCIENCE
['FORENSICS' , (Log * 2) + (Per * 2)],
['PHYSICS' , (Mem * 3) + Log],

//TECHNOLOGY
['CONSTRUCTION' , (Log * 3) + Mem],
['ENCRYPTION' , (Mem * 3)],
['PROGRAMMING' , (Log * 3) + Mem],

//MEDICAL
['DOCTOR' , (Mem * 3) + Log],
['TOXICOLOGY' , (Mem * 3) + Log],

//PILOT
['MULTI_GEARS' , (Log * 3) + Per],
['HEAVY_EQUIP' , (Log * 3) + Per],
['TREADED' , (Log * 3) + Per],
['HELICOPTERS' , (Per * 2) + (Log * 2)],
['PLANES' , (Per * 2) + (Log * 2)],

//SOCIAL
['FEDERAL_LAW' , Mem * 4],
];

var advSkillMap = new Map(advSkills);
function addAdvSkill(skill){
	var dataset = skill.dataset;
	   if (skillChoice > 1 && hold == false){
	   do {
    	document.getElementById("advSkill" + an).setAttribute("value", dataset.name);
    	document.getElementById("advSkillRate" + an).setAttribute("value", Number(advSkillMap.get(dataset.name)));
    	document.getElementById("skillChoice").setAttribute("value", skillChoice -= 2);
    	this.disabled = true;
        an ++;
    	break;
  } while (skillChoice > 1);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

function addLang(skill){
if (skillChoice > 0){
    var dataset = skill.dataset;
      do {
        n--;
        document.getElementById("skill" + n).setAttribute("value", dataset.name);
        n ++;
        break;
  } while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

function addLit(skill){
if (skillChoice > 0){
    var dataset = skill.dataset;
      do {
        n--;
        document.getElementById("skill" + n).setAttribute("value", dataset.name);
        n ++;
        break;
  } while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

//PREREQS
var litBtnClk = false;
var bioBtnClk = false;
var chemBtnClk = false;
var firstAidBtnClk = false;

function docReq(){
    if (bioBtnClk == true && chemBtnClk == true && firstAidBtnClk == true){
        document.getElementById("doctorBtn").disabled = false;
    } else {
         return;
         }
    }  
    
function medReq(){
    if (bioBtnClk == true && chemBtnClk == true && litBtnClk == true){
        document.getElementById("toxicBtn").disabled = false;
    } else {
         return;
         }
    }  

