<?php
include "conectar_banco.php";

$descricao = $_POST['descInput'];
$quantidade = $_POST['qtdInput'];
$valor_caixa = $_POST['caixaInput'];
$valor_unit = $_POST['unitInput'];
$valor_venda = $_POST['vendaInput'];
$categoria = $_POST['catInput'];


$sql = "insert into produtos values('','$descricao',$quantidade,$valor_caixa,$valor_unit,$valor_venda,'$categoria',0)";

$resultado = mysql_query($sql);
echo "Cadastrando produto!";

mysql_close($conexao);

?>

<meta http-equiv="refresh" content="0.5;url=cadastro_prod.php">

