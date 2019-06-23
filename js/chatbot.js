
		var username = "";

		function send_message(message){

			var prevState = $("#container").html();

			if (prevState.length > 7) {
				prevState = prevState + "<br>";
			};

			$("#container").html(prevState+"<span class='current_message'>" +"<span class='bot'>CyberrBot: </span>" + message + "</span>");
			var msgLength = message.length;
			var delayTime = 0;
			if (msgLength < 20) {
				delayTime = 500
			} else {
				if (msgLength > 20 && msgLength < 50) {
					delayTime = 1500
				} else {
					delayTime = 2000
				}
			}
			$(".current_message").hide();
			$(".current_message").delay(delayTime).fadeIn();
			$(".current_message").removeClass('current_message');


		}

		function get_username(){
			send_message("Hello, What is your name?");
		}

		function ai(message){

			if (username.length < 3) {
				username = message;
				send_message("Nice to meet you " +username+", how are you doing?");
			}

			message = message.toLowerCase();

			if (message.indexOf("how are you?") >= 0) {
				send_message("Thanks, I'm Gud");

			};

			if (message.indexOf("time") >= 0) {
				var date = new Date();
				var h = date.getHours();
				var m = date.getMinutes();
				send_message("Current Time is:- "+h+":"+m);

			};
		}

		$(function(){

			$("#textbox").focus();

			get_username();

			$("#textbox").keypress(function(event){
				if (event.which == 13) {

					if ($("#enter").prop("checked")) {

						$("#send").click();
						event.preventDefault();


					};

				};
			});

			$("#send").click(function() {
				
				var username = "<span class='username'>You: </span>";

				var newMessage = $("#textbox").val();
				$("#textbox").val("");
				
				var prevState = $("#container").html();

				if (prevState.length > 7) {
					prevState = prevState + "<br>";
				};

				$("#container").html(prevState + username + newMessage);

				$("#container").scrollTop($("#container").prop('scrollHeight'));

				ai(newMessage);
			});
		});