<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Sregist.css">
    <title>Registro Saldo</title>
    <?php
    require '../layout/headerAdmin.php'
    ?>
</head>

<body>
    <form action="createSaldo.php" method="POST">
        <section class="form-regist">
            <h4>Regist balance</h4>
            <input class="Controls" type="text" name="balance" placeholder="Balance" require>
            <input class="Controls" type="text" name="name" placeholder="Name" require>
            <input class="Controls" type="text" name="departmentNumber" placeholder="Department number" require>
            <input class="boton" type="submit" value="Regist">
        </section>
</body>

</html>