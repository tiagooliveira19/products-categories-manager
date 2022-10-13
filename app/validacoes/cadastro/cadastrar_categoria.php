<?php

    include '../../../config/conexao.php';

    $name = $_POST['name'];

    $insert_categoria = 'INSERT INTO categorias (name, created_at) VALUES ("'.$name.'", NOW())';
    mysqli_query($conexao, $insert_categoria);

    header("location: ../../../index.php?msg=cadastro");
