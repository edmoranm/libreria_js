<?php
require_once 'conexion.php';

class detalle_venta extends Conexion
{
    public $detalle_venta_id;
    public $cliente_detalle_id;
    public $producto_detalle_id;

    public function __construct($args = [])
    {
        $this->detalle_venta_id = $args['detalle_venta_id'] ?? null;
        $this->cliente_detalle_id = $args['cliente_detalle_id'] ?? '';
        $this->producto_detalle_id = $args['producto_detalle_id'] ?? '';
    }

    public function guardar()
    {
        $sql = "INSERT INTO Detalle_venta (cliente_detalle_id, producto_detalle_id) values('$this->cliente_detalle_id', '$this->producto_detalle_id')";
        $resultado = $this->ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT 
            clientes.cli_nombre,
            productos.producto_nombre,
            productos.producto_precio
        FROM
            Detalle_venta
        INNER JOIN
            clientes ON Detalle_venta.cliente_detalle_id = clientes.cli_id
        INNER JOIN
            productos ON Detalle_venta.producto_detalle_id = productos.producto_id
        WHERE
            clientes.cli_situacion = 1
            AND productos.producto_situacion = 1";

        $resultado = self::servir($sql);
        return $resultado;
    }
}