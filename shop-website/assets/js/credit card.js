function checkPayment(){
	var carno = document.getElementById('cardNo').value;
	var cholname = document.getElementById('cardName').value;
	var security = document.getElementById('csc').value;
	var d = new Date();
    var date = new Date(d.getFullYear(),d.getMonth(),d.getDate());
    var userdate = new Date(document.getElementById('expDate').value);
	

    if(carno == "" || cholname == "" || security =="" || userdate == ""){
		alert("Please fill the required fields");
		return event.preventDefault();
	}
	
	else{
		if(date > userdate) {
			alert("Please enter valid date");
			return event.preventDefault();
		} 
	}
	return 0;
}
	
function paymentSu(){
	alert("Payment succeful");
	return 0;
}
