<div id="conteudo-cadastro-categoria">

    <div class="col-md-12 w-35 mt-3 cabecalho">
        <label class="cabecalho-label">Cadastrar Categoria</label>
    </div>

    <div class="col-md-10 mt-5">

        <div class="col-md-4 margin-auto">

            <form class="mt-100" autocomplete="off" method="post" action="/app/validacoes/cadastro/cadastrar_categoria.php">

                <div class="col">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required>
                </div>

                <div class="col mt-3">
                    <button type="submit" class="btn btn-success w-100">Cadastrar</button>
                </div>
            </form>
        </div>

        <div class="col-md-2 mt-5 margin-auto">
            <button type="button" class="btn btn-primary w-100 btn-voltar-categorias">Voltar</button>
        </div>
    </div>
</div>
