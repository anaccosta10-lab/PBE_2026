<?php

// === Classe pedido ===
Class Pedido{

    private $cliente;
    private $valoritens;

 public function _construct($cliente){
    $this->cliente = $cliente;
    $this->valorItens = 0;
 }
 public function adicionarItem($valor) {
    $this->valorItem += $valor;
 }
 public function getTotal(){
    return $this->valorItens;
 }
 public function exibirPedido(){
    echo "cliente: {$this->cliente} - Total dos itens: R$ {$this->valorItens}<br>";
    }
}
 //===classe notaFiscal ===
 class notaFiscal {
    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function _construct($totalPedido , $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->$imposto = $imposto;
        $this->$totalPagar = 0;
    }
    public function calcularTotal(){
        $this->totalPagar = $this->totalPedido + ($this->totalPedido * ($this->imposto/100));
    } 
     public function exibirNota(){
        echo "subtotal: R$ {$this->totalPedido}<br>";
        echo "imposto: {$this->imposto}%<br>";
        echo "total a pagar: R$ {this->totalPagar}<br>";
     }


//=== teste das classes ===

//criando um Pedido
    $pedido = new pedido ("Ana");
     $pedido->adicionarItem(50);
     $pedido->exibirPedido();

     //pegando apenas o total e enviando para a nota fiscal
     $nota = new notafiscal($pedido-> getTotal(), 8);
     $nota->calcularTotal():
     $nota->exibirNota();
 }
?>