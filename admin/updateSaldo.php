<?php
require '../php/database.php';

$id = $_POST['id'];

$saldo = $_POST['balance'];


$sql = "UPDATE tbl_saldo SET saldo = '$saldo'WHERE id_saldo = '$id'";
$query = mysqli_query($conn, $sql);

if ($query) {

    header("Location: readSaldos.php");
}
