<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Sregist.css">

    <title>Regist</title>
</head>

<body>
    <form action="createAdmin.php" method="POST">
        <section class="form-regist">
            <h4>Regist User</h4>
            <input class="Controls" type="mail" name="email" placeholder="Email" required="required">
            <input class="Controls" type="text" name="password" placeholder="Password" required="required" value="12345678" readonly>

            <h4>Regist Admin</h4>
            <input class="Controls" type="text" name="name" placeholder="Name" required="required">
            <input class="Controls" type="text" name="lastName" placeholder="Last name" required="required">

            <input class="boton" type="submit" value="Regist">
        </section>
    </form>
</body>

</html>