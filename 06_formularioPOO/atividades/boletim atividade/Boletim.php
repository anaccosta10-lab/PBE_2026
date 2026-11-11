<?php
class boletim{
  private $nome;
  private $turma;
  private $nota1;
  private $nota2;
  private $nota3;
  private $faltas;

  public function _construct($nome, $turma, $nota1, $nota2, $nota3, $faltas){
    $this->nome = $nome;
    $this->turma = $turma;
    $this->nota1 = $nota1;
    $this->nota2 = $nota2;
    $this->nota3 = $nota3;
    $this->faltas = $faltas;
  }

  public function getNome(){
    return $this->nome;
  }
   public function getTurma(){
    return $this->turma;
   }

    public function getnota1(){
    return $this->nota1;
}

public function getnota2(){
    return $this->nota2;
}

public function getnota3(){
    return $this->nota3;
}

public function getfaltas(){
    return $this->faltas;
}

    public function CalcularTotal(){
        return $this->nota * $this->faltas;
    }




}
?>