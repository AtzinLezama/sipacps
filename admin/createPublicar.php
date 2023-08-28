<?php
include '../php/database.php';

//declaracion de variables
$post = $_POST["post"];




//insertar tabla admin
$insertpost = "INSERT INTO tbl_publicacion (mensaje, fecha) VALUES ('$post', CURRENT_TIMESTAMP())";
$query4 = mysqli_query($conn, $insertpost);

echo '
    <script>
    alert("posted successfully");
    window.location.href = "publicar.php";
    </script>
    ';
