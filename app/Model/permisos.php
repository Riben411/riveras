<?php

function isUser($rolUser) {
    switch ($rolUser) {
        case 'invitado':
            if ($_SESSION['usuario']) {
                $permiso = true;
            } else {
                $permiso = false;
            }
            break;

        case 'ventas':
            if ($_SESSION['usuario']['rol'] == 'ventas' || $_SESSION['usuario']['admin']) {
                $permiso = true;
            } else {
                $permiso = false;
            }
            break;

        case 'compras':
            if ($_SESSION['usuario']['rol'] == 'compras' || $_SESSION['usuario']['admin']) {
                $permiso = true;
            } else {
                $permiso = false;
            }
            break;

        case 'admin':
            if ($_SESSION['usuario']['admin']) {
                $permiso = true;
            } else {
                $permiso = false;
            }
            break;
    }
    return $permiso;
}

?>