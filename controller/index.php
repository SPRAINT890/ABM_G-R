<?php
require "../model/PHP/conexion.php";
//require "../model/PHP/conexion-docker.php";
require "../model/PHP/persona.php";

$persona = new Persona;
$listaPersonas = $persona->listarPersona();

// if (isset($_POST["modificar"])) {
//   echo "modificar";
  
  
// }

if (isset($_POST["eliminar"])) {
  $id = $_POST["id"];
  $persona->setID($id);
  $persona->eliminarPersona();
  $listaPersonas = $persona->listarPersona();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/styles.css">

    <title>Inicio</title>
</head>
<body>
  <?php
  require_once "../view/templateNavbar.php";
  if ($listaPersonas) {

    ?>
    <div class="m">
      <table class="table table-bordered table-success ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">CI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
          <?php
          
          foreach ($listaPersonas as $row) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . " </td> ";
            echo "<td>" . $row['Cedula'] . " </td> ";
            echo "<td>" . $row['Nombre'] . " </td> ";
            echo "<td>" . $row['Apellido'] . " </td> ";
            echo "<td>" . $row['Direccion'] . " </td> ";
            echo "<td>" . $row['Telefono'] . " </td> ";
            echo "<td>" . $row['Email'] . " </td> ";
            ?>
            <td>
              <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                <button type="submit" name="eliminar" class="btn btn-danger">Eliminar</button>
              </form>
              <form action="modificar.php" method="get">
                <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                <button type="submit" name="modificar" class="btn btn-primary">Modificar</button>
              </form>
            </td>
            <?php
            echo "</tr>";
          }
          
          ?>
        </tbody>
      </table>
    </div>
    <?php
  }else{
    echo "<h1>No hay registro de clientes </h1>";
  }
  ?>

</body>
</html>

<script src="../model/JS/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>