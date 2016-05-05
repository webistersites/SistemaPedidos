<?php
include "conectar_banco.php";
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="css/skeleton.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Inicio | ChocolateriaBrasileira</title>
</head>
<body>


<form method="post" action="valida.php">
  <label>Usuário</label>
  <input type="text" name="usuario" maxlength="50" />
  
  <label>Senha</label>
  <input type="password" name="senha" maxlength="50" />
  
  <input type="submit" value="Entrar" />
</form>

</body>
</html>