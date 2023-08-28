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

<body>
    <div class="container">


        <div class="cover2">
            <h1>POST</h1>
            <form class="flex-form" action="createPublicar.php" method="post">
                <textarea type="search" placeholder="WRITE..." name="post"></textarea>


                <input type="submit" value="SEND">
            </form>

        </div>



        <div class="main-container">
            <div class="heading">
                <h1 class="heading__title">publications</h1>
            </div>
            <?php
            require '../php/database.php';

            $query = "SELECT * FROM tbl_publicacion ORDER BY id_publicacion DESC";
            $publi = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($publi)) { ?>


                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['fecha']  ?></h5>
                                <p class="card-text"><?php echo $row['mensaje']  ?></p>
                                <a href="actualizarPublicacion.php?id=<?php echo $row['id_publicacion'] ?>" class="btn btn-primary">EDIT</a>
                                <a href="deletePublicacion.php?id=<?php echo $row['id_publicacion'] ?>" onclick="return confirmacion()" class="btn btn-primary">DELETE</a>


                            </div>

                        </div>
                        <br><br>
                    </div>





                <?php }

                ?>
                </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="confirmacion.js"></script>

</html>