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

$idfoto = $_GET["id"];


$foto = "SELECT * FROM tbl_foto WHERE id_foto = '$idfoto'";
$query21 = mysqli_query($conn, $foto);
$row11 = mysqli_fetch_array($query21);



if (isset($_FILES['foto']['name'])) {



    $tipoArchivo = $_FILES['foto']['type'];
    $nombreArchivo = $_FILES['foto']['name'];
    $tamanoArchivo = $_FILES['foto']['size'];
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchivo);

    $binariosImagen = mysqli_escape_string($conn, $binariosImagen);
    // $query = "INSERT INTO tbl_foto (nombre,imagen,tipo) values ('" . $nombreArchivo . "','" . $binariosImagen . "','" . $tipoArchivo . "');";

    $query = "UPDATE tbl_foto SET nombre = '$nombreArchivo', imagen = '$binariosImagen', tipo = '$tipoArchivo' WHERE id_foto = '$idfoto'";


    $res = mysqli_query($conn, $query);




    if ($res) {



        echo ' <script> alert("photo update"); window.location.href = "readStaff.php"; </script>';
    } else {
        echo ' <script> alert("error "); window.location.href = "readStaff.php"; </script>';
    }
}

?>

<body>
    <form method="POST" enctype="multipart/form-data">
        <section class="form-regist">
            <h4>Update Staff</h4>
            <h4>Current Photo</h4>
            <img width="100%" height="100%" src="data:<?php echo $row11['tipo']; ?>; ?>;base64,<?php echo  base64_encode($row11['imagen']); ?>">
            <h4>New Photo</h4>
            <input class="Controls" type="file" name="foto" placeholder="Position" required>
            <input class="boton" type="submit" value="Update" name="guardar">
        </section>
</body>

</html>