<?php

require '../../models/ventas.php';
header('Content-Type: application/json; charset=UTF-8');

$metodo = $_SERVER['REQUEST_METHOD'];

try {
    switch ($metodo) {
        case 'POST':
            $tipo = $_POST['tipo'] ?? null; 
            $detalle_venta = new detalle_venta($_POST);
            
            switch ($tipo) {
                case '1':
                    $ejecucion = $detalle_venta->guardar();
                    $mensaje = "Guardado correctamente";
                    break;

                default:
                    throw new Exception('Tipo de operación no válido');
            }

            http_response_code(200);
            echo json_encode([
                "mensaje" => $mensaje,
                "codigo" => 1,
            ]);
            break;

        case 'GET':
            $cliente_detalle_id = $_GET['cliente_detalle_id'] ?? '';
            $producto_detalle_id = $_GET['producto_detalle_id'] ?? '';

            $detalle_venta = new detalle_venta([
                'cliente_detalle_id' => $cliente_detalle_id,
                'producto_detalle_id' => $producto_detalle_id
            ]);
            
            $detalle_ventas = $detalle_venta->buscar();
            http_response_code(200);
            echo json_encode($detalle_ventas);
            break;

        default:
            http_response_code(405);
            echo json_encode([
                "mensaje" => "Método no permitido",
                "codigo" => 9,
            ]);
            break;
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "detalle" => $e->getMessage(),
        "mensaje" => "Error de ejecución",
        "codigo" => 0,
    ]);
}

exit;
