<?php

$var = 5;

echo "El valor: $var de tipo " . gettype($var) . "<br>";

$var2 = floatval($var);

echo "El valor: $var2 de tipo " . gettype($var2) . "<br>";

$var3 = strval($var2);

echo "El valor: $var3 de tipo " . gettype($var3) . "<br>";

settype($var3, "integer");

echo "El valor: $var3 de tipo " . gettype($var3) . "<br>";