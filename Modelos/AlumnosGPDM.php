<?php


require_once "conexionBD.php";

class AlumnosGPDM extends conexionBD{

 static public function CrearAlumnosGPDM($tablaBD, $datosc){

            $pdo= conexionBD::cBD()->prepare("INSERT INTO $tablaBD(sucursal, folio, fechacontrato, nombre, fechaintro, horasautorizadas,
            plan, curso, nuevoplazo, cartas, fechavencimiento, observaciones, libro, fechanacimiento, direccion, correo, avance, vendedora, foto,
            telefono, telefonocasa) Values(:sucursal, :folio, :fechacontrato, 
            :nombre, :fechaintro, :horasautorizadas, :plan, :curso, :nuevoplazo, 
            :cartas, :fechavencimiento, :observaciones, :libro, :fechanacimiento,          
            :direccion, :correo, :avance, :vendedora, :foto, 
            :telefono, :telefonocasa)");




             $pdo-> bindParam(":sucursal", $datosc["sucursal"],PDO::PARAM_STR);
             $pdo-> bindParam(":folio", $datosc["folio"],PDO::PARAM_STR);
             $pdo-> bindParam(":fechacontrato", $datosc["fechacontrato"], PDO::PARAM_STR);
             $pdo-> bindParam(":nombre", $datosc["nombre"],PDO::PARAM_STR);
             $pdo-> bindParam(":fechaintro", $datosc["fechaintro"],PDO::PARAM_STR);
             $pdo-> bindParam(":horasautorizadas", $datosc["horasautorizadas"],PDO::PARAM_STR);
             $pdo-> bindParam(":plan", $datosc["plan"],PDO::PARAM_STR);
             $pdo-> bindParam(":curso", $datosc["curso"],PDO::PARAM_STR);
             $pdo-> bindParam(":nuevoplazo", $datosc["nuevoplazo"],PDO::PARAM_STR);
             $pdo-> bindParam(":cartas", $datosc["cartas"],PDO::PARAM_STR);
             $pdo-> bindParam(":fechavencimiento", $datosc["fechavencimiento"],PDO::PARAM_STR);
             $pdo-> bindParam(":observaciones", $datosc["observaciones"],PDO::PARAM_STR);
             $pdo-> bindParam(":libro", $datosc["libro"],PDO::PARAM_STR);
             $pdo-> bindParam(":fechanacimiento", $datosc["fechanacimiento"],PDO::PARAM_STR);
             $pdo-> bindParam(":direccion", $datosc["direccion"],PDO::PARAM_STR);
             $pdo-> bindParam(":correo", $datosc["correo"],PDO::PARAM_STR);
             $pdo-> bindParam(":avance", $datosc["avance"],PDO::PARAM_STR);
             $pdo-> bindParam(":vendedora", $datosc["vendedora"],PDO::PARAM_STR);
             $pdo-> bindParam(":foto", $datosc["foto"],PDO::PARAM_STR);              
             $pdo-> bindParam(":telefono", $datosc["telefono"],PDO::PARAM_STR);
             $pdo-> bindParam(":telefonocasa", $datosc["telefonocasa"],PDO::PARAM_STR);

            if($pdo->execute()){
                return "ok";
            }else{
                return "error";
            }
             $pdo->close();
             $pdo = null;
        }



        //Ver alumno

        static public function VerAlumnoGPDM($tablaBD, $columna, $valor){
            if($columna != null){
                $pdo = conexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna");


                $pdo -> bindParam(":".$columna, $valor, PDO::PARAM_STR);

                $pdo->execute();

                return $pdo -> fetchALL();
            }else{ $pdo = conexionBD::cBD()->prepare("SELECT * FROM $tablaBD");

                $pdo->execute();

                return $pdo -> fetchALL();

            }

            $pdo -> close();
            $pdo = null;
        }

        //Editar alumno

        static public function AGPDM($tablaBD, $columna, $valor){
            if($columna != null){
                $pdo = conexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna");


                $pdo -> bindParam(":".$columna, $valor, PDO::PARAM_STR);

                $pdo->execute();

                return $pdo -> fetch();
            }

            $pdo -> close();
            $pdo = null;
        }

//actualizar alumnosGPD
      static public function  ActualizarAlumnosGPDM($tablaBD, $datosc){

        $pdo = conexionBD::cBD()->prepare("UPDATE $tablaBD SET sucursal = :sucursal, folio = :folio, fechacontrato :fechacontrato,  nombre :nombre, fechaintro :fechaintro, horasautorizadas :horasautorizadas, plan :plan, curso :curso, nuevoplazo :nuevoplazo, cartas :cartas,
        fechavencimiento :fechavencimiento, observaciones :observaciones, libro :libro, 
        fechanacimiento :fechanacimiento, direccion :direccion, correo :correo, 
        avance :avance, vendedora :vendedora, foto :foto, telefono :telefono, telefonocasa :telefonocasa WHERE id = :id");

        

         $pdo -> bindParam(":sucursal", $datosc["sucursal"], PDO::PARAM_STR);
         $pdo -> bindParam(":folio", $datosc["folio"], PDO::PARAM_STR);
         $pdo -> bindParam(":fechacontrato", $datosc["fechacontrato"], PDO::PARAM_STR);
         $pdo -> bindParam(":nombre", $datosc["nombre"], PDO::PARAM_STR);
         $pdo -> bindParam(":fechaintro", $datosc["fechaintro"], PDO::PARAM_STR);
         $pdo -> bindParam(":horasautorizadas", $datosc["horasautorizadas"], PDO::PARAM_STR);
         $pdo -> bindParam(":plan", $datosc["plan"], PDO::PARAM_STR);
         $pdo -> bindParam(":curso", $datosc["curso"], PDO::PARAM_STR);
         $pdo -> bindParam(":nuevoplazo", $datosc["nuevoplazo"], PDO::PARAM_STR);
         $pdo -> bindParam(":cartas", $datosc["cartas"], PDO::PARAM_STR);
         $pdo -> bindParam(":fechavencimiento", $datosc["fechavencimiento"], PDO::PARAM_STR);
         $pdo -> bindParam(":observaciones", $datosc["observaciones"], PDO::PARAM_STR);         
         $pdo -> bindParam(":libro", $datosc["libro"], PDO::PARAM_STR);
         $pdo -> bindParam(":fechanacimiento", $datosc["fechanacimiento"], PDO::PARAM_STR);
         $pdo -> bindParam(":direccion", $datosc["direccion"], PDO::PARAM_STR);
         $pdo -> bindParam(":correo", $datosc["correo"], PDO::PARAM_STR);
         $pdo -> bindParam(":avance", $datosc["avance"], PDO::PARAM_STR);
         $pdo -> bindParam(":foto", $datosc["foto"], PDO::PARAM_STR);
         $pdo -> bindParam(":telefono", $datosc["telefono"], PDO::PARAM_STR);
         $pdo -> bindParam(":telefonocasa", $datosc["telefonocasa"], PDO::PARAM_STR);

         if($pdo->execute()){
            return "ok";
        }else{
            return "error";
        }
         $pdo->close();
         $pdo = null;
        

      }

      // ELiminar alumno

      static public function BorrarAlumnoGPDM($tablaBD, $id){

        $pdo = conexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

        $pdo -> bindParam(":id", $id, pdo::PARAM_INT);

        if($pdo->execute()){
            return "ok";
        }else{
            return "error";
        }
         $pdo->close();
         $pdo = null;


      }

      

}