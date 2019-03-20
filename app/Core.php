<?php

/** LIBRERIAS Y MÓDULOS GLOBALES */
require_once 'Model/Conexion.php';

$service_path = isset($_POST['service']) ? 'Controller/' .  ucfirst($_POST['service']) . '.php' : '';

/** RESPUESTA EN ARRAY */
$res = array(
   'msg' => '',
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
echo json_encode($res);
 