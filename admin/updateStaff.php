<?php
require '../php/database.php';

$id = $_POST['id'];
$nombre = $_POST["name"];
$puesto = $_POST["position"];


$sql = "UPDATE tbl_staff SET nombre = '$nombre'  WHERE id_staff = '$id'";
$query = mysqli_query($conn, $sql);

if ($query) {

    header("Location: readStaff.php");
}
