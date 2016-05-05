<?php
include "conectar_banco.php";

$prod = $_POST['produto'];
$quantidade = $_POST['qtd'];

$sql = "insert into pedido values('','','$prod','$quantidade')";

$resultado = mysql_query($sql);
echo "Adicionado ao pedido";

mysql_close($conexao);

?>

<meta http-equiv="refresh" content="0.5;url=montar_pedido.php">

