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
		var perResult = "!!CRITICAL!! " + percentile;
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
		var RHCResult = "NECK";
	} else if (RHC >= 4 && RHC <= 15){
		RHCResult = "HEAD";
	} else if (RHC >= 16 && RHC <= 20){
		RHCResult = "PELVIS (GROIN / REAR";
	} else if (RHC >= 21 && RHC <= 30){
		RHCResult = "MIDSECTION (STOMACH / LOWER BACK)";
	} else if (RHC >= 31 && RHC <= 40){
		RHCResult = "LEFT UPPER BODY (RIBS[HEART] / SHOULDER)";
	} else if (RHC >= 41 && RHC <= 50){
		RHCResult = "RIGHT UPPER BODY (RIBS / SHOULDER)";
	} else if (RHC >= 51 && RHC <= 55){
		RHCResult = "LEFT THIGH";
	} else if (RHC >= 56 && RHC <= 60){
		RHCResult = "RIGHT THIGH";
	} else if (RHC >= 61 && RHC <= 65){
		RHCResult = "LEFT UPPER ARM";
	} else if (RHC >= 66 && RHC <= 70){
		RHCResult = "RIGHT UPPER ARM";
	} else if (RHC >= 71 && RHC <= 75){
		RHCResult = "LEFT FOREARM";
	} else if (RHC >= 76 && RHC <= 80){
		RHCResult = "RIGHT FOREARM";
	} else if (RHC >= 81 && RHC <= 86){
		RHCResult = "LEFT CALF";
	} else if (RHC >= 87 && RHC <= 92){
		RHCResult = "RIGHT CALF";
	} else if (RHC >= 93 && RHC <= 94){
		RHCResult = "LEFT HAND";
	} else if (RHC >= 95 && RHC <= 96){
		RHCResult = "RIGHT HAND";
	} else if (RHC >= 97 && RHC <= 98){
		RHCResult = "LEFT FOOT";
	} else {
		RHCResult = "RIGHT FOOT";
	}
	sendChat(RHCResult, name);
}