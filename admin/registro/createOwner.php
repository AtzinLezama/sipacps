<?php
include '../../php/database.php';

//declaracion de variables
$email = $_POST["email"];
$contraseña = $_POST["password"];
$nombre = $_POST["name"];
$apellido = $_POST["lastName"];
$depa = $_POST["departmentNumber"];
$address = $_POST["address"];
$phone = $_POST["phone"];


//consulta duplicacion de correo
$consultacorreo = "SELECT correo FROM tbl_sesion WHERE correo = '$email'";
$query = mysqli_query($conn, $consultacorreo);
$row = mysqli_fetch_array($query);
$correod = isset($row[0]);

//consulta duplicacion de departamento
$consultadepa = "SELECT num_departamento FROM tbl_propietario WHERE num_departamento = '$depa'";
$query2 = mysqli_query($conn, $consultadepa);
$row2 = mysqli_fetch_array($query2);
$depad = isset($row2[0]);

//validacion duplicacion de correo
if ($email == $correod) {
    echo '
    <script>
    alert("That email is taken. try another  ");
    window.location.href = "registroOwner.php";
    </script>
    ';
} else {
    //validacion duplicacion de departamento
    if ($depa == $depad) {
        echo '
        <script>
        alert("That department is taken. try another  ");
        window.location.href = "registroOwner.php";
        </script>
        ';
    } else {

        //insertar tabla sesion
        $insertarsesion = "INSERT INTO tbl_Sesion (correo, contraseña, rol) VALUES ('$email', '$contraseña', '2')";
        $query3 = mysqli_query($conn, $insertarsesion);

        //consulta sesion id
        $consultasesion = "SELECT id_sesion FROM tbl_sesion WHERE correo = '$email'";
        $query4 = mysqli_query($conn, $consultasesion);
        $row3 = mysqli_fetch_array($query4);
        $id_sesion = $row3[0];

        //insertar tabla propietario
        $insertarowner = "INSERT INTO tbl_propietario 
        (nombre, apellido,num_departamento, id_sesion, direccion_permanente, email, telefono) 
        VALUES 
        ('$nombre', '$apellido','$depa', '$id_sesion', '$address', '$email', '$phone')";
        $query5 = mysqli_query($conn, $insertarowner);

        // //consulta id propiatario
        // $query22 = "SELECT  id_propietario FROM tbl_propietario ORDER BY id_propietario DESC LIMIT 1";
        // $prop = mysqli_query($conn, $query22);
        // $row22 = mysqli_fetch_array($prop);


        // //insertar tabla saldo
        // $insertarsaldo = "INSERT INTO tbl_saldo (saldo, id_propietario, numDepartamento) VALUES ('0', '13', '$depa')";
        // $query32 = mysqli_query($conn, $insertarsaldo);

        echo '
    <script>
    alert("Owner successfully registered ");
    window.location.href = "../lectura/readOwner.php";
    </script>
    ';
    }
}
