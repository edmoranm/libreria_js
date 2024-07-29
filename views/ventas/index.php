<?php include_once '../../includes/header.php' ?>
<?php include_once '../../models/clientes.php'  ?>
<?php include_once '../../models/productos.php'  ?>


<?php
$verproducto = new producto();
$productos = $verproducto->SeleccionarProducto();

$vercliente = new cliente();
$clientes = $vercliente->SeleccionarCliente();
?>

<div class="container">
    <h1 class="text-center">Formulario de Ventas</h1>
    <div class="row justify-content-center mb-3">
        <form class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="venta_id" id="venta_id">
            <div class="row mb-3">
                <div class="col">
                    <label for="cliente_detalle_id">Cliente</label>
                    <select id="cliente_detalle_id" name="cliente_detalle_id" class="form-control">
                    <option value="">SELECCIONE</option>
                    <?php foreach ($clientes as $cliente) : ?>
                        <option value="<?= $cliente['cliente_id'] ?>">
                            <?= $cliente['cli_nombre'] ?>
                            <?= $cliente['cli_apellido'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                </div>
            </div>
            <div class="row mb-3">
            <h2>Seleccione el Producto</h2>
            <div class="row mb-3">
                <div class="col">
                    <label for="producto_detalle_id">producto</label>
                    <select id="producto_detalle_id" name="producto_detalle_id" class="form-control">
                    <option value="">SELECCIONE</option>
                    <?php foreach ($productos as $producto) : ?>
                        <option value="<?= $producto['producto_id'] ?>">
                            <?= $producto['producto_nombre'] ?>
                            <?= $producto['producto_apellido'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                </div>
            </div>
            <div class="row mb-3">
            <div class="row justify-content-center mb-3">
                <div class="col">
                    <button type="submit" id="btnGuardar" class="btn btn-primary w-100">Guardar</button>
                </div>
                <div class="col">
                    <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
                </div>
                <div class="col">
                    <button type="button" id="btnCancelar" class="btn btn-secondary w-100">Cancelar</button>
                </div>
                <div class="col">
                    <button type="reset" id="btnLimpiar" class="btn btn-secondary w-100">Limpiar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 table-responsive">
            <h2 class="text-center">Listado de clientes</h2>
            <table class="table table-bordered table-hover" id="tablaClientes">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>nit</th>
                        <th>Producto</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">No hay clientes disponibles</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script defer src="/libreria_js/src/js/funciones.js"></script>
<script defer src="/libreria_js/src/js/ventas/index.js"></script>
<?php include_once '../../includes/footer.php' ?>