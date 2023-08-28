<?php
require '../php/database.php';

$id = $_GET['id'];


$sql = "UPDATE tbl_reporte SET status = '1' WHERE id_reportes = '$id'";
$query = mysqli_query($conn, $sql);

if ($query) {

    header("Location: readReportes.php");
}
