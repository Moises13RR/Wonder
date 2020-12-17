//Insertar Evento
$(document).ready(function() {
    $('#btn_guardar_evento').click(function() {
        if (Correo()) {
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
        }
        return false;
    });
});
//Insertar Cliente
$(document).ready(function() {
    $('#btn_guardar_cliente').click(function() {
        var obcion = 'Agregar_Cliente';
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
//Insertar Empleados
$(document).ready(function() {
    $('#btn_guardar_Empleados').click(function() {
        var obcion = 'Agregar_Empleados';
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
//Insertar Paquetes
$(document).ready(function() {
    $('#btn_guardar_paquete').click(function() {
        var obcion = 'Agregar_Paquetes';
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
//Insertar Paquetes pago
$(document).ready(function() {
    $('#btn_guardar_pago').click(function() {
        var obcion = 'Agregar_Pago';
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