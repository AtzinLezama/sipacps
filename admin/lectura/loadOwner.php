
<?php
include '../../php/database.php';



/* Un arreglo de las columnas a mostrar en la tabla */
$columns = ['id_propietario ', 'nombre', 'apellido', 'num_departamento', 'direccion_permanente', 'email', 'telefono', 'id_foto',];


/* Nombre de la tabla */
$table = "tbl_propietario";


$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;


/* Filtrado */
$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}


/* Consulta */
$sql = "SELECT " . implode(", ", $columns) . " FROM $table $where ";
$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;



/* Mostrado resultados */
$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {

        $idfoto = $row['id_foto'];
        $foto = "SELECT * FROM tbl_foto WHERE id_foto = '$idfoto'";
        $query2 = mysqli_query($conn, $foto);
        $row1 = mysqli_fetch_array($query2);

        $html .= '<tr>';
        $html .= '<td data-titulo="nombre:" >' . $row['nombre'] . '</td>';
        $html .= '<td data-titulo="apellido:">' . $row['apellido'] . '</td>';
        $html .= '<td data-titulo="departamento:">' . $row['num_departamento'] . '</td>';
        $html .= '<td data-titulo="direccion:">' . $row['direccion_permanente'] . '</td>';
        $html .= '<td data-titulo="email:">' . $row['email'] . '</td>';
        $html .= '<td data-titulo="telefono:">' . $row['telefono'] . '</td>';
        $html .= '<td data-titulo="Foto:"><img width="100" src="data:' . $row1['tipo'] . '; base64,' . base64_encode($row1['imagen']) . '"></td>';

        $html .= '<td class="accion"><a href="actualizarOwner.php?id=' . $row['id_propietario'] . '" ><img src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABnUlEQVRoge3ZPW7VQBSG4XMlKn5aGhoElNCwARpoWUEkiAhIEWQB6YiyECQKIlHCBhKxBip+xRJQoCJ+KDJRrubavlcp7oyleTvPnOJ7fXzGkh3RaFwIXMPl0jkuDB7js1NOcIT7pXOtDG5gB51FjnGvdMalYDvd/TE+ls45SpLo60LOn9JZB5mTOMEufkxOZE6iw1Zauzki86F05gUyiRfZXp/MMe6WyttLNhMHAzW5zKN15xzF4mB32B6o3U01/3B93VkHwXP9R2yHV1nts1Tb4WWpzAuMSCzIYKtWiVXfEx0OnB8CvY9cEVboxJBQVZ1oElXQJGqhSdRCk6iFJlELTaIWmkQtNIlaaBK10CRqARtW+9qRS1T1tWOGr5PuREQEHqRwv7A3uU6cgTcp4H62Po1ORETgCn6ngHeyvWlIRETgaQp51LO3l0nU9zidgcMUdHNu7Tb208xMQuKW8yP3Ezad/teeP4a/YaN01lHwemCg/+I9HmJWOudS8CWbgUM8wdXS2ZZxKbv+GREi4l1EvJ3NZt/XH6nRqIr/7/Bnz6/r+RMAAAAASUVORK5CYII="  width="30" height="30" /> </a><a href="deleteOwner.php?id=' . $row['id_propietario'] . '"   onclick="return confirmacion()"><img src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAByklEQVRoge2aS07DQAyGPyPEjiUHQL0FlBPAvYB7ARLcgW54iJa3EAvE42dBKiFoGns6SSDtt5x6xv7H9iTKFDIhaUXSvqRLVXMhaU/SSi7/2SgCi7Lbdty/KHZZkjYctv1xZpqILcR4i+uyr2Ip10JtY9N+lHQIVJZKQxyaWb/sx6qMfGQOZhamxjI1I2MkDYD1LOHEGZhZr8rI2yPDGYOZBZfvuRMycthsAlvB8dLm/ca1w4ZljxGOXTGzI4Cfj4bo+ASuPAHOXWl1RoinR+qiMxlxbeJ/EJI1Iw/AS3osybwAjx5DlxAzE87zPDOjwnclkdf4NsrL7TMipI2TqxYhnclIG0LcVfDXhXQmI4tmz7JoRjojpJZmvwHe4rEk8w7ceo3dQszsI7JwBq4Lny6iXxqbLK+Qr6iQJk+uWoV0JiMLIQmEynjRIw2wEJJ98Rmp/TmS7d5vCuLrlchNSIiZvQL3kTmJ3BW+3KRchjZxcoVLOEVIE30yv0K8Fz2VTiRtMmFjKsbLLmPD5ZsipMzJQaZxmOfSShFyljAnynl0gusPA9+RtAqcAmvRuU6GQM/MniOTwhkxsydgGzgh78eIN+AY2ImKAPgEPnEXxHdx3bEAAAAASUVORK5CYII=" width="30" height="30" /></a></td>';

        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin resultados</td>';
    $html .= '</tr>';
}


echo json_encode($html, JSON_UNESCAPED_UNICODE);

?> 