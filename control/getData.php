<?php
    include("../resources/connection.php");
    $conexion = my_connection();
    $query = "select concepto, monto_ejercido/habitantes as gp from presupuesto where municipio = '".$_GET['municipio']."' and ejercicio = '".$_GET['year']."';";
    $resultado = $conexion->query($query);
    $arrayValues = new ArrayObject();
    $arrayNames = new ArrayObject();
    while($registro = $resultado->fetch_assoc()){
        $arrayValues->append($registro['gp']);
        $arrayNames->append($registro['concepto']);
    }
    while(count($arrayValues) < 15){
        $arrayValues->append(0);
        $arrayNames->append(0);
    }
    $str1 = chartData($arrayValues, $arrayNames);
    $query = "select * from rebanada where municipio = '".$_GET['municipio']."' and anio = '".$_GET['year']."';";
    $resultado = $conexion->query($query);
    $str = "";
    while($registro = $resultado->fetch_assoc()){
        $arrayValues->append($registro['gasto_persona']);
        $arrayNames->append($registro['concepto']);
        $str.= '<tr>';
        $str.= '<td>'.$registro['concepto'].'</td>';
        $str.= '<td>'.$registro['gasto_persona'].'</td>';
        //echo del glyphicon: <span class="glyphicon glyphicon-home"></span>&nbsp; &nbsp;
        $str.= '<td>Lugar en el estado: ###</td>';
        $str.= '</tr>';
    }
    while(count($arrayValues) < 15){
        $arrayValues->append(0);
        $arrayNames->append(0);
    }
    $str2 = chartData($arrayValues, $arrayNames);
    $arrayobj = [$str1, $str2, $str];
    echo json_encode($arrayobj);
    
    
    function chartData($value, $name){
        $str =
'           {value: '.$value[0].',
            color:"#367F7F",
            highlight: "#56CCCB",
            label: "'.$name[0].'"},
            {value: '.$value[1].',
            color: "#285C7F",
            highlight: "#4094CC",
            label: "'.$name[1].'"},
            {value: '.$value[2].',
            color: "#357F47",
            highlight: "#55CC72",
            label: "'.$name[2].'"},
            {value: '.$value[3].',
            color: "#5E7F31",
            highlight: "#96CC4F",
            label: "'.$name[3].'"},
            {value: '.$value[4].',
            color: "#CCC976",
            highlight: "#FFFB94",
            label: "'.$name[4].'"},
            {value: '.$value[5].',
            color: "#B6CC2F",
            highlight: "#E4FF3B",
            label: "'.$name[5].'"},
            {value: '.$value[6].',
            color: "#CC913C",
            highlight: "#FFB54B",
            label: "'.$name[6].'"},
            {value: '.$value[7].',
            color: "#CC6E5A",
            highlight: "#FF8971",
            label: "'.$name[7].'"},
            {value: '.$value[8].',
            color: "#CC3F74",
            highlight: "#FF4F91",
            label: "'.$name[8].'"},
            {value: '.$value[9].',
            color: "#CC9699",
            highlight: "#FFBBBF",
            label: "'.$name[9].'"},
            {value: '.$value[10].',
            color: "#9684CC",
            highlight: "#BBA6FF",
            label: "'.$name[10].'"},
            {value: '.$value[11].',
            color: "#6567CC",
            highlight: "#7E81FF",
            label: "'.$name[11].'"},           
            {value: '.$value[12].',
            color: "#4687CC",
            highlight: "#58A9FF",
            label: "'.$name[12].'"},    
            {value: '.$value[13].',
            color: "#36B7CC",
            highlight: "#43E5FF",
            label: "'.$name[13].'"},    
            {value: '.$value[14].',
            color: "#25CC8B",
            highlight: "#2FFFAE",
            label: "'.$name[14].'"}';
            $str = json_decode($str);
            return $str;
    }
?>