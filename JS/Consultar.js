//Consultar Evento
$(document).ready(function() {
    $("#btn_Evento_Consultar").click(function() {
        $("#Modificador").html();
        var obcion = "Consulta_Eventos";
        var dataString = 'obcion=' + obcion;
        $.ajax({ //create an ajax request to display.php 
            data: dataString,
            type: "POST",
            url: "./PHP/Consultar.php",
            dataType: "html", //expect html to be returned     
            success: function(response) {
                $("#responsecontainer").html(response);
                //alert(response); 
            }

        });
    });
});
//Consultar Cliente
$(document).ready(function() {
    $("#btn_Cliente_Consultar").click(function() {
        $("#Modificador").html();
        var obcion = "Consulta_Cliente";
        var dataString = 'obcion=' + obcion;
        $.ajax({ //create an ajax request to display.php 
            data: dataString,
            type: "POST",
            url: "./PHP/Consultar.php",
            dataType: "html", //expect html to be returned     
            success: function(response) {
                $("#responsecontainer").html(response);
                //alert(response); 
            }

        });
    });
});
//Consultar Empleado
$(document).ready(function() {
    $("#btn_Empleado_Consultar").click(function() {
        $("#Modificador").html();
        var obcion = "Consulta_Empleado";
        var dataString = 'obcion=' + obcion;
        $.ajax({ //create an ajax request to display.php 
            data: dataString,
            type: "POST",
            url: "./PHP/Consultar.php",
            dataType: "html", //expect html to be returned     
            success: function(response) {
                $("#responsecontainer").html(response);
                //alert(response); 
            }

        });
    });
});
//Consultar Pago
$(document).ready(function() {
    $("#btn_Pago_Consultar").click(function() {
        $("#Modificador").html();
        var obcion = "Consulta_Pago";
        var dataString = 'obcion=' + obcion;
        $.ajax({ //create an ajax request to display.php 
            data: dataString,
            type: "POST",
            url: "./PHP/Consultar.php",
            dataType: "html", //expect html to be returned     
            success: function(response) {
                $("#responsecontainer").html(response);
                //alert(response); 
            }

        });
    });
});
//Consultar Paquete
$(document).ready(function() {
    $("#btn_Paquete_Consultar").click(function() {
        $("#Modificador").html();
        var obcion = "Consulta_Paquete";
        var dataString = 'obcion=' + obcion;
        $.ajax({ //create an ajax request to display.php 
            data: dataString,
            type: "POST",
            url: "./PHP/Consultar.php",
            dataType: "html", //expect html to be returned     
            success: function(response) {
                $("#responsecontainer").html(response);
                //alert(response); 
            }

        });
    });
});