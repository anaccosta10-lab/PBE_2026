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
        <label for="">Dados do cliente </label>
        <input type=" text " name="nome">
        <br><br>
        <label for="">Produto 01:</label>
        <input type=" text " name="Nome do produto:">
        <input type=" text " name="Preço:">
        <input type=" text " name="Quantidade:">
        <br><br>
        <label for="">Produto 02 </label>
        <input type=" text " name="Nome do produto:">
        <input type=" text " name="Preço:">
        <input type=" text " name="Quantidade:">
        <br><br>
        <label for="">beneficio: </label>
        <input type=" text " name="beneficios">
        <br><br>
        <label for="">descontos: </label>
        <input type=" text " name="descontos">
        <br><br>
        <button type="reset">Limpar</button>
         <button type="submit">Calcular Salario</button>
</body>
</html>