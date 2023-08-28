<?php
require '../../php/database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tbl_propietario WHERE id_propietario = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

$foto = "SELECT * FROM tbl_foto WHERE id_foto = '$row[8]'";
$query2 = mysqli_query($conn, $foto);
$row1 = mysqli_fetch_array($query2)
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Sregist.css">

    <title>Update</title>

</head>

<body>
    <form action="updateOwner.php" method="POST">
        <section class="form-regist">
            <h4>Update Owner</h4>
            <input class="Controls" type="text" name="id" placeholder="ID" require value="<?php echo $row['id_propietario'] ?>" readonly>
            <input class="Controls" type="text" name="name" placeholder="Name" require value="<?php echo $row['nombre'] ?>">
            <input class="Controls" type="text" name="lastName" placeholder="Last name" require value="<?php echo $row['apellido'] ?>">
            <input class="Controls" type="text" name="departmentNumber" placeholder="Department number" require value="<?php echo $row['num_departamento'] ?>">
            <input class="Controls" type="text" name="address" placeholder="Permanent address information" require value="<?php echo $row['direccion_permanente'] ?>">
            <input class="Controls" type="text" name="phone" placeholder="Phone number" value="<?php echo $row['telefono'] ?>">
            <h4>Current Photo</h4>
            <img width="100%" height="100%" src="data:<?php echo $row1['tipo']; ?>; ?>;base64,<?php echo  base64_encode($row1['imagen']); ?>">
            <h4>New Photo</h4>
            <a style="border: 2px solid #fff; color:#fff" href="../actualizarFotoOwner.php?id=<?php echo $row['id_foto'] ?>">Upddate Photo</a>
            <input class="boton" type="submit" value="UPDATE">
        </section>
    </form>
</body>

</html>