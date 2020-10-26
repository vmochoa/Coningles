$(document).ready(function(){
     TablaArticulos =$("#tablaArticulos").DataTable({
          "columnDefs":[{
               "targets":-1,
               "data":null,
               "defaultContent":"<button type='button' class='btnEdit btn btn-success' data-toggle='modal' data-target='#exampleModal'>Modificar <i class='fas fa-pen'></i></button>       <button type='submit' class='btnDelete btn btn-danger' >Eliminar <i class='fas fa-trash-alt'></i></button>"

          }]
     })
     
     console.log("si entro al main js");
     var rowtableNote;



     //boton de nuevo articulo
     $(document).on("click","#new",function(){
          id="";
          name="";
          stock="";
          categoria="";
          proveedor="";
          $("#noteNombre").val(name);
          $("#noteStock").val(stock);
          $("#noteCategoria").val(categoria);
          $("#noteProveedor").val(proveedor);
          option=1;
     });



     //boton editar
     $(document).on("click",".btnEdit",function(){
          rowtableNote=$(this).closest("tr");
          id=parseInt(rowtableNote.find('td:eq(0)').text());
          name=rowtableNote.find('td:eq(1)').text();
          stock=rowtableNote.find('td:eq(2)').text();
          categoria=rowtableNote.find('td:eq(3)').text();
          proveedor=rowtableNote.find('td:eq(4)').text();
          $("#noteNombre").val(name);
          $("#noteStock").val(stock);
          $("#noteCategoria").val(categoria);
          $("#noteProveedor").val(proveedor);
          option=2;
     });




     //boton delete
     $(document).on("click",".btnDelete",function(){
          rowtableNote=$(this);
          id=parseInt($(this).closest('tr').find('td:eq(0)').text());
          option=3;
          $.ajax({            
               type: "POST",
               url: "crud.php",
               data: {option:option,id:id},
               dataType: "json",
               success: function (data) {
                    console.log('SUCCESS: DELETE');
                    console.log(data);
                    TablaArticulos.row(rowtableNote.parents('tr')).remove().draw();
               },error(x,y,z){
                    console.log(x);
                    console.log(y);
                    console.log(z);
               }
          })
     });



     
     //manda la informacion en json hacia crud.php
     $("#formNotes").submit(function(e){
          e.preventDefault();
          name=$.trim($("#noteNombre").val());
          stock=$.trim($("#noteStock").val());
          categoria=$.trim($("#noteCategoria").val());
          proveedor=$.trim($("#noteProveedor").val());
          $.ajax({
               type: "POST",
               url: "crud.php",
               data: {name:name,stock:stock,categoria:categoria,proveedor:proveedor,id:id,option:option},
               dataType: "json",
               success: function (data) {
                    console.log('SUCCESS');
                    console.log(data);
                    id=data[0].id;
                    if (option==1) {
                         TablaArticulos.row.add([id,name,stock,categoria,proveedor]).draw();
                    } else {
                         TablaArticulos.row(rowtableNote).data([id,name,stock,categoria,proveedor]).draw();
                    }
                    $('#exampleModal').modal('hide');

               },error(x,y,z){
                    console.log(x);
                    console.log(y);
                    console.log(z);
               }
          });
     });
});