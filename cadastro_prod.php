<?php
include "conectar_banco.php";
include("seguranca.php");
protegePagina();

?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="css/skeleton.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Cadastrar Produto | ChocolateriaBrasileira</title>
</head>
<body>
	<?php
	echo "Olá, " . $_SESSION['usuarioNome'] . " &nbsp;&nbsp;&nbsp;<a href='logout.php'>sair</a><br>";
	echo "<a href='index.php'>Voltar</a>";
?>
	<div class="container">
		<h3>Cadastrar Produto</h3>
<form name="usuario" method="post" action="insere_produto.php">
  <div class="row">
    <div class="six columns">
      <label for="cDesc">Descrição</label>
      <input class="u-full-width" type="text" placeholder="nome do produto..." id="descInput" name="descInput">
      <label for="cQtd">Quantidade por Caixa</label>
      <input class="u-full-width" type="text" placeholder="" id="qtdInput" name="qtdInput">
      <label for="cCaixa">R$ Caixa</label>
      <input class="u-full-width" type="text" placeholder="" id="caixaInput" name="caixaInput">
      <label for="cUnit">R$ Unit</label>
      <input class="u-full-width" type="text" placeholder="" id="unitInput" name="unitInput">
      <label for="cVenda">R$ Venda</label>
      <input class="u-full-width" type="text" placeholder="" id="vendaInput" name="vendaInput">
      <label for="cCat">Categoria</label>
      <input class="u-full-width" type="text" placeholder="" id="catInput" name="catInput">
    </div>
  </div>
  <input class="button-primary" type="submit" value="Cadastrar">
</form>
	</div>
</body>
</html>