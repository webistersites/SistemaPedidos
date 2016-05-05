<?php
include "conectar_banco.php";
include "seguranca.php";

$prod = $_POST['produto'];
$quantidade = $_POST['qtd'];

$buscaID = mysql_query("SELECT max(numero_pedido) FROM pedido WHERE usuario = '" . $_SESSION['usuarioNome'] . "'");
$somaId = mysql_result($buscaID,0) + 1;

$sql = "insert into pedido_" . $_SESSION['usuarioNome'] . " values('',".$somaId.",'','$prod','$quantidade','" . $_SESSION['usuarioNome'] . "')";

$resultado = mysql_query($sql);
echo "Adicionado ao pedido";

mysql_close($conexao);

?>

<meta http-equiv="refresh" content="0.5;url=montar_pedido.php">

