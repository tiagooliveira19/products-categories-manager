<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"
        integrity="sha512-sR3EKGp4SG8zs7B0MEUxDeq8rw9wsuGVYNfbbO/GLCJ59LBE4baEfQBVsP2Y/h2n8M19YV1mujFANO1yA3ko7Q==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.css" rel="stylesheet"></link>
<script>

    $(document).ready(function () {

        let paginaInicial = 'pagina-inicial';
        let produtos = 'produtos';
        let categorias = 'categorias';

        new SlimSelect({
            select: '.select-categorias',
            placeholder: 'Selecione uma categoria'
        });

        $(".money").inputmask( 'currency', {
            "autoUnmask": true,
            radixPoint:",",
            groupSeparator: ".",
            allowMinus: false,
            prefix: 'R$ ',
            digits: 2,
            digitsOptional: false,
            rightAlign: true,
            unmaskAsNumber: true
        });

        /* -- Comportamento menu -- */
        $('#pagina-inicial').on('click', function () {
            $('#produtos , #categorias').removeClass('item-menu-ativo');
            $(this).addClass('item-menu-ativo');

            $('.produtos, .produtos-cadastro, .categorias, .categorias-cadastro, .categorias-edicao').fadeOut('fast');
            $('.pagina-inicial').removeClass('oculto').fadeIn('slow');
            $('#conteudo-pagina-inicial').fadeIn('slow');
        });

        $('#produtos').on('click', function () {
            $('#pagina-inicial, #categorias').removeClass('item-menu-ativo');
            $(this).addClass('item-menu-ativo');

            $('.pagina-inicial, .produtos-cadastro, .categorias, .categorias-cadastro, .categorias-edicao').fadeOut('fast');
            $('.produtos').removeClass('oculto').fadeIn('slow');
            $('#conteudo-produtos').fadeIn('slow');
        });

        $('#categorias').on('click', function () {
            $('#pagina-inicial, #produtos').removeClass('item-menu-ativo');
            $(this).addClass('item-menu-ativo');

            $('.pagina-inicial, .produtos, .produtos-cadastro, .categorias-cadastro, .categorias-edicao').fadeOut('fast');
            $('.categorias').removeClass('oculto').fadeIn('slow');
            $('#conteudo-categorias').fadeIn('slow');
        });

        $('#' + paginaInicial).on('mouseover', function () {
            $('#produtos, #categorias').removeClass('mouseOverMenu');
            $(this).addClass('mouseOverMenu')
        });

        $('#' + produtos).on('mouseover', function () {
            $('#pagina-inicial, #categorias').removeClass('mouseOverMenu');
            $(this).addClass('mouseOverMenu')
        });

        $('#' + categorias).on('mouseover', function () {
            $('#pagina-inicial, #produtos').removeClass('mouseOverMenu');
            $(this).addClass('mouseOverMenu')
        });

        // Muda para o formulário cadastro de produto
        $('#btn-cadastrar-produtos').click(function () {
            $('#conteudo-produtos').fadeOut('slow', function () {
                $('.produtos-cadastro').removeClass('oculto').fadeIn('slow');
            });
        });

        // Volta para listagem de produto
        $('.btn-voltar-produtos').click(function () {

            location.href = 'http://localhost/';

            $('.produtos-cadastro, #conteudo-pagina-inicial, #conteudo-categorias').fadeOut('slow', function () {
                $('#conteudo-produtos').removeClass('oculto').fadeIn('slow');
            });
        });

        // Muda para o formulário cadastro de categoria
        $('#btn-cadastrar-categorias').click(function () {
            $('#conteudo-categorias').fadeOut('slow', function () {
                $('.categorias-cadastro').removeClass('oculto').fadeIn('slow');
            });
        });

        // Volta para listagem de categorias
        $('.btn-voltar-categorias').click(function () {

            location.href = 'http://localhost/';

            $('.categorias-cadastro, .categorias-edicao, #conteudo-pagina-inicial, #conteudo-produtos').fadeOut('slow', function () {
                $('#conteudo-categorias').removeClass('oculto').fadeIn('slow');
            });
        });

        // Verifica se o action e o id estão setados para mudar de página
        if ('<?php echo $action; ?>' !== '' && '<?php echo $id; ?>' !== '') {

            $('#conteudo-pagina-inicial, #conteudo-produtos, #conteudo-categorias').fadeOut('slow', function () {
                $('.categorias-edicao').removeClass('oculto').fadeIn('slow');
                $('#pagina-inicial, #produtos').removeClass('item-menu-ativo');
                $('#categorias').addClass('item-menu-ativo');
            });
        }
    });
</script>
