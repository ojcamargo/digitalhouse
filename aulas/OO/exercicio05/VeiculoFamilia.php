<?php

class VeiculoFamilia extends Veiculo {

  private $diaria;

  public function __construct($placa) {
    parent::__construct($placa,170);
  }

  public function getDiaria() {
    return $this->diaria;
  }

}

?>
