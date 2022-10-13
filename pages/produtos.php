<?php

    $select_produtos = 'SELECT id, name, description, price, amount, category_id, created_at, updated_at FROM produtos ';
    $result = mysqli_query($conexao, $select_produtos);
    $qtd_registros = mysqli_num_rows($result);
?>

<div id="conteudo-produtos">
    <div class="col-md-12 w-35 cabecalho">
        <label class="cabecalho-label">Produtos</label>
    </div>

    <div class="col-md-10 margin-auto mt-5">
        <table class="table table-striped">

            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Qtd.</th>
                <th>Data de Criação</th>
                <th>Ações</th>
            </tr>
            </thead>

            <tbody>
            <?php

                if ($qtd_registros > 0) {

                    while ($produto = mysqli_fetch_object($result)) { ?>

                        <tr>
                            <td><?php echo $produto->id; ?></td>
                            <td><?php echo $produto->name; ?></td>
                            <td><?php echo mb_strimwidth($produto->description, 0, 50, '...'); ?></td>
                            <td class="money"><?php echo $produto->price; ?></td>
                            <td><?php echo $produto->amount; ?></td>
                            <td><?php echo date('d/m/Y', strtotime($produto->created_at)); ?></td>
                            <td>
                                <a href="index.php?action=editar-produto&id=<?php echo $produto->id; ?>">
                                    <span class="links pointer" title="Editar"><i class="fas fa-edit"></i></span>
                                </a>

                                <a href="/app/validacoes/exclusao/excluir_produto.php?id=<?php echo $produto->id; ?>">
                                    <span class="links pointer ml-10" title="Deletar"><i class="fas fa-trash-alt"></i></span>
                                </a>
                            </td>
                        </tr>
                    <?php }

                } else { ?>

                    <tr>
                        <td colspan="7" class="text-center">Nenhum registro encontrado!</td>
                    </tr>
                <?php }
            ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-10 margin-auto mt-5">
        <div class="col-md-6 float-end">
            <button type="button" class="btn btn-primary float-end" id="btn-cadastrar-produtos">Cadastrar Produtos</button>
        </div>
    </div>
</div>
