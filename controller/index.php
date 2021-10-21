<?php
require "../model/conexion.php";
require "../model/persona.php";

$persona = new Persona;
$listaPersonas = $persona->listarPersona();
foreach ($listaPersonas as $row) {
    echo $row["ID"] . " ";
    echo $row["Cedula"] . " ";
    echo $row["Nombre"] . " ";
    echo $row["Apellido"] . " ";
    echo $row["Direccion"] . " ";
    echo $row["Telefono"] . " ";
    echo $row["Email"] . " ";
    echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Inicio</title>
</head>
<body>
    <nav>

    </nav>

    <table class="table table-bordered table-info margenes">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CI</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>