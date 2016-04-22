<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
	<script type="text/javascript" src="js/jquery.cep.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<title>Eletronjun</title>
			
</head>

<body>
		<form id="register" name="register" onSubmit="authenticate()" action="utilities/register.php" method="POST">
			
			<fieldset>
				<legend>Cargo</legend>
				<input type = "radio" name = "code_office" value="1" onclick="disable_directorate();">Presidente<br>
				<input type = "radio" name = "code_office" value="2" onclick="disable_directorate();">Diretor<br>
				<input type = "radio" name = "code_office" value="3" onclick="disable_directorate();">Gerente<br>
				<input type = "radio" name = "code_office" value="4" onclick="disable_directorate();">Acessor<br>
				<input type = "radio" name = "code_office" value="5" onclick="disable_directorate();">Trainne<br>
				<input type = "radio" name = "code_office" value="6" onclick="disable_directorate();">Colaborador<br>
			</fieldset>
			
			<fieldset>
				<legend>Diretoria</legend>
				<input type = "radio" name = "code_directorate" id = "code_directorate" value="1">Administrativo e Financeiro<br>
				<input type = "radio" name = "code_directorate" id = "code_directorate" value="2">Gestão de Pessoas e Processos<br>
				<input type = "radio" name = "code_directorate" id = "code_directorate" value="3">Marketing<br>
				<input type = "radio" name = "code_directorate" id = "code_directorate" value="4">Gestão de Projetos<br>
			</fieldset>
			
			<fieldset>
				<legend>Dados Pessoais</legend>
				<label>Nome Completo:</label>
				<input type = "text" name = "member_name" id = "member_name" maxlength = "100"><br><br>
				
				<label>Nome Visível:</label>
				<input type = "text" name = "nick" id = "nick" maxlength = "30"><br><br>
				
				<legend>Sexo:</legend>
				<input type = "radio" name = "sex" id = "sex" value="M" checked>Masculino<br>
				<input type = "radio" name = "sex" id = "sex" value="F">Feminino<br>
							
				<label>Data de Nascimento:</label>
				<input type="text" name="birth_date" id="birth_date" onblur="validate_birthDate(birth_date)"/><br><br>
				
				<label>RG:</label>
				<input type = "text" name = "rg" id = "rg"><br><br>
				
				<label>Orgão Emissor:</label>
				<input type = "text" name = "rg" id = "rg" maxlength="6"><br><br>
				
				<label>CPF:</label>
				<input type = "text" name = "cpf" id = "cpf" maxlength = "15"><br><br>
				
				<label>Matrícula UnB:</label>
				<input type = "text" name = "registration" id = "registration" maxlength = "10"><br><br>
							
				<label>Telefone:</label>
				<input type = "text" name = "phone" id = "phone" maxlength = "15"><br><br>
				
				<label>E-mail:</label>
				<input type = "text" name = "email" id = "email" maxlength = "150"><br><br>
				
				<label>Confirmação de E-mail:</label>
				<input type = "text" name = "confirmation_email" id = "confirmation_email" maxlength = "150"><br><br>
				
				<label>Senha:</label>
				<input type = "password" name = "password" id = "password"><br><br>
			
				<label>Confirmação de Senha:</label>
				<input type = "password" name = "confirmation_pass" id = "confirmation_pass"><br><br>
			</fieldset>
			
			<fieldset>
				<legend>Endereço</legend>
				<label>CEP:</label>
				<input type = "text" name = "cep" id = "cep"  maxlength = "10"><br><br>
				
				<label>Logradouro:</label>
				<input type = "text" name = "address" id = "address" maxlength = "100" disabled data-cep="logradouro"><br><br>
				
				<label>Bairro:</label>
				<input type = "text" name = "neighborhood" id = "neighborhood" maxlength = "100" disabled data-cep="bairro"><br><br>
				
				<label>Nº:</label>
				<input type = "text" name = "residence" id = "residence" maxlength = "6"><br><br>
				
				<label>Cidade:</label>
				<input type = "text" name = "city" id = "city" maxlength = "50" disabled data-cep="cidade"><br><br>
				
				<label>Estado:</label>
				<input type = "text" name = "state" id = "state" maxlength = "2" disabled data-cep="uf"><br><br>
						
				<label>Complemento:</label>
				<input type = "text" name = "complement" id = "complement" maxlength = "50"><br><br>
			</fieldset>
					
			<input type="submit" value="Cadastrar"/>
		</form>		
</body>
</html>