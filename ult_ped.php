<?php
include "conectar_banco.php";
include("seguranca.php");
protegePagina();

$query = mysql_query("SELECT numero_pedido, descricao, quantidade FROM pedido WHERE usuario = '".$_SESSION['usuarioNome']."' AND numero_pedido = (SELECT max(numero_pedido) FROM pedido WHERE usuario ='".$_SESSION['usuarioNome']."') group by quantidade;");

?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo-menu.css">
	<title>Inicio | ChocolateriaBrasileira</title>
</head>
<body id="body">
<div class="interface">

<?php //require "menu.php"; ?>
    <div id="greetings">
        <?php
        echo "Olá " . $_SESSION['usuarioNome'] . ", &nbsp;&nbsp;<a href='logout.php'>sair</a><br>";
        ?>
    </div>
    <br>

    <a href="montar_pedido.php" class="btn btn-info">Novo Pedido</a>
<br><br>
    <h1>Último Pedido</h1>

<table class="table table-bordered table-striped">
	<tr>
		<th>N° Pedido</th>
		<th>Produto</th>
		<th>Quantidade</th>
	</tr>

<?php
while($ver=mysql_fetch_array($query)){

	echo "<tr>";
    echo "<td>".$ver['numero_pedido']."</td>";
    echo "<td>".$ver['descricao']."</td>";
    echo "<td>".$ver['quantidade']."</td>";
    echo "</tr>";
}
?>
</table>


</div>
</body>
</html>