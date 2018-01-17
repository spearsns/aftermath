function roll(min, max){
	return Math.round(Math.random() * (max - min)) + min;
} 

//TRAITS
var mem = roll(2,20);
var Mem = mem;
var log = roll(2,20);
var Log = log;
var per = roll(2,20);
var Per = per;
var will = roll(2,20);
var Will = will;
var cha = roll(2,20);
var Cha = cha;

var str = roll(2,20);
var Str = str;
var end = roll(2,20);
var End = end;
var dex = roll(2,20);
var Dex = dex;
var spd = roll(2,20);
var Spd = spd;
var bty = roll(2,20);
var Bty = bty;

var traitPts = 	Math.floor(will / 2);
var traitMod = 0;

//ADJUST MEM
function incMem(){
	if (traitPts > 0 && Mem < 20){
	traitMod += 1;
	Mem += 1;
	traitPts -= 1;
	document.getElementById("MEM").setAttribute('value', Mem);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T INCREASE FURTHER");}
}
function decMem(){
	if (traitMod > 0 && Mem > mem){
	traitMod -= 1;
	Mem -= 1;
	traitPts += 1;
	document.getElementById("MEM").setAttribute('value', Mem);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T REDUCE FURTHER");}
}
//ADJUST LOG
function incLog(){
	if (traitPts > 0 && Log < 20){
	traitMod += 1;
	Log += 1;
	traitPts -= 1;
	document.getElementById("LOG").setAttribute('value', Log);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T INCREASE FURTHER");}
}
function decLog(){
	if (traitMod >= 1 && Log > log){
	traitMod -= 1;
	Log -= 1;
	traitPts += 1;
	document.getElementById("LOG").setAttribute('value', Log);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T REDUCE FURTHER");}
}
//ADJUST PER
function incPer(){
	if (traitPts > 0  && Per < 20){
	traitMod += 1;
	Per += 1;
	traitPts -= 1;
	document.getElementById("PER").setAttribute('value', Per);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T INCREASE FURTHER");}
}
function decPer(){
	if (traitMod >= 1 && Per > per){
	traitMod -= 1;
	Per -= 1;
	traitPts += 1;
	document.getElementById("PER").setAttribute('value', Per);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T REDUCE FURTHER");}
}
//ADJUST WILL
function incWill(){
	if (traitPts > 0  && Will < 20){
	traitMod += 1;
	Will += 1;
	traitPts -= 1;
	document.getElementById("WILL").setAttribute('value', Will);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T INCREASE FURTHER");}
}
function decWill(){
	if (traitMod >= 1  && Will > will){
	traitMod -= 1;
	Will -= 1;
	traitPts += 1;
	document.getElementById("WILL").setAttribute('value', Will);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T REDUCE FURTHER");}
}
//ADJUST CHA
function incCha(){
	if (traitPts > 0  && Cha < 20){
	traitMod += 1;
	Cha += 1;
	traitPts -= 1;
	document.getElementById("CHA").setAttribute('value', Cha);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T INCREASE FURTHER");}
}
function decCha(){
	if (traitMod >= 1  && Cha > cha){
	traitMod -= 1;
	Cha -= 1;
	traitPts += 1;
	document.getElementById("CHA").setAttribute('value', Cha);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T REDUCE FURTHER");}
}
//ADJUST STR
function incStr(){
	if (traitPts > 0  && Str < 20){
	traitMod += 1;
	Str += 1;
	traitPts -= 1;
	document.getElementById("STR").setAttribute('value', Str);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T INCREASE FURTHER");}
}
function decStr(){
	if (traitMod >= 1  && Str > str){
	traitMod -= 1;
	Str -= 1;
	traitPts += 1;
	document.getElementById("STR").setAttribute('value', Str);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T REDUCE FURTHER");}
}
//ADJUST END
function incEnd(){
	if (traitPts > 0  && End < 20){
	traitMod += 1;
	End += 1;
	traitPts -= 1;
	document.getElementById("END").setAttribute('value', End);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T INCREASE FURTHER");}
}
function decEnd(){
	if (traitMod >= 1  && End > end){
	traitMod -= 1;
	End -= 1;
	traitPts += 1;
	document.getElementById("END").setAttribute('value', End);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T REDUCE FURTHER");}
}
//ADJUST DEX
function incDex(){
	if (traitPts > 0  && Dex < 20){
	traitMod += 1;
	Dex += 1;
	traitPts -= 1;
	document.getElementById("DEX").setAttribute('value', Dex);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T INCREASE FURTHER");}
}
function decDex(){
	if (traitMod >= 1  && Dex > dex){
	traitMod -= 1;
	Dex -= 1;
	traitPts += 1;
	document.getElementById("DEX").setAttribute('value', Dex);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T REDUCE FURTHER");}
}
//ADJUST SPD
function incSpd(){
	if (traitPts > 0  && Spd < 20){
	traitMod += 1;
	Spd += 1;
	traitPts -= 1;
	document.getElementById("SPD").setAttribute('value', Spd);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T INCREASE FURTHER");}
}
function decSpd(){
	if (traitMod >= 1  && Spd > spd){
	traitMod -= 1;
	Spd -= 1;
	traitPts += 1;
	document.getElementById("SPD").setAttribute('value', Spd);
	document.getElementById("traitPts").setAttribute('value', traitPts);
	} else { alert("CAN'T REDUCE FURTHER");}
}

window.onload = function background(){
		var background = roll(1,100);
//EDUCATED
		if (background <= 10){
		do {
		document.getElementById("background").setAttribute("value", "EDUCATED");	
    	break;
    	} while (1 == 1);

//DOCTOR
		} else if (background >= 11 && background <= 15){
		do {
		document.getElementById("background").setAttribute("value", "DOCTOR");
    	break;
    	} while (1 == 1);

//MECHANIC
		} else if (background >= 16 && background <= 20){
		do {
		document.getElementById("background").setAttribute("value", "MECHANIC");
	   	break;
    	} while (1 == 1);

//TRADER
		} else if (background >= 21 && background <= 25){
		do {
		document.getElementById("background").setAttribute("value", "TRADER");
		break;
    	} while (1 == 1);
		

//OUTDOORSMAN
		} else if (background >= 26 && background <= 30){
		do {
		document.getElementById("background").setAttribute("value", "OUTDOORSMAN");
		break;
    	} while (1 == 1);

//SOLDIER
		} else if (background >= 31 && background <= 40){
		do {
		document.getElementById("background").setAttribute("value", "SOLDIER");
		break;
    	} while (1 == 1);

//GANGSTER
		} else if (background >= 41 && background <= 70){
		do {
		document.getElementById("background").setAttribute("value", "GANGSTER");
		break;
    	} while (1 == 1);

//LABORER
		} else if (background >= 71 && background <= 80){
		do {
		document.getElementById("background").setAttribute("value", "LABORER");
		break;
    	} while (1 == 1);	

//FARMER
		} else if (background >= 81 && background <= 90){
		do {
		document.getElementById("background").setAttribute("value", "FARMER");
		break;
    	} while (1 == 1);

//SCAVENGER
		} else if (background >= 91 && background <= 100){
		do {
		document.getElementById("background").setAttribute("value", "SCAVENGER");
		break;
    	} while (1 == 1);
    }
}

function advance(){
	if (traitPts > 0){
		do {
		alert('YOU MUST SPEND ALL TRAIT POINTS AVAILABLE');
		return;
	} while (traitPts > 0);
	} else {

window.sessionStorage.setItem('background', String(document.getElementById('background').value)); 
window.sessionStorage.setItem('MEM', String(document.getElementById('MEM').value)); 
window.sessionStorage.setItem('LOG', String(document.getElementById('LOG').value)); 
window.sessionStorage.setItem('PER', String(document.getElementById('PER').value)); 
window.sessionStorage.setItem('WILL', String(document.getElementById('WILL').value)); 
window.sessionStorage.setItem('CHA', String(document.getElementById('CHA').value)); 
window.sessionStorage.setItem('STR', String(document.getElementById('STR').value)); 
window.sessionStorage.setItem('END', String(document.getElementById('END').value)); 
window.sessionStorage.setItem('DEX', String(document.getElementById('DEX').value)); 
window.sessionStorage.setItem('SPD', String(document.getElementById('SPD').value)); 
window.sessionStorage.setItem('BTY', String(document.getElementById('BTY').value));
	window.location = "charSkills.php";
	}
}