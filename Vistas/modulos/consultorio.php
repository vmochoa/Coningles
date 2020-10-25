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
		
		<div class="box">
			
			<div class="box-header">
				
				<form method="post">
					
					<div class="col-md-6 col-xs-12">
						<input type="text" class="form-control" name="consultorioN" placeholder="Ingrese Nuevo Consultorio" required>
					</div>

					<button type="submit" class="btn btn-primary">Crear Consultorio</button>

				</form>
             </div>


                            <div class="box-body">
                                
                                <table class="table table-bordered table-hover table-striped">
                                    
                                    <thead>
                                        
                                        <tr>
                                            
                                            <th>N°</th>
                                            <th>Nombre</th>
                                            <th>Editar / Borrar</th>

                                        </tr>

                                    </thead>

                                    <tbody>
                                        <tbody>
                                        <tr>
                                        <td>1</td>
                                        <td>Cardiologia</td>
                                        <td>
                                        <div class="btn-group">
                                        <a href=""> <button class="btn btn-succes">editar</button>


                                        </a>
                                        <a href=""> <button class="btn btn-succes">borrar</button>


                                </a>
                                        
                                        
                                        </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        
                                        </tr>
                                        

                                        
					</tbody>

</table>

</div>

</div>

</section>

</div>
