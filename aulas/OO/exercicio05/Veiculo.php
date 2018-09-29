<?php

class Veiculo {
  private $tipo;
  private $diaria;

  public function __construct($tipo) {
    $this->tipo = $tipo;
    if($this->tipo === "Economico") {
      $this->diaria = 55;
    }
    elseif($this->tipo === "Familia") {
      $this->diaria = 170;
    }
    elseif($this->tipo === "Luxo") {
      $this->diaria = 210;
    }
    else {
      $this->diaria = 0;
    }
  }

  public function getDiaria() {
    return $this->diaria;
  }

}

?>
