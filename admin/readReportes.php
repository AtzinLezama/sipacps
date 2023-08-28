<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/publicar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Publicar</title>
    <?php
    require '../layout/headerAdmin.php'
    ?>
</head>
<br><br><br>

<body>
    <div class="container" style="margin: 5% auto;">

        <div class="main-container">
            <div class="heading">
                <h1 class="heading__title">Reports</h1>
            </div>
            <?php
            require '../php/database.php';

            $query = "SELECT * FROM tbl_reporte ORDER BY id_reportes DESC ";
            $publi = mysqli_query($conn, $query);



            while ($row = mysqli_fetch_array($publi)) {
                $prop = "SELECT * FROM tbl_propietario WHERE id_propietario = '$row[5]' ";
                $resprop = mysqli_query($conn, $prop);
                $row1 = mysqli_fetch_array($resprop); ?>


                <div class="row">
                    <div class="col-sm-6">
                        <form method="post">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Department: #<?php echo $row['departamento'] .  '  <br>Name: ' .   $row1['nombre']; ?>
                                    </h5>

                                    <h4>Report:</h4>
                                    <p class="card-text"><?php echo $row['reporte']  ?></p>
                                    <h6 class="card-title"><?php echo $row['fecha']  ?></h6>
                                    <h6 class="card-title">status:
                                        <?php
                                        if ($row['status'] == 1) {
                                            echo '✓';
                                        } else {
                                            echo 'X';
                                        }
                                        ?></h6>


                                    <a href="status1.php?id=<?php echo $row['id_reportes'] ?>" class="btn btn-primary">✓</a>
                                    <a href="status0.php?id=<?php echo $row['id_reportes'] ?>" class="btn btn-primary">X</a>


                                </div>

                            </div>
                        </form>
                        <br><br>
                    </div>





                <?php }

                ?>
                </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>