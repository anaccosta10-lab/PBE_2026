<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>relatorio de aluno</title>
</head>
<body>
   <h1>boletim do boletim</h1>
   <p>Nome do aluno: <?= $Boletim->getNome() ?> </p>
   <p>turma do aluno: <?= $Boletim->getturma() ?></p>
   <table border = 1>
        <tr>
            <th> nota 1 </th>
            <th> nota 2 </th>
            <th> nota 3 </th>
            <th> media </th>
            <th> faltas </th>
            <th> frequencia </th>
</tr>
<tr>
    <td> <?= $aluno->getNota1() ?> </td>
    <td> <?= $aluno->getNota2() ?> </td>
    <td> <?= $aluno->getNota3() ?> </td>
    <td> <?= $aluno->getNota2() ?> </td>
    <td> <? number_format ($aluno->media(), 2, ",", "." ) ?> </td>
    <td> <?= $aluno->getFaltas() ?> </td>
    <td> <?= $aluno->calcularFrequencia() ?>%> </td>
</tr>
</table>
 <?php if ($aluna->calcularFrequencia() >= 75): ?>
   <h2>Reprovação por falta</h2>
   <p>"Atenção! procure o professor para saber os proximos passos."  </p>

    <?php elseif ($aluna->media() < 7): ?>
   <h2> Aprovado </h2>
   <p> parabens continue assim </p>

    <?php elseif ($aluna->media() < 5): ?>
   <h2> Recuperação </h2>
   <p> Atenção: procure o professor para saber os proximos passos </p>

        <?php else: ?>
     <h2> Recuperação </h2>
     <p> Atenção: procure o professor para saber os proximos passos </p>
    <?php endif ?>
    </body>
</html>