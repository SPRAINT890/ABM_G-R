<?php
//require "../model/PHP/conexion-docker.php";
require "../model/PHP/conexion.php";
require "../model/PHP/persona.php";
//$id = ($_POST["id"]);
$persona_model = new Persona;
$persona_model->setID($_GET["id"]);
$cliente = $persona_model->obtenerPersona();



if (isset($_POST["Modificar"])) {
  $persona = new Persona;
  $persona->setID($_POST["id"]);
  $persona->setCedula($_POST["Cedula"]);
  $persona->setNombre($_POST["Nombre"]);
  $persona->setApellido($_POST["Apellido"]);
  $persona->setDireccion($_POST["Direccion"]);
  $persona->setTelefono($_POST["Telefono"]);
  $persona->setEmail($_POST["E-Mail"]);
  $persona->modificarPersona();
  echo "<script type='text/javascript'>location.href = '.';</script>";
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
  <title>Ingresar Persona</title>
</head>
<body style= "min-width: 100vw">
  <?php
  require_once "../view/templateNavbar.php";
  ?>
  <div class="text-center ">
    <h1> Modificar Persona</h1>
  </div>
  <br>
  <div class="justify-content-center container w-50">
    <form action="" method="post">  
    <input type="hidden" name="id" value="<?= $_GET['id'];?>">
      <div class="form-group mb-3">
        <label class= "form-label  " for="Cedula">Cedula</label>
        <input class="form-control" type="number" name="Cedula" required max="99999999" value="<?= $cliente['Cedula'];?>">
      </div>
      <div class="form-group mb-3">
        <label for="Nombre">Nombre</label>
        <input class="form-control" type="text" name="Nombre" required value="<?= $cliente['Nombre'];?>">
      </div>
      <div class="form-group mb-3">
        <label for="Apellido">Apellido</label>
        <input class="form-control" type="text" name="Apellido" required value="<?= $cliente['Apellido'];?>">
      </div>
      <div class="form-group mb-3">
        <label for="Direccion">Direccion</label>
        <input class="form-control" type="text" name="Direccion" required value="<?= $cliente['Direccion'];?>">
      </div>
      <div class="form-group mb-3">
        <label for="Telefono">Telefono</label>
        <input class="form-control" type="number" name="Telefono" required value="<?= $cliente['Telefono'];?>">
      </div>
      <div class="form-group mb-3">
        <label for="E-Mail">E-Mail</label>
        <input class="form-control" type="email" name="E-Mail" required value="<?= $cliente['Email'];?>">
      </div>

      <button type="submit" class="btn btn-success" name="Modificar">Modificar</button>
    </form>
  </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>