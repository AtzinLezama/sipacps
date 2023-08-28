<?php
include '../php/database.php';

session_start();

//declaracion de variables
$reporte = $_POST["report"];
$correo = $_SESSION['correo'];


$consultaidcondo = mysqli_query($conn, "SELECT * from tbl_propietario where email = '$correo' ");
$nc = mysqli_num_rows($consultaidcondo);
$nr = mysqli_fetch_array($consultaidcondo);

//insertar tabla reporte
$insertarreporte = "INSERT INTO tbl_reporte 
(reporte,fecha,status,departamento,id_propietario) 
VALUES 
('$reporte', CURRENT_TIMESTAMP(),'0', '$nr[3]','$nr[0]')";
$query3 = mysqli_query($conn, $insertarreporte);


echo ' <script> alert("Report registered "); window.location.href = "inicioUser.php"; </script>';
