<?php 
include __DIR__ . "/../Modelos/conexionBD.php";
$object = new Connection();
$connection = $object->Connect();
echo "si entro en el crud";

$id = (isset($_POST['id'])) ? $_POST['id']:'';
$sucursal = (isset($_POST['sucursal'])) ? $_POST['sucursal']:'';
$folio = (isset($_POST['folio'])) ? $_POST['folio']:'';
$fechacontrato = (isset($_POST['fechacontrato'])) ? $_POST['fechacontrato']:'';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre']:'';
$fechaintro = (isset($_POST['fechaintro'])) ? $_POST['fechaintro']:'';
$horasautorizadas = (isset($_POST['horasautorizadas'])) ? $_POST['horasautorizadas']:'';
$plan = (isset($_POST['plan'])) ? $_POST['plan']:'';
$curso = (isset($_POST['curso'])) ? $_POST['curso']:'';
$nuevoplazo = (isset($_POST['nuevoplazo'])) ? $_POST['nuevoplazo']:'';
$cartas = (isset($_POST['cartas'])) ? $_POST['cartas']:'';
$fechavencimiento = (isset($_POST['fechavencimiento'])) ? $_POST['fechavencimiento']:'';
$observaciones = (isset($_POST['observaciones'])) ? $_POST['observaciones']:'';
$libro = (isset($_POST['libro'])) ? $_POST['libro']:'';
$fechanacimiento = (isset($_POST['fechanacimiento'])) ? $_POST['fechanacimiento']:'';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion']:'';
$correo = (isset($_POST['correo'])) ? $_POST['correo']:'';
$avance = (isset($_POST['avance'])) ? $_POST['avance']:'';
$vendedora = (isset($_POST['vendedora'])) ? $_POST['vendedora']:'';
$foto = (isset($_POST['foto'])) ? $_POST['foto']:'';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono']:'';
$telefonocasa = (isset($_POST['telefonocasa'])) ? $_POST['telefonocasa']:'';
$option = (isset($_POST['option'])) ? $_POST['option']:'';

switch ($option) {
     case 1:
          // insert
          $query = "INSERT INTO articulos(nombre_art,stock,idcategoria,idproveedor) VALUES ('$productoNombre','$productoStock','$productoCategoria','$productoProveedor')";
          $res = $connection->prepare($query);
          $res->execute();
          
          $query = "SELECT id,nombre_art,stock,idcategoria,idproveedor FROM articulos ORDER BY id DESC LIMIT 1";
          $res = $connection->prepare($query);
          $res->execute();
          $data = $res->fetchAll(PDO::FETCH_ASSOC);
          break;

     case 2:
          // update 
          $pdo = ConexionBD::cBD()->prepare("UPDATE gpdalumnos SET sucursal=$sucursal, folio='$folio', fechacontrato='$fechacontrato', nombre='$nombre', fechaintro='$fechaintro', horasautorizadas='$horasautorizadas', plan='$plan', curso='$curso', nuevoplazo='$nuevoplazo', cartas='$cartas', fechavencimiento='$fechavencimiento', observaciones='$observaciones', libro='$libro', fechanacimiento='$fechanacimiento', direccion='$direccion', correo='$correo', avance='$avance', vendedora='$vendedora', foto='$foto', telefono='$telefono', telefonocasa='$telefonocasa' WHERE id='$id'");
          $data = $pdo->fetchAll(PDO::FETCH_ASSOC);
          $pdo -> execute ();
          
          $query = "SELECT id,nombre_art,stock,idcategoria,idproveedor FROM articulos WHERE id='$id'";
          $res = $connection->prepare($query);
          $res->execute();
          $data = $res->fetchAll(PDO::FETCH_ASSOC);
          break;



         


     case 3:
          // delete
          $query = "SELECT id,nombre_art,stock,idcategoria,idproveedor FROM articulos WHERE id='$id'";
          $res = $connection->prepare($query);
          $res->execute();
          $data = $res->fetchAll(PDO::FETCH_ASSOC);

          $query = "DELETE FROM articulos WHERE id='$id'";
          $res = $connection->prepare($query);
          $res->execute();
          break;
     }
     print json_encode($data, JSON_UNESCAPED_UNICODE);
     $connection=null;
     


?>