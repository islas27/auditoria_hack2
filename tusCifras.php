<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>#####</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-custom.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        
    
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-inverse" role="navigation">
            <div class="navbar-header">
               <a class="navbar-brand" href="@{Application.index}"><span class="glyphicon glyphicon-cutlery"></span>&nbsp; &nbsp;Tu rebanada del pastel</a>
            </div>
        </nav>
    
    
        <div class="container">
            <div class="col-md-6">
                <form class="form-horizontal" action="#" method="post" style="text-align:center" >
                    <fieldset>
                        <legend><span class="glyphicon glyphicon-home"></span>&nbsp; &nbsp;####</legend>
                        
                        mapa con municipio pintado!
                    </fieldset>
                </form>
            </div>
            
            <div class="col-md-6">
                <form class="form-horizontal" action="#" method="post" style="text-align:center" >
                    <fieldset>
                      <legend><span class="glyphicon glyphicon-usd"></span>&nbsp; &nbsp;Lo que invirtieron en tí en el año #####</legend>
                      
                      
                      
                        <div id="canvas-holder" class="col-md-offset-2 col-md-7">
                                <canvas id="chart-area" width="550" height="550"/>
                        </div>
                      
        
                        <script>
                            var doughnutData = [
                                    {value: 300,
                                        color:"#F7464A",
                                        highlight: "#FF5A5E",
                                        label: "Red"},
                                    {value: 50,
                                        color: "#46BFBD",
                                        highlight: "#5AD3D1",
                                        label: "Green"},
                                    {value: 100,
                                        color: "#FDB45C",
                                        highlight: "#FFC870",
                                        label: "Yellow"},
                                    {value: 140,
                                        color: "#949FB1",
                                        highlight: "#A8B3C5",
                                        label: "Grey"},
                                    {value: 420,
                                        color: "#F7BE81",
                                        highlight: "#F5D0A9",
                                        label: "Beige"},
                                    {value: 80,
                                        color: "#FA8258",
                                        highlight: "#F79F81",
                                        label: "Orange"},
                                    {value: 25,
                                        color: "#F7819F",
                                        highlight: "#F5A9BC",
                                        label: "Pink"},
                                    {value: 120,
                                        color: "#4D5360",
                                        highlight: "#616774",
                                        label: "Dark Grey"}
        
                                ];
        
                                window.onload = function(){
                                        var ctx = document.getElementById("chart-area").getContext("2d");
                                        window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
                                };
                        </script>
                      
                    </fieldset>
                </form>
            </div>
        </div>
    
        <div class="container"><br><br><br>
            <div class="col-md-6">
                <form class="form-horizontal" action="#" method="post" style="text-align:center" >
                    <fieldset>
                        <legend>Obras públicas</legend>
                        
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tipo de obra</th>
                                    <th>Aporte por persona</th>
                                    <th>Lugar de tu municipio en el estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Material de construcción</td><!-- adquisiciones -->
                                    <td><legend><span class="glyphicon glyphicon-home"></span>&nbsp; &nbsp;Colaboradores</legend></td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Construcciones en aeropuertos</td><!-- aeropistas -->
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Caminos</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Electrificación y alumbrado</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Equipamiento urbano y rural</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                            </tbody>
                        </table>
                        
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
   
  </body>
</html>