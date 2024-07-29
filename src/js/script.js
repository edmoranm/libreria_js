// js/scripts.js

document.addEventListener('DOMContentLoaded', function() {
    // Función para mostrar una alerta al hacer clic en un botón
    document.querySelectorAll('.btn-primary').forEach(button => {
        button.addEventListener('click', function() {
            Swal.fire({
                title: '¡Gracias por tu interés!',
                text: 'Pronto te mostraremos más detalles.',
                icon: 'info',
                confirmButtonText: 'Cerrar'
            });
        });
    });

    // Ejemplo de animación simple
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            card.style.transform = 'scale(1.05)';
            card.style.transition = 'transform 0.3s ease';
        });
        card.addEventListener('mouseleave', function() {
            card.style.transform = 'scale(1)';
        });
    });
});
