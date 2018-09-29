<?php

require 'Cliente.php';
require 'Veiculo.php';
require 'VeiculoEconomico.php';
require 'VeiculoFamilia.php';
require 'VeiculoLuxo.php';
require 'Locacao.php';

$cliente = new Cliente('Otavio','Camargo');
$uno = new VeiculoEconomico('BOX-5168');
$locacao = new Locacao($cliente);

echo $cliente->getNome();
echo PHP_EOL;
echo $locacao->calcular($uno,2);

?>
