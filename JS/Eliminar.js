src = "JS/Consultar.js"

function Control_Error(Resultado) {
    var Resultado2 = parseInt(Resultado);
    switch (Resultado2) {
        case 1451:
            alert("La tabla esta siendo usada por otra");
            break;
        case "\n1451":
            alert("La tabla esta siendo usada por otra");
            break;
    }
}
//Eliminar Evento
function Eliminar_Evento(IdBorro) {
    var obcion = 'Eliminar_Eventos';
    var pName = document.getElementById("IdC" + IdBorro).innerHTML;
    var Funciones = 'obcion=' + obcion + '&IdEliminar=' + pName;
    $.ajax({
        type: "POST",
        url: "./PHP/Eliminar.php",
        data: Funciones,
        success: function(r) {
            if (r == 1) {
                alert("Borrado con exito");
            } else {
                Control_Error(r);
                alert(r + "Fallo el server");

            }

        }
    });
    return false;

}
//Eliminar Cliente
function Eliminar_Cliente(IdBorro) {
    var obcion = 'Eliminar_Cliente';
    var pName = document.getElementById("IdC" + IdBorro).innerHTML;
    var Funciones = 'obcion=' + obcion + '&IdEliminar=' + pName;
    $.ajax({
        type: "POST",
        url: "./PHP/Eliminar.php",
        data: Funciones,
        success: function(r) {
            if (r == 1) {
                alert("Borrado con exito");
            } else {
                Control_Error(r);
                alert(r + "Fallo el server");
            }
        }
    });
    return false;
}
//Eliminar Empleado
function Eliminar_Empleado(IdBorro) {
    var obcion = 'Eliminar_Empleado';
    var pName = document.getElementById("IdC" + IdBorro).innerHTML;
    var Funciones = 'obcion=' + obcion + '&IdEliminar=' + pName;
    $.ajax({
        type: "POST",
        url: "./PHP/Eliminar.php",
        data: Funciones,
        success: function(r) {
            if (r == 1) {
                alert("Borrado con exito");
            } else {
                Control_Error(r);
                alert(r + "Fallo el server");
            }
        }
    });
    return false;
}