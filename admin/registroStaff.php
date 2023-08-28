<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Sregist.css">
    <title>Registro Staff</title>
</head>
<?php
require '../layout/headerAdmin.php';
require '../php/database.php';




if (isset($_REQUEST['guardar'])) {
    if (isset($_FILES['foto']['name'])) {
        $nombre = $_POST["name"];
        $puesto = $_POST["position"];

        $tipoArchivo = $_FILES['foto']['type'];
        $nombreArchivo = $_FILES['foto']['name'];
        $tamanoArchivo = $_FILES['foto']['size'];
        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);

        $binariosImagen = mysqli_escape_string($conn, $binariosImagen);
        $query = "INSERT INTO tbl_foto (nombre,imagen,tipo) values ('" . $nombreArchivo . "','" . $binariosImagen . "','" . $tipoArchivo . "');";
        $res = mysqli_query($conn, $query);


        if ($res) {

            $idfoto = "SELECT id_foto FROM tbl_foto ORDER BY id_foto DESC LIMIT 1";
            $query2 = mysqli_query($conn, $idfoto);
            $row1 = mysqli_fetch_array($query2);
            $fotoid = $row1[0];


            $insertarstaff = "INSERT INTO tbl_staff (nombre,puesto,id_foto) VALUES ('$nombre', '$puesto','$fotoid')";
            $query3 = mysqli_query($conn, $insertarstaff);

            echo ' <script> alert("Staff successfully registered "); window.location.href = "readStaff.php"; </script>';
        } else {
            echo ' <script> alert("error "); window.location.href = "readStaff.php"; </script>';
        }
    }
}
?> 

<body>
    <form method="POST" enctype="multipart/form-data">
        <section class="form-regist">
            <h4>Regist Staff</h4>
            <input class="Controls" type="text" name="name" placeholder="Name" required>
            <input class="Controls" type="text" name="position" placeholder="Position" required>
            <input class="Controls" type="file" name="foto" placeholder="Position" required>
            <input class="boton" type="submit" value="Regist" name="guardar">
        </section>
</body>

</html>