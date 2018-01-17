//TRAITS
var Mem = Number(document.getElementById('MEM').value);
	var mem = Mem;
var Log = Number(document.getElementById('LOG').value);
	var log = Log;
var Per = Number(document.getElementById('PER').value);
	var per = Per;
var Will = Number(document.getElementById('WILL').value);
	var will = Will;
var Cha = Number(document.getElementById('CHA').value);
	var cha = Cha;

var Str = Number(document.getElementById('STR').value);
	var str = Str;
var End = Number(document.getElementById('END').value);
	var end = End;
var Dex = Number(document.getElementById('DEX').value);
	var dex = Dex;
var Spd = Number(document.getElementById('SPD').value);
	var spd = Spd;
var Bty = Number(document.getElementById('BTY').value);
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
var OneHguns = Number(document.getElementById('oneHguns').value);
	var oneHguns = OneHguns;	
var TwoHguns = Number(document.getElementById('twoHguns').value);
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
var Climb = Number(document.getElementById('climb').value);
	var climb = Climb;
var Navig = Number(document.getElementById('navig').value);
	var navig = Navig;	
var Negot = Number(document.getElementById('negot').value);
	var negot = Negot;	
var Survival = Number(document.getElementById('survival').value);
	var survival = Survival;	
var Craft = Number(document.getElementById('craft').value);
	var craft = Craft;	

//BASIC
var Basic1 = Number(document.getElementById('skillRate1').value);
	var basic1 = Basic1;
var Basic2 = Number(document.getElementById('skillRate2').value);
	var basic2 = Basic2;
var Basic3 = Number(document.getElementById('skillRate3').value);
	var basic3 = Basic3;
var Basic4 = Number(document.getElementById('skillRate4').value);
	var basic4 = Basic4;
var Basic5 = Number(document.getElementById('skillRate5').value);
	var basic5 = Basic5;
var Basic6 = Number(document.getElementById('skillRate6').value);
	var basic6 = Basic6;
var Basic7 = Number(document.getElementById('skillRate7').value);
	var basic7 = Basic7;
var Basic8 = Number(document.getElementById('skillRate8').value);
	var basic8 = Basic8;
var Basic9 = Number(document.getElementById('skillRate9').value);
	var basic9 = Basic9;
var Basic10 = Number(document.getElementById('skillRate10').value);
	var basic10 = Basic10;
var Basic11 = Number(document.getElementById('skillRate11').value);
	var basic11 = Basic11;
var Basic12 = Number(document.getElementById('skillRate12').value);
	var basic12 = Basic12;
var Basic13 = Number(document.getElementById('skillRate13').value);
	var basic13 = Basic13;
var Basic14 = Number(document.getElementById('skillRate14').value);
	var basic14 = Basic14;
var Basic15 = Number(document.getElementById('skillRate15').value);
	var basic15 = Basic15;
var Basic16 = Number(document.getElementById('skillRate16').value);
	var basic16 = Basic16;
var Basic17 = Number(document.getElementById('skillRate17').value);
	var basic17 = Basic17;
var Basic18 = Number(document.getElementById('skillRate18').value);
	var basic18 = Basic18;
var Basic19 = Number(document.getElementById('skillRate19').value);
	var basic19 = Basic19;
var Basic20 = Number(document.getElementById('skillRate20').value);
	var basic20 = Basic20;

//ADVANCED
var Adv1 = Number(document.getElementById('advSkillRate1').value);
	var adv1 = Adv1;
var Adv2 = Number(document.getElementById('advSkillRate2').value);
	var adv2 = Adv2;
var Adv3 = Number(document.getElementById('advSkillRate3').value);
	var adv3 = Adv3;
var Adv4 = Number(document.getElementById('advSkillRate4').value);
	var adv4 = Adv4;
var Adv5 = Number(document.getElementById('advSkillRate5').value);
	var adv5 = Adv5;
var Adv6 = Number(document.getElementById('advSkillRate6').value);
	var adv6 = Adv6;
var Adv7 = Number(document.getElementById('advSkillRate7').value);
	var adv7 = Adv7;
var Adv8 = Number(document.getElementById('advSkillRate8').value);
	var adv8 = Adv8;

var remEXP = Number(document.getElementById('remEXP').value);

