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

/*Function to check if there are no required fields blank.*/
function authenticate(){
	
	var name = document.getElementById("member_name").value;
	var nick = document.getElementById("nick").value;
	var pass = document.getElementById("password").value;
	var confirmation_pass = document.getElementById("confirmation_pass").value;
	var email = document.getElementById("email").value;
	var confirmation_email = document.getElementById("confirmation_email").value;
	var birth_date = document.getElementById("birth_date").value;
	var rg = document.getElementById("rg").value;
	var cpf = document.getElementById("cpf").value;
	var registration = document.getElementById("registration").value;
	var cep = document.getElementById("cep").value;
	var address = document.getElementById("address").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("state").value;
	var code_office = document.getElementsByName("code_office");
	var code_directorate = document.getElementsByName("code_directorate");
	var phone = document.getElementById("phone").value;
	var index_office, checked_office, index_directorate, checked_directorate;

	
	/*Routine to check if the code_office field is selected.*/
	checked_office = false;
	for(index_office = 0; index_office < code_office.length; index_office++){
			if(code_office[index_office].checked == true){
				checked_office = true;
				break;
			}			
	}
	
	/*Routine to check if the code_directorate field is selected.*/
	checked_directorate = false;
	for(index_directorate = 0; index_directorate < code_directorate.length; index_directorate++){
		if(code_directorate[index_directorate].checked == true){
			checked_directorate = true;
			break;
		}			
	}

	if(checked_office == false){
		alert("Por favor, selecione um cargo.");
	}
	
	else if(code_office[index_office].value != "5" && 
	code_office[index_office].value != "6" && 
	checked_directorate == false){
		
			alert("Por favor, selecione sua Diretoria.");
	}
		
	else if(code_office[index_office].value != "6" && registration.length == 0){

			alert("É obrigatório o preechimento da Matrícula");

	}
	
	else if(name.length == 0 ||
	nick.length == 0 ||
	pass.length == 0 ||
	confirmation_pass.length == 0 ||
	email.length == 0 ||
	confirmation_email.length == 0 ||
	pass.length == 0 ||
	birth_date.length == 0 ||
	rg.length == 0 ||
	cpf.length == 0 ||
	phone.length == 0 ){
		
		alert("Por favor, preencha todos os campos.");
	}
}

function disable_directorate(){

	var index;
	var code_office = document.getElementsByName("code_office");
	var code_directorate = document.getElementsByName("code_directorate");

	if(code_office[5].checked == true || code_office[4].checked == true || code_office[0].checked == true){
		for(index = 0; index < code_directorate.length; index++){
			code_directorate[index].disabled = 1;
		}
	}
	
	else{
		for(index = 0; index < code_directorate.length; index++){
			code_directorate[index].disabled = 0;
		}
	}

}	

function validate_email(field){

	user = field.value.substring(0, field.value.indexOf("@"));
	domain = field.value.substring(field.value.indexOf("@") + 1, field.value.length);
	
	if(user.length <1 ||
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

function validate_registration(field){
	
	var year = field.value.substring(0, field.value.indexOf("/"));	
	var code = field.value.substring(field.value.indexOf("/") + 1, field.value.length);
	
	if(year.length != 2 ||
	code.length < 7 ||
	year.search("/") != -1 ||
	code.search("/") != -1 ||
	isNaN(year) == true ||
	isNaN(code) == true){
		alert("Matrícula Invalida.");
	}
}
