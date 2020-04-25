
// yet to add validation logic 


function validateBooking(){

	var email="singhkunal2051@gmail.com";
	var from=document.getElementById("from").value;
	var to=document.getElementById("to").value;
	var t1=document.getElementById("t1").value;
	var t2=document.getElementById("t2").value;
	
	if(from && to && t1 && t2){								//all values set
		var s=document.getElementById("rsuccess");
		s.style.display="block";
		var f=document.getElementById("rfail");
		f.style.display="none";
		sendRideBooked(email);			// add session variable email here
		alert("Validating Details !");
	}	//valid book
	else{
		var f=document.getElementById("rfail");
		f.style.display="block";
		var s=document.getElementById("rsuccess");
		s.style.display="none";
		alert("Invalid Booking Details...");
	}
}