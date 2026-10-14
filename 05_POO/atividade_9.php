<?php
Class produto{

    private $nome;
    private $preço;
    private $estoque;

    public function __construct($nome, $preço, $estoque){
        $this->nome = $nome;
        $this->preço = $preço;
        $this->estoque = $estoque;
    }
        
        
    public function reajustarPreço($percentual){
        if($quantidade <= $this->estoque){
            echo "venda relizada com sucesso";
        }else{
            echo "etoque insuficiente";
        }
    }
        public function rejuntarpreço($percentual){
        $this->preço += $this->preço * ($percentual/100);
    }

    public function exibirInfo(){
        echo "Nome: ". $this->nome . "<br>";
        echo "Preço: ". number_format($this->preco, 2, ',',',',) . "<br>";
        echo "Estoque: ". $this->estoque . "unidades" . "<br>";
    }
}

$produto = new Produto("Teclado Gamer", 250, 10);
$produto->vender(2);
$produto->reajustarPreco(10);
$produto->exibirInfo();

?>