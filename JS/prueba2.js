//---------------------------------------Editar_Eventos-------------------------------------
function Actualizar_Evento() {
    var obcion = 'Modificar_Evento';
    var datos = $('#frmajax').serialize();
    var datos3 = 'obcion=' + obcion + '&' + datos;
    $.ajax({
        type: "POST",
        url: "./PHP/Modificar.php",
        data: datos3,
        success: function(r) {
            if (r == 1) {
                alert("agregado con exito");
            } else {
                alert(r + "Fallo el server");
            }

        }
    });
    return false;

}

function Actualizar_Evento2() {

    return false;

}


function Quitartabla(IdEditar) {

    var pName = document.getElementById("IdT" + IdEditar).innerHTML;
    $("#responsecontainer").html("");
    var obcion = "Consulta_Evento";
    var Consulta = "select *from detalleevento where detalleevento.idEvt = " + pName;
    alert(Consulta);
    var dataString = 'obcion=' + obcion + '&Consulta=' + Consulta;
    $.ajax({ //create an ajax request to display.php 
        data: dataString,
        type: "POST",
        url: "./PHP/Modificar.php",
        dataType: "html", //expect html to be returned     
        success: function(response) {
            $("#Modificador").html(response);
            //alert(response); 
        }

    });
    return false;
}


$(document).ready(function() {
    $('#lanzar_alerta').click(function() {
        alert('hola mundo!');
    });
});