$(document).ready(function(){
	//global vars
	var form = $("#customForm");
	var name = $("#name");
	var nameInfo = $("#nameInfo");
	var email = $("#email");
	var emailInfo = $("#emailInfo");
	var phone = $("#phone");
	var phoneInfo = $("#phoneInfo");
	var contact_reason = $("#contact_reason");
	var contact_reasonInfo = $("#contact_reasonInfo");
	var message = $("#message");
	var spam = $("#spam");
	var spamInfo = $("#spamInfo");

	name.blur(validateName);
	email.blur(validateEmail);
	message.blur(validateMessage);
	spam.blur(validateSpam);
	phone.blur(validatePhone);

	//On key press
	name.keyup(validateName);
	email.keyup(validateEmail);
	message.keyup(validateMessage);
	spam.keyup(validateSpam);
	phone.keyup(validatePhone);

	//On Submitting
	form.submit(function(){
		if(validateName() & validateEmail()  & validateSpam ())
			return true
		else
			return false;
	});
	
	//validation functions
	function validateEmail(){
		//testing regular expression
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
			email.removeClass("error");
			emailInfo.text("Email looks valid. I'll write you back now.");
			emailInfo.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			email.addClass("error");
			emailInfo.text("Oh come on, give me a real email address.");
			emailInfo.addClass("error");
			return false;
		}
	}
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("I want names with more than 3 letters!");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.text("That is a great name!");
			nameInfo.removeClass("error");
			return true;
		}
	}
function validatePhone(){
		var c = $("#phone").val();
		var filter = /^[0-9]+[0-9_.-]+[0-9_-]$/;
		//if it's valid phone
		if(filter.test(c)){
			phone.removeClass("error");
			phoneInfo.text("Numbers look legit.");
			phoneInfo.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			phone.addClass("error");
			phoneInfo.text("Please enter your 10-digit phone number");
			phoneInfo.addClass("error");
			return false;
		}
	}
function validateSpam(){
		var b = $("#spam").val();
		var filter = /^human/;
		//if it's valid spam
		if(filter.test(b)){
			spam.removeClass("error");
			spamInfo.text("Thank you, now I won't get spammed.");
			spamInfo.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			spam.addClass("error");
			spamInfo.text("Please type the word 'human'");
			spamInfo.addClass("error");
			return false;
		}
	}
	function validateMessage(){
		//it's NOT valid
		if(message.val().length < 10){
			message.addClass("Please send me a message with greater than 10 characters");
			return false;
		}
		//it's valid
		else{			
			message.removeClass("error");
			return true;
		}
	}
});