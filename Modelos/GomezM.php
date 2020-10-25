<?php

require_once "ConexionBD.php";

class GomezM extends ConexionBD{

    static public function IngresarGomezM($tablaBD, $datosC){

        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, nombre, apellido, foto, rol, id FROM $tablaBD
        WHERE usuario = :usuario");

        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

        $pdo -> execute ();

        return $pdo -> fetch();

        $pdo -> close();
        $pdo = null;
    }

    //ver perfil gomez
    static public function VerPerfilGomezM($tablaBD, $id){
        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, nombre, apellido, foto, rol, id FROM $tablaBD
        WHERE id = :id");

        $pdo -> bindParam(":id", $id, PDO::PARAM_INT);

        $pdo -> execute ();

        return $pdo -> fetch();

        $pdo -> close();
        $pdo = null;

    }

        //actualizar perfil gomez
    static public function ActualizarPerfilGomezM($tablaBD, $datosC){
        $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET usuario = :usuario, clave = :clave, nombre = :nombre, apellido = :apellido, foto = :foto WHERE id = :id");

        $pdo  -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
        $pdo  -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        $pdo  -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
        $pdo  -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo  -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
        $pdo  -> bindParam(":foto", $datosC["foto"], PDO::PARAM_STR);

        if ($pdo -> execute()){
            return true;

        }else{
            return false;
        }
        $pdo -> close();
        $pdo = null();
    }

    

}

