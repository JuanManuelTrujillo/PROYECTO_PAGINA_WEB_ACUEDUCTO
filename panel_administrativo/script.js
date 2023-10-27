function mostrarContenidoAdicional() {
    var contenidoAdicional = document.getElementById("contenidoAdicional");
    var botonLeerMas = document.getElementById("leerMas");

    if (contenidoAdicional.style.display === "none") {
        contenidoAdicional.style.display = "block";
        botonLeerMas.innerText = "Leer menos";
    } else {
        contenidoAdicional.style.display = "none";
        botonLeerMas.innerText = "Leer más";
    }
}
