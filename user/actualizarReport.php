<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Sregist.css">
    <title>Registro Report</title>
    <?php
    include('../php/rolUser.php');
    require '../layout/headerUser.php';

    $id = $_GET['id'];

    $query = "SELECT id_reportes,reporte FROM tbl_reporte WHERE id_reportes = '$id'";
    $report = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($report);
    ?>
</head>

<body>
    <form action="updateReporte.php" method="POST">
        <section class="form-regist">
            <h4>Update Report</h4>
            <input class="Controls" style="display: none;" name="id" value="<?php echo $row[0] ?>" readonly></input>
            <textarea class="Controls" name="report" rows="4" cols="40" require> <?php echo $row[1] ?></textarea>

            <input class="boton" type="submit" value="Update">
        </section>
</body>

</html>