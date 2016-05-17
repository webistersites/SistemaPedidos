<?php
include "conectar_banco.php";
include("seguranca.php");
protegePagina();

$query = mysql_query("SELECT max(numero_pedido) as pedido,descricao,quantidade FROM pedido where usuario = '" . $_SESSION['usuarioNome'] . "' group by descricao");

?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="css/skeleton.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Inicio | ChocolateriaBrasileira</title>
</head>
<body>

<h3><?php echo "Olá " . $_SESSION['usuarioNome']; ?>, este foi seu último pedido </h3>
<a href="montar_pedido.php" class="button">Novo Pedido</a>
<table width=400px>
	<tr>
		<th>N° Pedido</th>
		<th>Produto</th>
		<th>Quantidade</th>
	</tr>

<?php
while($ver=mysql_fetch_array($query)){

	echo "<tr>";
    echo "<td>".$ver['pedido']."</td>";
    echo "<td>".$ver['descricao']."</td>";
    echo "<td>".$ver['quantidade']."</td>";
    echo "</tr>";
}
?>
</table>
</td>
</tr>
</table>
</body>
</html>