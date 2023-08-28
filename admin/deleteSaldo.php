<?php
require '../php/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_saldo WHERE id_saldo = '$id'";
    $result = mysqli_query($conn, $query);
    echo '
    <script>
    alert("post deleted");
    window.location.href = "readSaldos.php";
    </script>
    ';
    echo $id;
} else if (!$result) {
    echo '
    <script>
    alert("post not deleted");
    window.location.href = "readSaldos.php
    ";
    </script>
    ';
}
