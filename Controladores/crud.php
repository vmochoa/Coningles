<?php 
include_once 'pdo/connection.php';
$object = new Connection();
$connection = $object->Connect();

$productoNombre = (isset($_POST['name'])) ? $_POST['name']:'';
$productoStock = (isset($_POST['stock'])) ? $_POST['stock']:'';
$productoCategoria = (isset($_POST['categoria'])) ? $_POST['categoria']:'';
$productoProveedor = (isset($_POST['proveedor'])) ? $_POST['proveedor']:'';
$option = (isset($_POST['option'])) ? $_POST['option']:'';
$id = (isset($_POST['id'])) ? $_POST['id']:'';

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
          $query = "UPDATE articulos SET nombre_art='$productoNombre', stock='$productoStock',idcategoria='$productoCategoria',idproveedor='$productoProveedor' WHERE id='$id'";
          $res = $connection->prepare($query);
          $res->execute();
          
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