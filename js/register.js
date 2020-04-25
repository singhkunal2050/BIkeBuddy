
function validateRegistration(){
	var name=document.getElementById("name").value;
	var email=document.getElementById("email").value;
	var phone=document.getElementById("phone").value;
	var password=document.getElementById("password").value;
	var password2=document.getElementById("password2").value;
	var male=document.getElementById("male");
	var female=document.getElementById("female");
	var flag=0;

	flag=password2==password?true:false;		//flag zero if password mismacth

	if(name!="" && email && phone && password && password2 && (male.checked || female.checked) && flag ){
		var s=document.getElementById("rsuccess");
		s.style.display="block";
		var f=document.getElementById("rfail");
		f.style.display="none";
		sendRegistered(email);
		alert("Validated Details! Please Check email...");
		document.getElementById("pmismatch").style.display="none";
	}	//valid
	
	else{
		var f=document.getElementById("rfail");
		f.style.display="block";
		var s=document.getElementById("rsuccess");
		s.style.display="none";
		alert("InValid Registration Details..");
		document.getElementById("pmismatch").style.display="none";
	}

	if(!flag){
		document.getElementById("pmismatch").style.display="block";
	}
	
}

