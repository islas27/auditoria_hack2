<?php
    include("resources/connection.php");
    $conexion = my_connection();
    include("variablesVistas.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tu rebanada del pastel</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-custom.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        
    
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
        <?php include("navbar.php");?>  
    
        <div class="container">
            
            
            <div class="col-xs-12">
                <form class="form-horizontal" action="#" method="post" style="text-align:center" >
                    <fieldset>
                      <legend>Lo que gastó el Gobierno en tí<br>en el año por su operación en el <?php echo $_GET['year']?></legend>
                      
                        <?php
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
                            
                            //$resultado->free();
                            chart(500, $arrayValues, $arrayNames);
                        ?> 
                    </fieldset>
                </form>
            </div>
        </div>
    
        <div class="container"><br><br><br>
            <div class="col-md-6">
            <?php
                $query = "select * from rebanada where municipio = '".$_GET['municipio']."' and anio = '".$_GET['year']."';";
                $resultado = $conexion->query($query);
                $arrayValues = new ArrayObject();
                $arrayNames = new ArrayObject();
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
        
                $resultado->free();
                chart2(500, $arrayValues, $arrayNames);
            ?>
                
            </div>
            <div class="col-md-6">
                <form class="form-horizontal" action="#" method="post" >
                    <fieldset>
                        <legend>Obras públicas</legend>
                        
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>Tipo de obra</th>
                                    <th>Aporte por persona</th>
                                    <th>Lugar de <?php echo $_GET['municipio']?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    echo $str;
                                ?>
                            </tbody>
                        </table>
                        
                    </fieldset>
                </form>
            </div>
            <div class="col-md-12">
                <form class="form-horizontal" action="#" method="post" style="text-align:center" >
                    <fieldset>
                        <legend><br><span class="glyphicon glyphicon-home"></span>&nbsp; &nbsp;<?php echo $_GET['municipio']?></legend>
                        <embed id="estado" src="images/Municipios_de_Chihuahua2.svg"/>
                    </fieldset>
                </form>
            </div>
        </div>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- This is for creating the charts in the project -->
    <script src="js/Chart.min.js"></script>
    <script src="js/color.js"></script>
    <script type="text/javascript">
        cambiarColor("<?php echo $_GET['municipio']?>");
    </script>
  </body>
</html>