<?php

/** LIBRERIAS Y MÓDULOS GLOBALES */
require_once 'Model/Conexion.php';

$service_path = isset($_REQUEST['service']) ? 'Controller/' .  ucfirst($_REQUEST['service']) . '.php' : '';

/** RESPUESTA EN ARRAY */
$res = array(
   'msg' => '',
   'data' => '',
   'error' => false
);

/** MÓDULO SOLICITADO */
if (is_file($service_path)) {
   include_once $service_path;
} else {
   $res['error'] = true;
   $res['msg'] = 'No se encotró el módulo solicitado';
}


/** SE MUESTRA LA RESPUESTA EN FORMATO JSON */
header('Content-type: aplication/json');
echo json_encode($res);
 