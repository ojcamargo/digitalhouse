<html>
<body>
<?php
echo('Exercicio 1 <br/>');
for($i = 1; $i <= 100; $i++) {
	echo($i . ',');
}

echo('<br/>Exercicio 2 <br/>');
for($i = 1; $i <= 100; $i++) {
	echo($i . ',');
	if($i == rand(1,100))
	{
		break;
	}
}
echo('<br/>Exercicio 3 <br/>');
for($i = 0; $i <= 10; $i++) {
	echo($i . ' x 2 = ' . ($i * 2) . '<br/>');
}
echo('<br/>Exercicio 4 <br/>');
$cont = 0;
$lancamento = 0;
while($cont < 5) {
	$moeda = rand(0,1);
	if($moeda == 1) {
		$cont++;
	}
	$lancamento++;
}
echo('Quantidade de lançamentos: ' . $lancamento);
echo('<br/>Quantidade de coroas: ' . $cont);
echo('<br/>Exercicio 5 <br/>');
$moeda = 0;
$lancamento = 0;
do {
	$moeda = rand(0,1);
	$lancamento++;
} while($moeda != 1);
echo('<br/>Moeda: ' . $moeda);
echo('<br/>Quantidade de lançamentos: ' . $lancamento);
echo('<br/>Exercicio 6 <br/>');
$nomes = ["Simplicio","Suplicio","Mestiço","Chuvisco","Mardito"];
echo('<br/>Imprimir nomes com FOR <br/>');
for($i = 0; $i < count($nomes); $i++) {
	echo($nomes[$i] . ',');
}
echo('<br/>Imprimir nomes com WHILE <br/>');
$i = 0;
while($i < count($nomes)) {
	echo($nomes[$i] . ',');
	$i++;
}
echo('<br/>Imprimir nomes com DO WHILE <br/>');
$i = 0;
do {
	echo($nomes[$i] . ',');
	$i++;
} while($i < count($nomes));
echo('<br/>Exercicio 7 <br/>');
echo('<br/>Imprimir numeros aleatorios com FOR <br/>');
$numAleatorio = [];
for($i = 0; $i < 10; $i++) {
	$numAleatorio[$i] = rand(0,10);
	if($numAleatorio[$i] == 5)
	{
		echo("Encontramos o numero " .$numAleatorio[$i]);
		break;
	}
	else
	{
		echo($numAleatorio[$i] . ',');
	}
}
echo('<br/>Imprimir numeros aleatorios com WHILE <br/>');
$numAleatorio = [];
$i = 0;
while($i < 10) {
	$numAleatorio[$i] = rand(0,10);
	if($numAleatorio[$i] == 5)
	{
		echo("Encontramos o numero " .$numAleatorio[$i]);
		break;
	}
	else
	{
		echo($numAleatorio[$i] . ',');
	}
	$i++;
}
echo('<br/>Imprimir numeros aleatorios com DO WHILE <br/>');
$numAleatorio = [];
$i = 0;
do {
	$numAleatorio[$i] = rand(0,10);
	if($numAleatorio[$i] == 5)
	{
		echo("Encontramos o numero " .$numAleatorio[$i]);
		break;
	}
	else
	{
		echo($numAleatorio[$i] . ',');
	}
	$i++;
} while($i < 10);
echo('<br/>Exercicio 8 <br/>');
foreach (range("A","O") as $chave => $valor) {
    echo("<br/>Na posição $chave esta o valor $valor<br/>");
}
echo('<br/>Exercicio 9,10 <br/>');
$mascota = ["animal" => "Girafa", "idadede" => "5", "altura" => "0.60", "nome" => "pescoço"];
foreach ($mascota as $key => $value) {
	echo "$key : $value <br/>";
}
echo('<br/>Exercicio 11,12 <br/>');
$ceu = array( "Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=> "Bruxelas",
"Dinamarca"=>"Copenhagen", "Finlândia"=>"Helsinki", "França" => "Paris",
"Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana", "Alemanha" => "Berlim", "Grécia" =>
"Atenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdã", "Portugal"=>"Lisboa",
"Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicósia",
"Lituânia"=>"Vilnius", "República Tcheca"=>"Praga", "Estônia"=>"Tallinn",
"Hungria"=>"Budapeste", "Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena",
"Polônia"=>"Varsóvia") ;

foreach ($ceu as $key => $value) {
	echo "A capital de $key e $value <br/>";
}

echo('<br/>Exercicio 13 <br/>');
$ceu = [
"Argentina" => ["Cidades" =>["Buenos Aires", "Córdoba", "Santa Fé"], "America" => "Sim"],
"Brasil" => ["Cidades" => ["Brasília", "Rio de Janeiro", "São Paulo"], "America" => "Sim"],
"Colômbia" => ["Cidades" => ["Cartagena", "Bogotá", "Barranquilla"], "America" => "Sim"],
"França" => ["Cidades" => ["Paris", "Nantes", "Lyon"], "America" => "Não"],
"Itália" => ["Cidades" => ["Roma", "Milão", "Veneza"], "America" => "Não"],
"Alemanha" => ["Cidades" => ["Munique", "Berlim", "Frankfurt"], "America" => "Não"]
];

echo "<ul>";
foreach ($ceu as $pais => $infoPais) {
	echo "As cidades de $pais são: </br>";
	echo "<ul>";
	foreach ($infoPais["Cidades"] as $key => $value) {
			echo "<li>$value</li>";
		}
		echo "<li>Fica na américa:" . $infoPais["America"] . "</li>";
	echo "</ul>";
}

?>
</body>
</html>
