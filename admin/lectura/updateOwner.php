<?php
require '../../php/database.php';

$id = $_POST['id'];

$nombre = $_POST['name'];
$apellido = $_POST['lastName'];
$depnum = $_POST['departmentNumber'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$sql = "UPDATE tbl_propietario SET nombre = '$nombre', apellido = '$apellido', num_departamento = '$depnum', direccion_permanente = '$address' , telefono = '$phone'WHERE id_propietario = '$id'";
$query = mysqli_query($conn, $sql);

    if($query){
        
        header("Location: readOwner.php");
    }
