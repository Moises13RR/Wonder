function Correo() {
    var formulario = document.forms[0];
    var bandera = true;
    for (var x = 0; x < formulario.elements.length - 1; x++) {
        formulario.elements[x].className = "cuadro";
    }
    for (var x = 0; x < formulario.elements.length - 1; x++) {
        if (formulario.elements[x].validity.typeMismatch || formulario.elements[x].value == "") {
            formulario.elements[x].className = "error";
            bandera = false;
        }
    }
    return bandera;
}