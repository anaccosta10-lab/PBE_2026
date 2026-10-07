<?php
 class Aluno{
    public $Nome1;
    public $Nome2;
    public $Média;

public function __construct($nome,$nota1,$nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->calcularMedia();
    }
    
    public function calcularMedia(){
        return ($this->nota1 + $this->nota2)/2;
    }
}

$aluno = new Aluno("Ana clara",10,9.9);

echo "<pre>";
print_r($aluno);
echo "<pre>";

?>