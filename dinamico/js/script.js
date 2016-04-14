function verifyLoginForm()
{
	var registration = document.getElementById("registration").value;
	var password = document.getElementById("password").value;
	
	if((registration == "" || password == "")){
		alert("Preencha todos os campos");
		return false
	}
	else{
		return true;
	}
}

