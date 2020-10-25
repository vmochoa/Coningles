<?php
   
   class AlumnosGPDC{

public function CrearAlumnosGPDC(){


    
		if(isset($_POST["sucursal"])){

		

        $tablaBD ="gpdalumnos";

        

        $datosc = array(
                        "sucursal"=>$_POST["sucursal"],
                        "folio"=>$_POST["folio"],
                        "fechacontrato"=>$_POST["fechacontrato"],
                        "nombre"=>$_POST["nombre"],
                        "fechaintro"=>$_POST["fechaintro"],
                        "horasautorizadas"=>$_POST["horasautorizadas"],
                        "plan"=>$_POST["plan"],
                        "curso"=>$_POST["curso"],
                        "nuevoplazo"=>$_POST["nuevoplazo"],
                        "cartas"=>$_POST["cartas"],
                        "fechavencimiento"=>$_POST["fechavencimiento"],   
                        "observaciones"=>$_POST["observaciones"],
                        "libro"=>$_POST["libro"],
                        "fechanacimiento"=>$_POST["fechanacimiento"],
                        "direccion"=>$_POST["direccion"],
                        "correo"=>$_POST["correo"],
                        "avance"=>$_POST["avance"],
                        "vendedora"=>$_POST["vendedora"],
                        "foto"=>$_POST["foto"],                       
                        "telefono"=>$_POST["telefono"],
                        "telefonocasa"=>$_POST["telefonocasa"]);

                      
                    $resultado = AlumnosGPDM::CrearAlumnosGPDM($tablaBD, $datosc);

                    if($resultado == true){

                        echo '<script>
        
                        window.location = "http://localhost/ConInglesAlumnos/alumnosgpd";
                        </script>';
        
                    }

                   
        
                    }
        
                }
        
          
            


            // mostrar alumnos

            static public function VerAlumnoGPDC($columna, $valor){
            
                 $tablaBD ="gpdalumnos";

                $resultado = AlumnosGPDM::VerAlumnoGPDM($tablaBD, $columna, $valor);
                
                return $resultado;

            }

                //editar alumno GPD
            static public function AGPDC($columna, $valor){
            
                $tablaBD ="gpdalumnos";

               $resultado = AlumnosGPDM::AGPDM($tablaBD, $columna, $valor);
               
               return $resultado;

           }

           //actualizar alumnogpd

           public function ActualizarAlumnosGPDC(){

                         
                            if(isset($_POST["Aid"])){
                              
                                $tablaBD ="gdpalumnos";

                                $datosc = array("id"=>$_POST["Aid"], "sucursal"=>$_POST["sucursalE"], "folio"=>$_POST["folioE"], "fechacontrato"=>$_POST["fechacontratoE"], "nombre"=>$_POST["nombreE"], "fechaintro"=>$_POST["fechaintroE"], "horasautorizadas"=>$_POST["horasautorizadasE"], "plan"=>$_POST["planE"], "curso"=>$_POST["cursoE"], "nuevoplazo"=>$_POST["nuevoplazoE"], "cartas"=>$_POST["cartasE"], "fechavencimiento"=>$_POST["fechavencimientoE"], "observaciones"=>$_POST["observacionesE"], "libro"=>$_POST["libroE"], "fechanacimiento"=>$_POST["fechanacimientoE"], "direccion"=>$_POST["direccionE"], "correo"=>$_POST["correoE"],  "avance"=>$_POST["avanceE"], "vendedora"=>$_POST["vendedoraE"], "foto"=>$_POST["fotoE"], "telefono"=>$_POST["telefonoE"], "telefonocasa"=>$_POST["telefonocasaE"],);

                                $resultado = AlumnnosGPDM::ActualizarAlumnosGPDM($tablaBD, $datosc);

                                if($resultado == true){

                                    echo '<script>
                    
                                    window.location = "http://localhost/ConInglesAlumnos/alumnosgpd";
                                    </script>';
                    
                                }

                            }


                        }


           //borrar alumnogpdc


           //Borrar Doctor
	public function BorrarAlumnoGPDC(){

		if(isset($_GET["Aid"])){

			$tablaBD = "gpdalumnos";

			$id = $_GET["Aid"];

			if($_GET["imgA"] != ""){

				unlink($_GET["imgA"]);

			}

			$resultado = AlumnosGPDM::BorrarAlumnoGPDM($tablaBD, $id);

			if($resultado == true){

				echo '<script>

				window.location = "http://localhost/ConInglesAlumnos/alumnos-gpd";
				</script>';

			}

		}

    }
}
        

