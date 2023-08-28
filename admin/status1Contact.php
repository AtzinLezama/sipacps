<?php
require '../php/database.php';

$id = $_GET['id'];


$sql = "UPDATE tbl_contacto SET status = '1' WHERE id_contacto = '$id'";
$query = mysqli_query($conn, $sql);

if ($query) {

    header("Location: readcontact.php");
}
