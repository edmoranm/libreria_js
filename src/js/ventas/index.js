document.addEventListener('DOMContentLoaded', (event) => {
    const btnGuardar = document.getElementById('btnGuardar');
    const btnBuscar = document.getElementById('btnBuscar');
    const btnCancelar = document.getElementById('btnCancelar');
    const tablaDetalle_venta = document.getElementById('tablaDetalle_venta');
    const formulario = document.querySelector('form');

    if (btnCancelar) {
        btnCancelar.parentElement.style.display = 'none';
    }

    const getDetalle_venta = async (alerta = 'si') => {
        const clienteid = formulario.cliente_detalle_id.value;
        const productoid = formulario.producto_detalle_id.value;
        const url = `/libreria_js/controladores/ventas/index.php?cliente_detalle_id=${clienteid}&producto_detalle_id=${productoid}`;
        const config = {
            method: 'GET'
        };

        try {
            const respuesta = await fetch(url, config);
            const data = await respuesta.json();
            console.log(data);

            tablaDetalle_venta.tBodies[0].innerHTML = '';
            const fragment = document.createDocumentFragment();
            let contador = 1;

            if (respuesta.status === 200) {
                if (alerta === 'si') {
                    Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        icon: "success",
                        title: 'Detalle_venta encontrados',
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    }).fire();
                }

                if (data.length > 0) {
                    data.forEach(Detalle_venta => {
                        const tr = document.createElement('tr');
                        const celda1 = document.createElement('td');
                        const celda2 = document.createElement('td');
                        const celda3 = document.createElement('td');
                        const celda4 = document.createElement('td');

                        celda1.innerText = contador;
                        celda2.innerText = Detalle_venta.cli_nombre || 'No disponible';
                        celda3.innerText = Detalle_venta.producto_nombre || 'No disponible';
                        celda4.innerText = Detalle_venta.producto_precio || 'No disponible';

                        tr.appendChild(celda1);
                        tr.appendChild(celda2);
                        tr.appendChild(celda3);
                        tr.appendChild(celda4);
                        fragment.appendChild(tr);

                        contador++;
                    });
                } else {
                    const tr = document.createElement('tr');
                    const td = document.createElement('td');
                    td.innerText = 'No hay ventas disponibles';
                    td.colSpan = 4;

                    tr.appendChild(td);
                    fragment.appendChild(tr);
                }
            } else {
                console.log('Error al cargar detalles de venta');
            }

            tablaDetalle_venta.tBodies[0].appendChild(fragment);
        } catch (error) {
            console.log(error);
        }
    };

    const guardarDetalle_venta = async (e) => {
        e.preventDefault();
        btnGuardar.disabled = true;

        const url = '/libreria_js/controladores/ventas/index.php';
        const formData = new FormData(formulario);
        formData.append('tipo', 1);
        formData.delete('detalle_venta_id');

        const config = {
            method: 'POST',
            body: formData
        };

        try {
            const respuesta = await fetch(url, config);
            const data = await respuesta.json();
            const { mensaje, codigo, detalle } = data;
            Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                icon: codigo === 1 ? "success" : "error",
                title: mensaje,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            }).fire();

            if (codigo === 1) {
                getDetalle_venta('no');
                formulario.reset();
            }
        } catch (error) {
            console.log('Error al guardar detalle de venta:', error);
        } finally {
            btnGuardar.disabled = false;
        }
    };

    if (btnGuardar) {
        btnGuardar.addEventListener('click', guardarDetalle_venta);
    }
    if (btnBuscar) {
        btnBuscar.addEventListener('click', getDetalle_venta);
    }
    if (btnCancelar) {
        btnCancelar.addEventListener('click', () => {
            formulario.reset();
            btnCancelar.parentElement.style.display = 'none';
            btnGuardar.disabled = false;
        });
    }

    getDetalle_venta();
});
