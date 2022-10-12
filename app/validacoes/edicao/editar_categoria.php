<?php

    include '../../../config/conexao.php';

    $id = $_POST['id'];
    $name = $_POST['name'];

    $update_categoria = 'UPDATE categorias SET name = "'.$name.'", updated_at = NOW() WHERE id = '.$id;
    mysqli_query($conexao, $update_categoria);

    header("location: ../../../index.php?msg=atualizacao");
