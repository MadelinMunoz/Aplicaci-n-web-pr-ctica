<?php
include ('ConexionDB/conexion.php');
if (!isset($conexion)) {
    die("❌ No se estableció la conexión a la base de datos.");
}
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$contrasena= $_POST['contrasena'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

$sql = "INSERT INTO usuarios (nombres, apellidos, usuario, contrasena, cedula, correo, telefono, direccion, fecha_nacimiento)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "sssssssss", $nombres, $apellidos, $usuario, $contrasena, $cedula, $correo, $telefono, $direccion, $fecha_nacimiento);

if (mysqli_stmt_execute($stmt)) {
    header("Location: index.php?mensaje=registro_exitoso#Login");
    exit();
} else {
    header("Location: index.php?error=error_al_guardar#Login");
    exit();
}
?>
