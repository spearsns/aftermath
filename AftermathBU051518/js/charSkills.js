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
var seq = 	            Math.floor((Per + Spd) / 2);
var act = 	            Math.floor(Spd / 2);
var block =             Math.floor((Dex + Spd) / 2);
var dodge =             Math.floor((Dex + Spd) / 4);
var gambling =          Log + Per;

//SURVIVAL SKILLS
var ENVAWARE =          (Per * 2) + Log + Mem;
var FIRSTAID =          (Mem * 2) + (Log * 2);
var NAVIG =             (Log * 2) + Per + Mem;
var TRAPPING =          (Per * 2) + (Log * 2) + roll(1,10);
var TRACKING =          (Per * 3) + Log + roll(1,10);
var FISHING =           (Will * 2) + Per + Log + roll(1,10); 

//ESPIONAGE
var STEALTH =           (Per * 3) + Dex;
var SURVEILLANCE =      (Per * 3) + Log;
var PICKPOCKET =        (Dex * 2) + Per;
var LOCKPICK =          (Dex * 2) + Log + Per;

//TECHNOLOGY
var CRAFTING =          (Log * 2) + Dex + Mem;
var COMPUTERS =         (Mem * 2) + (Log * 2) + roll(1,10);
var MECHANICS =         Log * 4 + roll(1,10);
var ELECTRICAL =        (Mem * 2) + (Log * 2) + roll(1,10);
var RADIOS =            (Mem * 3) + Log + roll(1,10);

//TRANSPORTATION
var BICYCLE =          (Dex * 2) + Log + Per + roll(1,10);
var SKATEBOARD =        (Dex * 3) + Per + roll(1,10);
var HORSEMANSHIP =      (Dex * 2) + Log + Per + roll(1,10);
var AUTOMOBILE =        (Log * 2) + Spd + Per + roll(1,10);
var MOTORCYCLE =        (Dex * 2) + Log + Per + roll(1,10);
var JET_SKI =           (Dex * 2) + Log + Per + roll(1,10);
var BOATING =           (Log * 2) + Spd + Per + roll(1,10);
var SAILING =           (Log * 2) + (Per * 2) + roll(1,10);

//SOL COMPARISON
var LITERACY =          (Mem * 4) + (Log * 2) + roll(1,10);
var MATH =              (Mem * 3) + (Log * 2) + roll(1,10);
var HISTORY =           Mem * 4 + roll(1,10);
var BIOLOGY =           (Mem * 2) + (Log * 2) + roll(1,10);
var BOTANY =            (Mem * 2) + (Log * 2) + roll(1,10);
var CHEMISTRY =         (Mem * 3) + Log + roll(1,10);

//ADVANCED
var FORENSICS =         (Log * 2) + (Per * 2);
var PHYSICS =           (Mem * 3) + Log;
var CONSTRUCTION =      (Log * 3) + Mem + roll(1,10);
var PROGRAMMING =       (Log * 3) + Mem + roll(1,10);
var HELICOPTERS =       (Per * 2) + (Log * 2) + roll(1,10);
var AIRPLANES =         (Per * 2) + (Log * 2) + roll(1,10);
var MULTI_GEARS =       (Log * 3) + Per + roll(1,10);
var HEAVY_EQUIP =       (Log * 3) + Per + roll(1,10);
var MYCOLOGY =          (Mem * 3) + Log + roll(1,10);
var TOXICOLOGY =        (Mem * 3) + Log + roll(1,10);
var PHARMACOLOGY =      Mem * 4 + roll(1,10);
var DOCTOR =            (Mem * 3) + Log;

//SOFT SKILLS
var NEGOT =             Cha * 4;
var LAW =               Mem * 4;
var FOREIGN_LANG =      (Mem * 2) + (Log * 2);
var FOREIGN_LIT =       (Mem * 3) + (Log * 2)

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

