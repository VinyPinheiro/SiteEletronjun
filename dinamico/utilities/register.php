<?php
/*
 * Name: register.php
 * Description: Function for submission of the registration data in the database.
 *
*/

	include "../config/global.php";
	include "database.php";

	
	$data = new Database(Globais::$HOST, Globais::$USER, Globais::$PASSWORD, Globais::$DATABASE);
	
	/*Procedure to receive and validate the profile picture*/
	$tmpPicture = $_FILES["profilePicture"]["tmp_name"];
	$picture = $_FILES["profilePicture"]["name"];
	$extension = strrchr($_FILES['profilePicture']['name'], '.');
	//list($height, $width) = getimagesize($tmpPicture, $picture);
	
			
	if($extension != '.jpg'){
		echo "Por favor, selecione um arquivo .jpg";
	}
	
	/*else if($height > 200 || $width > 200){
		echo "Por favor, selecione um arquivo com resolução de 200x200px.";
	}*/
	
	else{
		copy($tmpPicture,"../img/$picture");
	}
	
	
	if($data->connection() == true){
		
			$data->query(
				"INSERT INTO ADDRESS (cep, address, neighborhood, residence, city, state, complement) VALUES (
				'" . $_POST['cep'] ."',
				'" . $_POST['address'] . "',
				'" . $_POST['neighborhood'] . "',
				'" . $_POST['residence'] ."',
				'" . $_POST['city'] ."',
				'" . $_POST['state'] . "',
				'" . $_POST['complement'] ."')"
			);
			$code_address = $data->insert_id();
			
			/*The date format (dd/mm/yyyy) conversion to the standard format (yyyy-mm-dd)of the bank MySQL*/
			$birthDate = $_POST['birth_date'];
			$birthDate = date("Y-m-d", strtotime(str_replace('/','-',$birthDate)));  

			if($_POST['code_office'] == 1 || $_POST['code_office'] == 5 || $_POST['code_office'] == 6){
				
				$result = $data->query("INSERT INTO MEMBERS (email, registration, member_name, sex, nick, password, birthDate, rg, rg_agency, cpf, phone, code_address, code_office, image) VALUES (
				'" .$_POST['email']. "', 
				'" .$_POST['registration']. "', 
				'" .$_POST['member_name']. "', 
				'" .$_POST['sex']. "', 
				'" .$_POST['nick']. "', 
				'" .$_POST['password']. "', 
				'" .$birthDate . "', 
				'" .$_POST['rg']. "', 
				'" .$_POST['rg_agency']. "', 
				'" .$_POST['cpf']. "', 
				'" .$_POST['phone']. "', 
				'" .$code_address . "', 
				'" .$_POST['code_office']. "', 
				'dinamico/img/".$picture."');" );

			}
			
			else{
				
				$data->query("INSERT INTO MEMBERS (email, registration, member_name, sex, nick, password, birthDate, rg, rg_agency, cpf, phone, code_address, code_directorate, code_office, image) VALUES (
				'" .$_POST['email']. "', 
				'" .$_POST['registration']. "', 
				'" .$_POST['member_name']. "', 
				'" .$_POST['sex']. "', 
				'" .$_POST['nick']. "', 
				'" .$_POST['password']. "', 
				'" .$birthDate . "', 
				'" .$_POST['rg']. "', 
				'" .$_POST['rg_agency']. "', 
				'" .$_POST['cpf']. "', 
				'" .$_POST['phone']. "', 
				'" .$code_address . "', 
				'" .$_POST['code_directorate']. "', 
				'" .$_POST['code_office']. "', 
				'dinamico/img/".$picture."');" );
				
			}
			
				echo "Solicitação de cadastro enviada com sucesso.";

		
		$data->disconnect();
	}
	
	else{
		echo "Problemas na conexão com o servidor";
	}
	
?>