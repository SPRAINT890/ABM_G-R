<?php
//require "../model/PHP/conexion-docker.php";
require "../model/PHP/conexion.php";
require "../model/PHP/persona.php";

if (isset($_POST["Añadir"])) {
  $persona = new Persona;
  $persona->setCedula($_POST["Cedula"]);
  $persona->setNombre($_POST["Nombre"]);
  $persona->setApellido($_POST["Apellido"]);
  $persona->setDireccion($_POST["Direccion"]);
  $persona->setTelefono($_POST["Telefono"]);
  $persona->setEmail($_POST["E-Mail"]);
  $persona->añadirPersona();
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
<body>
  <?php
  require_once "../view/templateNavbar.php";
  ?>
  <div class="text-center ">
    <h1> Ingresar Persona</h1>
  </div>
  <br>
  <div class="justify-content-center container margenes">
    <form action="" method="post">  
      <div class="form-group mb-3">
        <label class= "form-label  " for="Cedula">Cedula</label>
        <input class="form-control" type="number" name="Cedula">
      </div>
      <div class="form-group mb-3">
        <label for="Nombre">Nombre</label>
        <input class="form-control" type="text" name="Nombre">
      </div>
      <div class="form-group mb-3">
        <label for="Apellido">Apellido</label>
        <input class="form-control" type="text" name="Apellido">
      </div>
      <div class="form-group mb-3">
        <label for="Direccion">Direccion</label>
        <input class="form-control" type="text" name="Direccion">
      </div>
      <div class="form-group mb-3">
        <label for="Telefono">Telefono</label>
        <input class="form-control" type="number" name="Telefono">
      </div>
      <div class="form-group mb-3">
        <label for="E-Mail">E-Mail</label>
        <input class="form-control" type="email" name="E-Mail">
      </div>

      <button type="submit" class="btn btn-submit" name="Añadir">Añadir</button>
    </form>
  </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>