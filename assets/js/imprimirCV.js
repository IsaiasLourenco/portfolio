function imprimirCV() {
    const idioma = document.querySelector('input[name="idioma"]:checked').value;
    window.location.href = `cv-${idioma}.html`;
}