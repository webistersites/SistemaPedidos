<?php
include "conectar_banco.php";
include("seguranca.php");
protegePagina();
$sql = mysql_query("SELECT permissao FROM usuarios where id = " . $_SESSION['usuarioID']);
$resultado = mysql_fetch_assoc($sql);

if ($resultado['permissao'] == 0) {
header("Location: ult_ped.php");
}

?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
    <script src="Chart.min.js"></script>
    <script type="text/javascript">
        var randomnb = function(){ return Math.round(Math.random()*300)};
    </script>
    <!-- <link rel="stylesheet" href="css/skeleton.css">-->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo-menu.css" />
	<title>Inicio | ChocolateriaBrasileira</title>
</head>
<body id="body">

<div class="interface">
    <?php
    require "menu.php";
    ?>

    <div id="greetings">
    <?php
        // echo "Olá " . $_SESSION['usuarioNome'] . ", &nbsp;&nbsp;<a href='logout.php'>sair</a><br>";
    ?>
    </div><br>
    <h1><span class="glyphicon glyphicon-home"></span> Painel Administrativo</h1>
    <br>
    <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading"><span class="glyphicon glyphicon-th-list"></span> Últimos Pedidos</div>

        <!-- Table -->
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>Nº Pedido</th>
                <th>Usuário</th>
                <th>#</th>
            </tr>
            <?php
            $query = mysql_query("select distinct numero_pedido, usuario from pedido
order by id_pedido desc limit 5;");
            while($ver=mysql_fetch_array($query)){

                echo "<tr>";
                echo "<td>".$ver['numero_pedido']."</td>";
                echo "<td>".$ver['usuario']."</td>";
                echo "<td><a href='#' class='btn btn-primary btn-xs'>Visualizar Pedido</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-th-list"></span> Gráficos
        </div>
        <br>
        <div class="box-chart">
            <h2>Pedidos x Mês</h2>
            <canvas id="GraficoLine" style="width:100%;"></canvas>

            <script type="text/javascript">

                var options = {
                    responsive:true
                };

                var data = {
                    labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
                    datasets: [
                        {
                            label: "Dados primários",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb()]
                        },
                        {
                            label: "Dados secundários",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90, 200, 87, 20, 50, 20]
                        }
                    ]
                };

                window.onload = function(){

                    var ctx = document.getElementById("GraficoLine").getContext("2d");
                    var LineChart = new Chart(ctx).Line(data, options);
                }
            </script> <!-- Gráfico -->

        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-th-list"></span> Produtos mais Pedidos
        </div>
        <table class="table table-striped">
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
            </tr>
            <?php
            $query2 = mysql_query("select distinct descricao, sum(quantidade) as Total from pedido
group by descricao
order by 2 desc;");
            while($ver=mysql_fetch_array($query2)){

                echo "<tr>";
                echo "<td>".$ver['descricao']."</td>";
                echo "<td>".$ver['Total']."</td>";
                echo "</tr>";
            }

            ?>
        </table>
        <!-- <canvas id="GraficoDonut" style="width:100%;"></canvas>

        <script type="text/javascript">
            var dados = new Array();
            dados = "<? echo $ver['Total']; ?>";
            var options = {
                responsive:true
            };

            var data = [
                {
                    value: randomnb(),
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Vermelho"
                },
                {
                    value: randomnb(),
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Azul"
                },
                {
                    value: 15,
                    color: "#FDB45C",
                    highlight: "#FFC870",
                    label: "Amarelo"
                }
            ]

            window.onload = function(){

                var ctx = document.getElementById("GraficoDonut").getContext("2d");
                var PizzaChart = new Chart(ctx).Doughnut(data, options);
            }
        </script>-->
    </div>


    <!--
    <a href="valida_permissao.php" class="button">Cadastrar Franqueado</a>
    <a href="cadastro_prod.php" class="button">Cadastrar Produto</a>
    -->


</div> <!-- Fechamento da DIV 'Interface'  -->
</body>
</html>