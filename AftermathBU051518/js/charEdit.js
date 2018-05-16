//TRAITS
var Mem = Number(document.getElementById('mem').value);
	var mem = Mem;
var Log = Number(document.getElementById('log').value);
	var log = Log;
var Per = Number(document.getElementById('per').value);
	var per = Per;
var Will = Number(document.getElementById('will').value);
	var will = Will;
var Cha = Number(document.getElementById('cha').value);
	var cha = Cha;

var Str = Number(document.getElementById('str').value);
	var str = Str;
var End = Number(document.getElementById('end').value);
	var end = End;
var Dex = Number(document.getElementById('dex').value);
	var dex = Dex;
var Spd = Number(document.getElementById('spd').value);
	var spd = Spd;
var Bty = Number(document.getElementById('bty').value);
	var bty = Bty;

//COMBAT STATS
var Block = Number(document.getElementById('block').value);
	var block = Block;
var Dodge = Number(document.getElementById('dodge').value);
	var dodge = Dodge;

//COMBAT SKILLS
var Unarm = Number(document.getElementById('unarm').value);
	var unarm = Unarm;
var Grap = Number(document.getElementById('grap').value);
	var grap = Grap;
var Off = Number(document.getElementById('off').value);
	var off = Off;
var ShortW = Number(document.getElementById('shortW').value);
	var shortW = ShortW;
var LongW = Number(document.getElementById('longW').value);
	var longW = LongW;	
var TwoHW = Number(document.getElementById('twoHW').value);
	var twoHW = TwoHW;	
var Chain = Number(document.getElementById('chain').value);
	var chain = Chain;	

var Thrown = Number(document.getElementById('thrown').value);
	var thrown = Thrown;	
var Arch = Number(document.getElementById('arch').value);
	var arch = Arch;
var OneHguns = Number(document.getElementById('pistols').value);
	var oneHguns = OneHguns;	
var TwoHguns = Number(document.getElementById('rifles').value);
	var twoHguns = TwoHguns;	
var Burst = Number(document.getElementById('burst').value);
	var burst = Burst;
var Special = Number(document.getElementById('special').value);
	var special = Special;	
var Wsys = Number(document.getElementById('wsys').value);
	var wsys = Wsys;	

//UNIVERSAL
var Stealth = Number(document.getElementById('stealth').value);
	var stealth = Stealth;	
var Navig = Number(document.getElementById('navig').value);
	var navig = Navig;	
var Negot = Number(document.getElementById('negot').value);
	var negot = Negot;	
var Survival = Number(document.getElementById('survival').value);
	var survival = Survival;	
var Craft = Number(document.getElementById('craft').value);
	var craft = Craft;	

var remEXP = Number(document.getElementById('remEXP').value);

if (document.getElementById('biology').value >= 50 && document.getElementById('firstAid').value >= 75){
		document.getElementById('doctorTrnBtn').disabled = false;
	}
if (document.getElementById('biology').value >= 50 && document.getElementById('chemistry').value >= 50){
		document.getElementById('toxicTrnBtn').disabled = false;
		document.getElementById('pharmaTrnBtn').disabled = false;
	}
if (document.getElementById('computers').value >= 75){
		document.getElementById('programTrnBtn').disabled = false;
	}

