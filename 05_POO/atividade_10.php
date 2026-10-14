<?php

Class Carro{
    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo, $consumo = 10, $tanque_inicial = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanque_inicial;
    }

    public function abastecer($litros){
        if($litros > 0){
            $this->tanque += $litros;
            echo "Foram abastecidos $litros litros <br>";
        }else{
            echo "Quantidade de combustível inválida <br>";
        }
    }

    public function  digirir($km){
        if($km <= 0){
            echo "Distância inválida <br>";
            return;
        }

         $necessario = $km / $this->consumo;
        if($necessario <= $this->tanque){
            $this->tanque -= $necessario;
            echo "O carro percorreu $km km <br>";
        }else{
             echo "Combustível insuficiente para percorrer $km <br>";
        }
    }

    public function exibir_Info(){
        echo "Modelo: $this->modelo <br>";
        echo "Consumo $this->consumo <br>";
        echo "Tanque $this->tanque <br>";
        echo "Litros $this->litros <br>";
        echo "km $this->km <br>";
    }
}
$carro = new Carro("Honda Civic", 12, 20);
$carro->exibir_Info();
$carro->digirir(60);
$carro->abastecer(10);
$carro->exibir_Info();

?>