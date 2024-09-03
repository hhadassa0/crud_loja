<?php
include "conexao.php";

    $produto = $_GET['produto'];
    $preco= $_GET['preco'];
    
    $insert = "INSERT INTO `lojinha` (`id`, `produto`, `preco`) VALUES (NULL, '$produto', '$preco')";

    $resultado = $conn->query($insert);

    if($resultado == TRUE){
        echo "cadastrado com sucesso!";
    }else{
        echo "erro ao cadastrar!";
    }

    
?>