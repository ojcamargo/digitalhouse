<?php

class Locacao {

  private $cliente;
  private $veiculo;
  private $dias;

  public function __construct($cliente, $veiculo, $dias) {
    $this->cliente = $cliente;
    $this->veiculo = $veiculo;
    $this->dias = $dias;
  }

  public function calcular() {
    return $this->dias * $this->veiculo->getDiaria();
  }

}

?>
