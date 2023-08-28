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
    require '../layout/headerUser.php'
    ?>
</head>

<body>
    <form action="createReporte.php" method="POST">
        <section class="form-regist">
            <h4>Regist Report</h4>
            <textarea class="Controls" name="report" rows="4" cols="40" require></textarea>

            <input class="boton" type="submit" value="Regist">
        </section>
</body>

</html>