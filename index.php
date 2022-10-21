
<?php
include "includes/config.php";
session_start();

if (isset($_SESSION["user_email"])) {
    header("Location: todos.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario Login</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <section class="form-login">
      <h1>ToDoList</h1>
      <p>usuario:</p>
      <input class="controls" type="text" name="Correro Electrónico" value="" placeholder="Usuario">
      <p>Contraseña</p>
      <input class="controls" type="password" name="Contraseña" value="" placeholder="Contraseña">
      <button class="primer" >Ingresar</button>
      <button class="segundo">Ir a registro</button>
      D:\xammp\php
      <p><a href="#">¿Olvidastes tu Contraseña?</a></p>

    </section>

  </body>
</html>