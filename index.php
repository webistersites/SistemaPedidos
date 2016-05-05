<?php
include "conectar_banco.php";
include("seguranca.php");
protegePagina();
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="css/skeleton.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Inicio | ChocolateriaBrasileira</title>
</head>
<body>

<a href="montar_pedido.php" class="button button-primary">Realizar pedido</a>
<a href="valida_permissao.php" class="button">Cadastrar Franqueado</a>

</body>
</html>