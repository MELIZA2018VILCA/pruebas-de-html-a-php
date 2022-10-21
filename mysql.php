<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "todo_list";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Error en la coneccion ala base de datos");
return $conn; 
