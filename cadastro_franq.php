<?php
include "conectar_banco.php";
include("seguranca.php");
protegePagina();

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
	<title>Cadastrar Franqueado | ChocolateriaBrasileira</title>
</head>
<body id="body">
<div class="interface">
	<?php
	require "menu.php";
?>
		<h1>Cadastrar Usuários</h1>
    <br>
<div class="panel panel-primary">
    <div class="panel-heading">Acesso ao Sistema</div>
    <br>
    <form name="usuario" method="post" action="cad_usuario.php" class="form-horizontal">
  <div class="form-group">
      <label for="nomeInput" class="col-sm-2 control-label">Nome</label>
      <div class="col-sm-3">
        <input class="form-control" type="text" placeholder="digite o nome..." id="nomeInput" name="nomeInput">
      </div>
  </div>
    <div class="form-group">
      <label for="loginInput" class="col-sm-2 control-label">Login</label>
      <div class="col-sm-2">
          <input class="form-control" type="text" placeholder="login do sistema..." id="loginInput" name="loginInput">
      </div>
    </div>
        <div class="form-group">
      <label for="passInput" class="col-sm-2 control-label">Senha</label>
      <div class="col-sm-2">
          <input class="form-control" type="password" placeholder="" id="passInput" name="passInput">
      </div>

  <div class="checkbox col-sm-2">
        <input type="checkbox" id="admInput" name="admInput">Administrador
  </div>
        </div>
    <br>
    <div class="form-group">
        <div class="col-sm-offset-2">
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </div>
    </div>
</form>
    </div>
</div>
</body>
</html>