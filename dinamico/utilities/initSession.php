<?php
/*
 * Name: initSession.php
 * Description: The unique function is start a session
*/
include "session.php";

$session = new Session();

$QUERY = "SELECT isActivity from MEMBERS WHERE email = '" . 
	$_POST["email"] . "' AND password = '" . $_POST["password"] . "'";

$session->initSession($QUERY, $_POST["registration"]);
?>
