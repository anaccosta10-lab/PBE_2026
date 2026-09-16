<DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>desafio_01</title>
</head>
<body>
    <h1>Calcuadora de Salario Liquido</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do funcionario: </label>
        <input type=" text " name="nome">
        <br><br>
        <label for="">Salario Bruto: </label>
        <input type=" text " name="salario_bruto">
        <br><br>
        <label for="">horas extras: </label>
        <input type=" text " name="horas_extras">
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