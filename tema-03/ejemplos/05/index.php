<?php

/*
    ejemplo 35.
    descripcion: if alternativo para plantillas HTML

    dependiendo del perfil se mostrara un menu de acciones u otro
    tipos de perfiles:
        - admin
        - user
*/

// models

// negociado
$perfil = 'admin';

// vista
include 'views/index.view.php';