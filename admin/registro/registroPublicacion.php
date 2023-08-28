<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Sregist.css">

    <title>Regist</title>
</head>
<?php
require '../../layout/headerAdmin2.php';
?>

<body>
    <form action="createAdmin.php" method="POST">
        <section class="form-regist">
            <h4>Publicar post</h4>
            <input class="Controls" type="text" name="email" placeholder="Email" required="required">
            <textarea name="publicacion"></textarea>



            <input class="boton" type="submit" value="Regist">
        </section>
    </form>
</body>

</html>