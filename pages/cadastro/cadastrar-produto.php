<?php

    $select_categorias = 'SELECT id, name FROM categorias';
    $result = mysqli_query($conexao, $select_categorias);
?>

<div id="conteudo-cadastro-produto">

    <div class="col-md-12 w-35 mt-3 cabecalho">
        <label class="cabecalho-label">Cadastrar Produto</label>
    </div>

    <div class="col-md-10 mt-5">

        <div class="col-md-6 margin-auto">

            <form class="mt-100" autocomplete="off" method="post" action="/app/validacoes/cadastro/cadastrar_produto.php">

                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrição..." maxlength="255"></textarea>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <input type="text" class="form-control money" name="price" id="price" placeholder="Preço" required>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="amount" id="amount" placeholder="Quantidade" required>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <select class="select-categorias" name="category_id[]" id="category_id" multiple required>
                            <?php while ($categoria = mysqli_fetch_object($result)) { ?>
                                <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <button type="submit" class="btn btn-success w-100">Cadastrar</button>
                </div>
            </form>
        </div>

        <div class="col-md-2 mt-5 margin-auto">
            <button type="button" class="btn btn-primary w-100 btn-voltar-produtos">Voltar</button>
        </div>
    </div>
</div>
