<?php
include "conectar_banco.php";
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
$query = mysql_query("SELECT id_pedido,descricao,quantidade FROM pedido");

?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="css/skeleton.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Pedido | ChocolateriaBrasileira</title>
</head>
<body>
	<?php
	echo "Olá, " . $_SESSION['usuarioNome'] . " &nbsp;&nbsp;&nbsp;<a href='logout.php'>sair</a>";
?>
	<div class="container">
<table cellspacing="40">
	<tr>
		<td>
<table>
	<tr>
		<form name="produto" method="post" action="insere_pedido.php">
		 	<td><label for="descricao">Selecione um produto</label>
			 	<select name="produto">
			 		<option>Selecione...</option>
			 		<option value="Barra ao leite 100 gr">Barra ao leite 100 gr</option>
			 		<option value="Barra meio amargo 100 gr">Barra meio amargo 100 gr</option>
				</select></td>
		 	<td>
		 		<label for="">Quantidade</label>
		 		<input class="u-full-width" type="text" placeholder="" id="qtd_input" name="qtd" size="1">
		 	</td>
		 	<td>
		 		<label>.</label>
		 		<input type="submit" name="submit" value="Selecionar" />
		 	</td>
		 </form>
	</tr>
 </table>
</td>

<!-- *******************************
**~ ÁREA DE EXIBIÇÃO DOS PEDIDOS ~**
************************************ -->
<td>
<h3>Pedido</h3>

<table width=400px>
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Quantidade</th>
		<th>Deletar</th>
	</tr>

<?php
while($ver=mysql_fetch_array($query)){

	echo "<tr>";
    echo "<td>".$ver['id_pedido']."</td>";
    echo "<td>".$ver['descricao']."</td>";
    echo "<td>".$ver['quantidade']."</td>";
    echo "<td><a href='deletar.php?id=".$ver['id_pedido']."'>Excluir</a></td>";
    echo "</tr>";
}
?>
</table>
</td>
</tr>
</table>

<a href="deletar_pedido.php" class="button">Limpar Lista</a>
<a href="enviar_pedido.php" class="button button-primary">Finalizar pedido</a>

</div>

</body>
</html>