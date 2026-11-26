<?php

function formatear_fecha(?string $fecha): string
{
    if (empty($fecha)) {
        return '';
    }
    return date('d/m/Y', strtotime($fecha));
}

// Precio con 2 decimales y €
function formatear_precio(?float $precio): string
{
    return number_format($precio ?? 0, 2, ',', '.') . ' €';
}
