<?php
class celular{
    //atributos
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    //metodos
    function ligar(){
        $this->ligado = thue;
        echo"O celular foi ligado <br>";
    }
    function desligar(){
        $this->desligar = false;
        echo"O celular foi desligado <br>";
    }
    function usar($consumir){
        $this->bateria = $this->bateria - $consumir;
        if($this->bateria < 0){
            $this->bateria = 0;
        }

        echo"A bateria foi consumida em $consumir <br>";
        echo"Sobrando um total de $this->bateria <br>";
    }
    function carregar($carga){
        $this->bateria = $this->bateria + $carga;
        if($this->bateria> 100){
            $this->bateria = 100;
        }
        echo "A bateria foi CARREGADA em $carga";
        echo "Aumentando a bateria para $this->bateria";
    }
}

//objeto

$celular1 = new celular();

$celular1->marca = "motorola";
$celular1->modelo = "G9";
$celular1->cor = "rosa";
$celular1->bateria = "50";
$celular1->ligado = true;

echo "Marca: $celular1->marca <br>";
echo "Modelo: $celular1->modelo <br>";
echo "Cor: $celular1->cor <br>";
echo "bateria: $celular1->bateria <br>";
echo "ligado: $celular1->ligado <br>";

$celular1->carregar(33);
$celular1->carregar(12);
$celular1->usar(25);
$celular1->desligar();

//celular2

$celular2 = new celular();

$celular2->marca = "motorola";
$celular2->modelo = "G10";
$celular2->cor = "branco";
$celular2->bateria = "292";
$celular2->ligado = true;

echo "Marca: $celular2->marca <br>";
echo "Modelo: $celular2->modelo <br>";
echo "Cor: $celular2->cor <br>";
echo "bateria: $celular2->bateria <br>";
echo "ligado: $celular2->ligado <br>";

$celular2->carregar(33);
$celular2->carregar(12);
$celular2->usar(25);
$celular2->desligar();

?>