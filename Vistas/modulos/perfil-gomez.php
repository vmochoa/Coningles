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
		
		<h1>Gestor de Alumnos</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-body">
                 <table class="table table-bordered table-hover table-striped DT">					
					<thead>					
						<tr>							
							<th>N°</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Documento</th>
							<th>Foto</th>
							<th>Usuario</th>
							<th>Contraseña</th>
							<th>Editar / Borrar</th>
						</tr>
                    </thead>			
            </div>
            <tbody>
                <?php
                    $perfil = new GomezPalacioC();
                    $perfil ->  VerPerfilGomezPalacioC();
                ?>
                   

                    </tbody>


                    </div>

                    </div>

                    </section>

                    </div>