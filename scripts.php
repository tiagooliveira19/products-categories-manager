<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"
        integrity="sha512-sR3EKGp4SG8zs7B0MEUxDeq8rw9wsuGVYNfbbO/GLCJ59LBE4baEfQBVsP2Y/h2n8M19YV1mujFANO1yA3ko7Q==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

    $(document).ready(function () {

        let produtos = 'produtos';
        let categorias = 'categorias';

        // Máscara telefone no form
        $('input[type="tel"]').inputmask({
            mask: ["(99) 9999-9999", "(99) 99999-9999"],
            keepStatic: true
        });

        /* -- Comportamento menu -- */
        $('#produtos').on('click', function () {
            $('#categorias').toggleClass('item-menu-ativo');
            $(this).toggleClass('item-menu-ativo');

            $('.categorias, .categorias-cadastro').fadeOut('fast');
            $('.produtos').removeClass('oculto').fadeIn('slow');
            $('#conteudo-produtos').fadeIn('slow');
        });

        $('#categorias').on('click', function () {
            $('#produtos').toggleClass('item-menu-ativo');
            $(this).toggleClass('item-menu-ativo');

            $('.produtos, .categorias-cadastro').fadeOut('fast');
            $('.categorias').removeClass('oculto').fadeIn('slow');
            $('#conteudo-categorias').fadeIn('slow');
        });

        $('#' + produtos).on('mouseover', function () {
            $('#categorias').removeClass('mouseOverMenu');
            $(this).toggleClass('mouseOverMenu')
        });

        $('#' + categorias).on('mouseover', function () {
            $('#produtos').removeClass('mouseOverMenu');
            $(this).toggleClass('mouseOverMenu')
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

            $('.categorias-cadastro, .categorias-edicao').fadeOut('slow', function () {
                $('#conteudo-categorias').removeClass('oculto').fadeIn('slow');
            });
        });

        // Verifica se o action e o id estão setados para mudar de página
        if ('<?php echo $action; ?>' !== '' && '<?php echo $id; ?>' !== '') {

            $('#conteudo-categorias').fadeOut('slow', function () {
                $('.categorias-edicao').removeClass('oculto').fadeIn('slow');
            });
        }

        // Muda para o formulário de cadastro
        /*$('#btn-login').click(function () {
            $('.cadastro').fadeOut('slow', function () {
                $('.login').fadeIn('slow');
            });
        });*/

        // Data no formato para bd
        function formataData (data) {
            return data.getFullYear() + '-' + (data.getMonth() + 1) + '-' + data.getDate();
        }

        // Data no formato para exibição ao usuário
        function formataDataExibe (data) {
            let date = new Date(data);
            return date.toLocaleDateString('pt-BR');
        }
    });
</script>
