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
    <body onpageshow="loadMunicipiosStart()">
        <?php include("navbar.php");?>
        <div class="container">
            <div class="col-xs-6">
                <div class="form-group"><br>
                    <label for="select" class="col-lg-4 control-label">Año: </label>
                    <div class="col-lg-6">
                        <select class="form-control" id="year" name="year" onchange="reloadData()">
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
            </div>
            <div class="col-xs-6">
                <div class="form-group"><br>
                    <label for="select" class="col-lg-4 control-label">Municipio: </label>
                    <div class="col-lg-6">
                        <select class="form-control" id="municipio" name="municipio" onchange="reloadData()">
                            
                        </select>
                    </div>
                </div>
            </div>
        </div><br><br>
    
        <div class="" id="app-data" hidden>
            <div class="container">
                <div class="col-md-6">
                    <form class="form-horizontal" action="#" method="post" style="text-align:center" >
                        <fieldset>
                            <legend><br><span class="glyphicon glyphicon-home"></span>&nbsp; &nbsp;<?php echo $_GET['municipio']?></legend>
                            
                            mapa con municipio pintado!
                        </fieldset>
                    </form>
                </div>
                
                <div class="col-md-6">
                    <form class="form-horizontal" action="#" method="post" style="text-align:center" >
                        <fieldset>
                          <legend>Lo que gastó el Gobierno en tí<br>en el año por su operación en el <?php echo $_GET['year']?></legend>
                            
                            <div id="canvas-holder" class="col-md-offset-2 col-md-7">
                                    <canvas id="chart-area" width="500" height="500"/>
                            </div>
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        
            <div class="container"><br><br><br>
                <div class="col-md-6">
                
                <div id="canvas-holder2" class="col-md-offset-2 col-md-7">
                        <canvas id="chart-area2" width="500" height="500"/>
                </div>
                    
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
                                        <th>#####</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                </tbody>
                            </table>
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        
     <script type="text/javascript">
        
        var e = document.getElementById("year");
        var f = document.getElementById("municipio");
        var indexEjercicio = 2012;
        var indexMunicipio = "CHIHUAHUA";
        
        var loadMunicipios = function (){
            $.ajax({
                        url: 'control/getMunicipios.php?ejercicio=' + indexEjercicio,
                        dataType: 'json'
                      }).done(function (data) {
                            x =0;
                            while (data["" + x + ""] != undefined){
                                opt = document.createElement("option");
                                opt.setAttribute("value", data["" + x + ""]);
                                optTextnode = document.createTextNode(data["" + x + ""]);
                                opt.appendChild(optTextnode);
                                f.appendChild(opt);
                                x++
                            }
                      });
        }
        
        var loadMunicipiosStart = function (){
            loadMunicipios();
            var select = document.getElementsById("municipio")[0];
            select.value = indexMunicipio;
            reloadData();
        }
        
        var reloadData = function (){
            var newEjercicio = e.options[e.selectedIndex].value;
            var newMunicipio = f.options[e.selectedIndex].value;
            if (newEjercicio != indexEjercicio) {
                indexEjercicio = newEjercicio;
                loadMunicipios();
                var select = document.getElementsByName("municipio")[0];
                select.value = indexMunicipio;
            }else{
                indexMunicipio = newMunicipio;
            }
            $.ajax({
                url: 'control/getData.php?year=' + indexEjercicio + '&municipio=' + indexMunicipio,
                dataType: 'json'
            }).done(function(data){
                    console.log(data);
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