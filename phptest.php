<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="phptest.php" method="post">
    <select name="reg_nombre" id="reg_nombre"
            class="mb-8 border-solid border border-black bg-transparent dark:border-white">
        <option value="CC">Cedula de Ciudadania</option>
        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
        <option value="Cedula de Extranjeria">Cedula de Extranjeria</option>
        <option value="Pasaporte">Pasaporte</option>
    </select>
    <button type="submit"></button>
</form>
<?php
$server = "localhost";
$user = "root";
$password = "";
$conexion = new mysqli($server, $user, $password);
if($conexion ->connect_error){
    die("Conexion fallida: " . $conexion->connect_error);
}
echo "Conexion exitosa";

if (isset($_POST['reg_nombre'])){
    $reg_nombre = $_POST['reg_nombre'];
    echo $reg_nombre;
}
?>
</body>
</html>