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
	<title>Cadastrar Franqueado | ChocolateriaBrasileira</title>
</head>
<body>
	<?php
	echo "Olá, " . $_SESSION['usuarioNome'] . " &nbsp;&nbsp;&nbsp;<a href='logout.php'>sair</a><br>";
	echo "<a href='index.php'>Voltar</a>";
?>
	<div class="container">
		<h3>Cadastrar Franqueado</h3>
<form name="usuario" method="post" action="cad_usuario.php">
  <div class="row">
    <div class="six columns">
      <label for="cNome">Nome</label>
      <input class="u-full-width" type="text" placeholder="digite o nome..." id="nomeInput" name="nomeInput">
      <label for="cLogin">Login</label>
      <input class="u-full-width" type="text" placeholder="login do sistema..." id="loginInput" name="loginInput">
      <label for="cSenha">Senha</label>
      <input class="u-full-width" type="password" placeholder="" id="passInput" name="passInput">
    </div>
  </div>
  <label class="example-send-yourself-copy">
    <input type="checkbox" id="admInput" name="admInput">
    <span class="label-body">Permissão de Administrador?</span>
  </label>
  <input class="button-primary" type="submit" value="Cadastrar">
</form>
	</div>
</body>
</html>