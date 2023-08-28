<?php

require '../php/database.php';

$emailsesion = $_SESSION['correo'];

$query = "SELECT * FROM tbl_propietario WHERE email = '$emailsesion'";
$publi = mysqli_query($conn, $query);
$row22 = mysqli_fetch_array($publi);

$foto = "SELECT * FROM tbl_foto WHERE id_foto = '$row22[8]'";
$query2 = mysqli_query($conn, $foto);
$row122 = mysqli_fetch_array($query2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <title>Document</title>
</head>

<body>

    <header>
        <h2><a href="#"><img class="img" src="../Image/logo.png" alt=""></a></h2>
        <nav>
            <ul>
                <li>
                    <a class="btn" href="../user/inicioUser.php" title="USER">HOME</a>
                </li>
                <li>
                    <img style="flex-shrink: 0; width: 50px;height: 50px;border-radius: 50%;" src="data:<?php echo $row122['tipo']; ?>; ?>;base64,<?php echo  base64_encode($row122['imagen']); ?>">
                </li>


                <lu>
                    <li>
                        <a title="HOME"><?php echo $row22['nombre'] ?></a>
                    </li>
                    <li><a href="../php/logout.php" title="HOME">LOGOUT</a></li>
                </lu>
            </ul>

        </nav>

    </header>



</body>

</html>