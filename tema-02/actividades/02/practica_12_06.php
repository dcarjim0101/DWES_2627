<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2. Tema 2</title>
</head>
<body>

<h1>Ejercicio 1. Conversiones de datos en expresiones</h1>
<?php
$entero = 10;
$cadena = "5 manzanas";
$decimal = 2.5;
$booleano = true;

// Multiplicar entero con cadena que empieza por número
$r1 = $entero * $cadena;
echo "10 * '5 manzanas' = $r1 (" . gettype($r1) . ")<br>";

// Sumar entero con cadena que empieza por número
$r2 = $entero + $cadena;
echo "10 + '5 manzanas' = $r2 (" . gettype($r2) . ")<br>";

// Sumar entero con float
$r3 = $entero + $decimal;
echo "10 + 2.5 = $r3 (" . gettype($r3) . ")<br>";

// Concatenar entero con cadena
$r4 = $entero . " euros";
echo "10 . ' euros' = $r4 (" . gettype($r4) . ")<br>";

// Sumar entero con booleano
$r5 = $entero + $booleano;
echo "10 + true = $r5 (" . gettype($r5) . ")<br>";
?>

<h1>Ejercicio 2. is_null()</h1>
<?php
$nulo = null;
$cero = 0;
$vacio = "";
$texto = "Hola";

echo "<h3>Verdaderos</h3>";
echo "is_null(null): " . var_export(is_null(null), true) . "<br>";
echo "is_null(\$nulo): " . var_export(is_null($nulo), true) . "<br>";
echo "is_null(\$noExiste = null): " . var_export(is_null($noExiste = null), true) . "<br>";

echo "<h3>Falsos</h3>";
echo "is_null(0): " . var_export(is_null($cero), true) . "<br>";
echo "is_null(''): " . var_export(is_null($vacio), true) . "<br>";
echo "is_null('Hola'): " . var_export(is_null($texto), true) . "<br>";
?>

<h1>Ejercicio 3. isset()</h1>
<?php
$a = "Hola";
$b = 0;
$c = "";
$d = null;

echo "<h3>Verdaderos</h3>";
echo "isset(\$a) con \$a = 'Hola': " . var_export(isset($a), true) . "<br>";
echo "isset(\$b) con \$b = 0: " . var_export(isset($b), true) . "<br>";
echo "isset(\$c) con \$c = '': " . var_export(isset($c), true) . "<br>";

echo "<h3>Falsos</h3>";
echo "isset(\$d) con \$d = null: " . var_export(isset($d), true) . "<br>";
echo "isset(\$noDefinida) variable sin definir: " . var_export(isset($noDefinida), true) . "<br>";
$array = array("nombre" => "Ana");
echo "isset(\$array['edad']) clave que no existe: " . var_export(isset($array['edad']), true) . "<br>";
?>

<h1>Ejercicio 4. empty()</h1>
<?php
$v1 = 0;
$v2 = "";
$v3 = "0";
$v4 = 25;
$v5 = "PHP";
$v6 = array(1, 2, 3);

echo "<h3>Verdaderos</h3>";
echo "empty(0): " . var_export(empty($v1), true) . "<br>";
echo "empty(''): " . var_export(empty($v2), true) . "<br>";
echo "empty('0'): " . var_export(empty($v3), true) . "<br>";

echo "<h3>Falsos</h3>";
echo "empty(25): " . var_export(empty($v4), true) . "<br>";
echo "empty('PHP'): " . var_export(empty($v5), true) . "<br>";
echo "empty(array(1, 2, 3)): " . var_export(empty($v6), true) . "<br>";
?>

</body>
</html>