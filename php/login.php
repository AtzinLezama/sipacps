<?php
include 'database.php';




//declaracion variables
$email = $_POST["email"];
$password = $_POST["password"];


//validacion rol
$consultarol = "SELECT rol FROM tbl_sesion WHERE correo = '$email'";
$query = mysqli_query($conn, $consultarol);
$row = mysqli_fetch_array($query);
$rol = $row[0];


//validacion de usuario
$query2 = mysqli_query($conn, "SELECT id_sesion from tbl_sesion where correo = '" . $email . "' and contraseña = '" . $password . "'  ");
$nc = mysqli_num_rows($query2);
$nr = mysqli_fetch_array($query2);
print_r("hola");

$consultauserid = "SELECT id_sesion FROM tbl_sesion WHERE correo = '$email'";
$query4 = mysqli_query($conn, $consultauserid);
$row4 = mysqli_fetch_array($query4);
$iduser = $row4[0];

//select dueño
$consultauser = "SELECT nombre FROM tbl_administrador WHERE id_sesion = '$iduser'";
$query3 = mysqli_query($conn, $consultauser);
$row3 = mysqli_fetch_array($query3);
$nombre = $row3[0];

//reedirigir a menu dependiendo rol
if ($nc == 1) {
    switch ($rol) {
        case 1:
            session_start(); 
            $_SESSION['id_sesion'] = $nr["id_sesion"];
            $_SESSION['correo'] = $email;
            $_SESSION['rol'] = $rol;
            $_SESSION['nombre'] = $nombre;
            header("Location: ../admin/InicioAdmin.php");
            break;
        case 2:
            session_start();
            $_SESSION['id_sesion'] = $nr["id_sesion"];
            $_SESSION['correo'] = $email;
            $_SESSION['rol'] = $rol;
            $_SESSION['nombre'] = $nombre;
            header("Location: ../user/inicioUser.php");
            break;
    }
} else if ($nr == 0) {
    echo '
    <script>
    alert("wrong credentials");
    window.location.href = "../index.html";
    </script>
    ';
};
