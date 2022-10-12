<?php

    include '../../../config/conexao.php';

$id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = str_replace(',', '.', str_replace('R$ ', '', $_POST['price']));
    $amount = $_POST['amount'];
    $category_id = implode(', ', $_POST['category_id']);

    $update_produto = 'UPDATE produtos SET name = "'.$name.'", description = "'.$description.'", price = "'.$price.'", amount = "'.$amount.'", 
                              category_id = "'.$category_id.'", updated_at = NOW() WHERE id = '.$id;
    // echo $update_produto;
    mysqli_query($conexao, $update_produto);

    header("location: ../../../index.php?msg=atualizacao");
