<?php 
require_once "conexionBD.php";




$pdo = ConexionBD::cBD()->prepare("SELECT * from gpdalumnos");
$pdo -> execute ();
$data = $pdo->fetchAll(PDO::FETCH_ASSOC);

 




$bd = null;
?>