<?php

    $select_categorias = 'SELECT id, name, created_at, updated_at FROM categorias ';
    $result = mysqli_query($conexao, $select_categorias);
    $qtd_registros = mysqli_num_rows($result);
?>

<div id="conteudo-categorias">

    <div class="col-md-12 w-35 mt-3 cabecalho">
        <label class="cabecalho-label">Categorias</label>
    </div>

    <div class="col-md-10 margin-auto mt-5">
        <table class="table table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Criação</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php

                    if ($qtd_registros > 0) {

                        while ($categoria = mysqli_fetch_object($result)) { ?>

                            <tr>
                                <td><?php echo $categoria->id; ?></td>
                                <td><?php echo $categoria->name; ?></td>
                                <td><?php echo date('d/m/Y', strtotime($categoria->created_at)); ?></td>
                                <td>
                                    <a href="index.php?action=editar&id=<?php echo $categoria->id; ?>">
                                        <span class="links pointer" title="Editar"><i class="fas fa-edit"></i></span>
                                    </a>

                                    <a href="/app/validacoes/exclusao/excluir_categoria.php?id=<?php echo $categoria->id; ?>">
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
            <button type="button" class="btn btn-primary float-end" id="btn-cadastrar-categorias">Cadastrar Categorias</button>
        </div>
    </div>
</div>
