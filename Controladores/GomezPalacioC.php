<?php

    class GomezPalacioC{

        public function IngresarGomezPalacioC(){

            if(isset($_POST["Usuario-Ing"])){

                if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["Usuario-Ing"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["Clave-Ing"])){

                    $tablaBD = "gomezpalacio";

                    $datosC = array("usuario"=>$_POST["Usuario-Ing"], "clave"=>$_POST["Clave-Ing"]);

                    $resultado = GomezM::IngresarGomezM($tablaBD, $datosC);

                    if ($resultado["usuario"] == $_POST["Usuario-Ing"] && $resultado["clave"] == $_POST["Clave-Ing"]){
                        $_SESSION["Ingresar"] = true;

                        $_SESSION["id"] = $resultado["id"];
                        $_SESSION["usuario"] = $resultado["usuario"];
                        $_SESSION["clave"] = $resultado["clave"];
                        $_SESSION["nombre"] = $resultado["nombre"];
                        $_SESSION["apellido"] = $resultado["apellido"];
                        $_SESSION["foto"] = $resultado["foto"];
                        $_SESSION["rol"] = $resultado["rol"];

                        echo '<script>
                         window.location = "inicio";                    
                        </script>';

                    }else{
                        echo 'Error al Ingresar';
                    }

                }
        
            }
        
        }

        public function VerPerfilGomezPalacioC(){
            $tablaBD = "gomezpalacio";

            $id = $_SESSION["id"];

            $resultado = GomezM::VerPerfilgomezM($tablaBD, $id);

            echo '<tr>
            <td>'.$resultado["usuario"].'</td>

            <td>'.$resultado["clave"].'</td>

            <td>'.$resultado["nombre"].'</td>

            <td>'.$resultado["apellido"].'</td>';

            if($resultado["foto"] != ""){
                echo '<td><img src="http://localhost/ConInglesAlumnos/'.$resultado["foto"].'"class="img-responsive" width="40px"></td>';
            }else{
                echo '<td><img src="http://localhost/ConInglesAlumnos/vistas/img/defecto.png'.$resultado["foto"].'"class="img-responsive" width="40px"></td>';
            } 
            

           echo '<td>

              <a href="http://localhost/ConInglesAlumnos/perfil-gpd/'.$resultado["id"].'"><button class="btn btn-success"><i class="fa fa-pencil"></i></button>
            </a>

            </td>

           </tr>';
      }

       //editar perfil

       public function EditarPerfilGomezPalacioC(){
        $tablaBD = "gomezpalacio";

        $id = $_SESSION["id"];

        $resultado = GomezM::VerPerfilgomezM($tablaBD, $id);

        echo '<form method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-md-6 col-xs-12">
                        
            <h2>Nombre:</h2>
            <input type="text" class="input-lg" name="nombreP" value="'.$resultado["nombre"].'">
            <input type="hidden" class="input-lg" name="idP" value="'.$resultado["id"].'">
            <h2>Apellido:</h2>
            <input type="text" class="input-lg" name="apellidoP" value="'.$resultado["apellido"].'"> 
            <h2>Usuario:</h2>
            <input type="text" class="input-lg" name="usuarioP" value="'.$resultado["usuario"].'">  
            <h2>Contraseña:</h2>
      <input type="text" class="input-lg" name="claveP" value="'.$resultado["clave"].'">              
                    </div>
                    <div class="col-md-6 col-xs-12"><br><br>
                    <input type="file" class="" name="imgP" value="">  <br>';
                    
                if($resultado["foto"] == ""){
                echo '<img src="http://localhost/ConInglesAlumnos/vistas/img/defecto.png" width="200px;">';
                }else{
                echo '<img src="http://localhost/ConInglesAlumnos/'.$resultado["foto"].'" width="200px;">';
                }                   
                echo'<input type="hidden" class="" name="imgActual" value="'.$resultado["foto"].'">;
                <br><br>
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                         </div>
                     </div>
                </form>';

      }
    

      //Actualizar perfil 

      public function ActualizarPerfilGomezPalacioC(){
          if(isset($_POST["idP"])){
              $rutaImg = $_POST["imgActual"];

              if(isset($_FILES["imgP"]["tmp_name"]) && !empty($_FILES["imgP"]["tmp_name"])){

                if(!empty ($_POST["imgActual"])){
                    unlink($_POST["imgActual"]);
                }

                if($_FILES["imgP"]["type"] == "image/jpeg"){
                    $nombre = mt_rand(10,99);

                    $rutaImg = "Vistas/img/gomez/G-".$nombre.".jpg";

                    $foto = imagecreatefromjpeg($_FILES["imgP"]["tmp_name"]);
                        
                    imagejpeg($foto, $rutaImg);

                }
                if($_FILES["imgP"]["type"] == "image/png"){
                    $nombre = mt_rand(10,99);

                    $rutaImg = "Vistas/img/gomez/G-".$nombre.".png";

                    $foto = imagecreatefrompng($_FILES["imgP"]["tmp_name"]);
                        
                    imagepng($foto, $rutaImg);

                }



              }

              $tablaBD ="gomezpalacio";

              $datosC = array("id"=>$_POST["idP"], "usuario"=>$_POST["usuarioP"], "apellido"=>$_POST["apellidoP"],"nombre"=>$_POST["nombreP"],"clave"=>$_POST["claveP"],"foto"=>$_rutaImg);

              $resultado = GomezM::ActualizarPerfilGomezM($tablaBD, $datosC);

              if ($resultado == true){
                  echo '<script>
    window.location = "http://localhost/ConInglesAlumnos/perfil-gpd/'.$_SESSION["id"].'";  </script>';
                  
                  
              }
          }
      }


    
    }
    