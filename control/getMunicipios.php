<?php
    include("../resources/connection.php");
    $conexion = my_connection();
    $query = 'select distinct municipio from presupuesto where ejercicio = '.$_GET['ejercicio'].';';
    $resultado = $conexion->query($query);
    $arrayobj = new ArrayObject();
    while($registro = $resultado->fetch_assoc()){
        $arrayobj->append($registro['municipio']);
    }
    echo json_encode($arrayobj);
?>