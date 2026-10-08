<?php
// Variables de partida
$a = 10;
$b = '10';
$c = 5;
$d = 'Hola Pepe';
$e = 'Hola Luis';
$f = 'hola';
// Comprobamos las expresiones
var_dump($a == $b); // true: son iguales
var_dump($a === $b); // false: iguales, pero de distinto tipo
var_dump($a !== $b); // true: $a es de distinto tipo que $b
var_dump($a != $b); // false: $a y $b son iguales en valor
var_dump($b > $c); // true: $b es mayor que $c
var_dump($a != $c); // true: $a es distinto de $c
var_dump($a <> $c); // true: igual que la anterior
var_dump($d == $e); // false: no son cadenas idénticas

var_dump($d[0] == $e[0]); // true: su primer carácter es idéntico
var_dump($d[0] == $f[0]); // false: distingue mayúsculas de minusculas

$Resultado = ($a > $c) ? 'Es Mayor' : 'Es Menor';
echo $Resultado; // "Es Mayor", porque $a es mayor que $c
?>
