<?php
/*
 * Name: initSession.php
 * Description: The unique function is start a session
*/
include "session.php";

$session = new Session();

$QUERY = "SELECT isActivity from MEMBERS WHERE registration = '" . 
	$_POST["registration"] . "' AND password = '" . $_POST["password"] . "'";

$session->initSession($QUERY, $_POST["registration"]);
?>
