<?php

    $select_categorias = 'SELECT id, name FROM categorias';
    $result_categorias = mysqli_query($conexao, $select_categorias);

    $id = $_GET['id'] ?? '';
    $nome =  '';
    $descricao =  '';
    $preco =  '';
    $quantidade =  '';
    $produto_categorias =  array();
    $data_criacao =  '';
    $data_atualizacao =  '';

    if ($id) {

        $select_produtos = 'SELECT name, description, price, amount, category_id, created_at, updated_at FROM produtos WHERE id ='.$id;
        $result = mysqli_query($conexao, $select_produtos);

        $produto = mysqli_fetch_object($result);
        $nome = $produto->name;
        $descricao = $produto->description;
        $preco = $produto->price;
        $quantidade = $produto->amount;
        $produto_categorias = explode(', ', $produto->category_id);
        $data_criacao = date('d/m/Y H:i', strtotime($produto->created_at));

        if ($produto->updated_at !== null) {
            $data_atualizacao = date('d/m/Y H:i', strtotime($produto->updated_at));
        }
    }

?>

<div id="conteudo-edicao-produto">

    <div class="col-md-12 w-35 mt-3 cabecalho">
        <label class="cabecalho-label">Edição Produto</label>
    </div>

    <div class="col-md-10 mt-5">

        <div class="col-md-6 margin-auto">

            <form class="mt-100" autocomplete="off" method="post" action="/app/validacoes/edicao/editar_produto.php">

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome" value="<?php echo $nome; ?>" required>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrição..." maxlength="255"><?php echo $descricao; ?></textarea>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <input type="text" class="form-control money" name="price" id="price" placeholder="Preço" value="<?php echo $preco; ?>" required>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="amount" id="amount" placeholder="Quantidade" value="<?php echo $quantidade; ?>" required>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <select class="select-categorias-edicao" name="category_id[]" id="category_id" multiple required>
                            <?php while ($categoria = mysqli_fetch_object($result_categorias)) { ?>
                                <option value="<?php echo $categoria->id; ?>" <?php if (in_array($categoria->id, $produto_categorias)) { echo 'selected'; } ?> >
                                    <?php echo $categoria->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <input type="text" class="form-control" name="created_at" id="created_at" title="Data Criação" placeholder="Data Criação"
                               value="<?php echo $data_criacao; ?>" readonly>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="updated_at" id="updated_at" title="Data Atualização" placeholder="Data Atualização"
                               value="<?php echo $data_atualizacao; ?>" readonly>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <button type="submit" class="btn btn-success w-100">Salvar</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-2 mt-5 margin-auto">
            <button type="button" class="btn btn-primary w-100 btn-voltar-produtos">Voltar</button>
        </div>
    </div>
</div>
