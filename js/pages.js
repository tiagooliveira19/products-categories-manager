$(document).ready(function () {

    // Muda para o formulário cadastro de produto
    $('#btn-cadastrar-produtos').click(function () {
        $('#conteudo-produtos').fadeOut('slow', function () {
            $('.produtos-cadastro').removeClass('oculto').fadeIn('slow');
        });
    });

    // Volta para o inicio
    $('.btn-voltar-produtos').click(function () {

        location.href = 'http://localhost/';
        
        $('.produtos-cadastro, .produtos-edicao, .pagina-inicial, .categorias, .categorias-cadastro, .categorias-edicao').fadeOut('slow', function () {
            $('#conteudo-produtos').removeClass('oculto').fadeIn('slow');
        });
    });

    // Muda para o formulário cadastro de categoria
    $('#btn-cadastrar-categorias').click(function () {
        $('#conteudo-categorias').fadeOut('slow', function () {
            $('.categorias-cadastro').removeClass('oculto').fadeIn('slow');
        });
    });

    // Volta para o inicio
    $('.btn-voltar-categorias').click(function () {

        location.href = 'http://localhost/';

        $('.categorias-cadastro, .categorias-edicao, .pagina-inicial, .produtos, .produtos-cadastro, .produtos-edicao').fadeOut('slow', function () {
            $('#conteudo-categorias').removeClass('oculto').fadeIn('slow');
        });
    });
});
