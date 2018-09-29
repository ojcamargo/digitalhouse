<?php

abstract class Veiculo {
  private $placa;
  private $diaria;

  public function __construct($placa,$diaria) {
    $this->diaria = $diaria;
    $this->placa = $placa;
  }

  public function getDiaria() {
    return $this->diaria;
  }

}

?>
