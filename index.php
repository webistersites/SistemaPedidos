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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="css/skeleton.css">-->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
	<title>Inicio | ChocolateriaBrasileira</title>
</head>
<body id="body">
<div class="interface">

    <div id="greetings">
    <?php
        echo "Olá " . $_SESSION['usuarioNome'] . ", &nbsp;&nbsp;<a href='logout.php'>sair</a><br>";
    ?>
    </div>

    <!--
    <a href="valida_permissao.php" class="button">Cadastrar Franqueado</a>
    <a href="cadastro_prod.php" class="button">Cadastrar Produto</a>
    -->


</div> <!-- Fechamento da DIV 'Interface'  -->
</body>
</html>