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

function authenticate(){
		
	var name = document.getElementById("member_name").value;
	var nick = document.getElementById("nick").value;
	var pass = document.getElementById("password").value;
	var birth_date = document.getElementById("birth_date").value;
	var rg = document.getElementById("rg").value;
	var cpf = document.getElementById("cpf").value;
	var registration = document.getElementById("registration").value;
	var cep = document.getElementById("cep").value;
	var address = document.getElementById("address").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("state").value;
	var code_office = document.getElementById("code_office").value;
	var code_directorate = document.getElementById("code_directorate").value;
	var phone = document.getElementById("phone").value;
	
	if(code_office.length == 0){
		alert("É obgrigatória a escolha do cargo.");
	}
	else if(code_office.value != '6' && (registration.length == 0 || code_directorate.length == 0)){
		alert("Code_office.");
	}
	
	else if(name.length == 0 ||
	nick.length == 0){
		alert("Preencha todos os campos.");
	}
}

function validate_email(field){

	user = field.value.substring(0, field.value.indexOf("@"));
	domain = field.value.substring(field.value.indexOf("@") + 1, field.value.length);
	
	if(confirm_email.length == 0){
		
	}
	
	else if(user.length <1 ||
	domain.length < 3 ||
	user.search("@") != -1 ||
	domain.search("@") != -1 ||
	user.search(" ") != -1 ||
	domain.search(" ") != -1 ||
	domain.search(".") == -1 ||
	domain.indexOf(".") < 1 ||
	domain.lastIndexOf(".") < 1 ){
		alert("Por favor, insira um e-mail válido.")
	}
}

function confirm_email(){
	
	var email = document.getElementById("email").value;
	var confirm_email = document.getElementById("confirmation_email").value;
	
	
	if(confirm_email.length == 0){
		
	}
	
	else if(email != confirm_email){
		alert("Os e-mails não conferem.");
	}
	
}

function validate_pass(){
	
	var pass = document.getElementById("password").value;
	var confirm_pass = document.getElementById("confirmation_pass").value;
	
	if(pass.length == 0){
		
	}
	
	else if(pass.length < 8){
		alert("A senha deve conter no mínimo 8 caracteres.");
	}
	
}

function confirm_pass(){
	
	var pass = document.getElementById("password").value;
	var confirm_pass = document.getElementById("confirmation_pass").value;
	
	if(confirm_pass.length == 0){
		
	}
	
	else if(pass != confirm_pass){
		alert("As senhas não conferem.");
	}
}


