<?php
require '../php/database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tbl_publicacion WHERE id_publicacion = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Sregist.css">
    <title>Registro Report</title>
    <?php
    require '../layout/headerAdmin.php'
    ?>
</head>

<body>
    <form action="updatePublicacion.php" method="POST">
        <section class="form-regist">
            <h4>Update Post </h4>
            <input style="display: none;" class="Controls" type="text" name="id" placeholder="id" value="<?php echo $row['id_publicacion'] ?>" readonly>
            <textarea class="Controls" name="post" rows="4" cols="40" require><?php echo $row['mensaje'] ?></textarea>

            <input class="boton" type="submit" value="Update">
        </section>
</body>

</html>