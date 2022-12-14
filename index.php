<?php

    include 'config/conexao.php';

    $action = $_GET['action'] ?? '';
    $id = $_GET['id'] ?? '';
    $msg = $_GET['msg'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <?php include 'metas.php'; ?>
    <title>Gerenciador de Produtos</title>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 main">
            <div class="col-md-2 menu">
                <div class="col-md-12 item-menu item-menu-ativo" id="pagina-inicial">
                    <div class="col-md-1 tarja"></div>
                    <div class="col-md-11 descricao">
                        Página Inicial
                    </div>
                </div>

                <div class="col-md-12 item-menu" id="produtos">
                    <div class="col-md-1 tarja"></div>
                    <div class="col-md-11 descricao">
                        Produtos
                    </div>
                </div>

                <div class="col-md-12 item-menu" id="categorias">
                    <div class="col-md-1 tarja"></div>
                    <div class="col-md-11 descricao">
                        Categorias
                    </div>
                </div>
                <div class="col-md-12 menu-footer"></div>
            </div>

            <div class="col-md-10 conteudo">

                <div class="row pagina-inicial">
                    <?php include 'pages/pagina-inicial.php'; ?>
                </div>

                <div class="row oculto produtos">
                    <?php include 'pages/produtos.php'; ?>
                </div>

                <div class="row oculto produtos-cadastro">
                    <?php include 'pages/cadastro/cadastrar-produto.php'; ?>
                </div>

                <div class="row oculto produtos-edicao">
                    <?php include 'pages/edicao/editar-produto.php'; ?>
                </div>

                <div class="row oculto categorias">
                    <?php include 'pages/categorias.php'; ?>
                </div>

                <div class="row oculto categorias-cadastro">
                    <?php include 'pages/cadastro/cadastrar-categoria.php'; ?>
                </div>

                <div class="row oculto categorias-edicao">
                    <?php include 'pages/edicao/editar-categoria.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'scripts.php'; ?>
</body>
</html>
