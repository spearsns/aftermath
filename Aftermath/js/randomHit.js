function randomHit(){
case 1 (roll >= 01 && roll <= 03): NECK;
case 2 (roll >= 04 && roll <= 15): HEAD;
case 3 (roll >= 16 && roll <= 20): PELVIC(GROIN/REAR);
case 4 (roll >= 21 && roll <= 30): MIDSECTION(STOMACH/KIDNEYS);
case 5 (roll >= 31 && roll <= 40): LEFT UPPER BODY(RIBS[HEART]/SHOULDER);
case 6 (roll >= 41 && roll <= 50): RIGHT UPPER BODY(RIBS/SHOULDER);
case 7 (roll >= 51 && roll <= 55): LEFT THIGH;
case 8 (roll >= 56 && roll <= 60): RIGHT THIGH;
case 9 (roll >= 61 && roll <= 65): LEFT UPPERARM;
case 10 (roll >= 66 && roll <= 70): RIGHT UPPERARM;
case 11 (roll >= 71 && roll <= 75): LEFT FOREARM;
case 12 (roll >= 76 && roll <= 80): RIGHT FOREARM;
case 13 (roll >= 81 && roll <= 86): LEFT CALF/SHIN;
case 14 (roll >= 87 && roll <= 92): RIGHT CALF/SHIN;
case 15 (roll >= 93 && roll <= 94): LEFT HAND;
case 15 (roll >= 95 && roll <= 96): RIGHT HAND;
case 16 (roll >= 97 && roll <= 98): LEFT FOOT;
case 17 (roll >= 99 && roll <= 00): RIGHT FOOT;
}

//function burst(){
	//roll/5 round to 5
	//successful hit is 76 so 75
	//75/5:
		//01-15: 5 hits
		//16-30: 4 hits
		//31-45: 3 hits
		//46-60: 2 hits
		//61-75: 1 hit
		//76-00: MISS
}
