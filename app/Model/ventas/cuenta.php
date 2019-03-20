<?php

class Cuenta
{
    private function getArrayData()
    {
        $folio = $this->createFolio();

        return array(
            'folio' => $folio,
            'cliente_id' => isset($_POST['cliente_id']) ? $_POST['cliente_id'] : '',
            'usuario_id' => $_SESSION['usuario']['id'],
            'mesa' => $_POST['mesa'],
            'propina' => isset($_POST['propina']) ? $_POST['propina'] : 0,
            'total' => isset($_POST['total']) ? $_POST['total'] : 0,
            'estado' => isset($_POST['estado']) ? $_POST['estado'] : 'abierta'
        );
    }

    private function createFolio()
    {   
        $nuevo_folio = null;

        $sql = "SELECT folio FROM cuentas ORDER BY folio DESC LIMIT 1";
        $folio = Conexion::query($sql, array(), true, true);

        if ($folio) {
            $nuevo_folio = $folio + 1;
        } else {
            $nuevo_folio = 1;
        }
        return $nuevo_folio;
    }
}

?>