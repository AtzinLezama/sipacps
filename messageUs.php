<?php
include 'php/database.php';

//declaracion de variables
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


//insertar tabla admin
$message = "INSERT INTO tbl_contacto (nombre, email, mensaje, fecha) VALUES ('$name', '$email', '$message', CURRENT_TIMESTAMP())";
$query4 = mysqli_query($conn, $message);

echo '
    <script>
    alert("Data sent correctly, the administrator will contact you as soon as possible.");
    window.location.href = "index.html";
    </script>
    ';
