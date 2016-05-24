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
	<title>Cadastrar Produto | ChocolateriaBrasileira</title>
</head>
<body id="body">
<div class="interface">
	<?php
        require "menu.php";
    ?>
    <h1>Produtos</h1>
    <br>
	<div class="panel panel-primary">
        <div class="panel-heading"><span class="glyphicon glyphicon-barcode"></span> Cadastrar Produtos</div>
        <br>
        <form class="form-horizontal" name="usuario" method="post" action="insere_produto.php">
          <div class="form-group">
              <label for="cDesc" class="col-sm-2 control-label">Descrição</label>
              <div class="col-sm-5">
                <input class="form-control" type="text" placeholder="nome do produto..." id="descInput" name="descInput">
              </div>
          </div>
            <div class="form-group">
                <label for="cCat" class="col-sm-2 control-label">Categoria</label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" placeholder="" id="catInput" name="catInput">
                </div>
            </div>
            <div class="form-group">
                <label for="cQtd" class="col-sm-2 control-label">Qtd por Caixa</label>
                <div class="col-sm-2">
                    <input class="form-control" type="text" placeholder="" id="qtdInput" name="qtdInput">
                </div>
            </div>
              <div class="form-group">
                  <label for="cCaixa" class="col-sm-2 control-label">R$ Caixa</label>
                  <div class=" input-group col-sm-2">
                      <div class="input-group-addon">$</div>
                      <input class="form-control" type="text" placeholder="" id="caixaInput" name="caixaInput">
                  </div>
              </div>
              <div class="form-group">
                  <label for="cUnit" class="col-sm-2 control-label">R$ Unit</label>
                  <div class="input-group col-sm-2">
                      <div class="input-group-addon">$</div>
                      <input class="form-control" type="text" placeholder="" id="unitInput" name="unitInput">
                  </div>
              </div>
              <div class="form-group">
                  <label for="cVenda" class="col-sm-2 control-label">R$ Venda</label>
                  <div class="input-group col-sm-2">
                      <div class="input-group-addon">$</div>
                      <input class="form-control" type="text" placeholder="" id="vendaInput" name="vendaInput">
                  </div>
              </div>
            <br>
          <div class="form-group">
              <div class="col-sm-offset-1">
                  <input class="btn btn-primary" type="submit" value="Cadastrar">
              </div>
          </div>
        </form>
	</div>
</div>
</body>
</html>