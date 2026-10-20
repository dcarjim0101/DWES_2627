<?php

function eti_html($eti = []) {
    
    // variables de trabajo
    $contenido = '';
    $etiqueta = '';
    $clase = '';

    // si se reciben los argumentos esperados,  se asigna su valor
    if (array_key_exists('contenido', $eti)) $contenido = $eti['contenido'];
    if (array_key_exists('etiqueta', $eti)) $etiqueta = $eti['etiqueta'];
    if (array_key_exists('clase', $eti)) $clase = $eti['clase'];
}