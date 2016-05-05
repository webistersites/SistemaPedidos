<?php
include "conectar_banco.php";

$nome = $_POST['nomeInput'];
$login = $_POST['loginInput'];
$senha = $_POST['passInput'];
$permissao = $_POST['admInput'];

$sql = "insert into usuarios values('','$nome','$login','$senha','$permissao')";

$resultado = mysql_query($sql);
echo "Cadastrando usuario!";

mysql_close($conexao);

?>

<meta http-equiv="refresh" content="0.5;url=cadastro_franq.php">

