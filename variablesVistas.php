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
                        color:"#F7464A",
                        highlight: "#FF5A5E",
                        label: "'.$name[0].'"},
                    {value: '.$value[1].',
                        color: "#46BFBD",
                        highlight: "#5AD3D1",
                        label: "'.$name[1].'"},
                    {value: '.$value[2].',
                        color: "#FDB45C",
                        highlight: "#FFC870",
                        label: "'.$name[2].'"},
                    {value: '.$value[3].',
                        color: "#949FB1",
                        highlight: "#A8B3C5",
                        label: "'.$name[3].'"},
                    {value: '.$value[4].',
                        color: "#F7BE81",
                        highlight: "#F5D0A9",
                        label: "'.$name[4].'"},
                    {value: '.$value[5].',
                        color: "#FA8258",
                        highlight: "#F79F81",
                        label: "'.$name[5].'"},
                    {value: '.$value[6].',
                        color: "#F7819F",
                        highlight: "#F5A9BC",
                        label: "'.$name[6].'"},
                    {value: '.$value[7].',
                        color: "#4D5360",
                        highlight: "#616774",
                        label: "'.$name[7].'"}

                ];

                window.onload = function(){
                        var ctx = document.getElementById("chart-area").getContext("2d");
                        window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
                };
        </script>';
    }
?>