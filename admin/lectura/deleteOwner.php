<?php
require '../../php/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_propietario WHERE id_propietario = '$id'";
    $result = mysqli_query($conn, $query);
    echo '
    <script>
    alert("Propietario eliminado correctamente");
    window.location.href = "readOwner.php";
    </script>
    ';
    echo $id;
} else if (!$result) {
    echo '
    <script>
    alert("Propietario no eliminado ");
    window.location.href = "readOwner.php
    ";
    </script>
    ';
}
