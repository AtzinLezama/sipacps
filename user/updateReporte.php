<?php
require '../php/database.php';

$id = $_POST['id'];

$report = $_POST['report'];


$sql = "UPDATE tbl_reporte SET reporte = '$report' WHERE id_reportes = '$id'";
$query = mysqli_query($conn, $sql);

if ($query) {

    header("Location: readReportesUser.php");
}
