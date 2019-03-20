<?php

include 'Model/ventas/cuenta.php';
include 'Model/ventas/cuenta-sql.php';

$action = isset($_POST['action']) ? $_POST['action'] : '';
$c = new CuentaSql;

switch($action) {

    case 'obtener_mesas_cuentas':
        $mesas = $c->obtenerMesas();

        if (count($mesas) > 0) {
            $res['mesas'] = $mesas;
            $res['msg'] = 'Se obtubieron las mesas con sus cuentas';
            $res['error'] = false;

        } else {
            $res['msg'] = 'No hay mesas';
            $res['error'] = false;
        }
        break;

    case 'obtener_cuentas':
        $cuentas = $c->obtenerCuentas($_POST['mesa_id']);

        if (count($cuentas) > 0) {
            $res['cuentas'] = $cuentas;
            $res['msg'] = 'Se obtuvieron las cuentas';
            $res['error'] = false;
        } else {
            $res['msg'] = 'No hay cuentas de esta mesa';
            $res['error'] = true;
        }
        break;

    default:
        $res['msg'] = 'No existe esa peticion';
        $res['error'] = true;
        break;
}