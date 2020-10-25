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
	<h1>Crear Alumnos</h1>
     </section>

	 <section class="content">
    		 <form form role="form" method="post" enctype="multipart/form-data">
					
					<div class="">
						
						<div class="form-group col-md-4">
							
							<h2>Sucursal:</h2>

							<input type="text" class="form-control input-lg" name="sucursal" required>
							

						</div>

						<div class="form-group col-md-4">
							
					<h2>Folio:</h2>

					<input type="text" class="form-control input-lg" name="folio" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Fecha Contrato:</h2>

							<input type="text" class="form-control input-lg" name="fechacontrato" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Nombre:</h2>

							<input type="text" class="form-control input-lg" id="" name="nombre" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Fecha de Intro:</h2>

							<input type="text" class="form-control input-lg" name="fechaintro" required>

						</div>
                        <div class="form-group col-md-4">
							
							<h2>Horas Autorizadas:</h2>

							<input type="text" class="form-control input-lg" name="horasautorizadas" required>

					    </div>

						<div class="form-group col-md-4">
							
							<h2>Plan:</h2>

							<input type="text" class="form-control input-lg" name="plan" required>

						</div>
                        <div class="form-group col-md-4">
							
							<h2>Curso:</h2>

							<input type="text" class="form-control input-lg" name="curso" required>

							

						</div>

						<div class="form-group col-md-4">
							
							<h2>Nuevo Plazo:</h2>

							<input type="text" class="form-control input-lg" name="nuevoplazo" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Cartas:</h2>

							<input type="text" class="form-control input-lg" name="cartas" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Fecha de Vencimiento:</h2>

							<input type="text" class="form-control input-lg"  name="fechavencimiento" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Observaciones:</h2>

							<input type="text" class="form-control input-lg" name="observaciones" required>

						</div>
                        <div class="form-group col-md-4">
							
							<h2>Libro:</h2>

							<input type="text" class="form-control input-lg" name="libro" required>

					

						</div>

						<div class="form-group col-md-4">
							
							<h2>Fecha de Nacimiento:</h2>

							<input type="text" class="form-control input-lg" name="fechanacimiento" required>

						</div>
                        <div class="form-group col-md-4">
							
							<h2>Dirección:</h2>

							<input type="text" class="form-control input-lg" name="direccion" required>


						</div>

						<div class="form-group col-md-4">
							
							<h2>Correo:</h2>

							<input type="text" class="form-control input-lg" name="correo" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Avance:</h2>

							<input type="text" class="form-control input-lg" name="avance" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Vendedora:</h2>

							<input type="text" class="form-control input-lg" id="" name="vendedora" required>

						</div>

						<div class="form-group col-md-4">
							
							<h2>Foto:</h2>

							<input type="text" class="form-control input-lg" name="foto" required>

						</div>
                      

						<div class="form-group col-md-4">
							
							<h2>Celular:</h2>

							<input type="text" class="form-control input-lg" name="telefono" required>

						</div>
                        <div class="form-group col-md-4">
							
							<h2>Teléfono de casa:</h2>

							<input type="text" class="form-control input-lg" name="telefonocasa" required>

						</div>
						<div class="modal-footer">
					
					  <button type="submit" class="btn btn-primary">Crear</button>

					 <button type="button" class="btn btn-danger">Cancelar</button>

				</div>

					</div>

				</div>
				<?php
				$crearA = new AlumnosGPDC();
				$crearA -> CrearAlumnosGPDC();
				?>

					 </form>
				</section>			
			</div>
				
	