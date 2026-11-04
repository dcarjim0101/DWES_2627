<?php

require 'libs/functions.php';

$peliculas = get_peliculas();

// total recaudado
$total = array_sum(array_column($peliculas, 'recaudacion'));

require 'views/index.view.php';
