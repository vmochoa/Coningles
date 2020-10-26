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

var rowtableNote;
//boton editar
$(document).on("click",".EditarAlumno",function(){
    rowtableNote=$(this).closest("tr");
    id=parseInt(rowtableNote.find('td:eq(0)').text());
    sucursal=rowtableNote.find('td:eq(1)').text();
    folio=rowtableNote.find('td:eq(2)').text();
    fechacontrato=rowtableNote.find('td:eq(3)').text();
    nombre=rowtableNote.find('td:eq(4)').text();
    fechaintro=rowtableNote.find('td:eq(5)').text();
    horasautorizadas=rowtableNote.find('td:eq(6)').text();
    plan=rowtableNote.find('td:eq(7)').text();
    curso=rowtableNote.find('td:eq(8)').text();
    nuevoplazo=rowtableNote.find('td:eq(9)').text();
    cartas=rowtableNote.find('td:eq(10)').text();
    fechavencimiento=rowtableNote.find('td:eq(11)').text();
    observaciones=rowtableNote.find('td:eq(12)').text();
    libro=rowtableNote.find('td:eq(13)').text();
    fechanacimiento=rowtableNote.find('td:eq(14)').text();
    direccion=rowtableNote.find('td:eq(15)').text();
    correo=rowtableNote.find('td:eq(16)').text();
    avance=rowtableNote.find('td:eq(17)').text();
    vendedora=rowtableNote.find('td:eq(18)').text();
    foto=rowtableNote.find('td:eq(19)').text();
    telefono=rowtableNote.find('td:eq(20)').text();
    telefonocasa=rowtableNote.find('td:eq(21)').text();
    $("#sucursalE").val(sucursal);
    $("#folioE").val(folio);
    $("#fechacontratoE").val(fechacontrato);
    $("#nombreE").val(nombre);
    $("#fechaintroE").val(fechaintro);
    $("#horasautorizadasE").val(horasautorizadas);
    $("#planE").val(plan);
    $("#cursoE").val(curso);
    $("#nuevoplazoE").val(nuevoplazo);
    $("#cartasE").val(cartas);
    $("#fechavencimientoE").val(fechavencimiento);
    $("#observacionesE").val(observaciones);
    $("#libroE").val(libro);
    $("#fechanacimientoE").val(fechanacimiento);
    $("#direccionE").val(direccion);
    $("#correoE").val(correo);
    $("#avanceE").val(avance);
    $("#vendedoraE").val(vendedora);
    $("#fotoE").val(foto);
    $("#telefonoE").val(telefono);
    $("#telefonocasaE").val(telefonocasa);
    option=2;
});


 //manda la informacion en json hacia crud.php
 $("#formNotes").submit(function(e){
    e.preventDefault();
    sucursal=$.trim($("#sucursalE").val());
    folio=$.trim($("#folioE").val());
    fechacontrato=$.trim($("#fechacontratoE").val());
    nombre=$.trim($("#nombreE").val());
    fechaintro=$.trim($("#fechaintroE").val());
    horasautorizadas=$.trim($("#horasautorizadasE").val());
    plan=$.trim($("#planE").val());
    curso=$.trim($("#cursoE").val());
    nuevoplazo=$.trim($("#nuevoplazoE").val());
    cartas=$.trim($("#cartasE").val());
    fechavencimiento=$.trim($("#fechavencimientoE").val());
    observaciones=$.trim($("#observacionesE").val());
    libro=$.trim($("#libroE").val());
    fechanacimiento=$.trim($("#fechanacimientoE").val());
    direccion=$.trim($("#direccionE").val());
    correo=$.trim($("#correoE").val());
    avance=$.trim($("#avanceE").val());
    vendedora=$.trim($("#vendedoraE").val());
    foto=$.trim($("#fotoE").val());
    telefono=$.trim($("#telefonoE").val());
    telefonocasa=$.trim($("#telefonocasaE").val());

    $.ajax({
         type: "POST",
         url: "crud.php",
         data: {sucursal:sucursal,folio:folio,fechacontrato:fechacontrato,nombre:nombre,fechaintro:fechaintro,horasautorizadas:horasautorizadas,plan:plan,curso:curso,nuevoplazo:nuevoplazo,cartas:cartas,fechavencimiento:fechavencimiento,observaciones:observaciones,libro:libro,fechanacimiento:fechanacimiento,direccion:direccion,correo:correo,avance:avance,vendedora:vendedora,foto:foto,telefono:telefono,telefonocasa:telefonocasa,id:id,option:option},
         dataType: "json",
         success: function (data) {
              console.log('SUCCESS');
              console.log(data);
              id=data[0].id;
              if (option==1) {
                   TablaArticulos.row.add([id,sucursal,folio,fechacontrato,nombre,fechaintro,horasautorizadas,plan,curso,nuevoplazo,cartas,fechavencimiento,observaciones,libro,folio,fechanacimiento,direccion,correo,avance,vendedora,foto,telefono,telefonocasa]).draw();
              } else {
                   TablaArticulos.row(rowtableNote).data([id,sucursal,folio,fechacontrato,nombre,fechaintro,horasautorizadas,plan,curso,nuevoplazo,cartas,fechavencimiento,observaciones,libro,folio,fechanacimiento,direccion,correo,avance,vendedora,foto,telefono,telefonocasa]).draw();
              }
              $('#EditarAlumno').modal('hide');

         },error(x,y,z){
              console.log(x);
              console.log(y);
              console.log(z);
         }
    });
});



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