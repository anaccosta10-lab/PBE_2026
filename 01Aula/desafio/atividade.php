<?php
require_once "funcao.php";
 //invocando/executando a função
 //que esta no arquivo funcao.php
$resultado = calcularPedido("teclado",100, 10, 5, 7);
echo "nome: ".$resultado ["nomeProduto"]."<br>";
echo "subTotal: ".$resultado ['subTotal']."<br";
echo "desconto: ".$resultado ['valorDesconto']."<br>";
echo "imposto: ".$resultado ['valorImposto']."<br>";
echo "total: ".$resultado ['totalFinal']."<br>";
?>