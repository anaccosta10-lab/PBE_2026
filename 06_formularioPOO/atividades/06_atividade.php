<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06_atividade</title>
</head>
<body>
     <form action=""mehtod="POST">
        <h2>Gerando seu Boletim</h2>
         <label for=>Nome:</label>
         <input type="text" id="nome" name= "nome"> 
         <br><br>
        <label for=>Turma:</label>
         <input type="text" id="turma" name= "turma"> 
        <br><br>
         <label for=>Nota1:</label>
        <input type="number" id="nota1" name= "nota1" min=0 max=10> 
        <br><br>
         <label for=>Nota2:</label>
        <input type="number" id="nota2" name= "nota2"min=0 max=10>  
        <br><br>
         <label for=>Nota3:</label>
        <input type="number" id="nota3" name= "nota3"min=0 max=10> 
        <br><br>
         <label for=>fatas:</label>
        <input type="number" id="faltas" name= "faltas"min=0> 
         <br><br>
        <button type="submit">Gerar Boletim</button>
</body>
</html>
 