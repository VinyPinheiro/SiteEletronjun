<?php
	include "../config/global.php";
	include "database.php";
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	
</head>

<body>
	<?php
		
		$data = new Database(Globais::$HOST, Globais::$USER, Globais::$PASSWORD, Globais::$DATABASE);
		
		if($data->connection()){
						
			 echo "Salvo com sucesso.";
			 
			 $data->disconnect();			
			
		}
		
		else{
			echo "Falha na conexão com o servidor.";
		}
	?>
	
</body>
</html>