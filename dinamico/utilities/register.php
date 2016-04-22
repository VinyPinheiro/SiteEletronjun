<?php
	include "../config/global.php";
	include "database.php";
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">

	<title>Cadastro EletronJun</title>

</head>

<body>


		<?php
		
			$data = new Database(Globais::$HOST, Globais::$USER, Globais::$PASSWORD, Globais::$DATABASE);
			
			if($data->connection() == true){
				
				$data->query("INSERT INTO ADDRESS (cep, address, neighborhood, residence, city, state) VALUES ('" . $_POST['cep'] . "', '" . $_POST['address'] . "', '" . $_POST['neighborhood'] . "', '" . $_POST['residence'] . "', '" . $_POST['city'] . "', '" . $_POST['state'] . "');");
			
				echo "Salvo com sucesso, volte sempre";
				
				$data->disconnect();
			}
			
			else{
				echo "Problemas na conexão com o servidor";
			}
			
		?>

</body>
</html>
