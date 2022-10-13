<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"
        integrity="sha512-sR3EKGp4SG8zs7B0MEUxDeq8rw9wsuGVYNfbbO/GLCJ59LBE4baEfQBVsP2Y/h2n8M19YV1mujFANO1yA3ko7Q==" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.1/slimselect.min.css" rel="stylesheet">
<script type="text/javascript" src="/js/menu.js"></script>
<script type="text/javascript" src="/js/pages.js"></script>
<script>

    $(document).ready(function () {

        new SlimSelect({
            select: '.select-categorias',
            placeholder: 'Selecione uma categoria'
        });

        new SlimSelect({
            select: '.select-categorias-edicao',
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
            rightAlign: false,
            unmaskAsNumber: true
        });

        // Verifica se o action e o id estão setados para mudar de página
        if ('<?php echo $action; ?>' !== '' && '<?php echo $id; ?>' !== '') {

            if ('<?php echo $action; ?>' === 'editar-produto') {

                $('#conteudo-pagina-inicial, #conteudo-produtos, #conteudo-categorias').fadeOut('slow', function () {
                    $('.produtos-edicao').removeClass('oculto').fadeIn('slow');
                    $('#pagina-inicial, #categorias').removeClass('item-menu-ativo');
                    $('#produtos').addClass('item-menu-ativo');
                });
            } else {

                $('#conteudo-pagina-inicial, #conteudo-produtos, #conteudo-categorias').fadeOut('slow', function () {
                    $('.categorias-edicao').removeClass('oculto').fadeIn('slow');
                    $('#pagina-inicial, #produtos').removeClass('item-menu-ativo');
                    $('#categorias').addClass('item-menu-ativo');
                });
            }
        }

        // Exibe mensagem de acordo com o retorno
        if ('<?php echo $msg; ?>' !== '') {

            if ('<?php echo $msg; ?>' === 'cadastro') {
                swal("", 'Cadastro realizado com sucesso!', "success");
            }

            if ('<?php echo $msg; ?>' === 'atualizacao') {
                swal("", 'Alteração realizada com sucesso!', "success");
            }

            if ('<?php echo $msg; ?>' === 'exclusao') {
                swal("", 'Exclusão realizada com sucesso!', "success");
            }
        }
    });
</script>
