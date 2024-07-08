function checkEntry(){
	var pw = document.getElementById("password").value;
	var pw1 = document.getElementById("password1").value;
	var usn = document.getElementById("username").value;
	var eml = document.getElementById("email").value;
	
	if(pw == ""|| pw1 == ""|| usn == ""|| email == ""){
		alert("Please fill the required fields");
		return event.preventDefault();
	}
	
	else{
		if( pw != pw1 ){
		alert("Passwords dosen't match");
		return event.preventDefault();
		}
	}
	
	return 0;
}

function regisuce(){
	alert("Successfully registerd");
	return 0;
}