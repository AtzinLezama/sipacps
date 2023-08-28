<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/staff.scss">
    <title>Document</title>
    <?php
    require 'layout/header.php'
    ?>
</head><br><br><br><br><br><br>


<body>
    <ul class="card-wrapper">
        <?php
        require 'php/database.php';

        $query = "SELECT * FROM tbl_propietario";
        $publi = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($publi)) {


            $foto = "SELECT * FROM tbl_foto WHERE id_foto = '$row[8]'";
            $query2 = mysqli_query($conn, $foto);
            $row1 = mysqli_fetch_array($query2);
        ?>

            <li class="a-box">
                <div class="img-container">
                    <div class="img-inner">
                        <div class="inner-skew">

                            <img src="data:<?php echo $row1['tipo']; ?>; ?>;base64,<?php echo  base64_encode($row1['imagen']); ?>">
                        </div>
                    </div>
                </div>
                <div class="text-container">
                    <h3><?php echo $row['num_departamento']  ?></h3>
                    <div>
                        <?php echo $row['nombre']  ?>
                    </div>
            </li>


        <?php }

        ?>



    </ul>
</body>

</html>