<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cadastro</title>
</head>
<body>
    <a href="read.php"> < voltar</a>
    <br>
    <br>
    <form action="update.php" method="get">
        <label type="">id</label>
        <input type="text" placeholder="id" name="id">

        <label type=""> nome do produto</label>
        <input type="text" placeholder="nome" name="produto">

        <label for="preco">preco</label>
        <input type="text" placeholder="preço" name="preco">

        <input type="submit" value="Atualizar">

    </form>
</body>
</html>