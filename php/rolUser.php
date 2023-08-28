<?php
session_start();
$varsesion = $_SESSION['rol'];
$emailsesion = $_SESSION['correo'];


switch ($varsesion) {
    case null;
        header("Location: ../index.html");
        break;
    case '';
        header("Location: ../index.html");
        break;
    case 1;
        header("Location: ../index.html");
        break;
}
