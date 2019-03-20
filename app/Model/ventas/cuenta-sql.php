<?php

class CuentaSql extends cuenta
{
    /**----------------- OBTENER MESAS ------------*/
    public function obtenerMesas() {
        $sql = "SELECT mesa, COUNT(id) as 'cuenta' FROM cuentas GROUP BY mesa;";
        $select = Conexion::query($sql, array(), true);
        return $select;
    }

    /**----------------- OBTENER CUETAS ------------*/
    public function obtenerCuentas($mesa_id)
    {
        $sql = "SELECT cu.id, cu.folio, c.nombre as 'cliente', cu.propina, cu.estado, cu.total
        FROM cuentas cu
        INNER JOIN clientes c ON cu.cliente_id = c.id
        WHERE mesa = :mesa_id";
        $select = Conexion::query($sql, array('mesa_id' => $mesa_id), true);
        return $select;
    }

    public function obtenerPorId($id)
    {
        $sql = "SELECT * FROM cuentas WHERE id = :id";
        $select = Conexion::query($sql, array('id' => $id), true, true);
        return $select;
    }

    public function obtenerMesa($mesa)
    {
        $sql = "SELECT * FROM cuentas WHERE mesa = :mesa AND estado = :estado";
        $select = Conexion::query($sql, array('mesa' => $mesa, 'estado' => 'abieta'), true, true);
        return $select;
    }

    public function insertCuenta($arrayCuenta)
    {
        $sql = "INSERT INTO cuentas VALUES
        (null, :folio, :cliente_id, :usuario_id, :mesa, :propina, :total, :estado, NOW())";

        $insert = Conexion::query($sql, $arrayCuenta);
        return $insert;
    }

    public function updateCuenta($arrayCuenta, $id)
    {
        $arrayData = array(
            'id' => $id,
            'mesa' => $arrayCuenta['mesa'],
            'propina' => $arrayCuenta['propina'],
            'total' => $arrayCuenta['total'],
            'estado' => $arrayCuenta['estado']
        );

        $sql = "UPDATE cuentas SET
        mesa = :mesa, propina = :propina, total = :total, estado = :estado
        WHERE id = :id";

        $update = Conexion::query($sql, $arrayData);
        return $update;
    }

    public function deleteCuenta($id)
    {
        $sql = "DELETE FROM cuentas WHERE id = :id";

        $delete = Conexion::query($sql, array('id' => $id));
        return $delete;
    }
}

?>