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
        $sql = "INSERT INTO detalle_ventas(cliente_detalle_id, producto_detalle_id) values('$this->cliente_detalle_id', '$this->producto_detalle_id')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from detalle_ventas where cli_situacion = 1 ";

        if ($this->cliente_detalle_id != '') {
            $sql .= " and cliente_detalle_id like '%$this->cliente_detalle_id%' ";
        }

        if ($this->producto_detalle_id != '') {
            $sql .= " and producto_detalle_id like '%$this->producto_detalle_id%' ";
        }

        if ($this->detalle_venta_id != null) {
            $sql .= " and detalle_venta_id = $this->detalle_venta_id ";
        }

        $resultado = self::servir($sql);
        return $resultado;
        
    }

    public function modificar()
    {
    $sql = "UPDATE detalle_ventas SET cliente_detalle_id = '$this->cliente_detalle_id', producto_detalle_id = '$this->producto_detalle_id' where detalle_venta_id = '$this->detalle_venta_id'";

    $resultado = self::ejecutar($sql);
    return $resultado;
    }

    public function eliminar()
    {
         $sql = "UPDATE detalle_ventas SET cli_situacion = 0 where detalle_venta_id = $this->detalle_venta_id";

         $resultado = self::ejecutar($sql);
         return $resultado;
     }

     public function Seleccionardetalle_venta(){
        $sql = "SELECT * FROM detalle_ventas where cli_situacion = 1";
        $resultado = self::servir($sql);
        return $resultado;


    }
}
