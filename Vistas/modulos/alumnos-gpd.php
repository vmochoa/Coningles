<?php

if($_SESSION["rol"] != "agpd"){

	echo '<script>

	window.location = "inicio";
	</script>';

	return;

}


?>
<div class="content-wrapper">
	<section class="content-header">		
		<h1>Historial Alumnos</h1>
     </section>
	<section class="content DT" style="overflow-x: auto;">
    	<div class="box">
         	<div class="box-header">				
	             <h1 class="">Buscar Por Nombre del Alumno</h1>
			</div>
			   
<table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm DT" cellspacing="0" width="100%">
                            <thead>						
                                <tr>							
                                    <th>N°</th>
                                    <th>Sucursal</th>
                                    <th>Folio</th>
                                    <th>Fecha Contrato</th>
                                    <th>Nombre</th>
                                    <th>Fecha de Into</th>
                                    <th>Hora Autorizada</th>
                                    <th>Plan</th>
                                    <th>Curso</th>
                                    <th>Nuevo Plan</th>
                                    <th>Cartas</th>
                                    <th>Fecha Vencimiento</th>
                                    <th>Observaciones</th>
                                    <th>Libro</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Dirección</th>
                                    <th>Correo</th>
                                    <th>Avance</th>
                                    <th>Vendedora</th>
                                    <th>Foto</th>
                                    <th>Celular</th>
                                    <th>Teléfono Casa</th>
                                    <th>Editar/Borrar</th>
                                   
                                </tr>	
                              
                            </thead>

                            <tbody>                          
					     	</div>

                            <?php
                            $columna = null;
                            $valor = null;

                            $resultado = AlumnosGPDC::VerAlumnoGPDC($columna, $valor);

                            foreach ($resultado as $key => $value){

                            
                                echo '<tr>
                                    <td>'.($key+1).'</td>
                                    <td>'.$value["sucursal"].'</td>
                                    <td>'.$value["folio"].'</td>
                                    <td>'.$value["fechacontrato"].'</td>
                                    <td>'.$value["nombre"].'</td>
                                    <td>'.$value["fechaintro"].'</td>
                                    <td>'.$value["horasautorizadas"].'</td>
                                    <td>'.$value["plan"].'</td>
                                    <td>'.$value["curso"].'</td>
                                    <td>'.$value["nuevoplazo"].'</td>
                                    <td>'.$value["cartas"].'</td>
                                    <td>'.$value["fechavencimiento"].'</td>
                                    <td>'.$value["observaciones"].'</td>
                                    <td>'.$value["libro"].'</td>
                                    <td>'.$value["horasautorizadas"].'</td>
                                    <td>'.$value["direccion"].'</td>
                                    <td>'.$value["correo"].'</td>
                                    <td>'.$value["avance"].'</td>
                                    <td>'.$value["vendedora"].'</td>';
                                  if($value["foto"] == ""){
                                    echo '<td><img src="Vistas/img/defecto.png" width="40px"></td>';
                                     }else{
                                      echo '<td><img src="'.$value["foto"].'" width="40px"></td>';
                                        };           
                                    
                                    echo '<td>'.$value["telefono"].'</td>
                                    <td>'.$value["telefonocasa"].'</td>

                                    <td>

                                    <div class="btn-group">
	<button class="btn btn-success EditarAlumno" Aid="'.$value["id"].'" data-toggle="modal" data-target="#EditarAlumno"><i class="fa fa-pencil"></i>Editar</button>
    <button class="btn btn-danger EliminarAlumno" Aid="'.$value["id"].'" imgA="'.$value["foto"].'"><i class="fa fa-times"></i> Borrar</button>
                                    </td>                              
                                </tr>';
                                   
                            };
                            ?>
                            
                        </table>
 	
                    </div>


                    <div class="modal fade" rol="dialog" id="EditarAlumno">
                     
                      <div class="modal-dialog">

                       <div class="modal-content">

                         <form method="post" role="form">

                           <div class="modal-body"> 

                              <div class="box-body">
                              
                              <div class="form-group col-md-4">
							
							<h2>Sucursal:</h2>

							<input type="text" class="form-control input-lg" id="sucursalE" name="sucursalE" required>
                            <input type="hidden" id="Aid" name="Aid">

						</div>

						<div class="form-group col-md-4">
							
					<h2>Folio:</h2>

					<input type="text" class="form-control input-lg" id="folioE" name="folioE" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Fecha Contrato:</h2>

							<input type="text" class="form-control input-lg" id="fechacontratoE" name="fechacontrato" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Nombre:</h2>

							<input type="text" class="form-control input-lg" id="nombreE" name="nombreE" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Fecha de Intro:</h2>

							<input type="text" class="form-control input-lg" id="fechaintroE" name="fechaintroE" required>

						</div>
                        <div class="form-group col-md-4">
							
							<h2>Horas Autorizadas:</h2>

							<input type="text" class="form-control input-lg" id="horasautorizadasE" name="horasautorizadasE" required>

					    </div>

						<div class="form-group col-md-4">
							
							<h2>Plan:</h2>

							<input type="text" class="form-control input-lg" id="planE" name="planE" required>

						</div>
                        <div class="form-group col-md-4">
							
							<h2>Curso:</h2>

							<input type="text" class="form-control input-lg" id="cursoE" name="cursoE" required>

							

						</div>

						<div class="form-group col-md-4">
							
							<h2>Nuevo Plazo:</h2>

							<input type="text" class="form-control input-lg" id="nuevoplazoE" name="nuevoplazoE" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Cartas:</h2>

							<input type="text" class="form-control input-lg" id="cartasE" name="cartasE" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Fecha de Vencimiento:</h2>

							<input type="text" class="form-control input-lg" id="fechavencimientoE"  name="fechavencimientoE" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Observaciones:</h2>

							<input type="text" class="form-control input-lg" id="observacionesE" name="observacionesE" required>

						</div>
                        <div class="form-group col-md-4">
							
							<h2>Libro:</h2>

							<input type="text" class="form-control input-lg" id="libroE" name="libroE" required>

					

						</div>

						<div class="form-group col-md-4">
							
							<h2>Fecha de Nacimiento:</h2>

							<input type="text" class="form-control input-lg" id="fechanacimientoE" name="fechanacimientoE" required>

						</div>
                        <div class="form-group col-md-4">
							
							<h2>Dirección:</h2>

							<input type="text" class="form-control input-lg" id="direccionE" name="direccionE" required>


						</div>

						<div class="form-group col-md-4">
							
							<h2>Correo:</h2>

							<input type="text" class="form-control input-lg" id="correoE" name="correoE" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Avance:</h2>

							<input type="text" class="form-control input-lg" id="avanceE" name="avanceE" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Vendedora:</h2>

							<input type="text" class="form-control input-lg" id="vendedoraE" name="vendedoraE" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Foto:</h2>

							<input type="text" class="form-control input-lg" id="fotoE" name="fotoE" required>

						</div>
                      

						<div class="form-group col-md-4">
							
							<h2>Celular:</h2>

							<input type="text" class="form-control input-lg" id="telefonoE" name="telefonoE" required>

						</div>
                        <div class="form-group col-md-4">
							
							<h2>Teléfono de casa:</h2>

							<input type="text" class="form-control input-lg" id="telefonocasaE" name="telefonocasaE" required>

						</div>
						<div class="modal-footer">
					
					  <button type="submit" class="btn btn-success">Guardar Cambios</button>

					 <button type="button" class="btn btn-danger">Cancelar</button>

				</div>

                <?php
                    $actualizar = new AlumnosGPDC();
                    $actualizar -> ActualizarAlumnosGPDC();

                ?>

				</form>
			 </div>

			</div>

			</div>
  
            </section>
        </div>

<?php


$borrarA = new AlumnosGPDC();
$borrarA -> BorrarAlumnoGPDC();
    