//MEM
function incMem(){
		if (mem < 5  && remEXP >= 5000){
		mem += 1;
		remEXP -= 5000;
		document.getElementById("mem").setAttribute('value', mem);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (mem >= 5 && mem < 15 && remEXP >= 2500){
		mem += 1;
		remEXP -= 2500;
		document.getElementById("mem").setAttribute('value', mem);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (mem >= 15 && remEXP >= 5000 && mem < 20){
		mem += 1;
		remEXP -= 5000;
		document.getElementById("mem").setAttribute('value', mem);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
		} else if (mem == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//LOG
function incLog(){
		if (log < 5  && remEXP >= 5000){
		log += 1;
		remEXP -= 5000;
		document.getElementById("log").setAttribute('value', log);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (log >= 5 && log < 15 && remEXP >= 2500){
		log += 1;
		remEXP -= 2500;
		document.getElementById("log").setAttribute('value', log);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (log >= 15 && remEXP >= 5000 && log < 20){
		log += 1;
		remEXP -= 5000;
		document.getElementById("log").setAttribute('value', log);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
		} else if (log == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//PER
function incPer(){
		if (per < 5  && remEXP >= 5000){
		per += 1;
		remEXP -= 5000;
		document.getElementById("per").setAttribute('value', per);
		document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (per >= 5 && per < 15 && remEXP >= 2500){
		per += 1;
		remEXP -= 2500;
		document.getElementById("per").setAttribute('value', per);
		document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (per >= 15 && remEXP >= 5000 && per < 20){
		per += 1;
		remEXP -= 5000;
		document.getElementById("per").setAttribute('value', per);
		document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
		} else if (per == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//WILL
function incWill(){
		if (will < 5  && remEXP >= 5000){
			will += 1;
			remEXP -= 5000;
			document.getElementById("will").setAttribute('value', will);
    		document.getElementById("remEXP").setAttribute('value', remEXP);
    		document.getElementById("EXPpool").setAttribute('value', remEXP);
    		} else if (will >= 5 && will < 15 && remEXP >= 2500){
			will += 1;
			remEXP -= 2500;
			document.getElementById("will").setAttribute('value', will);
    		document.getElementById("remEXP").setAttribute('value', remEXP);
    		document.getElementById("EXPpool").setAttribute('value', remEXP);
    		} else if (will >= 15 && remEXP >= 5000 && will < 20){
			will += 1;
			remEXP -= 5000;
			document.getElementById("will").setAttribute('value', will);
    		document.getElementById("remEXP").setAttribute('value', remEXP);
    		document.getElementById("EXPpool").setAttribute('value', remEXP);
			} else if (will == 20){
				alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//CHA
function incCha(){
		if (cha < 5  && remEXP >= 5000){
		cha += 1;
		remEXP -= 5000;
		document.getElementById("cha").setAttribute('value', cha);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (cha >= 5 && cha < 15 && remEXP >= 2500){
		cha += 1;
		remEXP -= 2500;
		document.getElementById("cha").setAttribute('value', cha);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (cha >= 15 && remEXP >= 5000 && cha < 20){
		cha += 1;
		remEXP -= 5000;
		document.getElementById("cha").setAttribute('value', cha);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
		} else if (cha == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//STR
function incStr(){
		if (str < 5  && remEXP >= 5000){
		str += 1;
		remEXP -= 5000;
		document.getElementById("str").setAttribute('value', str);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (str >= 5 && str < 15 && remEXP >= 2500){
		str += 1;
		remEXP -= 2500;
		document.getElementById("str").setAttribute('value', str);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (str >= 15 && remEXP >= 5000 && str < 20){
		str += 1;
		remEXP -= 5000;
		document.getElementById("str").setAttribute('value', str);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
		} else if (str == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//END
function incEnd(){
		if (end < 5  && remEXP >= 5000){
		end += 1;
		remEXP -= 5000;
		document.getElementById("end").setAttribute('value', end);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (end >= 5 && end < 15 && remEXP >= 2500){
		end += 1;
		remEXP -= 2500;
		document.getElementById("end").setAttribute('value', end);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (end >= 15 && remEXP >= 5000 && end < 20){
		end += 1;
		remEXP -= 5000;
		document.getElementById("end").setAttribute('value', end);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
		} else if (end == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//DEX
function incDex(){
		if (dex < 5  && remEXP >= 5000){
		dex += 1;
		remEXP -= 5000;
		document.getElementById("dex").setAttribute('value', dex);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (dex >= 5 && dex < 15 && remEXP >= 2500){
		dex += 1;
		remEXP -= 2500;
		document.getElementById("dex").setAttribute('value', dex);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
    	} else if (dex >= 15 && remEXP >= 5000 && dex < 20){
		dex += 1;
		remEXP -= 5000;
		document.getElementById("dex").setAttribute('value', dex);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	document.getElementById("EXPpool").setAttribute('value', remEXP);
		} else if (dex == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//SPD
function incSpd(){
		if (spd < 5  && remEXP >= 5000){
			spd += 1;
			remEXP -= 5000;
			document.getElementById("spd").setAttribute('value', spd);
			document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
			document.getElementById("act").setAttribute('value', Math.floor(spd / 2));
    		document.getElementById("remEXP").setAttribute('value', remEXP);
    		document.getElementById("EXPpool").setAttribute('value', remEXP);
    		} else if (spd >= 5 && spd < 15 && remEXP >= 2500){
			spd += 1;
			remEXP -= 2500;
			document.getElementById("spd").setAttribute('value', spd);
			document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
			document.getElementById("act").setAttribute('value', Math.floor(spd / 2));
    		document.getElementById("remEXP").setAttribute('value', remEXP);
    		document.getElementById("EXPpool").setAttribute('value', remEXP);
    		} else if (spd >= 15 && remEXP >= 5000 && spd < 20){
			spd += 1;
			remEXP -= 5000;
			document.getElementById("spd").setAttribute('value', spd);
			document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
			document.getElementById("act").setAttribute('value', Math.floor(spd / 2));
    		document.getElementById("remEXP").setAttribute('value', remEXP);
    		document.getElementById("EXPpool").setAttribute('value', remEXP);
			} else if (spd == 20){
				alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//BLOCK
function incBlock(){
	if (remEXP >= 250 && block < 25){
		block += 1;
		remEXP -= 250;
		document.getElementById("block").setAttribute('value', block);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (remEXP >= 500 && block >= 25 && block < 50){
		block += 1;
		remEXP -= 500;
		document.getElementById("block").setAttribute('value', block);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	}else if (block == 50){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//DODGE
function incDodge(){
	if (remEXP >= 500 && dodge < 50){
		dodge += 1;
		remEXP -= 500;
		document.getElementById("dodge").setAttribute('value', dodge);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (dodge == 50){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//UNARMED
function incUnarm(){
	if (unarm < 25 && remEXP >= 250){
		unarm += 1;
		remEXP -= 250;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (unarm >= 25 && unarm < 75 && remEXP >= 100){
		unarm += 1;
		remEXP -= 100;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (unarm >= 75 && unarm < 100 && remEXP >= 250){
		unarm += 1;
		remEXP -= 250;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (unarm >= 100 && unarm < 150 && remEXP >= 500){
		unarm += 1;
		remEXP -= 500;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (unarm == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//GRAPPLING
function incGrap(){
	if (grap < 25 && remEXP >= 250){
		grap += 1;
		remEXP -= 250;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (grap >= 25 && grap < 75 && remEXP >= 100){
		grap += 1;
		remEXP -= 100;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (grap >= 75 && grap < 100 && remEXP >= 250){
		grap += 1;
		remEXP -= 250;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (grap >= 100 && grap < 150 && remEXP >= 500){
		grap += 1;
		remEXP -= 500;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (grap == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//OFF HAND
function incOff(){
	if (off < -51 && remEXP >= 100){
		off += 1;
		remEXP -= 100;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (off >= -50 && off < -40 && remEXP >= 200){
		off += 1;
		remEXP -= 200;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (off >= -40 && off < -30 && remEXP >= 250){
		off += 1;
		remEXP -= 250;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (off >= -30 && off < -20 && remEXP >= 500){
		off += 1;
		remEXP -= 500;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (off >= -20 && off < -10 && remEXP >= 750){
		off += 1;
		remEXP -= 750;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (off >= -10 && off < 0 && remEXP >= 1000){
		off += 1;
		remEXP -= 1000;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (off == 0){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//SHORT MELEE
function incShort(){
	if (shortW < 25 && remEXP >= 250){
		shortW += 1;
		remEXP -= 250;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (shortW >= 25 && shortW < 75 && remEXP >= 100){
		shortW += 1;
		remEXP -= 100;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (shortW >= 75 && shortW < 100 && remEXP >= 250){
		shortW += 1;
		remEXP -= 250;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (shortW >= 100 && shortW < 150 && remEXP >= 500){
		shortW += 1;
		remEXP -= 500;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (shortW == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//LONG MELEE
function incLong(){
	if (longW < 25 && remEXP >= 250){
		longW += 1;
		remEXP -= 250;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (longW >= 25 && longW < 75 && remEXP >= 100){
		longW += 1;
		remEXP -= 100;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (longW >= 75 && longW < 100 && remEXP >= 250){
		longW += 1;
		remEXP -= 250;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (longW >= 100 && longW < 150 && remEXP >= 500){
		longW += 1;
		remEXP -= 500;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (longW == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//TWO HANDED
function incTHW(){
	if (twoHW < 25 && remEXP >= 250){
		twoHW += 1;
		remEXP -= 250;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (twoHW >= 25 && twoHW < 75 && remEXP >= 100){
		twoHW += 1;
		remEXP -= 100;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (twoHW >= 75 && twoHW < 100 && remEXP >= 250){
		twoHW += 1;
		remEXP -= 250;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (twoHW >= 100 && twoHW < 150 && remEXP >= 500){
		twoHW += 1;
		remEXP -= 500;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (twoHW == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//CHAIN
function incChain(){
	if (chain < 25 && remEXP >= 250){
		chain += 1;
		remEXP -= 250;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (chain >= 25 && chain < 75 && remEXP >= 100){
		chain += 1;
		remEXP -= 100;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (chain >= 75 && chain < 100 && remEXP >= 250){
		chain += 1;
		remEXP -= 250;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (chain >= 100 && chain < 150 && remEXP >= 500){
		chain += 1;
		remEXP -= 500;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (chain == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//THROWN
function incThrow(){
	if (thrown < 25 && remEXP >= 250){
		thrown += 1;
		remEXP -= 250;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (thrown >= 25 && thrown < 75 && remEXP >= 100){
		thrown += 1;
		remEXP -= 100;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (thrown >= 75 && thrown < 100 && remEXP >= 250){
		thrown += 1;
		remEXP -= 250;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (thrown >= 100 && thrown < 150 && remEXP >= 500){
		thrown += 1;
		remEXP -= 500;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (thrown == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//ARCHERY
function incArch(){
	if (arch < 25 && remEXP >= 250){
		arch += 1;
		remEXP -= 250;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (arch >= 25 && arch < 75 && remEXP >= 100){
		arch += 1;
		remEXP -= 100;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (arch >= 75 && arch < 100 && remEXP >= 250){
		arch += 1;
		remEXP -= 250;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (arch >= 100 && arch < 150 && remEXP >= 500){
		arch += 1;
		remEXP -= 500;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (arch == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//PISTOLS
function incOHG(){
	if (oneHguns < 25 && remEXP >= 250){
		oneHguns += 1;
		remEXP -= 250;
		document.getElementById('pistols').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (oneHguns >= 25 && oneHguns < 75 && remEXP >= 100){
		oneHguns += 1;
		remEXP -= 100;
		document.getElementById('pistols').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (oneHguns >= 75 && oneHguns < 100 && remEXP >= 250){
		oneHguns += 1;
		remEXP -= 250;
		document.getElementById('pistols').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (oneHguns >= 100 && oneHguns < 150 && remEXP >= 500){
		oneHguns += 1;
		remEXP -= 500;
		document.getElementById('pistols').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (oneHguns == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//RIFLES
function incTHG(){
	if (twoHguns < 25 && remEXP >= 250){
		twoHguns += 1;
		remEXP -= 250;
		document.getElementById('rifles').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (twoHguns >= 25 && twoHguns < 75 && remEXP >= 100){
		twoHguns += 1;
		remEXP -= 100;
		document.getElementById('rifles').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (twoHguns >= 75 && twoHguns < 100 && remEXP >= 250){
		twoHguns += 1;
		remEXP -= 250;
		document.getElementById('rifles').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (twoHguns >= 100 && twoHguns < 150 && remEXP >= 500){
		twoHguns += 1;
		remEXP -= 500;
		document.getElementById('rifles').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (twoHguns == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//BURST
function incBurst(){
	if (burst < 25 && remEXP >= 250){
		burst += 1;
		remEXP -= 250;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (burst >= 25 && burst < 75 && remEXP >= 100){
		burst += 1;
		remEXP -= 100;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (burst >= 75 && burst < 100 && remEXP >= 250){
		burst += 1;
		remEXP -= 250;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (burst >= 100 && burst < 150 && remEXP >= 500){
		burst += 1;
		remEXP -= 500;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (burst == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//SPECIAL
function incSpec(){
	if (special < 25 && remEXP >= 250){
		special += 1;
		remEXP -= 250;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (special >= 25 && special < 75 && remEXP >= 100){
		special += 1;
		remEXP -= 100;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (special >= 75 && special < 100 && remEXP >= 250){
		special += 1;
		remEXP -= 250;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (special >= 100 && special < 150 && remEXP >= 500){
		special += 1;
		remEXP -= 500;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (special == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//WEAPON SYSTEMS
function incWsys(){
	if (wsys < 25 && remEXP >= 250){
		wsys += 1;
		remEXP -= 250;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (wsys >= 25 && wsys < 75 && remEXP >= 100){
		wsys += 1;
		remEXP -= 100;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (wsys >= 75 && wsys < 100 && remEXP >= 250){
		wsys += 1;
		remEXP -= 250;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (wsys >= 100 && wsys < 150 && remEXP >= 500){
		wsys += 1;
		remEXP -= 500;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (wsys == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//STEALTH
function incStealth(){
	if (stealth < 25 && remEXP >= 250){
		stealth += 1;
		remEXP -= 250;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (stealth >= 25 && stealth < 75 && remEXP >= 100){
		stealth += 1;
		remEXP -= 100;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (stealth >= 75 && stealth < 100 && remEXP >= 250){
		stealth += 1;
		remEXP -= 250;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (stealth >= 100 && stealth < 150 && remEXP >= 500){
		stealth += 1;
		remEXP -= 500;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (stealth == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//NAVIGATION
function incNav(){
	if (navig < 25 && remEXP >= 250){
		navig += 1;
		remEXP -= 250;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (navig >= 25 && navig < 75 && remEXP >= 100){
		navig += 1;
		remEXP -= 100;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (navig >= 75 && navig < 100 && remEXP >= 250){
		navig += 1;
		remEXP -= 250;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (navig >= 100 && navig < 150 && remEXP >= 500){
		navig += 1;
		remEXP -= 500;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (navig == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//NEGOTIATION
function incNegot(){
	if (negot < 25 && remEXP >= 250){
		negot += 1;
		remEXP -= 250;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (negot >= 25 && negot < 75 && remEXP >= 100){
		negot += 1;
		remEXP -= 100;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (negot >= 75 && negot < 100 && remEXP >= 250){
		negot += 1;
		remEXP -= 250;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (negot >= 100 && negot < 150 && remEXP >= 500){
		negot += 1;
		remEXP -= 500;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (negot == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//CRAFTING
function incCraft(){
	if (craft < 25 && remEXP >= 250){
		craft += 1;
		remEXP -= 250;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (craft >= 25 && craft < 75 && remEXP >= 100){
		craft += 1;
		remEXP -= 100;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (craft >= 75 && craft < 100 && remEXP >= 250){
		craft += 1;
		remEXP -= 250;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (craft >= 100 && craft < 150 && remEXP >= 500){
		craft += 1;
		remEXP -= 500;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (craft == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//ENV AWARENESS
function incSurv(){
	if (survival < 25 && remEXP >= 250){
		survival += 1;
		remEXP -= 250;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (survival >= 25 && survival < 75 && remEXP >= 100){
		survival += 1;
		remEXP -= 100;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (survival >= 75 && survival < 100 && remEXP >= 250){
		survival += 1;
		remEXP -= 250;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (survival >= 100 && survival < 150 && remEXP >= 500){
		survival += 1;
		remEXP -= 500;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (survival == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//FIRST AID
function incFirstAid(){
	var firstAid = Number(document.getElementById('firstAid').value);
	if (firstAid == 0 && remEXP >= 500){
		firstAid += 1;
		remEXP -= 500;
		document.getElementById('firstAid').setAttribute('value', firstAid);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (firstAid < 25 && remEXP >= 500){
		firstAid += 1;
		remEXP -= 500;
		document.getElementById('firstAid').setAttribute('value', firstAid);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (firstAid >= 25 && firstAid < 75 && remEXP >= 250){
		firstAid += 1;
		remEXP -= 250;
		document.getElementById('firstAid').setAttribute('value', firstAid);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (firstAid >= 75 && remEXP >= 500){
		firstAid += 1;
		remEXP -= 500;
		document.getElementById('firstAid').setAttribute('value', firstAid);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (firstAid == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
	
	if (document.getElementById('biology').value >= 50 && document.getElementById('firstAid').value >= 75){
		document.getElementById('doctorTrnBtn').disabled = false;
	}
}
//TRACKING
function incTrack(){
	var tracking = Number(document.getElementById('tracking').value);
	if (tracking == 0 && remEXP >= 250){
		tracking += 1;
		remEXP -= 250;
		document.getElementById('tracking').setAttribute('value', tracking);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (tracking < 25 && remEXP >= 250){
		tracking += 1;
		remEXP -= 250;
		document.getElementById('tracking').setAttribute('value', tracking);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (tracking >= 25 && tracking < 75 && remEXP >= 100){
		tracking += 1;
		remEXP -= 100;
		document.getElementById('tracking').setAttribute('value', tracking);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (tracking >= 75 && tracking < 100 && remEXP >= 250){
		tracking += 1;
		remEXP -= 250;
		document.getElementById('tracking').setAttribute('value', tracking);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (tracking >= 100 && tracking < 150 && remEXP >= 500){
		tracking += 1;
		remEXP -= 500;
		document.getElementById('tracking').setAttribute('value', tracking);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (tracking == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//TRAPPING
function incTrap(){
	var trapping = Number(document.getElementById('trapping').value);
	if (trapping == 0 && remEXP >= 250){
		trapping += 1;
		remEXP -= 250;
		document.getElementById('trapping').setAttribute('value', trapping);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (trapping < 25 && remEXP >= 250){
		trapping += 1;
		remEXP -= 250;
		document.getElementById('trapping').setAttribute('value', trapping);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (trapping >= 25 && trapping < 75 && remEXP >= 100){
		trapping += 1;
		remEXP -= 100;
		document.getElementById('trapping').setAttribute('value', trapping);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (trapping >= 75 && trapping < 100 && remEXP >= 250){
		trapping += 1;
		remEXP -= 250;
		document.getElementById('trapping').setAttribute('value', trapping);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (trapping >= 100 && trapping < 150 && remEXP >= 500){
		trapping += 1;
		remEXP -= 500;
		document.getElementById('trapping').setAttribute('value', trapping);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (trapping == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//FISHING
function incFish(){
	var fishing = Number(document.getElementById('fishing').value);
	if (fishing == 0 && remEXP >= 250){
		fishing += 1;
		remEXP -= 250;
		document.getElementById('fishing').setAttribute('value', fishing);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (fishing < 25 && remEXP >= 250){
		fishing += 1;
		remEXP -= 250;
		document.getElementById('fishing').setAttribute('value', fishing);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (fishing >= 25 && fishing < 75 && remEXP >= 100){
		fishing += 1;
		remEXP -= 100;
		document.getElementById('fishing').setAttribute('value', fishing);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (fishing >= 75 && fishing < 100 && remEXP >= 250){
		fishing += 1;
		remEXP -= 250;
		document.getElementById('fishing').setAttribute('value', fishing);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (fishing >= 100 && fishing < 150 && remEXP >= 500){
		fishing += 1;
		remEXP -= 500;
		document.getElementById('fishing').setAttribute('value', fishing);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (fishing == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//SKATEBOARDING
function incSkate(){
	var skateboard = Number(document.getElementById('skateboard').value);
	if (skateboard == 0 && remEXP >= 250){
		skateboard += 1;
		remEXP -= 250;
		document.getElementById('skateboard').setAttribute('value', skateboard);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (skateboard < 25 && remEXP >= 250){
		skateboard += 1;
		remEXP -= 250;
		document.getElementById('skateboard').setAttribute('value', skateboard);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (skateboard >= 25 && skateboard < 75 && remEXP >= 100){
		skateboard += 1;
		remEXP -= 100;
		document.getElementById('skateboard').setAttribute('value', skateboard);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (skateboard >= 75 && skateboard < 100 && remEXP >= 250){
		skateboard += 1;
		remEXP -= 250;
		document.getElementById('skateboard').setAttribute('value', skateboard);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (skateboard >= 100 && skateboard < 150 && remEXP >= 500){
		skateboard += 1;
		remEXP -= 500;
		document.getElementById('skateboard').setAttribute('value', skateboard);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (skateboard == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//BICYCLE
function incBike(){
	var bicycle = Number(document.getElementById('bicycle').value);
	if (bicycle == 0 && remEXP >= 250){
		bicycle += 1;
		remEXP -= 250;
		document.getElementById('bicycle').setAttribute('value', bicycle);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (bicycle < 25 && remEXP >= 250){
		bicycle += 1;
		remEXP -= 250;
		document.getElementById('bicycle').setAttribute('value', bicycle);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (bicycle >= 25 && bicycle < 75 && remEXP >= 100){
		bicycle += 1;
		remEXP -= 100;
		document.getElementById('bicycle').setAttribute('value', bicycle);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (bicycle >= 75 && bicycle < 100 && remEXP >= 250){
		bicycle += 1;
		remEXP -= 250;
		document.getElementById('bicycle').setAttribute('value', bicycle);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (bicycle >= 100 && bicycle < 150 && remEXP >= 500){
		bicycle += 1;
		remEXP -= 500;
		document.getElementById('bicycle').setAttribute('value', bicycle);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (bicycle == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//HORSEMANSHIP
function incHorse(){
	var horsemanship = Number(document.getElementById('horsemanship').value);
	if (horsemanship == 0 && remEXP >= 250){
		horsemanship += 1;
		remEXP -= 250;
		document.getElementById('horsemanship').setAttribute('value', horsemanship);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (horsemanship < 25 && remEXP >= 250){
		horsemanship += 1;
		remEXP -= 250;
		document.getElementById('horsemanship').setAttribute('value', horsemanship);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (horsemanship >= 25 && horsemanship < 75 && remEXP >= 100){
		horsemanship += 1;
		remEXP -= 100;
		document.getElementById('horsemanship').setAttribute('value', horsemanship);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (horsemanship >= 75 && horsemanship < 100 && remEXP >= 250){
		horsemanship += 1;
		remEXP -= 250;
		document.getElementById('horsemanship').setAttribute('value', horsemanship);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (horsemanship >= 100 && horsemanship < 150 && remEXP >= 500){
		horsemanship += 1;
		remEXP -= 500;
		document.getElementById('horsemanship').setAttribute('value', horsemanship);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (horsemanship == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//AUTOMOBILE
function incAuto(){
	var automobile = Number(document.getElementById('automobile').value);
	if (automobile == 0 && remEXP >= 250){
		automobile += 1;
		remEXP -= 250;
		document.getElementById('automobile').setAttribute('value', automobile);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (automobile < 25 && remEXP >= 250){
		automobile += 1;
		remEXP -= 250;
		document.getElementById('automobile').setAttribute('value', automobile);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (automobile >= 25 && automobile < 75 && remEXP >= 100){
		automobile += 1;
		remEXP -= 100;
		document.getElementById('automobile').setAttribute('value', automobile);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (automobile >= 75 && automobile < 100 && remEXP >= 250){
		automobile += 1;
		remEXP -= 250;
		document.getElementById('automobile').setAttribute('value', automobile);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (automobile >= 100 && automobile < 150 && remEXP >= 500){
		automobile += 1;
		remEXP -= 500;
		document.getElementById('automobile').setAttribute('value', automobile);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (automobile == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//MOTORCYCLE
function incMotorcycle(){
	var motorcycle = Number(document.getElementById('motorcycle').value);
	if (motorcycle == 0 && remEXP >= 250){
		motorcycle += 1;
		remEXP -= 250;
		document.getElementById('motorcycle').setAttribute('value', motorcycle);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (motorcycle < 25 && remEXP >= 250){
		motorcycle += 1;
		remEXP -= 250;
		document.getElementById('motorcycle').setAttribute('value', motorcycle);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (motorcycle >= 25 && motorcycle < 75 && remEXP >= 100){
		motorcycle += 1;
		remEXP -= 100;
		document.getElementById('motorcycle').setAttribute('value', motorcycle);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (motorcycle >= 75 && motorcycle < 100 && remEXP >= 250){
		motorcycle += 1;
		remEXP -= 250;
		document.getElementById('motorcycle').setAttribute('value', motorcycle);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (motorcycle >= 100 && motorcycle < 150 && remEXP >= 500){
		motorcycle += 1;
		remEXP -= 500;
		document.getElementById('motorcycle').setAttribute('value', motorcycle);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (motorcycle == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//JET SKI
function incJetSki(){
	var jetSki = Number(document.getElementById('jetSki').value);
	if (jetSki == 0 && remEXP >= 250){
		jetSki += 1;
		remEXP -= 250;
		document.getElementById('jetSki').setAttribute('value', jetSki);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (jetSki < 25 && remEXP >= 250){
		jetSki += 1;
		remEXP -= 250;
		document.getElementById('jetSki').setAttribute('value', jetSki);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (jetSki >= 25 && jetSki < 75 && remEXP >= 100){
		jetSki += 1;
		remEXP -= 100;
		document.getElementById('jetSki').setAttribute('value', jetSki);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (jetSki >= 75 && jetSki < 100 && remEXP >= 250){
		jetSki += 1;
		remEXP -= 250;
		document.getElementById('jetSki').setAttribute('value', jetSki);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (jetSki >= 100 && jetSki < 150 && remEXP >= 500){
		jetSki += 1;
		remEXP -= 500;
		document.getElementById('jetSki').setAttribute('value', jetSki);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (jetSki == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//SURVEILLANCE
function incSurvey(){
	var surveillance = Number(document.getElementById('surveillance').value);
	if (surveillance == 0 && remEXP >= 250){
		surveillance += 1;
		remEXP -= 250;
		document.getElementById('surveillance').setAttribute('value', surveillance);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (surveillance < 25 && remEXP >= 250){
		surveillance += 1;
		remEXP -= 250;
		document.getElementById('surveillance').setAttribute('value', surveillance);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (surveillance >= 25 && surveillance < 75 && remEXP >= 100){
		surveillance += 1;
		remEXP -= 100;
		document.getElementById('surveillance').setAttribute('value', surveillance);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (surveillance >= 75 && surveillance < 100 && remEXP >= 250){
		surveillance += 1;
		remEXP -= 250;
		document.getElementById('surveillance').setAttribute('value', surveillance);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (surveillance >= 100 && surveillance < 150 && remEXP >= 500){
		surveillance += 1;
		remEXP -= 500;
		document.getElementById('surveillance').setAttribute('value', surveillance);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (surveillance == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//FORENSICS
function incForen(){
	var forensics = Number(document.getElementById('forensics').value);
	if (forensics == 0 && remEXP >= 500){
		forensics += 1;
		remEXP -= 500;
		document.getElementById('forensics').setAttribute('value', forensics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (forensics < 25 && remEXP >= 500){
		forensics += 1;
		remEXP -= 500;
		document.getElementById('forensics').setAttribute('value', forensics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (forensics >= 25 && forensics < 75 && remEXP >= 250){
		forensics += 1;
		remEXP -= 250;
		document.getElementById('forensics').setAttribute('value', forensics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (forensics >= 75 && remEXP >= 500){
		forensics += 1;
		remEXP -= 500;
		document.getElementById('forensics').setAttribute('value', forensics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (forensics == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//SAILING
function incSail(){
	var sailing = Number(document.getElementById('sailing').value);
	if (sailing == 0 && remEXP >= 250){
		sailing += 1;
		remEXP -= 250;
		document.getElementById('sailing').setAttribute('value', sailing);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (sailing < 25 && remEXP >= 250){
		sailing += 1;
		remEXP -= 250;
		document.getElementById('sailing').setAttribute('value', sailing);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (sailing >= 25 && sailing < 75 && remEXP >= 100){
		sailing += 1;
		remEXP -= 100;
		document.getElementById('sailing').setAttribute('value', sailing);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (sailing >= 75 && sailing < 100 && remEXP >= 250){
		sailing += 1;
		remEXP -= 250;
		document.getElementById('sailing').setAttribute('value', sailing);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (sailing >= 100 && sailing < 150 && remEXP >= 500){
		sailing += 1;
		remEXP -= 500;
		document.getElementById('sailing').setAttribute('value', sailing);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (sailing == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//BOATING
function incBoat(){
	var boating = Number(document.getElementById('boating').value);
	if (boating == 0 && remEXP >= 250){
		boating += 1;
		remEXP -= 250;
		document.getElementById('boating').setAttribute('value', boating);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (boating < 25 && remEXP >= 250){
		boating += 1;
		remEXP -= 250;
		document.getElementById('boating').setAttribute('value', boating);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (boating >= 25 && boating < 75 && remEXP >= 100){
		boating += 1;
		remEXP -= 100;
		document.getElementById('boating').setAttribute('value', boating);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (boating >= 75 && boating < 100 && remEXP >= 250){
		boating += 1;
		remEXP -= 250;
		document.getElementById('boating').setAttribute('value', boating);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (boating >= 100 && surveillance < 150 && remEXP >= 500){
		boating += 1;
		remEXP -= 500;
		document.getElementById('boating').setAttribute('value', boating);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (boating == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//PICKPOCKET
function incPick(){
	var pickpocket = Number(document.getElementById('pickpocket').value);
	if (pickpocket == 0 && remEXP >= 250){
		pickpocket += 1;
		remEXP -= 250;
		document.getElementById('pickpocket').setAttribute('value', pickpocket);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (pickpocket < 25 && remEXP >= 250){
		pickpocket += 1;
		remEXP -= 250;
		document.getElementById('pickpocket').setAttribute('value', pickpocket);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (pickpocket >= 25 && pickpocket < 75 && remEXP >= 100){
		pickpocket += 1;
		remEXP -= 100;
		document.getElementById('pickpocket').setAttribute('value', pickpocket);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (pickpocket >= 75 && pickpocket < 100 && remEXP >= 250){
		pickpocket += 1;
		remEXP -= 250;
		document.getElementById('pickpocket').setAttribute('value', pickpocket);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (pickpocket >= 100 && pickpocket < 150 && remEXP >= 500){
		pickpocket += 1;
		remEXP -= 500;
		document.getElementById('pickpocket').setAttribute('value', pickpocket);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (pickpocket == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//LOCKPICK
function incLock(){
	var lockpick = Number(document.getElementById('lockpick').value);
	if (lockpick == 0 && remEXP >= 250){
		lockpick += 1;
		remEXP -= 250;
		document.getElementById('lockpick').setAttribute('value', lockpick);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (lockpick < 25 && remEXP >= 250){
		lockpick += 1;
		remEXP -= 250;
		document.getElementById('lockpick').setAttribute('value', lockpick);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (lockpick >= 25 && lockpick < 75 && remEXP >= 100){
		lockpick += 1;
		remEXP -= 100;
		document.getElementById('lockpick').setAttribute('value', lockpick);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (lockpick >= 75 && lockpick < 100 && remEXP >= 250){
		lockpick += 1;
		remEXP -= 250;
		document.getElementById('lockpick').setAttribute('value', lockpick);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (lockpick >= 100 && lockpick < 150 && remEXP >= 500){
		lockpick += 1;
		remEXP -= 500;
		document.getElementById('lockpick').setAttribute('value', lockpick);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (lockpick == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//MULTI GEARED VEHICLES
function incMGV(){
	var MGV = Number(document.getElementById('MGV').value);
	if (MGV == 0 && remEXP >= 500){
		MGV += 1;
		remEXP -= 500;
		document.getElementById('MGV').setAttribute('value', MGV);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (MGV < 25 && remEXP >= 500){
		MGV += 1;
		remEXP -= 500;
		document.getElementById('MGV').setAttribute('value', MGV);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (MGV >= 25 && MGV < 75 && remEXP >= 250){
		MGV += 1;
		remEXP -= 250;
		document.getElementById('MGV').setAttribute('value', MGV);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (MGV >= 75 && MGV < 100 && remEXP >= 500){
		MGV += 1;
		remEXP -= 500;
		document.getElementById('MGV').setAttribute('value', MGV);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (MGV >= 100 && MGV < 150 && remEXP >= 1000){
		MGV += 1;
		remEXP -= 1000;
		document.getElementById('MGV').setAttribute('value', MGV);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (MGV == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//HEAVY EQUIPMENT
function incHvyEquip(){
	var hvyEquip = Number(document.getElementById('hvyEquip').value);
	if (hvyEquip == 0 && remEXP >= 500){
		hvyEquip += 1;
		remEXP -= 500;
		document.getElementById('hvyEquip').setAttribute('value', hvyEquip);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (hvyEquip < 25 && remEXP >= 500){
		hvyEquip += 1;
		remEXP -= 500;
		document.getElementById('hvyEquip').setAttribute('value', hvyEquip);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (hvyEquip >= 25 && hvyEquip < 75 && remEXP >= 250){
		hvyEquip += 1;
		remEXP -= 250;
		document.getElementById('hvyEquip').setAttribute('value', hvyEquip);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (hvyEquip >= 75 && hvyEquip < 100 && remEXP >= 500){
		hvyEquip += 1;
		remEXP -= 500;
		document.getElementById('hvyEquip').setAttribute('value', hvyEquip);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (hvyEquip >= 100 && hvyEquip < 150 && remEXP >= 1000){
		hvyEquip += 1;
		remEXP -= 1000;
		document.getElementById('hvyEquip').setAttribute('value', hvyEquip);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (hvyEquip == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//HELICOPTERS
function incHeli(){
	var helicopters = Number(document.getElementById('helicopters').value);
	if (helicopters == 0 && remEXP >= 500){
		helicopters += 1;
		remEXP -= 500;
		document.getElementById('helicopters').setAttribute('value', helicopters);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (helicopters < 25 && remEXP >= 500){
		helicopters += 1;
		remEXP -= 500;
		document.getElementById('helicopters').setAttribute('value', helicopters);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (helicopters >= 25 && helicopters < 75 && remEXP >= 100){
		helicopters += 1;
		remEXP -= 250;
		document.getElementById('helicopters').setAttribute('value', helicopters);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (helicopters >= 75 && helicopters < 100 && remEXP >= 500){
		helicopters += 1;
		remEXP -= 500;
		document.getElementById('helicopters').setAttribute('value', helicopters);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (helicopters >= 100 && helicopters < 150 && remEXP >= 1000){
		helicopters += 1;
		remEXP -= 1000;
		document.getElementById('helicopters').setAttribute('value', helicopters);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (helicopters == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//AIRPLANES
function incPlane(){
	var airplanes = Number(document.getElementById('airplanes').value);
	if (airplanes == 0 && remEXP >= 500){
		airplanes += 1;
		remEXP -= 500;
		document.getElementById('airplanes').setAttribute('value', airplanes);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (airplanes < 25 && remEXP >= 500){
		airplanes += 1;
		remEXP -= 500;
		document.getElementById('airplanes').setAttribute('value', airplanes);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (airplanes >= 25 && airplanes < 75 && remEXP >= 100){
		airplanes += 1;
		remEXP -= 250;
		document.getElementById('airplanes').setAttribute('value', airplanes);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (airplanes >= 75 && airplanes < 100 && remEXP >= 500){
		airplanes += 1;
		remEXP -= 500;
		document.getElementById('airplanes').setAttribute('value', airplanes);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (airplanes >= 100 && airplanes < 150 && remEXP >= 1000){
		airplanes += 1;
		remEXP -= 1000;
		document.getElementById('airplanes').setAttribute('value', airplanes);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (airplanes == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//COMPUTERS
function incComp(){
	var computers = Number(document.getElementById('computers').value);
	if (computers == 0 && remEXP >= 250){
		computers += 1;
		remEXP -= 250;
		document.getElementById('computers').setAttribute('value', computers);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (computers < 25 && remEXP >= 250){
		computers += 1;
		remEXP -= 250;
		document.getElementById('computers').setAttribute('value', computers);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (computers >= 25 && computers < 75 && remEXP >= 100){
		computers += 1;
		remEXP -= 100;
		document.getElementById('computers').setAttribute('value', computers);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (computers >= 75 && computers < 100 && remEXP >= 250){
		computers += 1;
		remEXP -= 250;
		document.getElementById('computers').setAttribute('value', computers);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (computers >= 100 && computers < 150 && remEXP >= 500){
		computers += 1;
		remEXP -= 500;
		document.getElementById('computers').setAttribute('value', computers);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (computers == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
	if (document.getElementById('computers').value >= 75){
		document.getElementById("programTrnBtn").disabled = false;
	}
}
//PROGRAMMING
function incProgram(){
	var programming = Number(document.getElementById('programming').value);
if (document.getElementById('computers').value >= 75){
	
	if (programming == 0 && remEXP >= 500){
		programming += 1;
		remEXP -= 500;
		document.getElementById('programming').setAttribute('value', programming);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (programming < 25 && remEXP >= 500){
		programming += 1;
		remEXP -= 500;
		document.getElementById('programming').setAttribute('value', programming);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (programming >= 25 && programming < 75 && remEXP >= 100){
		programming += 1;
		remEXP -= 250;
		document.getElementById('programming').setAttribute('value', programming);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (programming >= 75 && programming < 100 && remEXP >= 500){
		programming += 1;
		remEXP -= 500;
		document.getElementById('programming').setAttribute('value', programming);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (programming >= 100 && programming < 150 && remEXP >= 1000){
		programming += 1;
		remEXP -= 1000;
		document.getElementById('programming').setAttribute('value', programming);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (programming == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
	
} else {alert("COMPUTERS MUST BE 75 OR GREATER");}
}
//MECHANICS
function incMech(){
	var mechanics = Number(document.getElementById('mechanics').value);
	if (mechanics == 0 && remEXP >= 250){
		mechanics += 1;
		remEXP -= 250;
		document.getElementById('mechanics').setAttribute('value', mechanics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (mechanics < 25 && remEXP >= 250){
		mechanics += 1;
		remEXP -= 250;
		document.getElementById('mechanics').setAttribute('value', mechanics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (mechanics >= 25 && mechanics < 75 && remEXP >= 100){
		mechanics += 1;
		remEXP -= 100;
		document.getElementById('mechanics').setAttribute('value', mechanics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (mechanics >= 75 && mechanics < 100 && remEXP >= 250){
		mechanics += 1;
		remEXP -= 250;
		document.getElementById('mechanics').setAttribute('value', mechanics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (mechanics >= 100 && mechanics < 150 && remEXP >= 500){
		computers += 1;
		remEXP -= 500;
		document.getElementById('mechanics').setAttribute('value', mechanics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (mechanics == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//ELECTRICAL
function incElect(){
	var electrical = Number(document.getElementById('electrical').value);
	if (electrical == 0 && remEXP >= 250){
		electrical += 1;
		remEXP -= 250;
		document.getElementById('electrical').setAttribute('value', electrical);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (electrical < 25 && remEXP >= 250){
		electrical += 1;
		remEXP -= 250;
		document.getElementById('electrical').setAttribute('value', electrical);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (electrical >= 25 && electrical < 75 && remEXP >= 100){
		electrical += 1;
		remEXP -= 100;
		document.getElementById('electrical').setAttribute('value', electrical);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (electrical >= 75 && electrical < 100 && remEXP >= 250){
		electrical += 1;
		remEXP -= 250;
		document.getElementById('electrical').setAttribute('value', electrical);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (electrical >= 100 && electrical < 150 && remEXP >= 500){
		electrical += 1;
		remEXP -= 500;
		document.getElementById('electrical').setAttribute('value', electrical);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (electrical == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//RADIO SYSTEMS
function incRadio(){
	var radioSys = Number(document.getElementById('radioSys').value);
	if (radioSys == 0 && remEXP >= 250){
		radioSys += 1;
		remEXP -= 250;
		document.getElementById('radioSys').setAttribute('value', radioSys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (radioSys < 25 && remEXP >= 250){
		radioSys += 1;
		remEXP -= 250;
		document.getElementById('radioSys').setAttribute('value', radioSys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (radioSys >= 25 && radioSys < 75 && remEXP >= 100){
		radioSys += 1;
		remEXP -= 100;
		document.getElementById('radioSys').setAttribute('value', radioSys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (radioSys >= 75 && radioSys < 100 && remEXP >= 250){
		radioSys += 1;
		remEXP -= 250;
		document.getElementById('radioSys').setAttribute('value', radioSys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (radioSys >= 100 && radioSys < 150 && remEXP >= 500){
		radioSys += 1;
		remEXP -= 500;
		document.getElementById('radioSys').setAttribute('value', radioSys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (radioSys == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//LITERACY
function incLiteracy(){
	var literacy = Number(document.getElementById('literacy').value);
	if (literacy == 0 && remEXP >= 250){
		literacy += 1;
		remEXP -= 250;
		document.getElementById('literacy').setAttribute('value', literacy);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (literacy < 25 && remEXP >= 250){
		literacy += 1;
		remEXP -= 250;
		document.getElementById('literacy').setAttribute('value', literacy);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (literacy >= 25 && literacy < 75 && remEXP >= 100){
		literacy += 1;
		remEXP -= 100;
		document.getElementById('literacy').setAttribute('value', literacy);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (literacy >= 75 && literacy < 100 && remEXP >= 250){
		literacy += 1;
		remEXP -= 250;
		document.getElementById('literacy').setAttribute('value', literacy);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (literacy >= 100 && literacy < 150 && remEXP >= 500){
		literacy += 1;
		remEXP -= 500;
		document.getElementById('literacy').setAttribute('value', literacy);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (literacy == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//HISTORY
function incHistory(){
	var history = Number(document.getElementById('history').value);
	if (history == 0 && remEXP >= 250){
		history += 1;
		remEXP -= 250;
		document.getElementById('history').setAttribute('value', history);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (history < 25 && remEXP >= 250){
		history += 1;
		remEXP -= 250;
		document.getElementById('history').setAttribute('value', history);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (history >= 25 && history < 75 && remEXP >= 100){
		history += 1;
		remEXP -= 100;
		document.getElementById('history').setAttribute('value', history);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (history >= 75 && history < 100 && remEXP >= 250){
		history += 1;
		remEXP -= 250;
		document.getElementById('history').setAttribute('value', history);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (history >= 100 && history < 150 && remEXP >= 500){
		history += 1;
		remEXP -= 500;
		document.getElementById('history').setAttribute('value', history);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (history == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//CONSTRUCTION
function incConstruct(){
	var construction = Number(document.getElementById('construction').value);
	if (construction == 0 && remEXP >= 500){
		construction += 1;
		remEXP -= 500;
		document.getElementById('construction').setAttribute('value', construction);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (construction < 25 && remEXP >= 500){
		construction += 1;
		remEXP -= 500;
		document.getElementById('construction').setAttribute('value', construction);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (construction >= 25 && construction < 75 && remEXP >= 100){
		construction += 1;
		remEXP -= 250;
		document.getElementById('construction').setAttribute('value', construction);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (construction >= 75 && construction < 100 && remEXP >= 500){
		construction += 1;
		remEXP -= 500;
		document.getElementById('construction').setAttribute('value', construction);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (construction >= 100 && construction < 150 && remEXP >= 1000){
		construction += 1;
		remEXP -= 1000;
		document.getElementById('construction').setAttribute('value', construction);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (construction == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//MATH
function incMath(){
	var math = Number(document.getElementById('math').value);
	if (math == 0 && remEXP >= 250){
		math += 1;
		remEXP -= 250;
		document.getElementById('math').setAttribute('value', math);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (math < 25 && remEXP >= 250){
		math += 1;
		remEXP -= 250;
		document.getElementById('math').setAttribute('value', math);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (math >= 25 && math < 75 && remEXP >= 100){
		math += 1;
		remEXP -= 100;
		document.getElementById('math').setAttribute('value', math);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (math >= 75 && math < 100 && remEXP >= 250){
		math += 1;
		remEXP -= 250;
		document.getElementById('math').setAttribute('value', math);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (math >= 100 && math < 150 && remEXP >= 500){
		math += 1;
		remEXP -= 500;
		document.getElementById('math').setAttribute('value', math);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (math == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//PHYSICS
function incPhysics(){
	var physics = Number(document.getElementById('physics').value);
	if (physics == 0 && remEXP >= 500){
		physics += 1;
		remEXP -= 500;
		document.getElementById('physics').setAttribute('value', physics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (physics < 25 && remEXP >= 500){
		physics += 1;
		remEXP -= 500;
		document.getElementById('physics').setAttribute('value', physics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (physics >= 25 && physics < 75 && remEXP >= 100){
		physics += 1;
		remEXP -= 250;
		document.getElementById('physics').setAttribute('value', physics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (physics >= 75 && physics < 100 && remEXP >= 500){
		physics += 1;
		remEXP -= 500;
		document.getElementById('physics').setAttribute('value', physics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (physics >= 100 && physics < 150 && remEXP >= 1000){
		physics += 1;
		remEXP -= 1000;
		document.getElementById('physics').setAttribute('value', physics);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (physics == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//BIOLOGY
function incBio(){
	var biology = Number(document.getElementById('biology').value);
	if (biology == 0 && remEXP >= 250){
		biology += 1;
		remEXP -= 250;
		document.getElementById('biology').setAttribute('value', biology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (biology < 25 && remEXP >= 250){
		biology += 1;
		remEXP -= 250;
		document.getElementById('biology').setAttribute('value', biology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (biology >= 25 && biology < 75 && remEXP >= 100){
		biology += 1;
		remEXP -= 100;
		document.getElementById('biology').setAttribute('value', biology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (biology >= 75 && biology < 100 && remEXP >= 250){
		biology += 1;
		remEXP -= 250;
		document.getElementById('biology').setAttribute('value', biology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (biology >= 100 && biology < 150 && remEXP >= 500){
		biology += 1;
		remEXP -= 500;
		document.getElementById('biology').setAttribute('value', biology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (biology == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
	if (document.getElementById('biology').value >= 50 && document.getElementById('chemistry').value >= 50){
		document.getElementById('toxicTrnBtn').disabled = false;
		document.getElementById('pharmaTrnBtn').disabled = false;
	}
	if (document.getElementById('biology').value >= 50 && document.getElementById('firstAid').value >= 75){
		document.getElementById('doctorTrnBtn').disabled = false;
	}
}
//BOTANY
function incBot(){
	var botany = Number(document.getElementById('botany').value);
	if (botany == 0 && remEXP >= 250){
		botany += 1;
		remEXP -= 250;
		document.getElementById('botany').setAttribute('value', botany);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (botany < 25 && remEXP >= 250){
		botany += 1;
		remEXP -= 250;
		document.getElementById('botany').setAttribute('value', botany);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (botany >= 25 && botany < 75 && remEXP >= 100){
		botany += 1;
		remEXP -= 100;
		document.getElementById('botany').setAttribute('value', botany);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (botany >= 75 && botany < 100 && remEXP >= 250){
		botany += 1;
		remEXP -= 250;
		document.getElementById('botany').setAttribute('value', botany);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (botany >= 100 && botany < 150 && remEXP >= 500){
		botany += 1;
		remEXP -= 500;
		document.getElementById('botany').setAttribute('value', botany);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (biology == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//LAW
function incLaw(){
	var law = Number(document.getElementById('law').value);
	if (law == 0 && remEXP >= 500){
		law += 1;
		remEXP -= 500;
		document.getElementById('law').setAttribute('value', law);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (law < 25 && remEXP >= 500){
		law += 1;
		remEXP -= 500;
		document.getElementById('law').setAttribute('value', law);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (law >= 25 && law < 75 && remEXP >= 100){
		law += 1;
		remEXP -= 250;
		document.getElementById('law').setAttribute('value', law);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (law >= 75 && law < 100 && remEXP >= 500){
		law += 1;
		remEXP -= 500;
		document.getElementById('law').setAttribute('value', law);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (law >= 100 && law < 150 && remEXP >= 1000){
		law += 1;
		remEXP -= 1000;
		document.getElementById('law').setAttribute('value', law);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (law == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
//CHEMISTRY
function incChem(){
	var chemistry = Number(document.getElementById('chemistry').value);
	if (chemistry == 0 && remEXP >= 250){
		chemistry += 1;
		remEXP -= 250;
		document.getElementById('chemistry').setAttribute('value', chemistry);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (chemistry < 25 && remEXP >= 250){
		chemistry += 1;
		remEXP -= 250;
		document.getElementById('chemistry').setAttribute('value', chemistry);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (chemistry >= 25 && chemistry < 75 && remEXP >= 100){
		chemistry += 1;
		remEXP -= 100;
		document.getElementById('chemistry').setAttribute('value', chemistry);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (chemistry >= 75 && chemistry < 100 && remEXP >= 250){
		chemistry += 1;
		remEXP -= 250;
		document.getElementById('chemistry').setAttribute('value', chemistry);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (chemistry >= 100 && chemistry < 150 && remEXP >= 500){
		chemistry += 1;
		remEXP -= 500;
		document.getElementById('chemistry').setAttribute('value', chemistry);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (chemistry == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
	if (document.getElementById('biology').value >= 50 && document.getElementById('chemistry').value >= 50){
		document.getElementById('toxicTrnBtn').disabled = false;
		document.getElementById('pharmaTrnBtn').disabled = false;
	}
}
//TOXICOLOGY
function incToxic(){
	var toxicology = Number(document.getElementById('toxicology').value);
if (document.getElementById('biology').value >= 50 && document.getElementById('chemistry').value >= 50){

	if (toxicology == 0 && remEXP >= 500){
		toxicology += 1;
		remEXP -= 500;
		document.getElementById('toxicology').setAttribute('value', toxicology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (toxicology < 25 && remEXP >= 500){
		toxicology += 1;
		remEXP -= 500;
		document.getElementById('toxicology').setAttribute('value', toxicology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (toxicology >= 25 && toxicology < 75 && remEXP >= 100){
		toxicology += 1;
		remEXP -= 250;
		document.getElementById('toxicology').setAttribute('value', toxicology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (toxicology >= 75 && toxicology < 100 && remEXP >= 500){
		toxicology += 1;
		remEXP -= 500;
		document.getElementById('toxicology').setAttribute('value', toxicology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (toxicology >= 100 && toxicology < 150 && remEXP >= 1000){
		toxicology += 1;
		remEXP -= 1000;
		document.getElementById('toxicology').setAttribute('value', toxicology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (toxicology == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}

} else {alert("BIOLOGY & CHEMISTRY MUST BE 50 OR GREATER");}
}
//PHARMACOLOGY
function incPharma(){
	var pharmacology = Number(document.getElementById('pharmacology').value);
if (document.getElementById('biology').value >= 50 && document.getElementById('chemistry').value >= 50){
	if (pharmacology == 0 && remEXP >= 500){
		pharmacology += 1;
		remEXP -= 500;
		document.getElementById('pharmacology').setAttribute('value', pharmacology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (pharmacology < 25 && remEXP >= 500){
		pharmacology += 1;
		remEXP -= 500;
		document.getElementById('pharmacology').setAttribute('value', pharmacology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (pharmacology >= 25 && pharmacology < 75 && remEXP >= 100){
		pharmacology += 1;
		remEXP -= 250;
		document.getElementById('pharmacology').setAttribute('value', pharmacology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (pharmacology >= 75 && pharmacology < 100 && remEXP >= 500){
		pharmacology += 1;
		remEXP -= 500;
		document.getElementById('pharmacology').setAttribute('value', pharmacology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (pharmacology >= 100 && pharmacology < 150 && remEXP >= 1000){
		pharmacology += 1;
		remEXP -= 1000;
		document.getElementById('pharmacology').setAttribute('value', pharmacology);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (pharmacology == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
} else {alert("BIOLOGY & CHEMISTRY MUST BE 50 OR GREATER");}
}
//DOCTOR
function incDoctor(){
if (document.getElementById('biology').value >= 50 && document.getElementById('firstAid').value >= 75){
	var doctor = Number(document.getElementById('doctor').value);
	if (doctor == 0 && remEXP >= 500){
		doctor += 1;
		remEXP -= 500;
		document.getElementById('doctor').setAttribute('value', doctor);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (doctor < 25 && remEXP >= 500){
		doctor += 1;
		remEXP -= 500;
		document.getElementById('doctor').setAttribute('value', doctor);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (doctor >= 25 && doctor < 75 && remEXP >= 100){
		doctor += 1;
		remEXP -= 250;
		document.getElementById('doctor').setAttribute('value', doctor);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (doctor >= 75 && doctor < 100 && remEXP >= 500){
		doctor += 1;
		remEXP -= 500;
		document.getElementById('doctor').setAttribute('value', doctor);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (doctor >= 100 && doctor < 150 && remEXP >= 1000){
		doctor += 1;
		remEXP -= 1000;
		document.getElementById('doctor').setAttribute('value', doctor);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (doctor == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
} else {alert("BIOLOGY MUST BE 50 OR GREATER & FIRST AID HIGHER THAN 75");}
}

//LANGUAGES

if(document.getElementById('lang1').value != ''){
	var element = document.getElementById('langBtn1');
    element.innerHTML = "<button onclick='incLang1();' class='button' type='button'>INC</button>";
}
if(document.getElementById('lang2').value != ''){
	var element = document.getElementById('langBtn2');
    element.innerHTML = "<button onclick='incLang2();' class='button' type='button'>INC</button>";
}
if(document.getElementById('lang3').value != ''){
	var element = document.getElementById('langBtn3');
    element.innerHTML = "<button onclick='incLang3();' class='button' type='button'>INC</button>";
}
if(document.getElementById('lang4').value != ''){
	var element = document.getElementById('langBtn4');
    element.innerHTML = "<button onclick='incLang4();' class='button' type='button'>INC</button>";
}
if(document.getElementById('lit1').value != ''){
	var element = document.getElementById('litBtn1');
    element.innerHTML = "<button onclick='incLit1();' class='button' type='button'>INC</button>";
}''
if(document.getElementById('lit2').value != ''){
	var element = document.getElementById('litBtn2');
    element.innerHTML = "<button onclick='incLit2();' class='button' type='button'>INC</button>";
}
if(document.getElementById('lit3').value != ''){
	var element = document.getElementById('litBtn3');
    element.innerHTML = "<button onclick='incLit3();' class='button' type='button'>INC</button>";
}
if(document.getElementById('lit4').value != ''){
	var element = document.getElementById('litBtn4');
    element.innerHTML = "<button onclick='incLit4();' class='button' type='button'>INC</button>";
}

function addLang(){
if (remEXP >= 250){
      do {
        remEXP -= 250;
        document.getElementById("lang" + n).setAttribute("value", language);
        document.getElementById("langRate" + n).setAttribute("value", 1);
        var element = document.getElementById('langBtn' + n);
        element.innerHTML = "<button onclick='incLang" + n + "();' class='button' type='button'>INC</button>";
        document.getElementById('remEXP').setAttribute("value", remEXP);
        document.getElementById('EXPpool').setAttribute("value", remEXP);
        break;
  } while (remEXP > 250);
} else { alert("NOT ENOUGH EXPERIENCE LEFT TO ADD THIS");}
}

function incLang1(){
	var langRate1 = Number(document.getElementById('langRate1').value);
	if (langRate1 < 25 && remEXP >= 250){
		langRate1 += 1;
		remEXP -= 250;
		document.getElementById('langRate1').setAttribute('value', langRate1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate1 >= 25 && langRate1 < 75 && remEXP >= 100){
		langRate1 += 1;
		remEXP -= 100;
		document.getElementById('langRate1').setAttribute('value', langRate1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate1 >= 75 && langRate1 < 100 && remEXP >= 250){
		langRate1 += 1;
		remEXP -= 250;
		document.getElementById('langRate1').setAttribute('value', langRate1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate1 >= 100 && langRate1 < 150 && remEXP >= 500){
		langRate1 += 1;
		remEXP -= 500;
		document.getElementById('langRate1').setAttribute('value', langRate1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate1 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}

function incLang2(){
	var langRate2 = Number(document.getElementById('langRate2').value);
	if (langRate2 < 25 && remEXP >= 250){
		langRate2 += 1;
		remEXP -= 250;
		document.getElementById('langRate2').setAttribute('value', langRate2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate2 >= 25 && langRate2 < 75 && remEXP >= 100){
		langRate2 += 1;
		remEXP -= 100;
		document.getElementById('langRate2').setAttribute('value', langRate2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate2 >= 75 && langRate2 < 100 && remEXP >= 250){
		langRate2 += 1;
		remEXP -= 250;
		document.getElementById('langRate2').setAttribute('value', langRate2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate2 >= 100 && langRate2 < 150 && remEXP >= 500){
		langRate2 += 1;
		remEXP -= 500;
		document.getElementById('langRate2').setAttribute('value', langRate2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate2 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}

function incLang3(){
	var langRate3 = Number(document.getElementById('langRate3').value);
 	if (langRate3 < 25 && remEXP >= 250){
		langRate3 += 1;
		remEXP -= 250;
		document.getElementById('langRate3').setAttribute('value', langRate3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate3 >= 25 && langRate3 < 75 && remEXP >= 100){
		langRate3 += 1;
		remEXP -= 100;
		document.getElementById('langRate3').setAttribute('value', langRate3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate3 >= 75 && langRate3 < 100 && remEXP >= 250){
		langRate3 += 1;
		remEXP -= 250;
		document.getElementById('langRate3').setAttribute('value', langRate3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate3 >= 100 && langRate3 < 150 && remEXP >= 500){
		langRate3 += 1;
		remEXP -= 500;
		document.getElementById('langRate3').setAttribute('value', langRate3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate3 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}

function incLang4(){
	var langRate4 = Number(document.getElementById('langRate4').value);
	if (langRate4 < 25 && remEXP >= 250){
		langRate4 += 1;
		remEXP -= 250;
		document.getElementById('langRate4').setAttribute('value', langRate4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate4 >= 25 && langRate4 < 75 && remEXP >= 100){
		langRate4 += 1;
		remEXP -= 100;
		document.getElementById('langRate4').setAttribute('value', langRate4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate4 >= 75 && langRate4 < 100 && remEXP >= 250){
		langRate4 += 1;
		remEXP -= 250;
		document.getElementById('langRate4').setAttribute('value', langRate4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate4 >= 100 && langRate4 < 150 && remEXP >= 500){
		langRate4 += 1;
		remEXP -= 500;
		document.getElementById('langRate4').setAttribute('value', langRate4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (langRate4 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}

function addLit(){
if (remEXP >= 250){
      do {
        remEXP -= 250;
        document.getElementById("lit" + m).setAttribute("value", lit);
        document.getElementById("litRate" + m).setAttribute("value", 1);
        var element = document.getElementById('litBtn' + m);
        element.innerHTML = "<button onclick='incLit" + m + "();' class='button' type='button'>INC</button>";
        document.getElementById('remEXP').setAttribute("value", remEXP);
        document.getElementById('EXPpool').setAttribute("value", remEXP);
        break;
  } while (remEXP > 250);
} else { alert("NOT ENOUGH EXPERIENCE LEFT TO ADD THIS");}
}

function incLit1(){
	var litRate1 = Number(document.getElementById('litRate1').value);
	if (litRate1 < 25 && remEXP >= 250){
		litRate1 += 1;
		remEXP -= 250;
		document.getElementById('litRate1').setAttribute('value', litRate1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate1 >= 25 && litRate1 < 75 && remEXP >= 100){
		litRate1 += 1;
		remEXP -= 100;
		document.getElementById('litRate1').setAttribute('value', lititRate1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate1 >= 75 && litRate1 < 100 && remEXP >= 250){
		litRate1 += 1;
		remEXP -= 250;
		document.getElementById('litRate1').setAttribute('value', litRate1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate1 >= 100 && litRate1 < 150 && remEXP >= 500){
		litRate1 += 1;
		remEXP -= 500;
		document.getElementById('litRate1').setAttribute('value', litRate1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate1 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function incLit2(){
	var litRate2 = Number(document.getElementById('litRate2').value);
	if (litRate2 < 25 && remEXP >= 250){
		litRate2 += 1;
		remEXP -= 250;
		document.getElementById('litRate2').setAttribute('value', litRate2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate2 >= 25 && litRate2 < 75 && remEXP >= 100){
		litRate2 += 1;
		remEXP -= 100;
		document.getElementById('litRate2').setAttribute('value', lititRate2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate2 >= 75 && litRate2 < 100 && remEXP >= 250){
		litRate2 += 1;
		remEXP -= 250;
		document.getElementById('litRate2').setAttribute('value', litRate2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate2 >= 100 && litRate2 < 150 && remEXP >= 500){
		litRate2 += 1;
		remEXP -= 500;
		document.getElementById('litRate2').setAttribute('value', litRate2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate2 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function incLit3(){
	var litRate3 = Number(document.getElementById('litRate3').value);
	if (litRate3 < 25 && remEXP >= 250){
		litRate3 += 1;
		remEXP -= 250;
		document.getElementById('litRate3').setAttribute('value', litRate3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate3 >= 25 && litRate3 < 75 && remEXP >= 100){
		litRate3 += 1;
		remEXP -= 100;
		document.getElementById('litRate3').setAttribute('value', lititRate3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate3 >= 75 && litRate3 < 100 && remEXP >= 250){
		litRate3 += 1;
		remEXP -= 250;
		document.getElementById('litRate3').setAttribute('value', litRate3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate3 >= 100 && litRate3 < 150 && remEXP >= 500){
		litRate3 += 1;
		remEXP -= 500;
		document.getElementById('litRate3').setAttribute('value', litRate3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate3 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function incLit4(){
	var litRate4 = Number(document.getElementById('litRate4').value);
	if (litRate4 < 25 && remEXP >= 250){
		litRate4 += 1;
		remEXP -= 250;
		document.getElementById('litRate4').setAttribute('value', litRate4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate4 >= 25 && litRate4 < 75 && remEXP >= 100){
		litRate4 += 1;
		remEXP -= 100;
		document.getElementById('litRate4').setAttribute('value', lititRate4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate4 >= 75 && litRate4 < 100 && remEXP >= 250){
		litRate4 += 1;
		remEXP -= 250;
		document.getElementById('litRate4').setAttribute('value', litRate4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate4 >= 100 && litRate4 < 150 && remEXP >= 500){
		litRate4 += 1;
		remEXP -= 500;
		document.getElementById('litRate4').setAttribute('value', litRate4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
	} else if (litRate4 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}

//ABILITIES
var a = 1;
var remEXP = Number(document.getElementById('remEXP').value);

function addTake(){
	if (remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'TAKEDOWN');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addStun(){
	if (str >= 8 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'STUN');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addCripple(){
	if (str >= 10 && remEXP >= 12500){
		remEXP -= 12500;
		document.getElementById('ability' + a).setAttribute('value', 'CRIPPLE');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addDodge(){
	if (spd >= 14 && dex >= 12 && remEXP >= 50000){
		remEXP -= 50000;
		document.getElementById('ability' + a).setAttribute('value', 'AUTO-DODGE');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//SWEEP
function addUnSwp(){
	if (str >= 14 && unarm >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'UNARMED_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShortSwp(){
	if (str >= 14 && shortW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'SHORT_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addLongSwp(){
	if (str >= 10 && longW >= 100 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'LONG_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addTHWSwp(){
	if (str >= 10 && twoHW >= 75 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'TWO_HANDED_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addChainSwp(){
	if (chain >= 75 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'CHAIN_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBurstSwp(){
	if (str >= 8 && burst >= 75 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'BURST_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//DISARM
function addUnDis(){
	if (unarm >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'UNARMED_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addGrapDis(){
	if (grap >= 75 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'GRAPPLE_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShortDis(){
	if (shortW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'SHORT_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addLongDis(){
	if (longW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'LONG_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addTHWDis(){
	if (twoHW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'TWO_HANDED_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addChainDis(){
	if (chain >= 75 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'CHAIN_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//PARRY
function addUnBlk(){
	if (spd >= 10 && unarm >= 100 && remEXP >= 20000){
		remEXP -= 20000;
		document.getElementById('ability' + a).setAttribute('value', 'UNARMED_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShieldBlk(){
	if (spd >= 8 && unarm >= 75 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'SHIELD_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShortBlk(){
	if (spd >= 10 && shortW >= 100 && remEXP >= 20000){
		remEXP -= 20000;
		document.getElementById('ability' + a).setAttribute('value', 'SHORT_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addLongBlk(){
	if (spd >= 10 && longW >= 100 && remEXP >= 20000){
		remEXP -= 20000;
		document.getElementById('ability' + a).setAttribute('value', 'LONG_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addTHWBlk(){
	if (spd >= 10 && twoHW >= 100 && remEXP >= 20000){
		remEXP -= 20000;
		document.getElementById('ability' + a).setAttribute('value', 'TWO_HANDED_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addChainBlk(){
	if (spd >= 10 && chain >= 100 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'CHAIN_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//COUNTER ATTACKS
function addUnCA(){
	if (spd >= 10 && unarm >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'UNARMED_COUNTER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShortCA(){
	if (spd >= 10 && shortW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'SHORT_COUNTER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addLongCA(){
	if (spd >= 12 && longW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'LONG_COUNTER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addTHWCA(){
	if (spd >= 12 && twoHW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'TWO_HANDED_COUNTER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addChainCA(){
	if (spd >= 10 && chain >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'CHAIN_COUNTER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//QUICK-DRAW
function addHipDraw(){
	if (dex >= 10 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_HIP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBackDraw(){
	if (dex >= 12 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_BACK');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShouldDraw(){
	if (remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_SHOULDER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addRearDraw(){
	if (dex >= 10 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_REAR');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addThighDraw(){
	if (remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_THIGH');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBootDraw(){
	if (dex >= 14 && remEXP >= 2500){
		remEXP -= 2500;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_BOOT');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//SPEEDLOAD
function addQBow(){
	if (dex >= 14 && remEXP >= 12500){
		remEXP -= 12500;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_BOW');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addQCross(){
	if (dex >= 12 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_CROSSBOW');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addQRev(){
	if (dex >= 14 && remEXP >= 15000){
		remEXP -= 15000;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_REVOLVER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addQPistol(){
	if (dex >= 10 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_PISTOL');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addQRifle(){
	if (dex >= 10 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_RIFLE');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addQTube(){
	if (dex >= 12 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_TUBE');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//VOLLEY
function addVP(){
	if (oneHguns >= 100 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'PISTOL_VOLLEY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addVR(){
	if (twoHguns >= 100 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'RIFLE_VOLLEY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//BLINDFIRE
function addBThrow(){
	if (thrown >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'BLINDTHROW');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBArch(){
	if (arch >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'BLINDFIRE_BOW');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBPistol(){
	if (oneHguns >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'BLINDFIRE_PISTOL');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBRifle(){
	if (twoHguns >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'BLINDFIRE_RIFLE');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById("EXPpool").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
