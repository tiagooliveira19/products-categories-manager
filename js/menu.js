$(document).ready(function () {

    let paginaInicial = 'pagina-inicial';
    let produtos = 'produtos';
    let categorias = 'categorias';

    // Comportamento menu
    $('#pagina-inicial').on('click', function () {
        $('#produtos , #categorias').removeClass('item-menu-ativo');
        $(this).addClass('item-menu-ativo');

        $('.produtos, .produtos-cadastro, .produtos-edicao, .categorias, .categorias-cadastro, .categorias-edicao').fadeOut('fast');
        $('.pagina-inicial').removeClass('oculto').fadeIn('slow');
        $('#conteudo-pagina-inicial').fadeIn('slow');
    });

    $('#produtos').on('click', function () {
        $('#pagina-inicial, #categorias').removeClass('item-menu-ativo');
        $(this).addClass('item-menu-ativo');

        $('.pagina-inicial, .produtos-cadastro, .produtos-edicao, .categorias, .categorias-cadastro, .categorias-edicao').fadeOut('fast');
        $('.produtos').removeClass('oculto').fadeIn('slow');
        $('#conteudo-produtos').fadeIn('slow');
    });

    $('#categorias').on('click', function () {
        $('#pagina-inicial, #produtos').removeClass('item-menu-ativo');
        $(this).addClass('item-menu-ativo');

        $('.pagina-inicial, .produtos, .produtos-cadastro, .produtos-edicao, .categorias-cadastro, .categorias-edicao').fadeOut('fast');
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
});
