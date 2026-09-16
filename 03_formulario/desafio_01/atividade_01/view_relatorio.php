<?php
$nome = $_POST['nome_completo'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

//transformando altura que esta em metros
//para centimetros
|$altura = $altura * 100;

$imc = $altura * $altura / $peso;

 require_once "view_relatorio.php";
 ?>