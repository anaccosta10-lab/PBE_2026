<?php

Class aluno{
    private $nome;
    private $nota;

    public function _construct($nome){
    $this->nome = $nome;
    $this->nota = 0/10;
 }
  public function adicionarItem($nota) {
    $this->nota += $nota;
 }
 








}
?>