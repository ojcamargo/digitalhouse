<?php

require 'Cliente.php';
require 'Veiculo.php';
require 'VeiculoEconomico.php';
require 'VeiculoFamilia.php';
require 'VeiculoLuxo.php';
require 'Locacao.php';

$cliente = new Cliente('Otavio','Camargo');
$veiculo = new VeiculoLuxo();
$locacao = new Locacao($cliente,$veiculo,2);

echo $locacao->calcular();

 ?>
