<?php

    $id = $_GET['id'];

    $select_categoria = 'SELECT name, created_at, updated_at FROM categorias WHERE id = '.$id;
    $result = mysqli_query($conexao, $select_categoria);

    $categoria = mysqli_fetch_object($result);
    $data_atualizacao =  '';

    if ($categoria->updated_at !== null) {
        $data_atualizacao = date('d/m/Y H:s', strtotime($categoria->updated_at));
    }
?>

<div id="conteudo-edicao-categoria">

    <div class="col-md-12 w-35 mt-3 cabecalho">
        <label class="cabecalho-label">Edição Categoria</label>
    </div>

    <div class="col-md-10 mt-5">

        <div class="col-md-4 margin-auto">

            <form class="mt-100" autocomplete="off" method="post" action="/app/validacoes/edicao/editar_categoria.php">

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="col">
                    <input type="text" class="form-control" name="name" id="name" title="Nome" placeholder="Nome" value="<?php echo $categoria->name; ?>" required>
                </div>

                <div class="col mt-2">
                    <input type="text" class="form-control" name="created_at" id="created_at" title="Data Criação" placeholder="Data Criação"
                           value="<?php echo date('d/m/Y H:s', strtotime($categoria->created_at)); ?>" readonly>
                </div>

                <div class="col mt-2">
                    <input type="text" class="form-control" name="updated_at" id="updated_at" title="Data Atualização" placeholder="Data Atualização"
                           value="<?php echo $data_atualizacao; ?>" readonly>
                </div>

                <div class="col mt-3">
                    <button type="submit" class="btn btn-success w-100">Salvar</button>
                </div>
            </form>
        </div>

        <div class="col-md-2 mt-5 margin-auto">
            <button type="button" class="btn btn-primary w-100 btn-voltar-categorias">Voltar</button>
        </div>
    </div>
</div>
