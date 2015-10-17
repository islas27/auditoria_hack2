<?php
    //login.php
    $error1 =
    '<div class="col-md-offset-3 col-md-6">
        <div class="alert alert-dismissible alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>No seleccionaste todos los datos</strong>
        </div>
    </div>';
    
    //carousel
    function carousel($img){
        echo
        '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="hover">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img alt="" src='.$img[0].'>
                </div>
                <div class="item">
                    <img alt="" src='.$img[1].'>
                </div>
                <div class="item">
                    <img alt="" src='.$img[2].'>
                </div>
                <div class="item">
                    <img alt="" src='.$img[3].'>
                </div>
                <div class="item">
                    <img alt="" src='.$img[4].'>
                </div>
            </div>
        
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>';
    }
    
    function chart($width, $value, $name){
        echo
        '<div id="canvas-holder" class="col-md-offset-2 col-md-7">
                <canvas id="chart-area" width="'.$width.'" height="'.$width.'"/>
        </div>
      

        <script>
            var doughnutData = [
                    {value: '.$value[0].',
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
 label: "'.$name[14].'"}

                ];
        </script>';
    }
    
    function chart2($width, $value, $name){
        echo
        '<div id="canvas-holder2" class="col-md-offset-2 col-md-7">
                <canvas id="chart-area2" width="'.$width.'" height="'.$width.'"/>
        </div>
      

        <script>
            var doughnutData2 = [
                    {value: '.$value[0].',
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
 label: "'.$name[14].'"}

                ];

                window.onload = function(){
                        var ctx = document.getElementById("chart-area").getContext("2d");
                        window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
                        var ctx2 = document.getElementById("chart-area2").getContext("2d");
                        window.myDoughnut2 = new Chart(ctx2).Doughnut(doughnutData2, {responsive : true});
                };
        </script>';
    }
?>