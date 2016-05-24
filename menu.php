
    <nav class="menu">
        <ul>
            <li class="amarelo">
                <a href="index.php">Início</a>
            </li>
            <li class="amarelo">
                <a href="#">Produtos</a>
                <ul>
                    <li><a href="cadastro_prod.php">Adicionar</a></li>
                    <li><a href="#">Visualizar</a></li>
                </ul>
            </li>
            <li class="amarelo">
                <a href="#">Pedidos</a>
                <ul>
                    <li><a href="montar_pedido.php">Novo</a></li>
                    <li><a href="#">Histórico</a></li>
                </ul>
            </li>
            <li class="amarelo">
                <a href="#">Usuários</a>
                <ul>
                    <li><a href="#">Incluir</a></li>
                    <li><a href="#">Permissões</a></li>

                </ul>
            </li>
            <li class="amarelo">
                <a href="#">Configurações</a>
                <ul>
                    <li><a href="#">Alterar Dados</a></li>
                    <li><a href="logout.php">Deslogar</a></li>
                </ul>
            </li>
            <li class="amarelo">
                <a href="#">Ajuda</a>
            </li>
        </ul>
    </nav>

<script src="jquery.min.js"></script>
<script>

    jQuery(".menu>ul").addClass("js");
    jQuery(".menu>ul").addClass("js").before('<div class="atalho">Menu</div>');

    jQuery(".atalho").click(function(){
        jQuery(".menu>ul").toggle();
    });

    jQuery(window).resize(function(){
        if(window.innerWidth > 768) {
            jQuery(".menu>ul").removeAttr("style");
        }
    });

</script>

