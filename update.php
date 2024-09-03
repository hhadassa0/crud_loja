<?php
    include "conexao.php";

    $id = $_GET['id'];
    $produto = $_GET['produto'];
    $preco = $_GET['preco'];

    $update = "UPDATE lojinha SET produto = '$produto' , preco = '$preco' WHERE id = $id";

    $result = $conn->query($update);

    if($result === true){
        echo "atualizado com sucesso!";
    }else{
        echo "Erro!";
    }
?>

<a href="read.php"> voltar</a>/a>
    