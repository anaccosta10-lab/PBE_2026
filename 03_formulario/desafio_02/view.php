<DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>desafio_02</title>
</head>
<body>
    <h1>Carrinho de compras</h1>
    <form action="logica.php" method="POST">
        <h2>Dados dos clientes</h2>
        <label for="">Nome: </label>
        <br>
         <input type=" text " name="Nome">
         <br>
         <h2>Produto 01</h2>
        <label for="">Nome do produto:</label>
        <br>
        <input type=" text " name="Nome do produto:">
        <br>
        <label for="">Preço:</label>
        <br>
        <input type="number" nome="Preço1">
        <br>
        <label for="" >Quantidade:</label>
        <br>
        <input type=" number " name="Quantidade1:">
        <br><br>
         <h2>Produto 02</h2>
        <label for="">Nome do produto:</label>
        <br>
        <input type=" text " name="Nome do produto:">
        <br>
        <label for="">Preço:</label>
        <br>
        <input type="number" nome="Preço2">
        <br>
        <label for="" >Quantidade:</label>
        <br>
        <input type="number" nome="Quantidade2">
        <br><br>
         <h2>Produto 03</h2>
        <label for="">Nome do produto:</label>
        <br>
        <input type=" text " name="Nome do produto:">
        <br>
        <label for="">Preço:</label>
        <br>
        <input type="number" nome="Preço3">
        <br>
        <label for="" >Quantidade:</label>
        <br>
        <input type="number" nome="Quantidade3">
        <br><br>
        <button type="submit">Finalizar Compra </button>
</body>
</html>