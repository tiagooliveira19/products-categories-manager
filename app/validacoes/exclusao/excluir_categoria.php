<?php

    include '../../../config/conexao.php';

    $id = $_GET['id'];

    $delete_categoria = 'DELETE FROM categorias WHERE id = '.$id;
    mysqli_query($conexao, $delete_categoria);

    header("location: ../../../index.php?msg=exclusao");
