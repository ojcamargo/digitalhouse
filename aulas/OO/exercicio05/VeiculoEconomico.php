<?php

class VeiculoEconomico extends Veiculo {

  private $diaria;

  public function __construct($placa) {
    parent::__construct($placa, 55);
  }

}

?>
