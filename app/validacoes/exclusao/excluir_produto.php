<?php

    include '../../../config/conexao.php';

    $id = $_GET['id'];

    $delete_produto = 'DELETE FROM produtos WHERE id = '.$id;
    mysqli_query($conexao, $delete_produto);

    header("location: ../../../index.php?msg=exclusao");
    
