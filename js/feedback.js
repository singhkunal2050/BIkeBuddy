
function validateFeedback(){
	var message=document.getElementById("message").value;
	var email=document.getElementById("email").value;

	if(email && message){
		var s=document.getElementById("fsuccess");
		s.style.display="block";
		var f=document.getElementById("ffail");
		f.style.display="none";
		sendFeebackReceived(email);
		alert("Feedback Submitted! Please Check email...");
	}	//valid
	
	else{
		var f=document.getElementById("ffail");
		f.style.display="block";
		var s=document.getElementById("fsuccess");
		s.style.display="none";
        alert("InValid Feedback Details..");
    }

}