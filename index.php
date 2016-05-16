<?php
include "conectar_banco.php";
include("seguranca.php");
protegePagina();
$sql = mysql_query("SELECT permissao FROM usuarios where id = " . $_SESSION['usuarioID']);
$resultado = mysql_fetch_assoc($sql);

if ($resultado['permissao'] == 0) {
header("Location: ult_ped.php");
}

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