//---------------------------------------Agregar Eventos-------------------------------------
$(document).ready(function() {
    $('#btnguardar').click(function() {
        alert("xd0");
        var obcion = 'Agregar_Eventos';
        var datos = $('#frmajax').serialize();
        var datos3 = 'obcion=' + obcion + '&' + datos;
        $.ajax({
            type: "POST",
            url: "./PHP/Insertar.php",
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
    });
});
//---------------------------------------Consultar-------------------------------------
$(document).ready(function() {
    $("#btn_Evento_Consultar").click(function() {
        $("#Modificador").html();
        var obcion = "Consulta_Eventos";
        var dataString = 'obcion=' + obcion;
        $.ajax({ //create an ajax request to display.php 
            data: dataString,
            type: "POST",
            url: "./PHP/Insertar.php",
            dataType: "html", //expect html to be returned     
            success: function(response) {
                $("#responsecontainer").html(response);
                //alert(response); 
            }

        });
    });
});
//---------------------------------------Eliminar Evento-------------------------------------
function Eliminar(IdBorro) {
    var obcion = 'Eliminar_Eventos';
    //alert(conca);
    var pName = document.getElementById("IdT" + IdBorro).innerHTML;
    //alert(pName);
    var Funciones = 'obcion=' + obcion + '&IdEliminar=' + pName;
    $.ajax({
        type: "POST",
        url: "./PHP/Insertar.php",
        data: Funciones,
        success: function(r) {
            if (r == 1) {
                alert("Borrado con exito");
            } else {
                alert(r + "Fallo el server");
            }

        }
    });
    Tactualizar();
    return false;
    Tactualizar();
    return false;
}

function Tactualizar() {
    var obcion = "Consulta_Eventos";
    var dataString = 'obcion=' + obcion;
    $.ajax({ //create an ajax request to display.php 
        data: dataString,
        type: "POST",
        url: "./PHP/Insertar.php",
        dataType: "html", //expect html to be returned     
        success: function(response) {
            $("#responsecontainer").html(response);
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