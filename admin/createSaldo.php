<?php 
include '../php/database.php';

//declaracion de variables
$saldo = $_POST["balance"];
$nombre = $_POST["name"];
$depa = $_POST["departmentNumber"];


//consulta nombre
$consultaidcondo = mysqli_query($conn, "SELECT id_propietario from tbl_propietario where nombre = '" . $nombre . "' and num_departamento = '" . $depa . "'  ");
$nc = mysqli_num_rows($consultaidcondo);
$nr = mysqli_fetch_array($consultaidcondo);


//consulta

if ($nc == 1) {
    $insertarsaldo = "INSERT INTO tbl_Saldo (saldo,id_propietario,numDepartamento) VALUES ('$saldo', '$nr[0]', '$depa')";
    $query3 = mysqli_query($conn, $insertarsaldo);

    echo '
    <script>
    alert("balance saved successfully");
    window.location.href = "readSaldos.php";
    </script>
    ';
} else if ($nr == 0) {
    echo '
    <script>
    alert("name and department do not match");
    window.location.href = "registroSaldo.php";
    </script>
    ';
};