//TRAIT
function incMem(){
		if (mem < 5  && remEXP >= 5000){
		mem += 1;
		remEXP -= 5000;
		document.getElementById("MEM").setAttribute('value', mem);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (mem >= 5 && mem < 15 && remEXP >= 2500){
		mem += 1;
		remEXP -= 2500;
		document.getElementById("MEM").setAttribute('value', mem);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (mem >= 15 && remEXP >= 5000 && mem < 20){
		mem += 1;
		remEXP -= 5000;
		document.getElementById("MEM").setAttribute('value', mem);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
		} else if (mem == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decMem(){
		if (mem > Mem){
			if (mem <= 5){
				mem -= 1;
				remEXP += 5000;
				document.getElementById("MEM").setAttribute('value', mem);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (mem > 5 && mem <= 15){
				mem -= 1;
				remEXP += 2500;
				document.getElementById("MEM").setAttribute('value', mem);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else {
				mem -= 1;
				remEXP += 5000;
				document.getElementById("MEM").setAttribute('value', mem);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
		}} else {alert("CANT REDUCE STAT BELOW CURRENT LEVEL");}
}

function incLog(){
		if (log < 5  && remEXP >= 5000){
		log += 1;
		remEXP -= 5000;
		document.getElementById("LOG").setAttribute('value', log);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (log >= 5 && log < 15 && remEXP >= 2500){
		log += 1;
		remEXP -= 2500;
		document.getElementById("LOG").setAttribute('value', log);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (log >= 15 && remEXP >= 5000 && log < 20){
		log += 1;
		remEXP -= 5000;
		document.getElementById("LOG").setAttribute('value', log);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
		} else if (log == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decLog(){
		if (log > Log){
			if (log <= 5){
				log -= 1;
				remEXP += 5000;
				document.getElementById("LOG").setAttribute('value', log);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (log > 5 && log <= 15){
				log -= 1;
				remEXP += 2500;
				document.getElementById("LOG").setAttribute('value', log);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else {
				log -= 1;
				remEXP += 5000;
				document.getElementById("LOG").setAttribute('value', log);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
		}} else {alert("CANT REDUCE STAT BELOW CURRENT LEVEL");}
}

function incPer(){
		if (per < 5  && remEXP >= 5000){
		per += 1;
		remEXP -= 5000;
		document.getElementById("PER").setAttribute('value', per);
		document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (per >= 5 && per < 15 && remEXP >= 2500){
		per += 1;
		remEXP -= 2500;
		document.getElementById("PER").setAttribute('value', per);
		document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (per >= 15 && remEXP >= 5000 && per < 20){
		per += 1;
		remEXP -= 5000;
		document.getElementById("PER").setAttribute('value', per);
		document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
    	document.getElementById("remEXP").setAttribute('value', remEXP);
		} else if (per == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decPer(){
		if (per > Per){
			if (per <= 5){
				per -= 1;
				remEXP += 5000;
				document.getElementById("PER").setAttribute('value', per);
				document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (per > 5 && per <= 15){
				per -= 1;
				remEXP += 2500;
				document.getElementById("PER").setAttribute('value', per);
				document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else {
				per -= 1;
				remEXP += 5000;
				document.getElementById("PER").setAttribute('value', per);
				document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
    			document.getElementById("remEXP").setAttribute('value', remEXP);
		}} else {alert("CANT REDUCE STAT BELOW CURRENT LEVEL");}
}

function incWill(){
		if (will < 5  && remEXP >= 5000){
			will += 1;
			remEXP -= 5000;
			document.getElementById("WILL").setAttribute('value', will);
    		document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (will >= 5 && will < 15 && remEXP >= 2500){
			will += 1;
			remEXP -= 2500;
			document.getElementById("WILL").setAttribute('value', will);
    		document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (will >= 15 && remEXP >= 5000 && will < 20){
			will += 1;
			remEXP -= 5000;
			document.getElementById("WILL").setAttribute('value', will);
    		document.getElementById("remEXP").setAttribute('value', remEXP);
			} else if (will == 20){
				alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decWill(){
		if (will > Will){
			if (will <= 5){
				will -= 1;
				remEXP += 5000;
				document.getElementById("WILL").setAttribute('value', will);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (will > 5 && will <= 15){
				will -= 1;
				remEXP += 2500;
				document.getElementById("WILL").setAttribute('value', will);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else {
				will -= 1;
				remEXP += 5000;
				document.getElementById("WILL").setAttribute('value', will);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
		}} else {alert("CANT REDUCE STAT BELOW CURRENT LEVEL");}
}

function incCha(){
		if (cha < 5  && remEXP >= 5000){
		cha += 1;
		remEXP -= 5000;
		document.getElementById("CHA").setAttribute('value', cha);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (cha >= 5 && cha < 15 && remEXP >= 2500){
		cha += 1;
		remEXP -= 2500;
		document.getElementById("CHA").setAttribute('value', cha);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (cha >= 15 && remEXP >= 5000 && cha < 20){
		cha += 1;
		remEXP -= 5000;
		document.getElementById("CHA").setAttribute('value', cha);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
		} else if (cha == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decCha(){
		if (cha > Cha){
			if (cha <= 5){
				cha -= 1;
				remEXP += 5000;
				document.getElementById("CHA").setAttribute('value', cha);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (cha > 5 && cha <= 15){
				cha -= 1;
				remEXP += 2500;
				document.getElementById("CHA").setAttribute('value', cha);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else {
				cha -= 1;
				remEXP += 5000;
				document.getElementById("CHA").setAttribute('value', cha);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
		}} else {alert("CANT REDUCE STAT BELOW CURRENT LEVEL");}
}

function incStr(){
		if (str < 5  && remEXP >= 5000){
		str += 1;
		remEXP -= 5000;
		document.getElementById("STR").setAttribute('value', str);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (str >= 5 && str < 15 && remEXP >= 2500){
		str += 1;
		remEXP -= 2500;
		document.getElementById("STR").setAttribute('value', str);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (str >= 15 && remEXP >= 5000 && str < 20){
		str += 1;
		remEXP -= 5000;
		document.getElementById("STR").setAttribute('value', str);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
		} else if (str == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decStr(){
		if (str > Str){
			if (str <= 5){
				str -= 1;
				remEXP += 5000;
				document.getElementById("STR").setAttribute('value', str);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (str > 5 && str <= 15){
				str -= 1;
				remEXP += 2500;
				document.getElementById("STR").setAttribute('value', str);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else {
				str -= 1;
				remEXP += 5000;
				document.getElementById("STR").setAttribute('value', str);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
		}} else {alert("CANT REDUCE STAT BELOW CURRENT LEVEL");}
}

function incEnd(){
		if (end < 5  && remEXP >= 5000){
		end += 1;
		remEXP -= 5000;
		document.getElementById("END").setAttribute('value', end);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (end >= 5 && end < 15 && remEXP >= 2500){
		end += 1;
		remEXP -= 2500;
		document.getElementById("END").setAttribute('value', end);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (end >= 15 && remEXP >= 5000 && end < 20){
		end += 1;
		remEXP -= 5000;
		document.getElementById("END").setAttribute('value', end);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
		} else if (end == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decEnd(){
		if (end > End){
			if (end <= 5){
				end -= 1;
				remEXP += 5000;
				document.getElementById("END").setAttribute('value', end);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (end > 5 && end <= 15){
				end -= 1;
				remEXP += 2500;
				document.getElementById("END").setAttribute('value', end);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else {
				end -= 1;
				remEXP += 5000;
				document.getElementById("END").setAttribute('value', end);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
		}} else {alert("CANT REDUCE STAT BELOW CURRENT LEVEL");}
}

function incDex(){
		if (dex < 5  && remEXP >= 5000){
		dex += 1;
		remEXP -= 5000;
		document.getElementById("DEX").setAttribute('value', dex);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (dex >= 5 && dex < 15 && remEXP >= 2500){
		dex += 1;
		remEXP -= 2500;
		document.getElementById("DEX").setAttribute('value', dex);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
    	} else if (dex >= 15 && remEXP >= 5000 && dex < 20){
		dex += 1;
		remEXP -= 5000;
		document.getElementById("DEX").setAttribute('value', dex);
    	document.getElementById("remEXP").setAttribute('value', remEXP);
		} else if (dex == 20){
			alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decDex(){
		if (dex > Dex){
			if (dex <= 5){
				dex -= 1;
				remEXP += 5000;
				document.getElementById("DEX").setAttribute('value', dex);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (dex > 5 && dex <= 15){
				dex -= 1;
				remEXP += 2500;
				document.getElementById("DEX").setAttribute('value', dex);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else {
				dex -= 1;
				remEXP += 5000;
				document.getElementById("DEX").setAttribute('value', dex);
    			document.getElementById("remEXP").setAttribute('value', remEXP);
		}} else {alert("CANT REDUCE STAT BELOW CURRENT LEVEL");}
}

function incSpd(){
		if (spd < 5  && remEXP >= 5000){
			spd += 1;
			remEXP -= 5000;
			document.getElementById("SPD").setAttribute('value', spd);
			document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
			document.getElementById("act").setAttribute('value', Math.floor(spd / 2));
    		document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (spd >= 5 && spd < 15 && remEXP >= 2500){
			spd += 1;
			remEXP -= 2500;
			document.getElementById("SPD").setAttribute('value', spd);
			document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
			document.getElementById("act").setAttribute('value', Math.floor(spd / 2));
    		document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (spd >= 15 && remEXP >= 5000 && spd < 20){
			spd += 1;
			remEXP -= 5000;
			document.getElementById("SPD").setAttribute('value', spd);
			document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
			document.getElementById("act").setAttribute('value', Math.floor(spd / 2));
    		document.getElementById("remEXP").setAttribute('value', remEXP);
			} else if (spd == 20){
				alert("CANT INCREASE THIS TRAIT FURTHER");
		} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decSpd(){
		if (spd > Spd){
			if (spd <= 5){
				spd -= 1;
				remEXP += 5000;
				document.getElementById("SPD").setAttribute('value', spd);
				document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
				document.getElementById("act").setAttribute('value', Math.floor(spd / 2));
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else if (spd > 5 && spd <= 15){
				spd -= 1;
				remEXP += 2500;
				document.getElementById("SPD").setAttribute('value', spd);
				document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
				document.getElementById("act").setAttribute('value', Math.floor(spd / 2));
    			document.getElementById("remEXP").setAttribute('value', remEXP);
    		} else {
				spd -= 1;
				remEXP += 5000;
				document.getElementById("SPD").setAttribute('value', spd);
				document.getElementById("seq").setAttribute('value', Math.floor((per + spd) / 2));
				document.getElementById("act").setAttribute('value', Math.floor(spd / 2));
    			document.getElementById("remEXP").setAttribute('value', remEXP);
		}} else {alert("CANT REDUCE STAT BELOW CURRENT LEVEL");}
}
//BLOCK
function incBlock(){
	if (remEXP >= 250 && block < 25){
		block += 1;
		remEXP -= 250;
		document.getElementById("block").setAttribute('value', block);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (remEXP >= 500 && block >= 25 && block < 50){
		block += 1;
		remEXP -= 500;
		document.getElementById("block").setAttribute('value', block);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	}else if (block == 50){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBlock(){
	if (block > Block && block < 26){
		block -= 1;
		remEXP += 250;
		document.getElementById("block").setAttribute('value', block);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (block > Block && block >= 25){
		block -= 1;
		remEXP += 500;
		document.getElementById("block").setAttribute('value', block);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	}else {alert("CANT REDUCE SKILL FURTHER");}
}

//DODGE
function incDodge(){
	if (remEXP >= 500 && dodge < 50){
		dodge += 1;
		remEXP -= 500;
		document.getElementById("dodge").setAttribute('value', dodge);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (dodge == 50){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decDodge(){
	if (dodge > Dodge && dodge < 26){
		dodge -= 1;
		remEXP += 500;
		document.getElementById("dodge").setAttribute('value', dodge);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (dodge > Dodge && dodge >= 25){
		dodge -= 1;
		remEXP += 1000;
		document.getElementById("dodge").setAttribute('value', dodge);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

//COMBAT SKILLS
//MELEE
function incUnarm(){
	if (unarm < 25 && remEXP >= 250){
		unarm += 1;
		remEXP -= 250;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (unarm >= 25 && unarm < 75 && remEXP >= 100){
		unarm += 1;
		remEXP -= 100;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (unarm >= 75 && unarm < 100 && remEXP >= 250){
		unarm += 1;
		remEXP -= 250;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (unarm >= 100 && unarm < 150 && remEXP >= 500){
		unarm += 1;
		remEXP -= 500;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (unarm == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decUnarm(){
	if (unarm > Unarm && unarm <= 25){
		unarm -= 1;
		remEXP += 250;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (unarm > Unarm && unarm > 25 && unarm <= 75){
		unarm -= 1;
		remEXP += 100;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (unarm > Unarm && unarm > 75 && unarm <= 100){
		unarm -= 1;
		remEXP += 250;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (unarm > Unarm && unarm > 100 && unarm <= 150){
		unarm -= 1;
		remEXP += 500;
		document.getElementById('unarm').setAttribute('value', unarm);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incGrap(){
	if (grap < 25 && remEXP >= 250){
		grap += 1;
		remEXP -= 250;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (grap >= 25 && grap < 75 && remEXP >= 100){
		grap += 1;
		remEXP -= 100;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (grap >= 75 && grap < 100 && remEXP >= 250){
		grap += 1;
		remEXP -= 250;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (grap >= 100 && grap < 150 && remEXP >= 500){
		grap += 1;
		remEXP -= 500;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (grap == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decGrap(){
	if (grap > Grap && grap <= 25){
		grap -= 1;
		remEXP += 250;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (grap > Grap && grap > 25 && grap <= 75){
		grap -= 1;
		remEXP += 100;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (grap > Grap && grap > 75 && grap <= 100){
		grap -= 1;
		remEXP += 250;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (grap > Grap && grap > 100 && grap <= 150){
		grap -= 1;
		remEXP += 500;
		document.getElementById('grap').setAttribute('value', grap);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incOff(){
	if (off < -51 && remEXP >= 100){
		off += 1;
		remEXP -= 100;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (off >= -50 && off < -40 && remEXP >= 200){
		off += 1;
		remEXP -= 200;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (off >= -40 && off < -30 && remEXP >= 250){
		off += 1;
		remEXP -= 250;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (off >= -30 && off < -20 && remEXP >= 500){
		off += 1;
		remEXP -= 500;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (off >= -20 && off < -10 && remEXP >= 750){
		off += 1;
		remEXP -= 750;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (off >= -10 && off < 0 && remEXP >= 1000){
		off += 1;
		remEXP -= 1000;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (off == 0){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decOff(){
	if (off > Off && off <= -51){
		off -= 1;
		remEXP += 100;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (off > Off && off >= -50 && off < -40){
		off -= 1;
		remEXP += 200;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (off > Off && off >= -40 && off < -30){
		off -= 1;
		remEXP += 250;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (off > Off && off >= -30 && off < -20){
		off -= 1;
		remEXP += 500;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (off > Off && off >= -20 && off < -10){
		off -= 1;
		remEXP += 750;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (off > Off && off >= -10 && off <= 0){
		off -= 1;
		remEXP += 1000;
		document.getElementById('off').setAttribute('value', off);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incShort(){
	if (shortW < 25 && remEXP >= 250){
		shortW += 1;
		remEXP -= 250;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (shortW >= 25 && shortW < 75 && remEXP >= 100){
		shortW += 1;
		remEXP -= 100;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (shortW >= 75 && shortW < 100 && remEXP >= 250){
		shortW += 1;
		remEXP -= 250;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (shortW >= 100 && shortW < 150 && remEXP >= 500){
		shortW += 1;
		remEXP -= 500;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (shortW == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decShort(){
	if (shortW > ShortW && shortW <= 25){
		shortW -= 1;
		remEXP += 250;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (shortW > ShortW && shortW > 25 && shortW <= 75){
		shortW -= 1;
		remEXP += 100;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (shortW > ShortW && shortW > 75 && shortW <= 100){
		shortW -= 1;
		remEXP += 250;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (shortW > ShortW && shortW > 100 && shortW <= 150){
		shortW -= 1;
		remEXP += 500;
		document.getElementById('shortW').setAttribute('value', shortW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incLong(){
	if (longW < 25 && remEXP >= 250){
		longW += 1;
		remEXP -= 250;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (longW >= 25 && longW < 75 && remEXP >= 100){
		longW += 1;
		remEXP -= 100;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (longW >= 75 && longW < 100 && remEXP >= 250){
		longW += 1;
		remEXP -= 250;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (longW >= 100 && longW < 150 && remEXP >= 500){
		longW += 1;
		remEXP -= 500;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (longW == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decLong(){
	if (longW > LongW && longW <= 25){
		longW -= 1;
		remEXP += 250;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (longW > LongW && longW > 25 && longW <= 75){
		longW -= 1;
		remEXP += 100;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (longW > LongW && longW > 75 && longW <= 100){
		longW -= 1;
		remEXP += 250;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (longW > LongW && longW > 100 && longW <= 150){
		longW -= 1;
		remEXP += 500;
		document.getElementById('longW').setAttribute('value', longW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incTHW(){
	if (twoHW < 25 && remEXP >= 250){
		twoHW += 1;
		remEXP -= 250;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHW >= 25 && twoHW < 75 && remEXP >= 100){
		twoHW += 1;
		remEXP -= 100;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHW >= 75 && twoHW < 100 && remEXP >= 250){
		twoHW += 1;
		remEXP -= 250;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHW >= 100 && twoHW < 150 && remEXP >= 500){
		twoHW += 1;
		remEXP -= 500;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHW == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decTHW(){
	if (twoHW > TwoHW && twoHW <= 25){
		twoHW -= 1;
		remEXP += 250;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHW > TwoHW && twoHW > 25 && twoHW <= 75){
		twoHW -= 1;
		remEXP += 100;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHW > TwoHW && twoHW > 75 && twoHW <= 100){
		twoHW -= 1;
		remEXP += 250;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHW > TwoHW && twoHW > 100 && twoHW <= 150){
		twoHW -= 1;
		remEXP += 500;
		document.getElementById('twoHW').setAttribute('value', twoHW);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incChain(){
	if (chain < 25 && remEXP >= 250){
		chain += 1;
		remEXP -= 250;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (chain >= 25 && chain < 75 && remEXP >= 100){
		chain += 1;
		remEXP -= 100;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (chain >= 75 && chain < 100 && remEXP >= 250){
		chain += 1;
		remEXP -= 250;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (chain >= 100 && chain < 150 && remEXP >= 500){
		chain += 1;
		remEXP -= 500;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (chain == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decChain(){
	if (chain > Chain && chain <= 25){
		chain -= 1;
		remEXP += 250;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (chain > Chain && chain > 25 && chain <= 75){
		chain -= 1;
		remEXP += 100;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (chain > Chain && chain > 75 && chain <= 100){
		chain -= 1;
		remEXP += 250;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (chain > Chain && chain > 100 && chain <= 150){
		chain -= 1;
		remEXP += 500;
		document.getElementById('chain').setAttribute('value', chain);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

//RANGED
function incThrow(){
	if (thrown < 25 && remEXP >= 250){
		thrown += 1;
		remEXP -= 250;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (thrown >= 25 && thrown < 75 && remEXP >= 100){
		thrown += 1;
		remEXP -= 100;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (thrown >= 75 && thrown < 100 && remEXP >= 250){
		thrown += 1;
		remEXP -= 250;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (thrown >= 100 && thrown < 150 && remEXP >= 500){
		thrown += 1;
		remEXP -= 500;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (thrown == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decThrow(){
	if (thrown > Thrown && thrown <= 25){
		thrown -= 1;
		remEXP += 250;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (thrown > Thrown && thrown > 25 && thrown <= 75){
		thrown -= 1;
		remEXP += 100;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (thrown > Thrown && thrown > 75 && thrown <= 100){
		thrown -= 1;
		remEXP += 250;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (thrown > Thrown && thrown > 100 && thrown <= 150){
		thrown -= 1;
		remEXP += 500;
		document.getElementById('thrown').setAttribute('value', thrown);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incArch(){
	if (arch < 25 && remEXP >= 250){
		arch += 1;
		remEXP -= 250;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (arch >= 25 && arch < 75 && remEXP >= 100){
		arch += 1;
		remEXP -= 100;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (arch >= 75 && arch < 100 && remEXP >= 250){
		arch += 1;
		remEXP -= 250;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (arch >= 100 && arch < 150 && remEXP >= 500){
		arch += 1;
		remEXP -= 500;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (arch == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decArch(){
	if (arch > Arch && arch <= 25){
		arch -= 1;
		remEXP += 250;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (arch > Arch && arch > 25 && arch <= 75){
		arch -= 1;
		remEXP += 100;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (arch > Arch && arch > 75 && arch <= 100){
		arch -= 1;
		remEXP += 250;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (arch > Arch && arch > 100 && arch <= 150){
		arch -= 1;
		remEXP += 500;
		document.getElementById('arch').setAttribute('value', arch);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incOHG(){
	if (oneHguns < 25 && remEXP >= 250){
		oneHguns += 1;
		remEXP -= 250;
		document.getElementById('oneHguns').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (oneHguns >= 25 && oneHguns < 75 && remEXP >= 100){
		oneHguns += 1;
		remEXP -= 100;
		document.getElementById('oneHguns').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (oneHguns >= 75 && oneHguns < 100 && remEXP >= 250){
		oneHguns += 1;
		remEXP -= 250;
		document.getElementById('oneHguns').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (oneHguns >= 100 && oneHguns < 150 && remEXP >= 500){
		oneHguns += 1;
		remEXP -= 500;
		document.getElementById('oneHguns').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (oneHguns == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decOHG(){
	if (oneHguns > OneHguns && oneHguns <= 25){
		oneHguns -= 1;
		remEXP += 250;
		document.getElementById('oneHguns').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (oneHguns > OneHguns && oneHguns > 25 && oneHguns <= 75){
		oneHguns -= 1;
		remEXP += 100;
		document.getElementById('oneHguns').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (oneHguns > OneHguns && oneHguns > 75 && oneHguns <= 100){
		oneHguns -= 1;
		remEXP += 250;
		document.getElementById('oneHguns').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (oneHguns > OneHguns && oneHguns > 100 && oneHguns <= 150){
		oneHguns -= 1;
		remEXP += 500;
		document.getElementById('oneHguns').setAttribute('value', oneHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incTHG(){
	if (twoHguns < 25 && remEXP >= 250){
		twoHguns += 1;
		remEXP -= 250;
		document.getElementById('twoHguns').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHguns >= 25 && twoHguns < 75 && remEXP >= 100){
		twoHguns += 1;
		remEXP -= 100;
		document.getElementById('twoHguns').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHguns >= 75 && twoHguns < 100 && remEXP >= 250){
		twoHguns += 1;
		remEXP -= 250;
		document.getElementById('twoHguns').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHguns >= 100 && twoHguns < 150 && remEXP >= 500){
		twoHguns += 1;
		remEXP -= 500;
		document.getElementById('twoHguns').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHguns == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decTHG(){
	if (twoHguns > TwoHguns && twoHguns <= 25){
		twoHguns -= 1;
		remEXP += 250;
		document.getElementById('twoHguns').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHguns > TwoHguns && twoHguns > 25 && twoHguns <= 75){
		twoHguns -= 1;
		remEXP += 100;
		document.getElementById('twoHguns').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHguns > TwoHguns && twoHguns > 75 && twoHguns <= 100){
		twoHguns -= 1;
		remEXP += 250;
		document.getElementById('twoHguns').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (twoHguns > TwoHguns && twoHguns > 100 && twoHguns <= 150){
		twoHguns -= 1;
		remEXP += 500;
		document.getElementById('twoHguns').setAttribute('value', twoHguns);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incBurst(){
	if (burst < 25 && remEXP >= 250){
		burst += 1;
		remEXP -= 250;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (burst >= 25 && burst < 75 && remEXP >= 100){
		burst += 1;
		remEXP -= 100;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (burst >= 75 && burst < 100 && remEXP >= 250){
		burst += 1;
		remEXP -= 250;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (burst >= 100 && burst < 150 && remEXP >= 500){
		burst += 1;
		remEXP -= 500;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (burst == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBurst(){
	if (burst > Burst && burst <= 25){
		burst -= 1;
		remEXP += 250;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (burst > Burst && burst > 25 && burst <= 75){
		burst -= 1;
		remEXP += 100;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (burst > Burst && burst > 75 && burst <= 100){
		burst -= 1;
		remEXP += 250;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (burst > Burst && burst > 100 && burst <= 150){
		burst -= 1;
		remEXP += 500;
		document.getElementById('burst').setAttribute('value', burst);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incSpec(){
	if (special < 25 && remEXP >= 250){
		special += 1;
		remEXP -= 250;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (special >= 25 && special < 75 && remEXP >= 100){
		special += 1;
		remEXP -= 100;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (special >= 75 && special < 100 && remEXP >= 250){
		special += 1;
		remEXP -= 250;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (special >= 100 && special < 150 && remEXP >= 500){
		special += 1;
		remEXP -= 500;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (special == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decSpec(){
	if (special > Special && special <= 25){
		special -= 1;
		remEXP += 250;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (special > Special && special > 25 && special <= 75){
		special -= 1;
		remEXP += 100;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (special > Special && special > 75 && special <= 100){
		special -= 1;
		remEXP += 250;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (special > Special && special > 100 && special <= 150){
		special -= 1;
		remEXP += 500;
		document.getElementById('special').setAttribute('value', special);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incWsys(){
	if (wsys < 25 && remEXP >= 250){
		wsys += 1;
		remEXP -= 250;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (wsys >= 25 && wsys < 75 && remEXP >= 100){
		wsys += 1;
		remEXP -= 100;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (wsys >= 75 && wsys < 100 && remEXP >= 250){
		wsys += 1;
		remEXP -= 250;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (wsys >= 100 && wsys < 150 && remEXP >= 500){
		wsys += 1;
		remEXP -= 500;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (wsys == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decWsys(){
	if (wsys > Wsys && wsys <= 25){
		wsys -= 1;
		remEXP += 250;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (wsys > Wsys && wsys > 25 && wsys <= 75){
		wsys -= 1;
		remEXP += 100;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (wsys > Wsys && wsys > 75 && wsys <= 100){
		wsys -= 1;
		remEXP += 250;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (wsys > Wsys && wsys > 100 && wsys <= 150){
		wsys -= 1;
		remEXP += 500;
		document.getElementById('wsys').setAttribute('value', wsys);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

//UNIVERSALS
function incStealth(){
	if (stealth < 25 && remEXP >= 250){
		stealth += 1;
		remEXP -= 250;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (stealth >= 25 && stealth < 75 && remEXP >= 100){
		stealth += 1;
		remEXP -= 100;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (stealth >= 75 && stealth < 100 && remEXP >= 250){
		stealth += 1;
		remEXP -= 250;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (stealth >= 100 && stealth < 150 && remEXP >= 500){
		stealth += 1;
		remEXP -= 500;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (stealth == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decStealth(){
	if (stealth > Stealth && stealth <= 25){
		stealth -= 1;
		remEXP += 250;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (stealth > Stealth && stealth > 25 && stealth <= 75){
		stealth -= 1;
		remEXP += 100;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (stealth > Stealth && stealth > 75 && stealth <= 100){
		stealth -= 1;
		remEXP += 250;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (stealth > Stealth && stealth > 100 && stealth <= 150){
		stealth -= 1;
		remEXP += 500;
		document.getElementById('stealth').setAttribute('value', stealth);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incClimb(){
	if (climb < 25 && remEXP >= 250){
		climb += 1;
		remEXP -= 250;
		document.getElementById('climb').setAttribute('value', climb);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (climb >= 25 && climb < 75 && remEXP >= 100){
		climb += 1;
		remEXP -= 100;
		document.getElementById('climb').setAttribute('value', climb);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (climb >= 75 && climb < 100 && remEXP >= 250){
		climb += 1;
		remEXP -= 250;
		document.getElementById('climb').setAttribute('value', climb);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (climb >= 100 && climb < 150 && remEXP >= 500){
		climb += 1;
		remEXP -= 500;
		document.getElementById('climb').setAttribute('value', climb);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (climb == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decClimb(){
	if (climb > Climb && climb <= 25){
		climb -= 1;
		remEXP += 250;
		document.getElementById('climb').setAttribute('value', climb);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (climb > Climb && climb > 25 && climb <= 75){
		climb -= 1;
		remEXP += 100;
		document.getElementById('climb').setAttribute('value', climb);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (climb > Climb && climb > 75 && climb <= 100){
		climb -= 1;
		remEXP += 250;
		document.getElementById('climb').setAttribute('value', climb);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (climb > Climb && climb > 100 && climb <= 150){
		climb -= 1;
		remEXP += 500;
		document.getElementById('climb').setAttribute('value', climb);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incNav(){
	if (navig < 25 && remEXP >= 250){
		navig += 1;
		remEXP -= 250;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (navig >= 25 && navig < 75 && remEXP >= 100){
		navig += 1;
		remEXP -= 100;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (navig >= 75 && navig < 100 && remEXP >= 250){
		navig += 1;
		remEXP -= 250;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (navig >= 100 && navig < 150 && remEXP >= 500){
		navig += 1;
		remEXP -= 500;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (navig == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decNav(){
	if (navig > Navig && navig <= 25){
		navig -= 1;
		remEXP += 250;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (navig > Navig && navig > 25 && longW <= 75){
		navig -= 1;
		remEXP += 100;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (navig > Navig && navig > 75 && navig <= 100){
		navig -= 1;
		remEXP += 250;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (navig > Navig && navig > 100 && navig <= 150){
		navig -= 1;
		remEXP += 500;
		document.getElementById('navig').setAttribute('value', navig);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incNegot(){
	if (negot < 25 && remEXP >= 250){
		negot += 1;
		remEXP -= 250;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (negot >= 25 && negot < 75 && remEXP >= 100){
		negot += 1;
		remEXP -= 100;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (negot >= 75 && negot < 100 && remEXP >= 250){
		negot += 1;
		remEXP -= 250;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (negot >= 100 && negot < 150 && remEXP >= 500){
		negot += 1;
		remEXP -= 500;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (negot == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decNegot(){
	if (negot > Negot && negot <= 25){
		negot -= 1;
		remEXP += 250;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (negot > Negot && negot > 25 && negot <= 75){
		negot -= 1;
		remEXP += 100;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (negot > Negot && negot > 75 && negot <= 100){
		negot -= 1;
		remEXP += 250;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (negot > Negot && negot > 100 && negot <= 150){
		negot -= 1;
		remEXP += 500;
		document.getElementById('negot').setAttribute('value', negot);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incCraft(){
	if (craft < 25 && remEXP >= 250){
		craft += 1;
		remEXP -= 250;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (craft >= 25 && craft < 75 && remEXP >= 100){
		craft += 1;
		remEXP -= 100;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (craft >= 75 && craft < 100 && remEXP >= 250){
		craft += 1;
		remEXP -= 250;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (craft >= 100 && craft < 150 && remEXP >= 500){
		craft += 1;
		remEXP -= 500;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (craft == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decCraft(){
	if (craft > Craft && craft <= 25){
		craft -= 1;
		remEXP += 250;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (craft > Craft && craft > 25 && craft <= 75){
		craft -= 1;
		remEXP += 100;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (craft > Craft && craft > 75 && craft <= 100){
		craft -= 1;
		remEXP += 250;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (craft > Craft && craft > 100 && craft <= 150){
		craft -= 1;
		remEXP += 500;
		document.getElementById('craft').setAttribute('value', craft);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

function incSurv(){
	if (survival < 25 && remEXP >= 250){
		survival += 1;
		remEXP -= 250;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (survival >= 25 && survival < 75 && remEXP >= 100){
		survival += 1;
		remEXP -= 100;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (survival >= 75 && survival < 100 && remEXP >= 250){
		survival += 1;
		remEXP -= 250;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (survival >= 100 && survival < 150 && remEXP >= 500){
		survival += 1;
		remEXP -= 500;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (survival == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decSurv(){
	if (survival > Survival && survival <= 25){
		survival -= 1;
		remEXP += 250;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (survival > Survival && survival > 25 && survival <= 75){
		survival -= 1;
		remEXP += 100;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (survival > Survival && survival > 75 && survival <= 100){
		survival -= 1;
		remEXP += 250;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (survival > Survival && survival > 100 && survival <= 150){
		survival -= 1;
		remEXP += 500;
		document.getElementById('survival').setAttribute('value', survival);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

//BASIC SKILLS
var n = 0;
function addBasic(){
	var list = [
	document.getElementById('skill1').value,
	document.getElementById('skill2').value,
	document.getElementById('skill3').value,
	document.getElementById('skill4').value,
	document.getElementById('skill5').value,
	document.getElementById('skill6').value,
	document.getElementById('skill7').value,
	document.getElementById('skill8').value,
	document.getElementById('skill9').value,
	document.getElementById('skill10').value,
	document.getElementById('skill11').value,
	document.getElementById('skill12').value,
	document.getElementById('skill13').value,
	document.getElementById('skill14').value,
	document.getElementById('skill15').value,
	document.getElementById('skill16').value,
	document.getElementById('skill17').value,
	document.getElementById('skill18').value,
	document.getElementById('skill19').value,
	document.getElementById('skill20').value
	];

		if (list.indexOf('MATH') > -1){
			document.getElementById('mathBtn').disabled = true;
			document.getElementById('chemBtn').disabled = false;
			document.getElementById('physicsBtn').disabled = false;

		}if (list.indexOf('BIOLOGY') > -1){
			document.getElementById('bioBtn').disabled = true;
					
		}if (list.indexOf('BOTANY') > -1){
			document.getElementById('botBtn').disabled = true;
			
		}if (list.indexOf('CHEMISTRY') > -1){
			document.getElementById('chemBtn').disabled = true;
			
		}if (list.indexOf('HISTORY') > -1){
			document.getElementById('histBtn').disabled = true;
											
		}if (list.indexOf('MYCOLOGY') > -1){
			document.getElementById('mycoBtn').disabled = true;
											
		}if (list.indexOf('HORSEMANSHIP') > -1){
			document.getElementById('horseBtn').disabled = true;
											
		}if (list.indexOf('MOTORCYCLE') > -1){
			document.getElementById('cycleBtn').disabled = true;
											
		}if (list.indexOf('BOATING') > -1){
			document.getElementById('boatBtn').disabled = true;
											
		}if (list.indexOf('SAILING') > -1){
			document.getElementById('sailBtn').disabled = true;
											
		}if (list.indexOf('JET_SKI') > -1){
			document.getElementById('jetSkiBtn').disabled = true;
											
		}if (list.indexOf('TRAPS') > -1){
			document.getElementById('trapsBtn').disabled = true;
											
		}if (list.indexOf('FIRST_AID') > -1){
			document.getElementById('firstAidBtn').disabled = true;
											
		}if (list.indexOf('TRACKING') > -1){
			document.getElementById('trackBtn').disabled = true;
											
		}if (list.indexOf('PICKPOCKET') > -1){
			document.getElementById('pickBtn').disabled = true;
											
		}if (list.indexOf('SURVEILLANCE') > -1){
			document.getElementById('survBtn').disabled = true;
											
		}if (list.indexOf('LITERACY') > -1){
			document.getElementById('litBtn').disabled = true;
			document.getElementById('histBtn').disabled = false;
			document.getElementById('compBtn').disabled = false;	

		}if (list.indexOf('SPANISH_LANG') > -1){
			document.getElementById('SPANISH_LANG').disabled = true;
											
		}if (list.indexOf('FRENCH_LANG') > -1){
			document.getElementById('FRENCH_LANG').disabled = true;
											
		}if (list.indexOf('ITALIAN_LANG') > -1){
			document.getElementById('ITALIAN_LANG').disabled = true;
											
		}if (list.indexOf('GERMAN_LANG') > -1){
			document.getElementById('GERMAN_LANG').disabled = true;
											
		}if (list.indexOf('ARABIC_LANG') > -1){
			document.getElementById('ARABIC_LANG').disabled = true;
											
		}if (list.indexOf('YIDDISH_LANG') > -1){
			document.getElementById('YIDDISH_LANG').disabled = true;
											
		}if (list.indexOf('RUSSIAN_LANG') > -1){
			document.getElementById('RUSSIAN_LANG').disabled = true;
											
		}if (list.indexOf('POLISH_LANG') > -1){
			document.getElementById('POLISH_LANG').disabled = true;
											
		}if (list.indexOf('SPANISH_LIT') > -1){
			document.getElementById('SPANISH_LIT').disabled = true;
											
		}if (list.indexOf('FRENCH_LIT') > -1){
			document.getElementById('FRENCH_LIT').disabled = true;
											
		}if (list.indexOf('ITALIAN_LIT') > -1){
			document.getElementById('ITALIAN_LIT').disabled = true;
											
		}if (list.indexOf('GERMAN_LIT') > -1){
			document.getElementById('GERMAN_LIT').disabled = true;
											
		}if (list.indexOf('ARABIC_LIT') > -1){
			document.getElementById('ARABIC_LIT').disabled = true;
											
		}if (list.indexOf('YIDDISH_LIT') > -1){
			document.getElementById('YIDDISH_LIT').disabled = true;
											
		}if (list.indexOf('RUSSIAN_LIT') > -1){
			document.getElementById('RUSSIAN_LIT').disabled = true;
											
		}if (list.indexOf('POLISH_LIT') > -1){
			document.getElementById('POLISH_LIT').disabled = true;
											
		}if (list.indexOf('MECHANICS') > -1){
			document.getElementById('mechBtn').disabled = true;
											
		}if (list.indexOf('ELECTRIC_SYS') > -1){
			document.getElementById('electBtn').disabled = true;
											
		}if (list.indexOf('COMPUTERS') > -1){
			document.getElementById('compBtn').disabled = true;
											
		}if (list.indexOf('LOCKPICK') > -1){
			document.getElementById('lockBtn').disabled = true;
											
		}if (list.indexOf('COMM_SYSTEMS') > -1){
			document.getElementById('commSysBtn').disabled = true;
		}
	document.getElementById('skillModal').style.display = 'block';
}

//BASIC 1
function incBasic1(){
	if (basic1 == 0 && remEXP >= 250){
		basic1 += 1;
		remEXP -= 250;
		document.getElementById('skillRate1').setAttribute('value', basic1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 1;
		addBasic();
	} else if (basic1 < 25 && remEXP >= 250){
		basic1 += 1;
		remEXP -= 250;
		document.getElementById('skillRate1').setAttribute('value', basic1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic1 >= 25 && basic1 < 75 && remEXP >= 100){
		basic1 += 1;
		remEXP -= 100;
		document.getElementById('skillRate1').setAttribute('value', basic1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic1 >= 75 && basic1 < 100 && remEXP >= 250){
		basic1 += 1;
		remEXP -= 250;
		document.getElementById('skillRate1').setAttribute('value', basic1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic1 >= 100 && basic1 < 150 && remEXP >= 500){
		basic1 += 1;
		remEXP -= 500;
		document.getElementById('skillRate1').setAttribute('value', basic1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic1 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic1(){
	if (basic1 > Basic1 && basic1 <= 25){
		basic1 -= 1;
		remEXP += 250;
		document.getElementById('skillRate1').setAttribute('value', basic1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic1 > Basic1 && basic1 > 25 && basic1 <= 75){
		basic1 -= 1;
		remEXP += 100;
		document.getElementById('skillRate1').setAttribute('value', basic1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic1 > Basic1 && basic1 > 75 && basic1 <= 100){
		basic1 -= 1;
		remEXP += 250;
		document.getElementById('skillRate1').setAttribute('value', basic1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic1 > Basic1 && basic1 > 100 && basic1 <= 150){
		basic1 -= 1;
		remEXP += 500;
		document.getElementById('skillRate1').setAttribute('value', basic1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic1 > Basic1 && basic1 == 1){
		basic1 -= 1;
		remEXP += 250;
		document.getElementById('skillRate1').setAttribute('value', basic1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill1').setAttribute('value', null);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 2
function incBasic2(){
	if (basic2 == 0 && remEXP >= 250){
		basic2 += 1;
		remEXP -= 250;
		document.getElementById('skillRate2').setAttribute('value', basic2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 2;
		addBasic();
	} else if (basic2 < 25 && remEXP >= 250){
		basic2 += 1;
		remEXP -= 250;
		document.getElementById('skillRate2').setAttribute('value', basic2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic2 >= 25 && basic2 < 75 && remEXP >= 100){
		basic2 += 1;
		remEXP -= 100;
		document.getElementById('skillRate2').setAttribute('value', basic2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic2 >= 75 && basic2 < 100 && remEXP >= 250){
		basic2 += 1;
		remEXP -= 250;
		document.getElementById('skillRate2').setAttribute('value', basic2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic2 >= 100 && basic2 < 150 && remEXP >= 500){
		basic2 += 1;
		remEXP -= 500;
		document.getElementById('skillRate2').setAttribute('value', basic2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic2 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic2(){
	if (basic2 > Basic2 && basic2 <= 25){
		basic2 -= 1;
		remEXP += 250;
		document.getElementById('skillRate2').setAttribute('value', basic2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic2 > Basic2 && basic2 > 25 && basic2 <= 75){
		basic2 -= 1;
		remEXP += 100;
		document.getElementById('skillRate2').setAttribute('value', basic2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic2 > Basic2 && basic2 > 75 && basic2 <= 100){
		basic2 -= 1;
		remEXP += 250;
		document.getElementById('skillRate2').setAttribute('value', basic2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic2 > Basic2 && basic2 > 100 && basic2 <= 150){
		basic2 -= 1;
		remEXP += 500;
		document.getElementById('skillRate2').setAttribute('value', basic2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic2 > Basic2 && basic2 == 1){
		basic2 -= 1;
		remEXP += 250;
		document.getElementById('skillRate2').setAttribute('value', basic2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill2').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 3
function incBasic3(){
	if (basic3 == 0 && remEXP >= 250){
		basic3 += 1;
		remEXP -= 250;
		document.getElementById('skillRate3').setAttribute('value', basic3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 3;
		addBasic();
	} else if (basic3 < 25 && remEXP >= 250){
		basic3 += 1;
		remEXP -= 250;
		document.getElementById('skillRate3').setAttribute('value', basic3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic3 >= 25 && basic3 < 75 && remEXP >= 100){
		basic3 += 1;
		remEXP -= 100;
		document.getElementById('skillRate3').setAttribute('value', basic3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic3 >= 75 && basic3 < 100 && remEXP >= 250){
		basic3 += 1;
		remEXP -= 250;
		document.getElementById('skillRate3').setAttribute('value', basic3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic3 >= 100 && basic3 < 150 && remEXP >= 500){
		basic3 += 1;
		remEXP -= 500;
		document.getElementById('skillRate3').setAttribute('value', basic3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic3 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic3(){
	if (basic3 > Basic3 && basic3 <= 25){
		basic3 -= 1;
		remEXP += 250;
		document.getElementById('skillRate3').setAttribute('value', basic3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic3 > Basic3 && basic3 > 25 && basic3 <= 75){
		basic3 -= 1;
		remEXP += 100;
		document.getElementById('skillRate3').setAttribute('value', basic3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic3 > Basic3 && basic3 > 75 && basic3 <= 100){
		basic3 -= 1;
		remEXP += 250;
		document.getElementById('skillRate3').setAttribute('value', basic3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic3 > Basic3 && basic3 > 100 && basic3 <= 150){
		basic3 -= 1;
		remEXP += 500;
		document.getElementById('skillRate3').setAttribute('value', basic3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic3 > Basic3 && basic3 == 1){
		basic3 -= 1;
		remEXP += 250;
		document.getElementById('skillRate3').setAttribute('value', basic3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill3').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 4
function incBasic4(){
	if (basic4 == 0 && remEXP >= 250){
		basic4 += 1;
		remEXP -= 250;
		document.getElementById('skillRate4').setAttribute('value', basic4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 4;
		addBasic();
	} else if (basic4 < 25 && remEXP >= 250){
		basic4 += 1;
		remEXP -= 250;
		document.getElementById('skillRate4').setAttribute('value', basic4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic4 >= 25 && basic4 < 75 && remEXP >= 100){
		basic4 += 1;
		remEXP -= 100;
		document.getElementById('skillRate4').setAttribute('value', basic4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic4 >= 75 && basic4 < 100 && remEXP >= 250){
		basic4 += 1;
		remEXP -= 250;
		document.getElementById('skillRate4').setAttribute('value', basic4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic4 >= 100 && basic4 < 150 && remEXP >= 500){
		basic4 += 1;
		remEXP -= 500;
		document.getElementById('skillRate4').setAttribute('value', basic4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic4 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic4(){
	if (basic4 > Basic4 && basic4 <= 25){
		basic4 -= 1;
		remEXP += 250;
		document.getElementById('skillRate4').setAttribute('value', basic4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic4 > Basic4 && basic4 > 25 && basic4 <= 75){
		basic4 -= 1;
		remEXP += 100;
		document.getElementById('skillRate4').setAttribute('value', basic4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic4 > Basic4 && basic4 > 75 && basic4 <= 100){
		basic4 -= 1;
		remEXP += 250;
		document.getElementById('skillRate4').setAttribute('value', basic4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic4 > Basic4 && basic4 > 100 && basic4 <= 150){
		basic4 -= 1;
		remEXP += 500;
		document.getElementById('skillRate4').setAttribute('value', basic4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic4 > Basic4 && basic4 == 1){
		basic4 -= 1;
		remEXP += 250;
		document.getElementById('skillRate4').setAttribute('value', basic4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill4').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 5
function incBasic5(){
	if (basic5 == 0 && remEXP >= 250){
		basic5 += 1;
		remEXP -= 250;
		document.getElementById('skillRate5').setAttribute('value', basic5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 5;
		addBasic();
	} else if (basic5 < 25 && remEXP >= 250){
		basic5 += 1;
		remEXP -= 250;
		document.getElementById('skillRate5').setAttribute('value', basic5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic5 >= 25 && basic5 < 75 && remEXP >= 100){
		basic5 += 1;
		remEXP -= 100;
		document.getElementById('skillRate5').setAttribute('value', basic5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic5 >= 75 && basic5 < 100 && remEXP >= 250){
		basic5 += 1;
		remEXP -= 250;
		document.getElementById('skillRate5').setAttribute('value', basic5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic5 >= 100 && basic5 < 150 && remEXP >= 500){
		basic5 += 1;
		remEXP -= 500;
		document.getElementById('skillRate5').setAttribute('value', basic5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic5 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic5(){
	if (basic5 > Basic5 && basic5 <= 25){
		basic5 -= 1;
		remEXP += 250;
		document.getElementById('skillRate5').setAttribute('value', basic5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic5 > Basic5 && basic5 > 25 && basic5 <= 75){
		basic5 -= 1;
		remEXP += 100;
		document.getElementById('skillRate5').setAttribute('value', basic5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic5 > Basic5 && basic5 > 75 && basic5 <= 100){
		basic5 -= 1;
		remEXP += 250;
		document.getElementById('skillRate5').setAttribute('value', basic5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic5 > Basic5 && basic5 > 100 && basic5 <= 150){
		basic5 -= 1;
		remEXP += 500;
		document.getElementById('skillRate5').setAttribute('value', basic5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic5 > Basic5 && basic5 == 1){
		basic5 -= 1;
		remEXP += 250;
		document.getElementById('skillRate5').setAttribute('value', basic5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill5').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 6
function incBasic6(){
	if (basic6 == 0 && remEXP >= 250){
		basic2 += 1;
		remEXP -= 250;
		document.getElementById('skillRate6').setAttribute('value', basic6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 6;
		addBasic();
	} else if (basic6 < 25 && remEXP >= 250){
		basic2 += 1;
		remEXP -= 250;
		document.getElementById('skillRate6').setAttribute('value', basic6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic2 >= 25 && basic6 < 75 && remEXP >= 100){
		basic6 += 1;
		remEXP -= 100;
		document.getElementById('skillRate6').setAttribute('value', basic6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic6 >= 75 && basic6 < 100 && remEXP >= 250){
		basic6 += 1;
		remEXP -= 250;
		document.getElementById('skillRate6').setAttribute('value', basic6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic6 >= 100 && basic6 < 150 && remEXP >= 500){
		basic6 += 1;
		remEXP -= 500;
		document.getElementById('skillRate6').setAttribute('value', basic6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic6 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic6(){
	if (basic6 > Basic6 && basic6 <= 25){
		basic6 -= 1;
		remEXP += 250;
		document.getElementById('skillRate6').setAttribute('value', basic6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic6 > Basic6 && basic6 > 25 && basic6 <= 75){
		basic6 -= 1;
		remEXP += 100;
		document.getElementById('skillRate6').setAttribute('value', basic6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic6 > Basic6 && basic6 > 75 && basic6 <= 100){
		basic6 -= 1;
		remEXP += 250;
		document.getElementById('skillRate6').setAttribute('value', basic6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic6 > Basic6 && basic6 > 100 && basic6 <= 150){
		basic6 -= 1;
		remEXP += 500;
		document.getElementById('skillRate6').setAttribute('value', basic6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic6 > Basic6 && basic6 == 1){
		basic6 -= 1;
		remEXP += 250;
		document.getElementById('skillRate6').setAttribute('value', basic6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill6').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 7
function incBasic7(){
	if (basic7 == 0 && remEXP >= 250){
		basic7 += 1;
		remEXP -= 250;
		document.getElementById('skillRate7').setAttribute('value', basic7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 7;
		addBasic();
	} else if (basic7 < 25 && remEXP >= 250){
		basic7 += 1;
		remEXP -= 250;
		document.getElementById('skillRate7').setAttribute('value', basic7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic7 >= 25 && basic7 < 75 && remEXP >= 100){
		basic7 += 1;
		remEXP -= 100;
		document.getElementById('skillRate7').setAttribute('value', basic7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic7 >= 75 && basic7 < 100 && remEXP >= 250){
		basic7 += 1;
		remEXP -= 250;
		document.getElementById('skillRate7').setAttribute('value', basic7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic7 >= 100 && basic7 < 150 && remEXP >= 500){
		basic7 += 1;
		remEXP -= 500;
		document.getElementById('skillRate7').setAttribute('value', basic7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic7 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic7(){
	if (basic7 > Basic7 && basic7 <= 25){
		basic7 -= 1;
		remEXP += 250;
		document.getElementById('skillRate7').setAttribute('value', basic7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic7 > Basic7 && basic7 > 25 && basic7 <= 75){
		basic7 -= 1;
		remEXP += 100;
		document.getElementById('skillRate7').setAttribute('value', basic7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic7 > Basic7 && basi72 > 75 && basic7 <= 100){
		basic7 -= 1;
		remEXP += 250;
		document.getElementById('skillRate7').setAttribute('value', basic7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic7 > Basic7 && basic7 > 100 && basic7 <= 150){
		basic7 -= 1;
		remEXP += 500;
		document.getElementById('skillRate7').setAttribute('value', basic7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic7 > Basic7 && basic7 == 1){
		basic7 -= 1;
		remEXP += 250;
		document.getElementById('skillRate7').setAttribute('value', basic7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill7').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 8
function incBasic8(){
	if (basic8 == 0 && remEXP >= 250){
		basic8 += 1;
		remEXP -= 250;
		document.getElementById('skillRate8').setAttribute('value', basic8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 8;
		addBasic();
	} else if (basic8 < 25 && remEXP >= 250){
		basic8 += 1;
		remEXP -= 250;
		document.getElementById('skillRate8').setAttribute('value', basic8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic8 >= 25 && basic8 < 75 && remEXP >= 100){
		basic8 += 1;
		remEXP -= 100;
		document.getElementById('skillRate8').setAttribute('value', basic8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic8 >= 75 && basic8 < 100 && remEXP >= 250){
		basic8 += 1;
		remEXP -= 250;
		document.getElementById('skillRate8').setAttribute('value', basic8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic8 >= 100 && basic8 < 150 && remEXP >= 500){
		basic8 += 1;
		remEXP -= 500;
		document.getElementById('skillRate8').setAttribute('value', basic8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic8 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic8(){
	if (basic8 > Basic8 && basic8 <= 25){
		basic8 -= 1;
		remEXP += 250;
		document.getElementById('skillRate8').setAttribute('value', basic8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic8 > Basic8 && basic8 > 25 && basic8 <= 75){
		basic8 -= 1;
		remEXP += 100;
		document.getElementById('skillRate8').setAttribute('value', basic8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic8 > Basic8 && basic8 > 75 && basic8 <= 100){
		basic8 -= 1;
		remEXP += 250;
		document.getElementById('skillRate8').setAttribute('value', basic8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic8 > Basic8 && basic8 > 100 && basic8 <= 150){
		basic8 -= 1;
		remEXP += 500;
		document.getElementById('skillRate8').setAttribute('value', basic8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic8 > Basic8 && basic8 == 1){
		basic8 -= 1;
		remEXP += 250;
		document.getElementById('skillRate8').setAttribute('value', basic8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill8').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 9
function incBasic9(){
	if (basic9 == 0 && remEXP >= 250){
		basic9 += 1;
		remEXP -= 250;
		document.getElementById('skillRate9').setAttribute('value', basic9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 9;
		addBasic();
	} else if (basic9 < 25 && remEXP >= 250){
		basic9 += 1;
		remEXP -= 250;
		document.getElementById('skillRate9').setAttribute('value', basic9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic9 >= 25 && basic9 < 75 && remEXP >= 100){
		basic9 += 1;
		remEXP -= 100;
		document.getElementById('skillRate9').setAttribute('value', basic9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic9 >= 75 && basic9 < 100 && remEXP >= 250){
		basic9 += 1;
		remEXP -= 250;
		document.getElementById('skillRate9').setAttribute('value', basic9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic9 >= 100 && basic9 < 150 && remEXP >= 500){
		basic9 += 1;
		remEXP -= 500;
		document.getElementById('skillRate9').setAttribute('value', basic9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic9 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic9(){
	if (basic9 > Basic9 && basic2 <= 25){
		basic9 -= 1;
		remEXP += 250;
		document.getElementById('skillRate9').setAttribute('value', basic9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic9 > Basic9 && basic9 > 25 && basic9 <= 75){
		basic9 -= 1;
		remEXP += 100;
		document.getElementById('skillRate9').setAttribute('value', basic9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic9 > Basic9 && basic9 > 75 && basic9 <= 100){
		basic9 -= 1;
		remEXP += 250;
		document.getElementById('skillRate9').setAttribute('value', basic9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic9 > Basic9 && basic9 > 100 && basic9 <= 150){
		basic9 -= 1;
		remEXP += 500;
		document.getElementById('skillRate9').setAttribute('value', basic9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic9 > Basic9 && basic9 == 1){
		basic9 -= 1;
		remEXP += 250;
		document.getElementById('skillRate9').setAttribute('value', basic9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill9').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 10
function incBasic10(){
	if (basic10 == 0 && remEXP >= 250){
		basic10 += 1;
		remEXP -= 250;
		document.getElementById('skillRate10').setAttribute('value', basic10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 10;
		addBasic();
	} else if (basic10 < 25 && remEXP >= 250){
		basic10 += 1;
		remEXP -= 250;
		document.getElementById('skillRate10').setAttribute('value', basic10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic10 >= 25 && basic10 < 75 && remEXP >= 100){
		basic10 += 1;
		remEXP -= 100;
		document.getElementById('skillRate10').setAttribute('value', basic10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic10 >= 75 && basic10 < 100 && remEXP >= 250){
		basic10 += 1;
		remEXP -= 250;
		document.getElementById('skillRate10').setAttribute('value', basic10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic10 >= 100 && basic10 < 150 && remEXP >= 500){
		basic10 += 1;
		remEXP -= 500;
		document.getElementById('skillRate10').setAttribute('value', basic10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic10 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic10(){
	if (basic10 > Basic10 && basic10 <= 25){
		basic10 -= 1;
		remEXP += 250;
		document.getElementById('skillRate10').setAttribute('value', basic10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic10 > Basic10 && basic10 > 25 && basic10 <= 75){
		basic10 -= 1;
		remEXP += 100;
		document.getElementById('skillRate10').setAttribute('value', basic10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic10 > Basic10 && basic10 > 75 && basic10 <= 100){
		basic10 -= 1;
		remEXP += 250;
		document.getElementById('skillRate10').setAttribute('value', basic10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic10 > Basic10 && basic10 > 100 && basic10 <= 150){
		basic10 -= 1;
		remEXP += 500;
		document.getElementById('skillRate10').setAttribute('value', basic10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic10 > Basic10 && basic10 == 1){
		basic10 -= 1;
		remEXP += 250;
		document.getElementById('skillRate10').setAttribute('value', basic10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill10').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 11
function incBasic11(){
	if (basic11 == 0 && remEXP >= 250){
		basic11 += 1;
		remEXP -= 250;
		document.getElementById('skillRate11').setAttribute('value', basic11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 11;
		addBasic();
	} else if (basic11 < 25 && remEXP >= 250){
		basic11 += 1;
		remEXP -= 250;
		document.getElementById('skillRate11').setAttribute('value', basic11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic11 >= 25 && basic11 < 75 && remEXP >= 100){
		basic11 += 1;
		remEXP -= 100;
		document.getElementById('skillRate11').setAttribute('value', basic11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic11 >= 75 && basic11 < 100 && remEXP >= 250){
		basic11 += 1;
		remEXP -= 250;
		document.getElementById('skillRate11').setAttribute('value', basic11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic11 >= 100 && basic11 < 150 && remEXP >= 500){
		basic11 += 1;
		remEXP -= 500;
		document.getElementById('skillRate11').setAttribute('value', basic11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic11 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic11(){
	if (basic11 > Basic11 && basic11 <= 25){
		basic11 -= 1;
		remEXP += 250;
		document.getElementById('skillRate11').setAttribute('value', basic11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic11 > Basic11 && basic11 > 25 && basic11 <= 75){
		basic11 -= 1;
		remEXP += 100;
		document.getElementById('skillRate11').setAttribute('value', basic11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic11 > Basic11 && basic11 > 75 && basic11 <= 100){
		basic11 -= 1;
		remEXP += 250;
		document.getElementById('skillRate11').setAttribute('value', basic11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic11 > Basic11 && basic11 > 100 && basic11 <= 150){
		basic11 -= 1;
		remEXP += 500;
		document.getElementById('skillRate11').setAttribute('value', basic11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic11 > Basic11 && basic11 == 1){
		basic11 -= 1;
		remEXP += 250;
		document.getElementById('skillRate11').setAttribute('value', basic11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill11').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 12
function incBasic12(){
	if (basic12 == 0 && remEXP >= 250){
		basic12 += 1;
		remEXP -= 250;
		document.getElementById('skillRate12').setAttribute('value', basic12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 12;
		addBasic();
	} else if (basic12 < 25 && remEXP >= 250){
		basic12 += 1;
		remEXP -= 250;
		document.getElementById('skillRate12').setAttribute('value', basic12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic12 >= 25 && basic12 < 75 && remEXP >= 100){
		basic12 += 1;
		remEXP -= 100;
		document.getElementById('skillRate12').setAttribute('value', basic12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic12 >= 75 && basic12 < 100 && remEXP >= 250){
		basic12 += 1;
		remEXP -= 250;
		document.getElementById('skillRate12').setAttribute('value', basic12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic12 >= 100 && basic12 < 150 && remEXP >= 500){
		basic12 += 1;
		remEXP -= 500;
		document.getElementById('skillRate12').setAttribute('value', basic12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic12 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic12(){
	if (basic12 > Basic12 && basic12 <= 25){
		basic12 -= 1;
		remEXP += 250;
		document.getElementById('skillRate12').setAttribute('value', basic12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic12 > Basic12 && basic12 > 25 && basic12 <= 75){
		basic12 -= 1;
		remEXP += 100;
		document.getElementById('skillRate12').setAttribute('value', basic12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic12 > Basic12 && basic12 > 75 && basic12 <= 100){
		basic12 -= 1;
		remEXP += 250;
		document.getElementById('skillRate12').setAttribute('value', basic12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic12 > Basic12 && basic12 > 100 && basic12 <= 150){
		basic12 -= 1;
		remEXP += 500;
		document.getElementById('skillRate12').setAttribute('value', basic12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic12 > Basic12 && basic12 == 1){
		basic12 -= 1;
		remEXP += 250;
		document.getElementById('skillRate12').setAttribute('value', basic12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill12').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 13
function incBasic13(){
	if (basic13 == 0 && remEXP >= 250){
		basic13 += 1;
		remEXP -= 250;
		document.getElementById('skillRate13').setAttribute('value', basic13);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 13;
		addBasic();
	} else if (basic13 < 25 && remEXP >= 250){
		basic13 += 1;
		remEXP -= 250;
		document.getElementById('skillRate13').setAttribute('value', basic13);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic13 >= 25 && basic13 < 75 && remEXP >= 100){
		basic13 += 1;
		remEXP -= 100;
		document.getElementById('skillRate13').setAttribute('value', basic13);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic13 >= 75 && basic13 < 100 && remEXP >= 250){
		basic13 += 1;
		remEXP -= 250;
		document.getElementById('skillRate13').setAttribute('value', basic13);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic13 >= 100 && basic13 < 150 && remEXP >= 500){
		basic13 += 1;
		remEXP -= 500;
		document.getElementById('skillRate13').setAttribute('value', basic13);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic13 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic13(){
	if (basic13 > Basic13 && basic13 <= 25){
		basic13 -= 1;
		remEXP += 250;
		document.getElementById('skillRate13').setAttribute('value', basic13);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic13 > Basic13 && basic13 > 25 && basic13 <= 75){
		basic13 -= 1;
		remEXP += 100;
		document.getElementById('skillRate13').setAttribute('value', basic13);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic13 > Basic13 && basic13 > 75 && basic13 <= 100){
		basic13 -= 1;
		remEXP += 250;
		document.getElementById('skillRate13').setAttribute('value', basic13);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic13 > Basic13 && basic13 > 100 && basic13 <= 150){
		basic13 -= 1;
		remEXP += 500;
		document.getElementById('skillRate13').setAttribute('value', basic13);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic13 > Basic13 && basic13 == 1){
		basic13 -= 1;
		remEXP += 250;
		document.getElementById('skillRate13').setAttribute('value', basic13);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill13').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 14
function incBasic14(){
	if (basic14 == 0 && remEXP >= 250){
		basic14 += 1;
		remEXP -= 250;
		document.getElementById('skillRate14').setAttribute('value', basic14);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 14;
		addBasic();
	} else if (basic14 < 25 && remEXP >= 250){
		basic14 += 1;
		remEXP -= 250;
		document.getElementById('skillRate14').setAttribute('value', basic14);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic14 >= 25 && basic14 < 75 && remEXP >= 100){
		basic14 += 1;
		remEXP -= 100;
		document.getElementById('skillRate14').setAttribute('value', basic14);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic14 >= 75 && basic14 < 100 && remEXP >= 250){
		basic14 += 1;
		remEXP -= 250;
		document.getElementById('skillRate14').setAttribute('value', basic14);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic14 >= 100 && basic14 < 150 && remEXP >= 500){
		basic14 += 1;
		remEXP -= 500;
		document.getElementById('skillRate14').setAttribute('value', basic14);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic14 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic14(){
	if (basic14 > Basic14 && basic14 <= 25){
		basic14 -= 1;
		remEXP += 250;
		document.getElementById('skillRate14').setAttribute('value', basic14);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic14 > Basic14 && basic14 > 25 && basic14 <= 75){
		basic14 -= 1;
		remEXP += 100;
		document.getElementById('skillRate14').setAttribute('value', basic14);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic14 > Basic14 && basic14 > 75 && basic14 <= 100){
		basic14 -= 1;
		remEXP += 250;
		document.getElementById('skillRate14').setAttribute('value', basic14);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic14 > Basic14 && basic14 > 100 && basic14 <= 150){
		basic14 -= 1;
		remEXP += 500;
		document.getElementById('skillRate14').setAttribute('value', basic14);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic14 > Basic14 && basic14 == 1){
		basic14 -= 1;
		remEXP += 250;
		document.getElementById('skillRate14').setAttribute('value', basic14);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill14').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 15
function incBasic15(){
	if (basic15 == 0 && remEXP >= 250){
		basic15 += 1;
		remEXP -= 250;
		document.getElementById('skillRate15').setAttribute('value', basic15);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 15;
		addBasic();
	} else if (basic15 < 25 && remEXP >= 250){
		basic15 += 1;
		remEXP -= 250;
		document.getElementById('skillRate15').setAttribute('value', basic15);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic15 >= 25 && basic15 < 75 && remEXP >= 100){
		basic15 += 1;
		remEXP -= 100;
		document.getElementById('skillRate15').setAttribute('value', basic15);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic15 >= 75 && basic15 < 100 && remEXP >= 250){
		basic15 += 1;
		remEXP -= 250;
		document.getElementById('skillRate15').setAttribute('value', basic15);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic15 >= 100 && basic15 < 150 && remEXP >= 500){
		basic15 += 1;
		remEXP -= 500;
		document.getElementById('skillRate15').setAttribute('value', basic15);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic15 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic15(){
	if (basic15 > Basic15 && basic15 <= 25){
		basic15 -= 1;
		remEXP += 250;
		document.getElementById('skillRate15').setAttribute('value', basic15);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic15 > Basic15 && basic15 > 25 && basic15 <= 75){
		basic15 -= 1;
		remEXP += 100;
		document.getElementById('skillRate15').setAttribute('value', basic15);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic15 > Basic15 && basic15 > 75 && basic15 <= 100){
		basic15 -= 1;
		remEXP += 250;
		document.getElementById('skillRate15').setAttribute('value', basic15);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic15 > Basic15 && basic15 > 100 && basic15 <= 150){
		basic15 -= 1;
		remEXP += 500;
		document.getElementById('skillRate15').setAttribute('value', basic15);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic15 > Basic15 && basic15 == 1){
		basic15 -= 1;
		remEXP += 250;
		document.getElementById('skillRate15').setAttribute('value', basic15);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill15').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 16
function incBasic16(){
	if (basic16 == 0 && remEXP >= 250){
		basic16 += 1;
		remEXP -= 250;
		document.getElementById('skillRate16').setAttribute('value', basic16);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 16;
		addBasic();
	} else if (basic16 < 25 && remEXP >= 250){
		basic16 += 1;
		remEXP -= 250;
		document.getElementById('skillRate16').setAttribute('value', basic16);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic16 >= 25 && basic16 < 75 && remEXP >= 100){
		basic16 += 1;
		remEXP -= 100;
		document.getElementById('skillRate16').setAttribute('value', basic16);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic16 >= 75 && basic16 < 100 && remEXP >= 250){
		basic16 += 1;
		remEXP -= 250;
		document.getElementById('skillRate16').setAttribute('value', basic16);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic16 >= 100 && basic16 < 150 && remEXP >= 500){
		basic16 += 1;
		remEXP -= 500;
		document.getElementById('skillRate16').setAttribute('value', basic16);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basi162 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic16(){
	if (basic16 > Basic16 && basic16 <= 25){
		basic16 -= 1;
		remEXP += 250;
		document.getElementById('skillRate16').setAttribute('value', basic16);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic16 > Basic16 && basic16 > 25 && basic16 <= 75){
		basic16 -= 1;
		remEXP += 100;
		document.getElementById('skillRate16').setAttribute('value', basic16);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic16 > Basic16 && basic16 > 75 && basic16 <= 100){
		basic16 -= 1;
		remEXP += 250;
		document.getElementById('skillRate16').setAttribute('value', basic16);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic16 > Basic16 && basic16 > 100 && basic16 <= 150){
		basic16 -= 1;
		remEXP += 500;
		document.getElementById('skillRate16').setAttribute('value', basic16);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic16 > Basic16 && basic16 == 1){
		basic16 -= 1;
		remEXP += 250;
		document.getElementById('skillRate16').setAttribute('value', basic16);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill16').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 17
function incBasic17(){
	if (basic17 == 0 && remEXP >= 250){
		basic17 += 1;
		remEXP -= 250;
		document.getElementById('skillRate17').setAttribute('value', basic17);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 17;
		addBasic();
	} else if (basic17 < 25 && remEXP >= 250){
		basic17 += 1;
		remEXP -= 250;
		document.getElementById('skillRate17').setAttribute('value', basic17);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic17 >= 25 && basic17 < 75 && remEXP >= 100){
		basic17 += 1;
		remEXP -= 100;
		document.getElementById('skillRate17').setAttribute('value', basic17);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic17 >= 75 && basic17 < 100 && remEXP >= 250){
		basic17 += 1;
		remEXP -= 250;
		document.getElementById('skillRate17').setAttribute('value', basic17);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic17 >= 100 && basic17 < 150 && remEXP >= 500){
		basic17 += 1;
		remEXP -= 500;
		document.getElementById('skillRate17').setAttribute('value', basic17);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic17 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic17(){
	if (basic17 > Basic17 && basic17 <= 25){
		basic17 -= 1;
		remEXP += 250;
		document.getElementById('skillRate17').setAttribute('value', basic17);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic17 > Basic17 && basic17 > 25 && basic17 <= 75){
		basic17 -= 1;
		remEXP += 100;
		document.getElementById('skillRate17').setAttribute('value', basic17);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic17 > Basic17 && basic17 > 75 && basic17 <= 100){
		basic17 -= 1;
		remEXP += 250;
		document.getElementById('skillRate17').setAttribute('value', basic17);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic17 > Basic17 && basic17 > 100 && basic17 <= 150){
		basic17 -= 1;
		remEXP += 500;
		document.getElementById('skillRate17').setAttribute('value', basic17);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic17 > Basic17 && basic17 == 1){
		basic17 -= 1;
		remEXP += 250;
		document.getElementById('skillRate17').setAttribute('value', basic17);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill17').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 18
function incBasic18(){
	if (basic18 == 0 && remEXP >= 250){
		basic18 += 1;
		remEXP -= 250;
		document.getElementById('skillRate18').setAttribute('value', basic18);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 18;
		addBasic();
	} else if (basic18 < 25 && remEXP >= 250){
		basic18 += 1;
		remEXP -= 250;
		document.getElementById('skillRate18').setAttribute('value', basic18);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic18 >= 25 && basic18 < 75 && remEXP >= 100){
		basic18 += 1;
		remEXP -= 100;
		document.getElementById('skillRate18').setAttribute('value', basic18);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic18 >= 75 && basic18 < 100 && remEXP >= 250){
		basic18 += 1;
		remEXP -= 250;
		document.getElementById('skillRate18').setAttribute('value', basic18);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic18 >= 100 && basic18 < 150 && remEXP >= 500){
		basic18 += 1;
		remEXP -= 500;
		document.getElementById('skillRate18').setAttribute('value', basic18);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic18 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic18(){
	if (basic18 > Basic18 && basic18 <= 25){
		basic18 -= 1;
		remEXP += 250;
		document.getElementById('skillRate18').setAttribute('value', basic18);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic18 > Basic18 && basic18 > 25 && basic18 <= 75){
		basic18 -= 1;
		remEXP += 100;
		document.getElementById('skillRate18').setAttribute('value', basic18);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic18 > Basic18 && basic18 > 75 && basic18 <= 100){
		basic18 -= 1;
		remEXP += 250;
		document.getElementById('skillRate18').setAttribute('value', basic18);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic18 > Basic18 && basic18 > 100 && basic18 <= 150){
		basic18 -= 1;
		remEXP += 500;
		document.getElementById('skillRate18').setAttribute('value', basic18);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic18 > Basic18 && basic18 == 1){ 
		basic3 -= 1;
		remEXP += 250;
		document.getElementById('skillRate3').setAttribute('value', basic3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill3').setAttribute('value', null); 
	} else if (basic3 > Basic3 && basic3 == 1){
		basic18 -= 1;
		remEXP += 250;
		document.getElementById('skillRate18').setAttribute('value', basic18);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill18').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 2
function incBasic19(){
	if (basic19 == 0 && remEXP >= 250){
		basic19 += 1;
		remEXP -= 250;
		document.getElementById('skillRate19').setAttribute('value', basic19);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 19;
		addBasic();
	} else if (basic19 < 25 && remEXP >= 250){
		basic19 += 1;
		remEXP -= 250;
		document.getElementById('skillRate19').setAttribute('value', basic19);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic19 >= 25 && basic19 < 75 && remEXP >= 100){
		basic19 += 1;
		remEXP -= 100;
		document.getElementById('skillRate19').setAttribute('value', basic19);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic19 >= 75 && basic19 < 100 && remEXP >= 250){
		basic19 += 1;
		remEXP -= 250;
		document.getElementById('skillRate19').setAttribute('value', basic19);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic19 >= 100 && basic19 < 150 && remEXP >= 500){
		basic19 += 1;
		remEXP -= 500;
		document.getElementById('skillRate19').setAttribute('value', basic19);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic19 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic19(){
	if (basic19 > Basic19 && basic19 <= 25){
		basic19 -= 1;
		remEXP += 250;
		document.getElementById('skillRate19').setAttribute('value', basic19);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic19 > Basic19 && basic19 > 25 && basic19 <= 75){
		basic19 -= 1;
		remEXP += 100;
		document.getElementById('skillRate19').setAttribute('value', basic19);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic19 > Basic19 && basic19 > 75 && basic19 <= 100){
		basic19 -= 1;
		remEXP += 250;
		document.getElementById('skillRate19').setAttribute('value', basic19);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic19 > Basic19 && basic19 > 100 && basic19 <= 150){
		basic19 -= 1;
		remEXP += 500;
		document.getElementById('skillRate19').setAttribute('value', basic19);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic19 > Basic19 && basic19 == 1){
		basic19 -= 1;
		remEXP += 250;
		document.getElementById('skillRate19').setAttribute('value', basic19);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill19').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//BASIC 20
function incBasic20(){
	if (basic20 == 0 && remEXP >= 250){
		basic20 += 1;
		remEXP -= 250;
		document.getElementById('skillRate20').setAttribute('value', basic20);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		n = 20;
		addBasic();
	} else if (basic20 < 25 && remEXP >= 250){
		basic20 += 1;
		remEXP -= 250;
		document.getElementById('skillRate20').setAttribute('value', basic20);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic20 >= 25 && basic20 < 75 && remEXP >= 100){
		basic20 += 1;
		remEXP -= 100;
		document.getElementById('skillRate20').setAttribute('value', basic20);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic20 >= 75 && basic20 < 100 && remEXP >= 250){
		basic20 += 1;
		remEXP -= 250;
		document.getElementById('skillRate20').setAttribute('value', basic20);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic20 >= 100 && basic20 < 150 && remEXP >= 500){
		basic20 += 1;
		remEXP -= 500;
		document.getElementById('skillRate20').setAttribute('value', basic20);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic20 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decBasic20(){
	if (basic20 > Basic20 && basic20 <= 25){
		basic20 -= 1;
		remEXP += 250;
		document.getElementById('skillRate20').setAttribute('value', basic20);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic20 > Basic20 && basic20 > 25 && basic20 <= 75){
		basic20 -= 1;
		remEXP += 100;
		document.getElementById('skillRate20').setAttribute('value', basic20);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic20 > Basic20 && basic20 > 75 && basic20 <= 100){
		basic20 -= 1;
		remEXP += 250;
		document.getElementById('skillRate20').setAttribute('value', basic20);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic20 > Basic20 && basic20 > 100 && basic20 <= 150){
		basic20 -= 1;
		remEXP += 500;
		document.getElementById('skillRate20').setAttribute('value', basic20);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (basic20 > Basic20 && basic20 == 1){
		basic20 -= 1;
		remEXP += 250;
		document.getElementById('skillRate20').setAttribute('value', basic20);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		document.getElementById('skill20').setAttribute('value', null); 
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

//ADVANCED SKILLS
var an = 0;
function addAdv(){
	var list = [
	document.getElementById('skill1').value,
	document.getElementById('skill2').value,
	document.getElementById('skill3').value,
	document.getElementById('skill4').value,
	document.getElementById('skill5').value,
	document.getElementById('skill6').value,
	document.getElementById('skill7').value,
	document.getElementById('skill8').value,
	document.getElementById('skill9').value,
	document.getElementById('skill10').value,
	document.getElementById('skill11').value,
	document.getElementById('skill12').value,
	document.getElementById('skill13').value,
	document.getElementById('skill14').value,
	document.getElementById('skill15').value,
	document.getElementById('skill16').value,
	document.getElementById('skill17').value,
	document.getElementById('skill18').value,
	document.getElementById('skill19').value,
	document.getElementById('skill20').value
	];

	if (list.indexOf('MATH') > -1){
			document.getElementById('physicsBtn').disabled = false;

	} if (list.indexOf('BIOLOGY') > -1 
		&& list.indexOf('CHEMISTRY') > -1
		&& list.indexOf('FIRST_AID') > -1){
		document.getElementById('doctorBtn').disabled = false;
					
	} if (list.indexOf('BIOLOGY') > -1 
		&& list.indexOf('CHEMISTRY') > -1
		&& list.indexOf('LITERACY') > -1){
		document.getElementById('toxicBtn').disabled = false;
	
	} if (list.indexOf('COMPUTERS') > -1){
		document.getElementById('encryptBtn').disabled = false;
		document.getElementById('programBtn').disabled = false;
	}
		document.getElementById('advSkillModal').style.display = 'block';
}

//ADVANCED 1
function incAdv1(){
	if (adv1 == 0 && remEXP >= 500){
		adv1 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate1').setAttribute('value', adv1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 1;
		addAdv();
	} else if (adv1 < 25 && remEXP >= 500){
		adv1 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate1').setAttribute('value', adv1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv1 >= 25 && adv1 < 75 && remEXP >= 250){
		adv1 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate1').setAttribute('value', adv1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv1 >= 75 && remEXP >= 500){
		adv1 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate1').setAttribute('value', adv1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv1 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv1(){
	if (adv1 > Adv1 && adv1 <= 25){
		adv1 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate1').setAttribute('value', adv1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv1 > Adv1 && adv1 > 25 && adv1 <= 75){
		adv1 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate1').setAttribute('value', adv1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv1 > Adv1 && adv1 > 75){
		adv1 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate1').setAttribute('value', adv1);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//ADVANCED 2
function incAdv2(){
	if (adv2 == 0 && remEXP >= 500){
		adv2 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate2').setAttribute('value', adv2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 2;
		addAdv();
	} else if (adv2 < 25 && remEXP >= 500){
		adv2 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate2').setAttribute('value', adv2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv2 >= 25 && adv2 < 75 && remEXP >= 250){
		adv2 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate2').setAttribute('value', adv2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv2 >= 75 && remEXP >= 500){
		adv2 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate2').setAttribute('value', adv2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv2 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv2(){
	if (adv2 > Adv2 && adv2 <= 25){
		adv2 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate2').setAttribute('value', adv2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv2 > Adv2 && adv2 > 25 && adv2 <= 75){
		adv2 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate2').setAttribute('value', adv2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv2 > Adv2 && adv2 > 75){
		adv2 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate2').setAttribute('value', adv2);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//ADVANCED 3
function incAdv3(){
	if (adv3 == 0 && remEXP >= 500){
		adv3 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate3').setAttribute('value', adv3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 3;
		addAdv();
	} else if (adv3 < 25 && remEXP >= 500){
		adv3 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate3').setAttribute('value', adv3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv3 >= 25 && adv3 < 75 && remEXP >= 250){
		adv3 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate3').setAttribute('value', adv3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv3 >= 75 && remEXP >= 500){
		adv3 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate3').setAttribute('value', adv3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv3 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv3(){
	if (adv3 > Adv3 && adv3 <= 25){
		adv3 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate3').setAttribute('value', adv3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv3 > Adv3 && adv3 > 25 && adv3 <= 75){
		adv3 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate3').setAttribute('value', adv3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv3 > Adv3 && adv3 > 75){
		adv3 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate3').setAttribute('value', adv3);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//ADVANCED 4
function incAdv4(){
	if (adv4 == 0 && remEXP >= 500){
		adv4 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate4').setAttribute('value', adv4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 4;
		addAdv();
	} else if (adv4 < 25 && remEXP >= 500){
		adv4 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate4').setAttribute('value', adv4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv4 >= 25 && adv4 < 75 && remEXP >= 250){
		adv4 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate4').setAttribute('value', adv4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv4 >= 75 && remEXP >= 500){
		adv4 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate4').setAttribute('value', adv4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv4 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv4(){
	if (adv4 > Adv4 && adv4 <= 25){
		adv4 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate4').setAttribute('value', adv4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv4 > Adv4 && adv4 > 25 && adv4 <= 75){
		adv4 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate4').setAttribute('value', adv4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv4 > Adv4 && adv4 > 75){
		adv4 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate4').setAttribute('value', adv4);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//ADVANCED 5
function incAdv5(){
	if (adv5 == 0 && remEXP >= 500){
		adv5 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate5').setAttribute('value', adv5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 5;
		addAdv();
	} else if (adv5 < 25 && remEXP >= 500){
		adv5 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate5').setAttribute('value', adv5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv5 >= 25 && adv5 < 75 && remEXP >= 250){
		adv5 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate5').setAttribute('value', adv5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv5 >= 75 && remEXP >= 500){
		adv5 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate5').setAttribute('value', adv5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv5 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv5(){
	if (adv5 > Adv5 && adv5 <= 25){
		adv5 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate5').setAttribute('value', adv5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv5 > Adv5 && adv5 > 25 && adv5 <= 75){
		adv5 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate5').setAttribute('value', adv5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv5 > Adv5 && adv5 > 75){
		adv5 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate5').setAttribute('value', adv5);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//ADVANCED 6
function incAdv6(){
	if (adv6 == 0 && remEXP >= 500){
		adv6 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate6').setAttribute('value', adv6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 6;
		addAdv();
	} else if (adv6 < 25 && remEXP >= 500){
		adv6 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate6').setAttribute('value', adv6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv6 >= 25 && adv6 < 75 && remEXP >= 250){
		adv6 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate6').setAttribute('value', adv6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv6 >= 75 && remEXP >= 500){
		adv6 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate6').setAttribute('value', adv6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv6 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv6(){
	if (adv6 > Adv6 && adv6 <= 25){
		adv6 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate6').setAttribute('value', adv6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv6 > Adv6 && adv6 > 25 && adv6 <= 75){
		adv6 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate6').setAttribute('value', adv6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv6 > Adv6 && adv6 > 75){
		adv6 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate6').setAttribute('value', adv6);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//ADVANCED 7
function incAdv7(){
	if (adv7 == 0 && remEXP >= 500){
		adv7 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate7').setAttribute('value', adv7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 7;
		addAdv();
	} else if (adv7 < 25 && remEXP >= 500){
		adv7 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate7').setAttribute('value', adv7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv7 >= 25 && adv7 < 75 && remEXP >= 250){
		adv7 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate7').setAttribute('value', adv7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv7 >= 75 && remEXP >= 500){
		adv7 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate7').setAttribute('value', adv7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv7 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv7(){
	if (adv7 > Adv7 && adv7 <= 25){
		adv7 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate7').setAttribute('value', adv7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv7 > Adv7 && adv7 > 25 && adv7 <= 75){
		adv7 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate7').setAttribute('value', adv7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv7 > Adv7 && adv7 > 75){
		adv7 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate7').setAttribute('value', adv7);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//ADVANCED 8
function incAdv8(){
	if (adv8 == 0 && remEXP >= 500){
		adv8 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate8').setAttribute('value', adv8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 8;
		addAdv();
	} else if (adv8 < 25 && remEXP >= 500){
		adv8 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate8').setAttribute('value', adv8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv8 >= 25 && adv8 < 75 && remEXP >= 250){
		adv8 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate8').setAttribute('value', adv8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv8 >= 75 && remEXP >= 500){
		adv8 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate8').setAttribute('value', adv8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv8 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv8(){
	if (adv8 > Adv8 && adv8 <= 25){
		adv8 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate8').setAttribute('value', adv8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv8 > Adv8 && adv8 > 25 && adv8 <= 75){
		adv8 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate8').setAttribute('value', adv8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv8 > Adv8 && adv8 > 75){
		adv8 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate8').setAttribute('value', adv8);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//ADVANCED 9
function incAdv9(){
	if (adv9 == 0 && remEXP >= 500){
		adv9 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate9').setAttribute('value', adv9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 9;
		addAdv();
	} else if (adv9 < 25 && remEXP >= 500){
		adv9 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate9').setAttribute('value', adv9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv9 >= 25 && adv9 < 75 && remEXP >= 250){
		adv9 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate9').setAttribute('value', adv9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv9 >= 75 && remEXP >= 500){
		adv9 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate9').setAttribute('value', adv9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv9 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv9(){
	if (adv9 > Adv9 && adv9 <= 25){
		adv9 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate9').setAttribute('value', adv9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv9 > Adv9 && adv9 > 25 && adv9 <= 75){
		adv9 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate9').setAttribute('value', adv9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv9 > Adv9 && adv9 > 75){
		adv9 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate9').setAttribute('value', adv9);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//ADVANCED 10
function incAdv10(){
	if (adv10 == 0 && remEXP >= 500){
		adv10 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate10').setAttribute('value', adv10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 10;
		addAdv();
	} else if (adv10 < 25 && remEXP >= 500){
		adv10 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate10').setAttribute('value', adv10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv10 >= 25 && adv10 < 75 && remEXP >= 250){
		adv10 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate10').setAttribute('value', adv10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv10 >= 75 && remEXP >= 500){
		adv10 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate10').setAttribute('value', adv10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv10 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv10(){
	if (adv10 > Adv10 && adv10 <= 25){
		adv8 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate10').setAttribute('value', adv10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv10 > Adv10 && adv10 > 25 && adv10 <= 75){
		adv10 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate10').setAttribute('value', adv10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv10 > Adv10 && adv10 > 75){
		adv8 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate10').setAttribute('value', adv10);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//ADVANCED 11
function incAdv11(){
	if (adv11 == 0 && remEXP >= 500){
		adv11 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate11').setAttribute('value', adv11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 11;
		addAdv();
	} else if (adv11 < 25 && remEXP >= 500){
		adv11 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate11').setAttribute('value', adv11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv11 >= 25 && adv11 < 75 && remEXP >= 250){
		adv11 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate11').setAttribute('value', adv11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv11 >= 75 && remEXP >= 500){
		adv11 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate11').setAttribute('value', adv11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv11 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv11(){
	if (adv11 > Adv11 && adv11 <= 25){
		adv11 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate11').setAttribute('value', adv11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv11 > Adv11 && adv11 > 25 && adv11 <= 75){
		adv11 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate11').setAttribute('value', adv11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv11 > Adv11 && adv11 > 75){
		adv11 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate11').setAttribute('value', adv11);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}
//ADVANCED 12
function incAdv12(){
	if (adv12 == 0 && remEXP >= 500){
		adv12 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate12').setAttribute('value', adv12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
		an = 12;
		addAdv();
	} else if (adv12 < 25 && remEXP >= 500){
		adv12 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate12').setAttribute('value', adv12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv12 >= 25 && adv12 < 75 && remEXP >= 250){
		adv12 += 1;
		remEXP -= 250;
		document.getElementById('advSkillRate12').setAttribute('value', adv12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv12 >= 75 && remEXP >= 500){
		adv12 += 1;
		remEXP -= 500;
		document.getElementById('advSkillRate12').setAttribute('value', adv12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv12 == 150){
		alert("CANT INCREASE THIS FURTHER");
	} else {alert("NOT ENOUGH EXPERIENCE LEFT TO INCREASE THIS");}
}
function decAdv12(){
	if (adv12 > Adv12 && adv12 <= 25){
		adv12 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate12').setAttribute('value', adv12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv12 > Adv12 && adv12 > 25 && adv12 <= 75){
		adv12 -= 1;
		remEXP += 250;
		document.getElementById('advSkillRate12').setAttribute('value', adv12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else if (adv12 > Adv12 && adv12 > 75){
		adv12 -= 1;
		remEXP += 500;
		document.getElementById('advSkillRate12').setAttribute('value', adv12);
		document.getElementById("remEXP").setAttribute('value', remEXP);
	} else {alert("CANT REDUCE SKILL FURTHER");}
}

//ABILITIES
var a = 1;

function addTake(){
	if (remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'TAKEDOWN');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addStun(){
	if (str >= 8 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'STUN');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addCripple(){
	if (str >= 10 && remEXP >= 12500){
		remEXP -= 12500;
		document.getElementById('ability' + a).setAttribute('value', 'CRIPPLE');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addDodge(){
	if (spd >= 14 && dex >= 12 && remEXP >= 50000){
		remEXP -= 50000;
		document.getElementById('ability' + a).setAttribute('value', 'AUTO-DODGE');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//SWEEP
function addUnSwp(){
	if (str >= 14 && unarm >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'UNARMED_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShortSwp(){
	if (str >= 14 && shortW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'SHORT_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addLongSwp(){
	if (str >= 10 && longW >= 100 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'LONG_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addTHWSwp(){
	if (str >= 10 && twoHW >= 75 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'TWO_HANDED_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addChainSwp(){
	if (chain >= 75 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'CHAIN_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBurstSwp(){
	if (str >= 8 && burst >= 75 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'BURST_SWEEP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//DISARM
function addUnDis(){
	if (unarm >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'UNARMED_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addGrapDis(){
	if (grap >= 75 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'GRAPPLE_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShortDis(){
	if (shortW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'SHORT_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addLongDis(){
	if (longW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'LONG_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addTHWDis(){
	if (twoHW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'TWO_HANDED_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addChainDis(){
	if (chain >= 75 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'CHAIN_DISARM');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//PARRY
function addUnBlk(){
	if (spd >= 10 && unarm >= 100 && remEXP >= 20000){
		remEXP -= 20000;
		document.getElementById('ability' + a).setAttribute('value', 'UNARMED_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShieldBlk(){
	if (spd >= 8 && unarm >= 75 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'SHIELD_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShortBlk(){
	if (spd >= 10 && shortW >= 100 && remEXP >= 20000){
		remEXP -= 20000;
		document.getElementById('ability' + a).setAttribute('value', 'SHORT_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addLongBlk(){
	if (spd >= 10 && longW >= 100 && remEXP >= 20000){
		remEXP -= 20000;
		document.getElementById('ability' + a).setAttribute('value', 'LONG_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addTHWBlk(){
	if (spd >= 10 && twoHW >= 100 && remEXP >= 20000){
		remEXP -= 20000;
		document.getElementById('ability' + a).setAttribute('value', 'TWO_HANDED_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addChainBlk(){
	if (spd >= 10 && chain >= 100 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'CHAIN_PARRY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//COUNTER ATTACKS
function addUnCA(){
	if (spd >= 10 && unarm >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'UNARMED_COUNTER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShortCA(){
	if (spd >= 10 && shortW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'SHORT_COUNTER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addLongCA(){
	if (spd >= 12 && longW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'LONG_COUNTER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addTHWCA(){
	if (spd >= 12 && twoHW >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'TWO_HANDED_COUNTER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addChainCA(){
	if (spd >= 10 && chain >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'CHAIN_COUNTER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//QUICK-DRAW
function addHipDraw(){
	if (dex >= 10 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_HIP');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBackDraw(){
	if (dex >= 12 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_BACK');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addShouldDraw(){
	if (remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_SHOULDER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addRearDraw(){
	if (dex >= 10 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_REAR');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addThighDraw(){
	if (remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_THIGH');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBootDraw(){
	if (dex >= 14 && remEXP >= 2500){
		remEXP -= 2500;
		document.getElementById('ability' + a).setAttribute('value', 'QUICKDRAW_BOOT');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//SPEEDLOAD
function addQBow(){
	if (dex >= 14 && remEXP >= 12500){
		remEXP -= 12500;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_BOW');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addQCross(){
	if (dex >= 12 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_CROSSBOW');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addQRev(){
	if (dex >= 14 && remEXP >= 15000){
		remEXP -= 15000;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_REVOLVER');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addQPistol(){
	if (dex >= 10 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_PISTOL');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addQRifle(){
	if (dex >= 10 && remEXP >= 7500){
		remEXP -= 7500;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_RIFLE');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addQTube(){
	if (dex >= 12 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'SPEEDLOAD_TUBE');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//VOLLEY
function addVP(){
	if (oneHguns >= 100 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'PISTOL_VOLLEY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addVR(){
	if (twoHguns >= 100 && remEXP >= 5000){
		remEXP -= 5000;
		document.getElementById('ability' + a).setAttribute('value', 'RIFLE_VOLLEY');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}

//BLINDFIRE
function addBThrow(){
	if (thrown >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'BLINDTHROW');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBArch(){
	if (arch >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'BLINDFIRE_BOW');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBPistol(){
	if (oneHguns >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'BLINDFIRE_PISTOL');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function addBRifle(){
	if (twoHguns >= 100 && remEXP >= 10000){
		remEXP -= 10000;
		document.getElementById('ability' + a).setAttribute('value', 'BLINDFIRE_RIFLE');		
		document.getElementById("remEXP").setAttribute('value', remEXP);
		a += 1;
	} else {alert("CANT ADD ABILITY, PRE-REQUISITES NOT MET");}
}
function remAble(){
	//FLIP 5000
	//SWEEP 10000
	//DISARM 25000
	//STUN 15000
	//CRIPPLE 15000
	//COUNTER 15000
	//AUTO BLOCK 25000
	//AUTO DODGE 40000
	//QUICK DRAW 10000
	//SPEED LOAD 10000
	//SPEED LOAD REVOLVER 10000
	//SAT FIRE 10000
	//BLIND FIRE 25000
	//
}
