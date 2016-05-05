<?php
include "conectar_banco.php";

$sql = "truncate table pedido";

$resultado = mysql_query($sql);
echo "Deletando pedido";

mysql_close($conexao);

?>

<meta http-equiv="refresh" content="0.5;url=montar_pedido.php">
