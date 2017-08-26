<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Stats">
        
        <meta name="author" content="Paola Sanabria">
        
        <title>Kepler Stats</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://use.fontawesome.com/fdb3ab1e60.js"></script>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
        
        <script>
            window.Laravel =
            <?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>
        </script>
  
</head>
    
    <body> 
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
                <div class="navbar-brand" >Kepler Stats</div>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li><a href="/">Home</a></li>
                  <li><a href="general">General Stats</a></li>
                  <li><a href="sensor_01">Sensor-1</a></li>
                  <li><a href="sensor_02">Sensor-2</a></li>
                  <li><a href="sensor_03">Sensor-3</a></li>
                  <li><a href="sensor_04">Sensor-4</a></li>               
                </ul>
              </div>
            </div>
          </nav>
        <div id="main">
            @yield('content')     
        </div>
        
        <!------------------------------------------footer black block ---------------------------->
        
        <div class="copyright">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-sm-4 col-sm-offset-4">
                        <p> 2017  |  Kepler  |  SITE  |  PAOLA SANABRIA</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!------------------------------------------scripts ---------------------------->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
                accesskey=""integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
        crossorigin="anonymous"></script>
        
       
        <!--<script src="Highcharts-5.0.14/code/highcharts.js"></script>-->
        <!--<script src="Highcharts-5.0.14/code/modules/exporting.js"></script>-->
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <!--<script src="js/highcharts.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
    </body>
</html>
