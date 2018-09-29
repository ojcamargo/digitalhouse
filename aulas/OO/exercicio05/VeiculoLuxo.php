<?php

class VeiculoLuxo extends Veiculo {

  private $diaria;

  public function __construct($placa) {
    parent::__construct($placa,210);
  }

  public function getDiaria() {
    return $this->diaria;
  }

}

?>
