<?php
include '../../php/database.php';

//declaracion de variables
$email = $_POST["email"];
$contraseña = $_POST["password"];
$nombre = $_POST["name"];
$apellido = $_POST["lastName"];


//consulta duplicacion de correo
$consultacorreo = "SELECT correo FROM tbl_sesion WHERE correo = '$email'";
$query = mysqli_query($conn, $consultacorreo);
$row = mysqli_fetch_array($query);
$correod = isset($row[0]);

//validacion duplicacion de correo
if ($email == $correod) {
    echo '
    <script>
    alert("That email is taken. try another  ");
    window.location.href = "registroAdmin.php";
    </script>
    ';
} else {

    //insertar tabla sesion
    $insertarsesion = "INSERT INTO tbl_Sesion (correo, contraseña, rol) VALUES ('$email', '$contraseña', '1')";
    $query2 = mysqli_query($conn, $insertarsesion);

    //consulta sesion id
    $consultasesion = "SELECT id_sesion FROM tbl_sesion WHERE correo = '$email'";
    $query3 = mysqli_query($conn, $consultasesion);
    $row = mysqli_fetch_array($query3);
    $id_sesion = $row[0];

    //insertar tabla admin
    $insertaradmin = "INSERT INTO tbl_administrador (nombre, apellido, id_sesion) VALUES ('$nombre', '$apellido', '$id_sesion')";
    $query4 = mysqli_query($conn, $insertaradmin);

    echo '
    <script>
    alert("Admin successfully registered ");
    window.location.href = "registroAdmin.php";
    </script>
    ';
}
