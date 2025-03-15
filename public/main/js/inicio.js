    document.addEventListener('DOMContentLoaded', function() {
    // Seleccionamos todos los círculos de color
    const colorCircles = document.querySelectorAll('.color-circle');

    // A cada círculo le asignamos un eventListener que, al hacer clic, cambie la imagen
    colorCircles.forEach(circle => {
    circle.addEventListener('click', () => {
    // Tomamos la ruta de la imagen guardada en data-img
    const newImgSrc = circle.getAttribute('data-img');

    // Subimos al contenedor padre (.color-switcher) para buscar la imagen principal dentro
    const parentSwitcher = circle.closest('.color-switcher');
    const mainImage = parentSwitcher.querySelector('img');

    // Cambiamos el src de la imagen principal
    mainImage.src = newImgSrc;
});
});
});
