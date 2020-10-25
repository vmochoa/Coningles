<?php 
include "connection.php";

$object = new Connection();
$connection = $object ->Connect();

$query = "SELECT * from gpdalumnos";
$result = $connection -> prepare($query);
$result->execute();
$data = $result->fetchAll(PDO::FETCH_ASSOC);

?>