/* 
Created by: Kenrick Beckett

Name: Chat Engine
*/

var instanse = false;
var state;
var mes;
var file;

function Chat () {
    this.update = updateChat;
    this.send = sendChat;
	this.getState = getStateOfChat;
}

var checkFocus = function() {
        var container = $('#chat-area');
        var height = container.height();
        var scrollHeight = container[0].scrollHeight;
        var st = container.scrollTop();
        var sum = scrollHeight - height - 32;
        if(st >= sum) {
          return true;
        } else {
          return false;
    }
}

//gets the state of the chat
function getStateOfChat(){
	if(!instanse){
		 instanse = true;
		 $.ajax({
			   type: "POST",
			   url: "../processchat.php",
			   data: {  
			   			'function': 'getState',
						'file': file
						},
			   dataType: "json",
			
			   success: function(data){
				   state = data.state;
				   instanse = false;
			   },
			});
	}	 
}

//Updates the chat
function updateChat(){
	 if(!instanse){
		 instanse = true;
	     $.ajax({
			   type: "POST",
			   url: "../processchat.php",
			   data: {  
			   			'function': 'update',
						'state': state,
						'file': file
						},
			   dataType: "json",
			   success: function(data){
				   if(data.text){
						for (var i = 0; i < data.text.length; i++) {
                            $('#chat-area').append($("<p>"+ data.text[i] +"</p>"));
                        }								  
				   }
				   if(checkFocus()) {
				        $('#messages').html( data );
        				document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
    				} else {
				       $('#messages').html( data );
    				}
				   instanse = false;
				   state = data.state;
			   },
			});
	 }
	 else {
		 setTimeout(updateChat, 1500);
	 }
}

//send the message
function sendChat(message, nickname)
{       
    updateChat();
     $.ajax({
		   type: "POST",
		   url: "../processchat.php",
		   data: {  
		   			'function': 'send',
					'message': message,
					'nickname': nickname,
					'file': file
				 },
		   dataType: "json",
		   success: function(data){
			   updateChat();
		   },
		});
}
//BUTTONS
function percentileOver(){
    document.getElementById("percentile").src = "../img/buttons/percentile_1.png";
}
function percentileOut(){
    document.getElementById("percentile").src = "../img/buttons/percentile_0.png";
}
function rhcOver(){
    document.getElementById("rhc").src = "../img/buttons/rhc_1.png";
}
function rhcOut(){
    document.getElementById("rhc").src = "../img/buttons/rhc_0.png";
}
function testOver(){
    document.getElementById("test").src = "../img/buttons/2d10_1.png";
}
function testOut(){
    document.getElementById("test").src = "../img/buttons/2d10_0.png";
}
function editOver(){
    document.getElementById("edit").src = "../img/buttons/editChar_1.png";
}
function editOut(){
    document.getElementById("edit").src = "../img/buttons/editChar_0.png";
}
function idOver(){
    document.getElementById("id").src = "../img/buttons/idMarks_1.png";
}
function idOut(){
    document.getElementById("id").src = "../img/buttons/idMarks_0.png";
}

//DICE
function roll(min, max){
	return Math.round(Math.random() * (max - min)) + min;
} 

function percentile(){
var percentile = roll(1,100);

	if (percentile == 00 ||
		percentile == 11 ||
		percentile == 22 ||
		percentile == 33 ||
		percentile == 44 ||
		percentile == 55 ||
		percentile == 66 ||
		percentile == 77 ||
		percentile == 88 ||
		percentile == 99){
		var perResult = "[%] !!CRITICAL!! " + percentile;
	} else {
		perResult = '[%] ' + percentile;
	}
		sendChat(perResult, name);
}

function test(){
	var test = '[2D10] ' + (roll(1,10) + roll(1,10));
	sendChat(test, name);
}

function RHC(){
	var RHC = roll(1,100);
	if (RHC <= 3){
		var RHCResult = "[RHC] NECK";
	} else if (RHC >= 4 && RHC <= 15){
		RHCResult = "[RHC] HEAD";
	} else if (RHC >= 16 && RHC <= 20){
		RHCResult = "[RHC] PELVIS(GROIN/REAR)";
	} else if (RHC >= 21 && RHC <= 30){
		RHCResult = "[RHC] MIDSECTION(STOMACH/LOWER BACK)";
	} else if (RHC >= 31 && RHC <= 40){
		RHCResult = "[RHC] L UPPER BODY(RIBS[HEART]/SHOULDER)";
	} else if (RHC >= 41 && RHC <= 50){
		RHCResult = "[RHC] R UPPER BODY(RIBS/SHOULDER)";
	} else if (RHC >= 51 && RHC <= 55){
		RHCResult = "[RHC] L THIGH";
	} else if (RHC >= 56 && RHC <= 60){
		RHCResult = "[RHC] R THIGH";
	} else if (RHC >= 61 && RHC <= 65){
		RHCResult = "[RHC] L UPPER ARM";
	} else if (RHC >= 66 && RHC <= 70){
		RHCResult = "[RHC] R UPPER ARM";
	} else if (RHC >= 71 && RHC <= 75){
		RHCResult = "[RHC] L FOREARM";
	} else if (RHC >= 76 && RHC <= 80){
		RHCResult = "[RHC] R FOREARM";
	} else if (RHC >= 81 && RHC <= 86){
		RHCResult = "[RHC] L CALF";
	} else if (RHC >= 87 && RHC <= 92){
		RHCResult = "[RHC] R CALF";
	} else if (RHC >= 93 && RHC <= 94){
		RHCResult = "[RHC] L HAND";
	} else if (RHC >= 95 && RHC <= 96){
		RHCResult = "[RHC] R HAND";
	} else if (RHC >= 97 && RHC <= 98){
		RHCResult = "[RHC] L FOOT";
	} else {
		RHCResult = "RIGHT FOOT";
	}
	sendChat(RHCResult, name);
}