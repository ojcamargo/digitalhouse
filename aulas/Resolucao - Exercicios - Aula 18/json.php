<?php
$a = ['a'=>1, 'b'=>2, 'c'=>'Eu <3 JSON'];
var_dump($a);
echo "<br>";
$a = json_encode($a);
echo $a . "<br>";
$b = json_decode($a, true);
var_dump($b);
echo "<br>";
echo $b['c']."|".$b['a']."|".$b['b']."|";
?>
