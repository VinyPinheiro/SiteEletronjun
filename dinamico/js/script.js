function verifyLoginForm()
{
	var registration = document.getElementById("registration").value;
	var password = document.getElementById("password").value;
	
	if((registration == "" || password == "")){
		alert("Preencha todos os campos");
		return false;
	}
	else{
		return true;
	}
}

/*Function to check if there are no required fields blank.*/
function authenticate(){
	
	var registration = document.getElementById("registration").value;
	var code_office = document.getElementsByName("code_office");
	var code_directorate = document.getElementsByName("code_directorate");
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

function validate_birthDate(field){
	
	var day = field.value.substring(0, 2);
	var month = field.value.substring(3, 5);
	var year = field.value.substring(6, 10);
	
	var birthday = new Date(year, month-1, day);

	if(birthday.getTime() > new Date().getTime()){
		alert("Data Invalida");
	}
	
	else if(month < 1 || month > 12){
		alert("Data Inválida");
	}
	
	else if(month == 2){
	
		if(year % 4 == 0 && (year % 100 != 0 || year % 400 == 0)){
			if(day < 1 || day > 29){
				alert("Data Inválida");
			}
		}
		
		else if (day < 1 || day > 28){
			alert("Data Invalida");
		}
	}
	
	else if(month % 2 == 0){
		
		if(month == 8 && (day < 1 || day > 31) ){
			alert("Data Inválida");
		}
		
		else if (month != 8 && (day < 1 || day > 30) ){
			alert("Data Inválida");
		}
	}
	
	else if(day < 1 || day > 31){
		alert("Data Inválida");
	}
}

/*jQuery Masked Input Plugin*/
jQuery(function($){

	$("#birth_date").mask("99/99/9999");
	$("#cpf").mask("999.999.999-99");
	$("#registration").mask("99/9999999")
	
	$('#phone').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
		element.mask("(99) 99999-999?9");
		} else {
		element.mask("(99) 9999-9999?9");
		}
	}).trigger('focusout');
	
});	


/* jQuery CEP plugin v0.2*/
$(document).ready(function() {
	$('#cep').cep();
});


/*jQuery Validation Plugin v1.15.0*/
$(document).ready(function(){
	$('#register').validate({
		rules: {
			member_name: {
				required: true,
			},
			nick: {
				required: true,
			},
			email: {
				required: true,
				email: true
			},
			confirmation_email: {
				required: true,
				equalTo: "#email"
			},
			password: {
				required: true,
				minlength: 8
			},
			confirmation_pass: {
				required: true,
				equalTo: "#password"
			},
			birth_date: {
				required: true,
			},
			rg: {
				required: true,
				number: true
			},
			cpf: {
				required: true,
			},
			registration: {
				required: true
			},
			cep: {
				required: true
			},
			house_number: {
				required: true
			},
			phone: {
				required: true
			},
			profilePicture: {
				required: true,
			},
			accept_terms: {
				required: true
			}
		}
	});
});
