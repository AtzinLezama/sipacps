<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/publicar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Post</title>
    <?php
    include('../php/rolUser.php');
    require '../layout/headerUser.php';

    ?>
</head><br><br><br><br><br>

<body>
    <div class="container">





        <div class="main-container">
            <div class="heading">
                <h1 class="heading__title">Previous Posts</h1>
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

                            </div>

                        </div>
                        <br><br>
                    </div>





                <?php }

                ?>
                </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>