<?php
require '../php/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_staff WHERE id_staff = '$id'";
    $result = mysqli_query($conn, $query);
    echo '
    <script>
    alert("staff deleted");
    window.location.href = "readStaff.php";
    </script>
    ';
    echo $id;
} else if (!$result) {
    echo '
    <script>
    alert("staff not deleted");
    window.location.href = "readStaff.php
    ";
    </script>
    ';
}
