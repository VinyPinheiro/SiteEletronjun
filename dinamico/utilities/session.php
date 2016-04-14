<?php
/*
 * Name: session.php
 * Description: class to create, destroy and verify if the member is
 * loggin
*/

include "../config/global.php";
include "database.php";

class Session{
	
	public function __construct(){
		session_start();
	}
	
	public function desconect(){
		$_SESSION["logado"] == 0;
		session_destroy();
	}
	
	public function initSession($QUERY, $register)
	{
		$data = new DataBase(Globais::$HOST, Globais::$USER, Globais::$PASSWORD, Globais::$DATABASE);
	
		$data->connection();
		$result_request = $data->consult($QUERY);
		if(count($result_request) != 0){
			$_SESSION["logado"] = 1;
			echo "<script>location.href = '../administrator/'</script>";
		}
		else{
			$_SESSION["logado"] = 0;
			echo "<script>alert('Usuário e/ou senha invalidos');</script>";
			echo "<script>location.href = '../login.php'</script>";	
		}
		$data->disconnect();
	}
	
	public function verifyIfSessionIsStarted()
	{
		if(isset($_SESSION["logado"])){
			if($_SESSION["logado"] == 0){
				redirectMemberNoLogged();
			}
			else{
				//Nothing to do
			}
		}
		else{
			redirectMemberNoLogged();
		}
	}
	
	public function redirectMemberNoLogged()
	{
		echo "<script>alert('Faça Login');";
		echo "location.href = '../login.php'</script>";
	}
}


?>
