<?php

class Locacao {

  private $cliente;
  private $veiculo;
  private $dias;

  public function __construct($cliente) {
    $this->cliente = $cliente;
  }

  public function calcular($veiculo,$dias) {
    $this->veiculo = $veiculo;
    $this->dias = $dias;
    return $this->dias * $this->veiculo->getDiaria();
  }

}

?>
