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


$id = $_GET['id'];
$sql = "SELECT * FROM tbl_staff WHERE id_staff = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

$foto = "SELECT * FROM tbl_foto WHERE id_foto = '$row[3]'";
$query2 = mysqli_query($conn, $foto);
$row1 = mysqli_fetch_array($query2);



?>

<body>
    <form method="POST" enctype="multipart/form-data" action="updateStaff.php">
        <section class="form-regist">
            <h4>Regist Staff</h4>
            <input class="Controls" type="text" name="id" placeholder="id" value="<?php echo $row['id_staff'] ?>" readonly>
            <input class="Controls" type="text" name="name" placeholder="Name" required value="<?php echo $row['nombre'] ?>">
            <input class="Controls" type="text" name="position" placeholder="Position" required value="<?php echo $row['puesto'] ?>">
            <h4>Current Photo</h4>
            <img width="100%" height="100%" src="data:<?php echo $row1['tipo']; ?>; ?>;base64,<?php echo  base64_encode($row1['imagen']); ?>">
            <h4>New Photo</h4>
            <a style="border: 2px solid #fff;" href="actualizarFoto.php?id=<?php echo $row['id_foto'] ?>">Upddate Photo</a>

            <input class="boton" type="submit" value="Update" name="guardar">
        </section>
</body>

</html>