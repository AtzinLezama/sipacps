<?php
require '../php/database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tbl_saldo WHERE id_saldo = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Sregist.css">
    <title>Registro Saldo</title>
    <?php
    require '../layout/headerAdmin.php'
    ?>
</head>

<body>
    <form action="updateSaldo.php" method="POST">
        <section class="form-regist">
            <h4>Regist balance</h4>
            <input class="Controls" type="text" name="id" placeholder="id" value="<?php echo $row['id_saldo'] ?>" readonly>
            <input class="Controls" type="text" name="balance" placeholder="Balance" value="<?php echo $row['saldo'] ?>" require>

            <input class="boton" type="submit" value="Regist">
        </section>
</body>

</html>