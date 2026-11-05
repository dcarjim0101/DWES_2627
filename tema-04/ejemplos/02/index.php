<?php

// RUTAS ABSOLUTAS
require_once __DIR__ . 'class/Cliente.php';

// crear un objeto de la clase Cliente
// infosierra
$c1 = new Cliente();

var_dump($c1);

$c1 -> setNombre('ladrillos margari');
$c1 -> setPoblacion('ubrique');
$c1 -> setDni('11111111A');

var_dump($c1);

echo $c1 -> getNombre();
echo '<br>';
echo $c1 -> getPoblacion();
echo '<br>';
echo $c1 -> getDni();
echo '<br>';