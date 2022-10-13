<?php

    include '../../../config/conexao.php';

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = str_replace(',', '.', str_replace('R$ ', '', $_POST['price']));
    $amount = $_POST['amount'];
    $category_id = implode(', ', $_POST['category_id']);

    $insert_produto = 'INSERT INTO produtos (name, description, price, amount, category_id, created_at) 
                       VALUES ("'.$name.'", "'.$description.'", "'.$price.'", "'.$amount.'", "'.$category_id.'", NOW())';
    mysqli_query($conexao, $insert_produto);

    header("location: ../../../index.php?msg=cadastro");
