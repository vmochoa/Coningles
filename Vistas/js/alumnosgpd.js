$(".DT").on("click", ".EditarAlumno", function() {

    var Aid = $(this).attr("Aid");
    var datos = new FormData();

    datos.append("Aid", Aid);

    $.ajax({

        url: "Ajax/AlumnosAGPD.php",
        method: "POST",
        data: datos,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,

        success: function(resultado) {

            $("#Aid").val(resultado["id"]);
            $("#sucursalE").val(resultado["sucursal"]);
            $("#folioE").val(resultado["folio"]);
            $("#fechacontratoE").val(resultado["fechacontrato"]);
            $("#nombreE").val(resultado["nombre"]);
            $("#fechaintroE").val(resultado["fechaintro"]);
            $("#horasautorizadasE").val(resultado["horasautorizadas"]);
            $("#planE").val(resultado["plan"]);
            $("#cursoE").val(resultado["curso"]);
            $("#nuevoplazoE").val(resultado["nuevoplazo"]);
            $("#cartasE").val(resultado["cartas"]);
            $("#fechavencimientoE").val(resultado["fechavencimiento"]);
            $("#observacionesE").val(resultado["observaciones"]);
            $("#libroE").val(resultado["libro"]);
            $("#fechanacimientoE").val(resultado["fechanacimiento"]);
            $("#direccionE").val(resultado["direccion"]);
            $("#correoE").val(resultado["correo"]);
            $("#avanceE").val(resultado["avance"]);
            $("#vendedoraE").val(resultado["vendedora"]);
            $("#fotoE").val(resultado["foto"]);
            $("#telefonoE").val(resultado["telefono"]);
            $("#telefonocasaE").val(resultado["telefonocasa"]);


        }

    })

})



$(".DT").on("click", ".EliminarAlumno", function() {

    var Aid = $(this).attr("Aid");
    var imgA = $(this).attr("imgA");

    window.location = "index.php?url=alumnos-gpd&Aid=" + Aid + "&imgA=" + imgA;

})

$(".DT").DataTable({

    "language": {

        "sSearch": "Buscar:",
        "sEmptyTable": "No hay datos en la Tabla",
        "sZeroRecords": "No se encontraron resultados",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total _TOTAL_",
        "SInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered": "(filtrando de un total de _MAX_ registros)",
        "oPaginate": {

            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"

        },

        "sLoadingRecords": "Cargando...",
        "sLengthMenu": "Mostrar _MENU_ registros"


    }

})