<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06_atividade</title>
</head>
<body>
     <form action="logica.php" method="POST">
        <h2>Gerando seu Boletim</h2>
         <label for= ""> Nome do aluno:</label>
         <input type = "text" name = "nome" required> 
         <br><br>
        <label for = ""> Turma:</label>
         <select name = "turma" required> 
            <option value = "1_ids"> 1º IDS </option>
            <option value = "2_ids"> 2º IDS </option>
            <option value = "3_ids"> 3º IDS </option>
</select>
        <br><br>
         <label for = ""> primeira nota:</label>
        <input type = "number" name = "nota1" required> 
        <br><br>
         <label for = ""> segunda nota: </label>
        <input type = "number" name ="nota2" required>  
        <br><br>
         <label for = ""> terceira nota:</label>
        <input type = "number" name ="nota3" required> 
        <br><br>
         <label for = ""> fatas: </label>
        <input type = "number" name ="faltas" min = "0" max = "80" required> 
         <br><br>
        <button type = "submit" >Gerar media </button>
    </form>
</body>
</html>
 