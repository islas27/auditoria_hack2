<?php
    include("resources/connection.php");
    $conexion = my_connection();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tu rebanada de pastel</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include("navbar.php");?>    
    <div class="container">
    <div class="col-md-offset-3 col-md-6">
        <form class="form-horizontal" action="tusCifras.php" method="GET" style="text-align:center" >
            <fieldset>
                <legend>¿Cuánto ha invertido tu municipio en tí?</legend>
                
                <div class="form-group"><br>
                    <label for="select" class="col-lg-4 control-label">Año: </label>
                    <div class="col-lg-6">
                        <select class="form-control" id="year" onchange="loadMunicipios()">
                            <option value="">Seleccione un Año</option>
                            <?php
                                $query = 'select DISTINCT ejercicio from presupuesto where ejercicio in (select DISTINCT ejercicio from obra_publica );';
                                $resultado = $conexion->query($query);
                                while($registro = $resultado->fetch_assoc()){
                                    echo '<option value="'.$registro['ejercicio'].'">'.$registro['ejercicio'].'</option>';
                                }
                                $resultado->free();
                            ?>
                            
                        </select>
                    </div>
                </div>
                
                <div class="form-group"><br>
                    <label for="select" class="col-lg-4 control-label">Municipio: </label>
                    <div class="col-lg-6">
                        <select class="form-control" id="municipio">
                            <option value="">Seleccione un Municipio</option>
                            
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <div><br><br><br>
                        <button type="submit" class="btn btn-primary">Ver</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    </div>

<script type="text/javascript">
    var e = document.getElementById("year");
    var f = document.getElementById("municipio");
    var loadMunicipios = function (){
        console.log('acceso a function');
        var ejercicio = e.options[e.selectedIndex].value;
        $.ajax({
                    url: 'control/getMunicipios.php?ejercicio=' + ejercicio,
                    dataType: 'json'
                  }).done(function (data) {
                        console.log(data["0"]);
                        x =0;
                        while (data["" + x + ""] != undefined){
                            console.log(data.x);
                            opt = document.createElement("option");
                            opt.setAttribute("value", data["" + x + ""]);
                            optTextnode = document.createTextNode(data["" + x + ""]);
                            opt.appendChild(optTextnode);
                            f.appendChild(opt);
                            x++
                        }
                  });
    }
    
</script>

        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- This is for creating the charts in the project -->
    <script src="js/Chart.min.js"></script>

  </body>
</html>