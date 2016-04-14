<?php
include "../utilities/session.php";

$session = new Session();
$session->verifyIfSessionIsStarted();

if(isset($_GET["logout"]))
{
	if(isset($_GET["logout"])){
		$session->desconect();
		echo "<script>location.href = '../login.php'</script>";
	}
}



?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<a href="index.php?logout=1">sair</a>
</body>
</html>
