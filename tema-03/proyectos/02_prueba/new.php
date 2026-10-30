<?php

// Cargar librerías
require_once 'libs/functions.php';

// Modelos

// Negociado
$articulos = get_articulos();

// Views
include 'views/new.view.php';