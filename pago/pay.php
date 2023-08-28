<?php
require '../php/database.php';
session_start();
$correo = $_SESSION['correo'];


$consultaidcondo = mysqli_query($conn, "SELECT * from tbl_propietario where email = '$correo' ");
$nc = mysqli_num_rows($consultaidcondo);
$nr = mysqli_fetch_array($consultaidcondo);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/publicar.css">
    <link rel="stylesheet" href="../css/cardspay.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Publicar</title>
    <?php
    require '../layout/headerUser.php'
    ?>
</head><br><br><br><br><br>

<body>

    <div class="container">
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>100</h2>
                    <h3>$100</h3>
                    <img class="img-container" src="../Image/stripe.png">

                    <div class="wrap">
                        <button class="button">Pay Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>300</h2>
                    <h3>$300</h3>

                    <img class="img-container" src="../Image/stripe.png">

                    <div class="wrap">
                        <button class="button">Pay Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>999</h2>
                    <h3>$999</h3>

                    <img class="img-container" src="../Image/stripe.png">

                    <div class="wrap">
                        <button class="button">Pay Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>