<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	
	<script type="text/javascript" src="js/script.js"></script>
	<title>Login</title>
</head>
<body>
	<form action="utilities/initSession.php" method="POST" onSubmit="return verifyLoginForm()">
		<label>Matrícula</label><br>
		<input type="text" id="registration" name="registration"><br><br>
		<label>Senha</label><br>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Login"/>
	</form>
</body>
</html>
