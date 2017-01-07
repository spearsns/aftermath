function roll(min, max){
	return Math.round(Math.random() * (max - min)) + min;
} 

var radiation = roll(2,20);
var mutts;
var background = background();

//TRAITS
var mem = roll(2,20);
var log = roll(2,20);
var per = roll(2,20);
var will = roll(2,20);
var cha = roll(2,20);

var str = roll(2,20);
var end = roll(2,20);
var dex = roll(2,20);
var spd = roll(2,20);
var bty = roll(2,20);

var traitPts = 	Math.floor(will / 2);
var skillChoice = roll(1,10) + will;

function incMem(){
	mem ++;
	traitPts --;
	document.getElementById("MEM").setAttribute('value', mem);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decMem(){
	mem --;
	traitPts ++;
	document.getElementById("MEM").setAttribute('value', mem);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incLog(){
	log ++;
	traitPts --;
	document.getElementById("LOG").setAttribute('value', log);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decLog(){
	log --;
	traitPts ++;
	document.getElementById("LOG").setAttribute('value', log);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incPer(){
	per ++;
	traitPts --;
	document.getElementById("PER").setAttribute('value', per);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decPer(){
	per --;
	traitPts ++;
	document.getElementById("PER").setAttribute('value', per);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incWill(){
	will ++;
	traitPts --;
	document.getElementById("WILL").setAttribute('value', will);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decWill(){
	will --;
	traitPts ++;
	document.getElementById("WILL").setAttribute('value', will);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incCha(){
	cha ++;
	traitPts --;
	document.getElementById("CHA").setAttribute('value', cha);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decCha(){
	cha --;
	traitPts ++;
	document.getElementById("CHA").setAttribute('value', cha);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incStr(){
	str ++;
	traitPts --;
	document.getElementById("STR").setAttribute('value', str);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decStr(){
	str --;
	traitPts ++;
	document.getElementById("STR").setAttribute('value', str);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incEnd(){
	end ++;
	traitPts --;
	document.getElementById("END").setAttribute('value', end);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decEnd(){
	end --;
	traitPts ++;
	document.getElementById("END").setAttribute('value', end);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incDex(){
	dex ++;
	traitPts --;
	document.getElementById("DEX").setAttribute('value', dex);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decDex(){
	dex --;
	traitPts ++;
	document.getElementById("DEX").setAttribute('value', dex);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incSpd(){
	spd ++;
	traitPts --;
	document.getElementById("SPD").setAttribute('value', spd);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decSpd(){
	spd --;
	traitPts ++;
	document.getElementById("SPD").setAttribute('value', spd);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incBty(){
	bty ++;
	traitPts --;
	document.getElementById("BTY").setAttribute('value', bty);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decBty(){
	bty --;
	traitPts ++;
	document.getElementById("BTY").setAttribute('value', bty);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}

/*
function mutation(){
		var mutation = roll(1,100);
		if (mutation <= 5){
//HAIRLESS
		bty - 2;
			return "Hairless";

//NO NAILS
		} else if (mutation >= 6 && mutation <= 10){
			return "No Nails";

//ONE EYE
		} else if (mutation >= 11 && mutation <= 15){
			per - (roll(1,10) / 2);
			bty - roll(1,10);
			return "One Eye";

//NO EARS
		} else if (mutation >= 16 && mutation <= 20){
			per - (roll(1,10) / 2);
			bty - (roll(1,10) / 2);
			return "No Ears";

//NO NOSE
		} else if (mutation >= 21 && mutation <= 25){
			bty - roll(2,20);
			return "No Nose";

//UGLY AS HELLS
		} else if (mutation >= 26 && mutation <= 40){
			bty - roll(2,20);
			return "Ugly as Hell";

//EXTRA DIGITS
		} else if (mutation >= 41 && mutation <= 45){
			dex + 2;
			return "Extra Digits";

//MUSCLE ATROPHY
		} else if (mutation >= 46 && mutation <= 50){
			str - roll(1,10);
			end - roll(1,10);
			return "Muscle Atrophy";

//PARTIALLY DEAF
		} else if (mutation >= 51 && mutation <= 55){
			per - (roll(1,10) / 2);
			dex - (roll(1,10) / 2);
			return "Partially Deaf";

//MUTE
		} else if (mutation >= 56 && mutation <= 60){
			return "Mute";

//NO TASTE OR SMELL
		} else if (mutation >= 61 && mutation <= 65){
			return "No Taste or Smell";

//LONG LIMBS
		} else if (mutation >= 66 && mutation <= 70){
			bty - roll(1,10);
			dex + (roll(1,10) / 2);
			return "Long Limbs";

//DEFORMED ARMS
		} else if (mutation >= 71 && mutation <= 75){
			bty - roll(1,10);
			dex - (roll(1,10) / 2);
			str - roll(1,10);
			return "Deformed Arms";

//WEAK BONES
		} else if (mutation >= 76 && mutation <= 80){
			end - roll(1,10);
			str - (roll(1,10) / 2);
			spd + (roll(1,10) / 2);
			return "Weak Bones";

//CARTILAGENEOUS SKELETON
		} else if (mutation >= 81 && mutation <= 85){
			end - (roll(1,10) / 2);
			dex + roll(1,10);
			spd + (roll(1,10) / 2);			
			return "Cartilageneous Skeleton";

//CALCIFIED BONES
		} else if (mutation >= 86 && mutation <= 90){
			end + (roll(1,10) / 2);
			dex - 2;			
			return "Calcified Bones";

//LEATHERY SKIN
		} else if (mutation >= 91 && mutation <= 95){
			bty - roll(1,10);
			return "Leathery Skin";

//LOOSE MUSCULATURE		
		} else {
			str - (roll(1,10) / 2);
			dex + (roll(1,10) / 2);
			return "Loose Musculature";
		}
	}		
*/

function background(){
		var background = roll(1,100);
//DOCTOR
		if (background <= 5){
/*
		lit
		math
		bio
		firstA
		medicine
		chem
		botany && holis || bio && pharma
*/
			return "Doctor";

//CHEMIST
		} else if (background >= 6 && background <= 8){
/*
		lit
		math
		chem
		botany && holis || bio && toxic
*/
			return "Chemist";

//PROGRAMMER
		} else if (background >= 9 && background <= 11){
/*
		lit
		math
		comp
		program
		encrypt || comm
*/	
			return "Programmer";

//COMMUNICATIONS EXPERT
		} else if (background >= 12 && background <= 15){
/*
		lit
		math
		comp
		elect
		comm
		(negotT * 2)
*/		
			return "Communications Expert";

//INVESTIGATOR
		} else if (background >= 16 && background <= 18){
/*
		lit
		surv
		track
		forensic
		melee training
		ranged training
		(negotT * 2)
*/
			return "Investigator";

//MERCHANT
		} else if (background >= 19 && background <= 20){
/*
		lit
		math
		melee training
		ranged training
		navigT
		(negotT * 2)
*/
			return "Merchant";

//TEACHER
		} else if (background >= 21 && background <= 25){
/*
		lit
		math
		hist
		comp
		bio || botany
*/
			return "Teacher";

//MECHANIC
		} else if (background >= 26 && background <= 30){
/*
		lit
		math
		mech
		metal
		pilot !horse
*/
			return "Mechanic";

//MEDIC
		} else if (background >= 31 && background <= 40){
/*
		lit
		bio
		firstA
		bot && holis || medicine
*/
			return "Medic";

//CONSTRUCTION WORKER
		} else if (background >= 41 && background <= 50){
/*
		math
		carpentry
		metal || bind
		strEng
*/
			return "Construction Worker";

//MAN-AT-ARMS
		} else if (background >= 51 && background <= 55){
/*
		unarmT
		grapT
		stealthT
		surv
		bio
		melee training
		ranged training
*/
			return "Man-at-Arms";

//GANG MEMBER
		} else if (background >= 56 && background <= 65){
/*
		unarmT
		grapT
		melee training
		ranged training
		negotT
*/
			return "Gang Member";

//OUTDOORSMAN
		} else if (background >= 66 && background <= 75){
/*
		bind
		trap
		surv || track
		outdoor
		navigT
		ranged training
		stealthT
*/			
			return "Outdoorsman";

//FARMER
		} else if (background >= 76 && background <= 85){
/*
		botany
		holis
		bind
		carpentry || metal
		horse || auto
		outdoor
*/
			return "Farmer";

//DRIFTER
		} else if (background >= 86 && background <= 90){
/*
		navigT
		combat training
		pilot
*/			
			return "Drifter";

//SCAVENGER
		} else if (background >= 91 && background <= 95){
/*
		lit
*/			
			return "Scavenger";

//URCHIN
		} else {
/*
		pick
		surv
		negotT
*/			
			return "Urchin";
		}
	}		

/*
//MUTATION GENERATOR
if (radiation > end){
	mutts = (radiation - end) / 2;
	do {
		mutation();
	}
	while (i = 0; i < mutts; i++)
};
*/

//COMBAT STATS
var seq = 	Math.floor((per + spd) / 2);
var act = 	Math.floor(spd / 2);
var block = Math.floor((dex + spd) / 2);
var dodge = Math.floor((dex + spd) / 4);

//UNIVERSAL SKILLS
var stealth = 	(per * 3) + dex;
var climb = 	(dex * 3) + str;
var negot = 	cha * 4;
var navig = 	(log * 2) + per + mem;
//MELEE
var unarm = 	(spd * 3) + (str * 2) + dex;
var grap = 		(str * 2) + end + dex + spd;
var off = 		0 - ((20 - dex) * 3);
var short = 	(spd * 3) + dex + str;
var long = 		(spd * 2) + (dex * 2) + str;
var twoH = 		(dex * 2) + (str * 2) + spd;
var chain = 	(dex * 3) + spd + log;
//RANGED
var thrown = 	(str * 2) + (dex * 2) + log;
var arch = 		(dex * 2) + (log * 2) + per;
var oneHguns = 	(dex * 3) + per + log;
var twoHguns = 	(dex * 2) + (per *2) + log;
var burst = 	(log * 2) + per + dex + str;
var special = 	(per * 2) + (log * 2) + dex;
var wsys = 		(per * 2) + (log * 2) + spd;

function addSkill(){
	var n = 1;
	var skill = this;
	var skillRate = this;
	for (n = 1; n < 17; n++){
	document.getElementById("skill" + n).setAttribute('value', skill);
	document.getElementById("skillRate" + n).setAttribute('value', skillRate);
	}
}

//-------------------------------------STANDARD SKILLS

//SCIENCE
var math = 		(mem * 3) + (log * 2);
var bio = 		(mem * 2) + (log * 2);
var marBio = 	(mem * 2) + (log * 2);
var botany =	(mem * 2) + (log * 2);
var geo = 		(mem * 2) + (log * 2);
var chem = 		(mem * 3) + log;
var hist = 		mem * 4;
var myco = 		(mem * 3) + log;
var meteo = 	mem + (log * 3);
var astro = 	(mem * 2) + (log * 2);

//TECHNOLOGY
var mech = 		log * 4;
var elect = 	(mem * 2) + (log * 2);
var comp = 		(mem * 2) + (log * 2);
var carp = 		mem + (log * 3);
var metal = 	mem + (log * 3);
var bind = 		(log * 3) + dex;
var lock = 		(dex * 2) + log + per;
var comm = 		(mem * 3) + log;

//SURVIVAL
var traps = 	(per * 2) + (log * 2);
var surv = 		(per * 3) + log;
var track =		(per * 3) + log;
var outdoor =	(per * 2) + log + mem;
var pick =		(dex * 2) + per;

/*
//TRAINING
function stealthT(){
	stealth = stealth + roll(4,40);
	document.getElementById("stealth").setAttribute('value', stealth);
}

var negotT =	roll(2,20);
var climbT =	roll(4,40);
var navigT = 	roll(2,20);
var unarmT =	roll(4,40);
var grapT =		roll(4,40);
var shortT =	roll(4,40);
var longT =		roll(4,40);
var twoHT =		roll(4,40);
var chainT =	roll(4,40);
var thrownT =	roll(4,40);
var archT =		roll(4,40);
var oneHgunsT = roll(4,40);
var twoHgunsT =	roll(4,40);
*/

//MEDICAL
var firstA = 	(mem * 2) + (log * 2);
var holis =		(mem * 3);

//PILOTING
var horse = 	(dex * 2) + log + per;
var cycle = 	(dex * 2) + log + per;
var auto = 		(log * 2) + spd + per;
var boat =		(log * 2) + spd + per;
var sail =		(log * 2) + (per * 2);
var jetski =	(dex * 2) + log + per;

//SOCIAL
var lit =		(mem * 4) + (log * 2);
var forlang = 	(mem * 2) + (log * 2);
var forlit =	(mem * 3) + (log * 2);

//-------------------------------------ADVANCED SKILLS

//SCIENCE
var foren =	(log *2) + (per * 2);
var toxic =		(mem * 3) + log;
var pharma =	(mem * 3) + log;
var micBio =	(mem * 3) + log;

//TECHNOLOGY
var strEng =	(log * 3) + mem;
var encrypt =	(mem * 3);
var program = 	(log * 3) + mem;
var robot =		(log * 2) + mem;
var cyber =		log + mem;

//TRAINING
/*
var offT =		roll(3,30);
var burstT =	roll(3,30);
var specialT =	roll(3,30);
var wsysT =		roll(3,30);
*/

//MEDICAL
var doctor =	(mem * 3) + log;

//PILOT
var freight =	(log * 3) + per;
var conVeh =	(log * 3) + per;
var milVeh =	(log * 3) + per;
var heli =		(per * 2) + (log * 2);
var smPlane =	(per * 2) + (log * 2);
var jetPlane =	(per * 2) + (log * 2);
var lgPlane = 	(per * 2) + (log * 2);

//SOCIAL
var diffForLan = 	(mem * 3) + log;
var diffForLit = 	(mem * 3) + log;
var law =			mem * 4;