function trainstealth(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    STEALTH += roll(2,20);
    if (STEALTH < 150){
    document.getElementById("stealth").setAttribute('value', STEALTH);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    STEALTH = 150;
    document.getElementById("stealth").setAttribute('value', STEALTH);
    document.getElementById('stealthTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

function traincraft(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    CRAFTING += roll(2,20);
    if (CRAFTING < 150){
    document.getElementById("crafting").setAttribute('value', CRAFTING);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    CRAFTING = 150;
    document.getElementById("crafting").setAttribute('value', CRAFTING);
    document.getElementById('craftTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

function trainnegot(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    NEGOT += roll(2,20);
    if (NEGOT < 150){
    document.getElementById("negotiation").setAttribute('value', NEGOT);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    NEGOT = 150;
    document.getElementById("negotiation").setAttribute('value', NEGOT);
    document.getElementById('negotTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

function trainFirstAid(){
    if (skillChoice > 1){
      do {
    skillChoice -= 2;
    FIRSTAID += roll(2,20);
    if (FIRSTAID < 150){
    document.getElementById("firstAid").setAttribute('value', FIRSTAID);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
        if (FIRSTAID >= 75 && document.getElementById('bioTrnBtn').disabled == true){
        document.getElementById("doctorTrnBtn").disabled = false;
        }
    break;
    } else {
    FIRSTAID = 150;
    document.getElementById("firstAid").setAttribute('value', FIRSTAID);
    document.getElementById('firstAidTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

function trainEnvAware(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    ENVAWARE += roll(2,20);
    if (ENVAWARE < 150){
    document.getElementById("envAware").setAttribute('value', ENVAWARE);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    ENVAWARE = 150;
    document.getElementById("envAware").setAttribute('value', ENVAWARE);
    document.getElementById('envAwareTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

function trainnavig(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    NAVIG += roll(2,20);
    if (NAVIG < 150){
    document.getElementById("navigation").setAttribute('value', NAVIG);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    NAVIG = 150;
    document.getElementById("navigation").setAttribute('value', NAVIG);
    document.getElementById('navigTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

function trainLiteracy(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    LITERACY += roll(2,20);
    if (LITERACY < 150){
    document.getElementById("literacy").setAttribute('value', LITERACY);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    LITERACY = 150;
    document.getElementById("literacy").setAttribute('value', LITERACY);
    document.getElementById('litTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

function trainMath(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    MATH += roll(2,20);
    if (MATH < 150){
    document.getElementById("math").setAttribute('value', MATH);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    MATH = 150;
    document.getElementById("math").setAttribute('value', MATH);
    document.getElementById('mathTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

function trainHistory(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    HISTORY += roll(2,20);
    if (HISTORY < 150){
    document.getElementById("history").setAttribute('value', HISTORY);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    HISTORY = 150;
    document.getElementById("history").setAttribute('value', HISTORY);
    document.getElementById('historyTrnBtn').disabled = true;
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
    unarm += roll(2,20);
    if (unarm < 150){
    document.getElementById("unarmed").setAttribute('value', unarm);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    unarm = 150;
    document.getElementById("unarmed").setAttribute('value', unarm);
    document.getElementById('unarmTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modunarm(){
    unarm += roll(2,20);
    modChoice += 1;
    document.getElementById("unarmed").setAttribute('value', unarm);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}

var grap = 		(Str * 2) + End + Dex + Spd;
function traingrap(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    grap += roll(2,20);
    if (grap < 150){
    document.getElementById("grappling").setAttribute('value', grap);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    grap = 150;
    document.getElementById("grappling").setAttribute('value', grap);
    document.getElementById('grapTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modgrap(){
    grap += roll(2,20);
    modChoice += 1;
    document.getElementById("grappling").setAttribute('value', grap);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}

var off = 0 - ((20 - Dex) * 5);
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
    modChoice += 1;
    document.getElementById("off").setAttribute('value', off);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var shortW = 	(Spd * 3) + Dex + Str;
function trainshortW(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    shortW += roll(2,20);
    if (shortW < 150){
    document.getElementById("short").setAttribute('value', shortW);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    shortW = 150;
    document.getElementById("short").setAttribute('value', shortW);
    document.getElementById('shortwTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modshortW(){
    shortW += roll(2,20);
    modChoice += 1;
    document.getElementById("short").setAttribute('value', shortW);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var longW = 	(Spd * 2) + (Dex * 2) + Str;
function trainlongW(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    longW += roll(2,20);
    if (longW < 150){
    document.getElementById("long").setAttribute('value', longW);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    longW = 150;
    document.getElementById("long").setAttribute('value', longW);
    document.getElementById('longWTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modlongW(){
    longW += roll(2,20);
    modChoice += 1;
    document.getElementById("long").setAttribute('value', longW);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var twoH = 		(Dex * 2) + (Str * 2) + Spd;
function traintwoH(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    twoH += roll(2,20);
    if (twoH < 150){
    document.getElementById("THM").setAttribute('value', twoH);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    twoH = 150;
    document.getElementById("THM").setAttribute('value', twoH);
    document.getElementById('twoHTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modtwoH(){
    twoH += roll(2,20);
    modChoice += 1;
    document.getElementById("THM").setAttribute('value', twoH);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var chain = 	(Dex * 3) + Spd + Log;
function trainchain(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    chain += roll(2,20);
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
    chain += roll(2,20);
    modChoice += 1;
    document.getElementById("chain").setAttribute('value', chain);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
//RANGED
var thrown = 	(Str * 2) + (Dex * 2) + Log;
function trainthrown(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    thrown += roll(2,20);
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
    thrown += roll(2,20);
    modChoice += 1;
    document.getElementById("thrown").setAttribute('value', thrown);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var arch = 		(Dex * 2) + (Log * 2) + Per;
function trainarch(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    arch += roll(2,20);
    if (arch < 150){
    document.getElementById("archery").setAttribute('value', arch);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    arch = 150;
    document.getElementById("archery").setAttribute('value', arch);
    document.getElementById('archTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modarch(){
    arch += roll(2,20);
    modChoice += 1;
    document.getElementById("archery").setAttribute('value', arch);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var pistols = 	(Dex * 3) + Per + Log;
function trainpistols(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    pistols += roll(2,20);
    if (pistols < 150){
    document.getElementById("pistols").setAttribute('value', pistols);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    pistols = 150;
    document.getElementById("pistols").setAttribute('value', pistols);
    document.getElementById('oneHgunsTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modpistols(){
    pistols += roll(2,20);
    modChoice += 1;
    document.getElementById("pistols").setAttribute('value', pistols);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
var rifles = 	(Dex * 2) + (Per *2) + Log;
function trainrifles(){
    if (skillChoice > 0){
      do {
    skillChoice -= 1;
    rifles += roll(2,20);
    if (rifles < 150){
    document.getElementById("rifles").setAttribute('value', rifles);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    rifles = 150;
    document.getElementById("rifles").setAttribute('value', rifles);
    document.getElementById('riflesTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modrifles(){
    rifles += roll(2,20);
    modChoice += 1;
    document.getElementById("rifles").setAttribute('value', rifles);
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
    modChoice += 1;
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
    modChoice += 1;
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
    document.getElementById("weaponSys").setAttribute('value', wsys);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    } else {
    wsys = 150;
    document.getElementById("weaponSys").setAttribute('value', wsys);
    document.getElementById('wsysTrnBtn').disabled = true;
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
    break;
    }
} while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}
function modwsys(){
    wsys += roll(2,20);
    modChoice += 1;
    document.getElementById("weaponSys").setAttribute('value', wsys);
    document.getElementById("skillChoice").setAttribute('value', skillChoice);
}
function trainTrack(){
    if(skillChoice >= 1){
        document.getElementById('tracking').setAttribute('value', TRACKING); 
        document.getElementById('trackTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainTrap(){
    if(skillChoice >= 1){
        document.getElementById('trapping').setAttribute('value', TRAPPING); 
        document.getElementById('trapTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainFish(){
    if(skillChoice >= 1){
        document.getElementById('fishing').setAttribute('value', FISHING); 
        document.getElementById('fishTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainSkate(){
    if(skillChoice >= 1){
        document.getElementById('skateboard').setAttribute('value', SKATEBOARD); 
        document.getElementById('skateTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainBicycle(){
    if(skillChoice >= 1){
        document.getElementById('bicycle').setAttribute('value', BICYCLE); 
        document.getElementById('bicycleTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainHorse(){
    if(skillChoice >= 1){
        document.getElementById('horsemanship').setAttribute('value', HORSEMANSHIP); 
        document.getElementById('horseTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainAuto(){
    if(skillChoice >= 1){
        document.getElementById('automobile').setAttribute('value', AUTOMOBILE); 
        document.getElementById('autoTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainMotorcycle(){
    if(skillChoice >= 1){
        document.getElementById('motorcycle').setAttribute('value', MOTORCYCLE); 
        document.getElementById('motorcycleTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainJetSki(){
    if(skillChoice >= 1){
        document.getElementById('jetSki').setAttribute('value', JET_SKI); 
        document.getElementById('jetSkiTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainSurvey(){
    if(skillChoice >= 1){
        document.getElementById('surveillance').setAttribute('value', SURVEILLANCE); 
        document.getElementById('survTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainForen(){
    if (skillChoice > 1){
        document.getElementById('forensics').setAttribute('value', FORENSICS); 
        document.getElementById('forensicsTrnBtn').disabled = true; 
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainSail(){
    if(skillChoice >= 1){
        document.getElementById('sailing').setAttribute('value', SAILING); 
        document.getElementById('sailTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainBoat(){
    if(skillChoice >= 1){
        document.getElementById('boating').setAttribute('value', BOATING); 
        document.getElementById('boatTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainPick(){
    if(skillChoice >= 1){
        document.getElementById('pickpocket').setAttribute('value', PICKPOCKET); 
        document.getElementById('pickTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}    
}
function trainLock(){
    if(skillChoice >= 1){
        document.getElementById('lockpick').setAttribute('value', LOCKPICK); 
        document.getElementById('lockTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}    
}
function trainMGV(){
    if (skillChoice > 1){
        document.getElementById('MGV').setAttribute('value', MULTI_GEARS); 
        document.getElementById('MGVTrnBtn').disabled = true; 
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainHvyEquip(){
    if (skillChoice > 1){
        document.getElementById('hvyEquip').setAttribute('value', HEAVY_EQUIP); 
        document.getElementById('hvyEquipTrnBtn').disabled = true;
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainHeli(){
    if (skillChoice > 1){
        document.getElementById('helicopters').setAttribute('value', HELICOPTERS); 
        document.getElementById('heliTrnBtn').disabled = true; 
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainPlane(){
    if (skillChoice > 1){
        document.getElementById('airplanes').setAttribute('value', AIRPLANES); 
        document.getElementById('planeTrnBtn').disabled = true; 
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainComp(){
    if(skillChoice >= 1){
        document.getElementById('computers').setAttribute('value', COMPUTERS); 
        document.getElementById('compTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice); 
        document.getElementById('programTrnBtn').disabled = false;
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainProgram(){
    if (skillChoice > 1){
        document.getElementById('programming').setAttribute('value', PROGRAMMING); 
        document.getElementById('programTrnBtn').disabled = true; 
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainMech(){
    if(skillChoice >= 1){
        document.getElementById('mechanics').setAttribute('value', MECHANICS); 
        document.getElementById('mechTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else {alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainPhysics(){
    if (skillChoice > 1){
        document.getElementById('physics').setAttribute('value', PHYSICS); 
        document.getElementById('physicsTrnBtn').disabled = true; 
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainBio(){
    if(skillChoice >= 1){
        document.getElementById('biology').setAttribute('value', BIOLOGY); 
        document.getElementById('bioTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice); 
            if(document.getElementById('chemTrnBtn').disabled == true){
                document.getElementById('pharmaTrnBtn').disabled = false; 
                document.getElementById('toxicTrnBtn').disabled = false;
            } 
            if(document.getElementById('firstAid').value >= 75){
                document.getElementById('doctorTrnBtn').disabled = false;
            }
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainBot(){
    if(skillChoice >= 1){
        document.getElementById('botany').setAttribute('value', BOTANY); 
        document.getElementById('botTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainLaw(){
    if (skillChoice > 1){
        document.getElementById('law').setAttribute('value', LAW); 
        document.getElementById('lawTrnBtn').disabled = true; 
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainChem(){
    if(skillChoice >= 1){
        document.getElementById('chemistry').setAttribute('value', CHEMISTRY); 
        document.getElementById('chemTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice); 
            if(document.getElementById('bioTrnBtn').disabled == true){
                    document.getElementById('pharmaTrnBtn').disabled = false; 
                    document.getElementById('toxicTrnBtn').disabled = false;
                }
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainPharma(){
    if (skillChoice > 1){
        document.getElementById('pharmacology').setAttribute('value', PHARMACOLOGY); 
        document.getElementById('pharmaTrnBtn').disabled = true; 
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainDoc(){
    if (skillChoice > 1){
        document.getElementById('doctor').setAttribute('value', DOCTOR); 
        document.getElementById('doctorTrnBtn').disabled = true; 
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainConstruct(){
    if (skillChoice > 1){
        document.getElementById('construction').setAttribute('value', CONSTRUCTION); 
        document.getElementById('constructTrnBtn').disabled = true; 
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else {alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainElect(){
    if(skillChoice >= 1){
        document.getElementById('electrical').setAttribute('value', ELECTRICAL); 
        document.getElementById('electricalTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else {alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainRadio(){
    if(skillChoice >= 1){
        document.getElementById('radioSys').setAttribute('value', RADIOS); 
        document.getElementById('radioTrnBtn').disabled = true; 
        skillChoice -= 1; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else {alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
function trainToxic(){
    if (skillChoice > 1){
        document.getElementById('toxicology').setAttribute('value', TOXICOLOGY); 
        document.getElementById('toxicTrnBtn').disabled = true; 
        skillChoice -= 2; 
        document.getElementById('skillChoice').setAttribute('value', skillChoice);
    } else { alert('NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS');}
}
//LANGUAGES
var n = 1;
var m = 1;

var language = '';
var lit = '';

function addLang(){
if (skillChoice > 0){
      do {
        skillChoice -= 1;
        document.getElementById("lang" + n).setAttribute("value", language);
        document.getElementById("langRate" + n).setAttribute("value", FOREIGN_LANG + roll(1,10));
        document.getElementById('langBtn' + n).disabled = true;
        document.getElementById("skillChoice").setAttribute('value', skillChoice);
        break;
  } while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

function addLit(){
if (skillChoice > 0){
      do {
        skillChoice -= 1;
        document.getElementById("lit" + m).setAttribute("value", lit);
        document.getElementById("litRate" + m).setAttribute("value", FOREIGN_LIT + roll(1,10));
        document.getElementById('litBtn' + m).disabled = true;
        document.getElementById("skillChoice").setAttribute('value', skillChoice);
        break;
  } while (skillChoice > 0);
} else { alert("NOT ENOUGH SKILL CHOICES LEFT TO ADD THIS");}
}

var modChoice = 0;
var skillChoice = Will + roll(1,10);
var background = sessionStorage.getItem('background');

window.onload = function skills(){
        if (background === "HACKER"){
            document.getElementById("computers").setAttribute("value", COMPUTERS);
            document.getElementById("compTrnBtn").disabled = true;
            document.getElementById("programming").setAttribute("value", PROGRAMMING);
            document.getElementById("programTrnBtn").disabled = true;
            document.getElementById("radioSys").setAttribute("value", RADIOS);
            document.getElementById("radioTrnBtn").disabled = true;
            document.getElementById("weaponSys").setAttribute("value", wsys += roll(2,20));

        } else if (background === "TRADER"){
            document.getElementById("crafting").setAttribute("value", CRAFTING += roll(2,20));
            document.getElementById("negotiation").setAttribute("value", NEGOT += roll(2,20));
            document.getElementById("computers").setAttribute("value", COMPUTERS);
            document.getElementById("compTrnBtn").disabled = true;
            document.getElementById("programTrnBtn").disabled = false;

        } else if (background === "MEDIC"){
            document.getElementById("firstAid").setAttribute("value", FIRSTAID += roll(2,20));
            document.getElementById("biology").setAttribute("value", BIOLOGY);
            document.getElementById("bioTrnBtn").disabled = true;
            document.getElementById("chemistry").setAttribute("value", CHEMISTRY);
            document.getElementById("chemTrnBtn").disabled = true;
            document.getElementById("doctor").setAttribute("value", DOCTOR);
            document.getElementById("doctorTrnBtn").disabled = true;
            document.getElementById("toxicology").setAttribute("value", TOXICOLOGY);
            document.getElementById("toxicTrnBtn").disabled = true;
            document.getElementById("pharmacology").setAttribute("value", PHARMACOLOGY);
            document.getElementById("pharmaTrnBtn").disabled = true;

        } else if (background === "OUTDOORSMAN"){
            document.getElementById("envAware").setAttribute("value", ENVAWARE += roll(2,20));
            document.getElementById("tracking").setAttribute("value", TRACKING);
            document.getElementById("trackTrnBtn").disabled = true;
            document.getElementById("trapping").setAttribute("value", TRAPPING);
            document.getElementById("trapTrnBtn").disabled = true;
            document.getElementById("surveillance").setAttribute("value", SURVEILLANCE);
            document.getElementById("survTrnBtn").disabled = true;
            var modal = document.getElementById('outdoorsmanModal');
            modal.style.display = "block";

        } else if (background === "THIEF"){
            document.getElementById("negotiation").setAttribute("value", NEGOT += roll(2,20));
            document.getElementById("stealth").setAttribute("value", STEALTH += roll(2,20));
            document.getElementById("surveillance").setAttribute("value", SURVEILLANCE);
            document.getElementById("survTrnBtn").disabled = true;
            var modal = document.getElementById('thiefModal');
            modal.style.display = "block";

        } else if (background === "MILITARY"){
            document.getElementById("envAware").setAttribute("value", ENVAWARE += roll(2,20));
            document.getElementById("stealth").setAttribute("value", STEALTH += roll(2,20));
            document.getElementById("navigation").setAttribute("value", NAVIG += roll(2,20));
            document.getElementById("crafting").setAttribute("value", CRAFTING += roll(2,20));
            document.getElementById("firstAid").setAttribute("value", FIRSTAID += roll(1,10));
            document.getElementById("unarmed").setAttribute("value", unarm += roll(2,20));
            document.getElementById("grappling").setAttribute("value", grap += roll(2,20));
            document.getElementById("short").setAttribute("value", shortW += roll(2,20));
            document.getElementById("THM").setAttribute("value", twoH += roll(2,20));
            document.getElementById("rifles").setAttribute("value", rifles += roll(2,20));
            document.getElementById("pistols").setAttribute("value", pistols += roll(2,20));
            document.getElementById("burst").setAttribute("value", burst += roll(1,10));
            document.getElementById("special").setAttribute("value", special += roll(1,10));
            document.getElementById("block").setAttribute("value", block += roll(1,10));
            document.getElementById("radioSys").setAttribute("value", RADIOS);
            document.getElementById("radioTrnBtn").disabled = true;
            document.getElementById("surveillance").setAttribute("value", SURVEILLANCE);
            document.getElementById("survTrnBtn").disabled = true;
        
        } else if (background === "POLICE"){
            document.getElementById("firstAid").setAttribute("value", FIRSTAID += roll(1,10));
            document.getElementById("unarmed").setAttribute("value", unarm += roll(2,20));
            document.getElementById("grappling").setAttribute("value", grap += roll(2,20));
            document.getElementById("pistols").setAttribute("value", pistols += roll(2,20));
            document.getElementById("long").setAttribute("value", longW += roll(2,20));
            document.getElementById("block").setAttribute("value", block += roll(1,10));
            document.getElementById("negotiation").setAttribute("value", NEGOT += roll(2,20));
            document.getElementById("radioSys").setAttribute("value", RADIOS);
            document.getElementById("radioTrnBtn").disabled = true;
            document.getElementById("surveillance").setAttribute("value", SURVEILLANCE);
            document.getElementById("survTrnBtn").disabled = true;
            document.getElementById("forensics").setAttribute("value", FORENSICS);
            document.getElementById("forensicsTrnBtn").disabled = true;
            document.getElementById("law").setAttribute("value", LAW);
            document.getElementById("lawTrnBtn").disabled = true;

        } else if (background === "MILITIA"){
            document.getElementById("stealth").setAttribute("value", STEALTH += roll(2,20));
            document.getElementById("crafting").setAttribute("value", CRAFTING += roll(2,20));
            document.getElementById("firstAid").setAttribute("value", FIRSTAID += roll(1,10));
            document.getElementById("unarmed").setAttribute("value", unarm += roll(2,20));
            document.getElementById("grappling").setAttribute("value", grap += roll(2,20));
            document.getElementById("rifles").setAttribute("value", rifles += roll(2,20));
            document.getElementById("THM").setAttribute("value", twoH += roll(2,20));
            var modal = document.getElementById('militiaModal');
            modal.style.display = "block";

        } else if (background === "BANDIT"){
            document.getElementById("firstAid").setAttribute("value", FIRSTAID += roll(1,10));
            document.getElementById("navigation").setAttribute("value", NAVIG += roll(2,20));
            var modal = document.getElementById('banditModal');
            modal.style.display = "block";

        } else if (background === "GANG_MEMBER"){
            document.getElementById("unarmed").setAttribute("value", unarm += roll(2,20));
            document.getElementById("grappling").setAttribute("value", grap += roll(2,20));
            document.getElementById("block").setAttribute("value", block += roll(1,10));
            var modal = document.getElementById('gangModal');
            modal.style.display = "block";

        } else if (background === "SECURITY"){
            document.getElementById("unarmed").setAttribute("value", unarm += roll(2,20));
            document.getElementById("grappling").setAttribute("value", grap += roll(2,20));
            document.getElementById("block").setAttribute("value", block += roll(1,10));
            document.getElementById("surveillance").setAttribute("value", SURVEILLANCE);
            document.getElementById("survTrnBtn").disabled = true;
            var modal = document.getElementById('securityModal');
            modal.style.display = "block";

        } else if (background === "MARINER"){
            document.getElementById("navigation").setAttribute("value", NAVIG += roll(2,20));
            document.getElementById("fishing").setAttribute("value", FISHING);
            document.getElementById("fishTrnBtn").disabled = true;
            document.getElementById("crafting").setAttribute("value", CRAFTING += roll(2,20));
            var modal = document.getElementById('marinerModal');
            modal.style.display = "block";

        } else if (background === "MECHANIC"){
            document.getElementById("mechanics").setAttribute("value", MECHANICS);
            document.getElementById("mechTrnBtn").disabled = true;
            document.getElementById("crafting").setAttribute("value", CRAFTING += roll(2,20));
            var modal = document.getElementById('mechanicModal');
            modal.style.display = "block";

        } else if (background === "ELECTRICIAN"){
            document.getElementById("electrical").setAttribute("value", ELECTRICAL);
            document.getElementById("electricalTrnBtn").disabled = true;
            document.getElementById("crafting").setAttribute("value", CRAFTING += roll(2,20));
            document.getElementById("computers").setAttribute("value", COMPUTERS);
            document.getElementById("compTrnBtn").disabled = true;
            document.getElementById("programTrnBtn").disabled = false;

        } else if (background === "CONSTRUCTION_WORKER"){
            document.getElementById("crafting").setAttribute("value", CRAFTING += roll(2,20));
            document.getElementById("construction").setAttribute("value", CONSTRUCTION);
            document.getElementById("constructTrnBtn").disabled = true;
            document.getElementById("short").setAttribute("value", shortW += roll(2,20));

        } else {
            document.getElementById("crafting").setAttribute("value", CRAFTING += roll(2,20));
            document.getElementById("envAware").setAttribute("value", ENVAWARE += roll(2,20));
            document.getElementById("THM").setAttribute("value", twoH += roll(2,20));
            document.getElementById("botany").setAttribute("value", BOTANY);
            document.getElementById("botTrnBtn").disabled = true;
        }
    }
            