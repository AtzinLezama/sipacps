
<?php
include '../../php/database.php';



/* Un arreglo de las columnas a mostrar en la tabla */
$columns = ['id_publicacion ', 'mensaje', 'fecha',];


/* Nombre de la tabla */
$table = "tbl_publicacion";


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
        $html .= '<tr>';
        $html .= '<td data-titulo="nombre:" >' . $row['mensaje'] . '</td>';
        $html .= '<td data-titulo="apellido:">' . $row['fecha'] . '</td>';

        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin resultados</td>';
    $html .= '</tr>';
}


echo json_encode($html, JSON_UNESCAPED_UNICODE);

?> 