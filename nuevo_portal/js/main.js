// Animación simple al cargar las tarjetas
window.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.card').forEach(function(card, i) {
        card.style.opacity = 0;
        setTimeout(function() {
            card.style.transition = 'opacity 0.7s';
            card.style.opacity = 1;
        }, 150 * i);
    });
});

// Validación extra para el formulario de contacto
if (document.querySelector('form')) {
    document.querySelector('form').addEventListener('submit', function(e) {
        var correo = document.getElementById('correo').value;
        var nombre = document.getElementById('nombre').value;
        var asunto = document.getElementById('asunto').value;
        var comentario = document.getElementById('comentario').value;
        if (!correo || !nombre || !asunto || !comentario) {
            alert('Por favor, complete todos los campos.');
            e.preventDefault();
        }
    });
}
