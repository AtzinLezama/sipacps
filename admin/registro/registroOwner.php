<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Sregist.css">
    <link rel="stylesheet" href="../../css/header.css">
    <?php require '../../layout/headerAdmin2.php' ?>

    <title>Regist</title>
</head>
<?php

require '../../php/database.php';




if (isset($_REQUEST['guardar'])) {
    if (isset($_FILES['foto']['name'])) {


        $tipoArchivo = $_FILES['foto']['type'];
        $nombreArchivo = $_FILES['foto']['name'];
        $tamanoArchivo = $_FILES['foto']['size'];
        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);

        $binariosImagen = mysqli_escape_string($conn, $binariosImagen);
        $query = "INSERT INTO tbl_foto (nombre,imagen,tipo) values ('" . $nombreArchivo . "','" . $binariosImagen . "','" . $tipoArchivo . "');";
        $res = mysqli_query($conn, $query);


        if ($res) {

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


                    $idfoto = "SELECT id_foto FROM tbl_foto ORDER BY id_foto DESC LIMIT 1";
                    $query22 = mysqli_query($conn, $idfoto);
                    $row1 = mysqli_fetch_array($query22);
                    $fotoid = $row1[0];

                    //insertar tabla propietario
                    $insertarowner = "INSERT INTO tbl_propietario 
        (nombre, apellido,num_departamento, id_sesion, direccion_permanente, email, telefono, id_foto) 
        VALUES 
        ('$nombre', '$apellido','$depa', '$id_sesion', '$address', '$email', '$phone', '$fotoid')";
                    $query5 = mysqli_query($conn, $insertarowner);

                    echo '
    <script>
    alert("Owner successfully registered ");
    window.location.href = "../lectura/readOwner.php";
    </script>
    ';
                }
            }
        }
    }
}
?>

<body>
    <form method="POST" enctype="multipart/form-data">
        <section class="form-regist">
            <h4>Regist User</h4>
            <input class="Controls" type="text" name="email" placeholder="Email" required>
            <input class="Controls" type="text" name="password" placeholder="Password" required>

            <h4>Regist Owner</h4>
            <input class="Controls" type="text" name="name" placeholder="Name" required>
            <input class="Controls" type="text" name="lastName" placeholder="Last name" required>
            <input class="Controls" type="text" name="departmentNumber" placeholder="Department number" required>
            <input class="Controls" type="text" name="address" placeholder="Permanent address information" required>
            <input class="Controls" type="text" name="phone" placeholder="Phone number">
            <input class="Controls" type="file" name="foto" placeholder="Position" required>
            <input class="boton" type="submit" value="Regist" name="guardar">
        </section>
    </form>
</body>

</html>