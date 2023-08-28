<?php
require '../php/database.php';

$id = $_POST['id'];

$post = $_POST['post'];


$sql = "UPDATE tbl_publicacion SET mensaje = '$post' WHERE id_publicacion = '$id'";
$query = mysqli_query($conn, $sql);

if ($query) {

    header("Location: publicar.php");
}
