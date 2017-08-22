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
        <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="{{URL::asset('images/mini-logo.png')}}">
        <script>
            window.Laravel =
            <?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>
        </script>
  
</head>
    
    <body>
        
        <nav class="navbar navbar-inverse visible-xs">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dashboard</a></li>
                <li><a href="#">Age</a></li>
                <li><a href="#">Gender</a></li>
                <li><a href="#">Geo</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="main">
            @yield('content')     
        </div>
        <!------------------------------------------footer contents ---------------------------->       
        <footer>
            <div class="container">
                <div class="row">
                    
                    <div class=" ft-contact col-md-offset-3 col-md-3 col-sm-offset-1 col-sm-4">
                        <h5>FIND US</h5>
                        <p><a href="mailto:girapp@outlook.com" class="phone-link"><i class="fa fa-envelope footer-icon">
                                </i> E-mail : girapp@outlook.com</p>
                        <p><i class="fa fa-map-pin footer-icon"></i> Melbourne. Australia</p>
                    </div>
                    
                    <div class=" col-md-2 col-sm-3 pull-left">
                        <h5 class="align-title">OUR SITE</h5>
                        <table class="footer-links">
                            <tbody>
                                <tr>
                                    <td><a href="{{url('/')}}">Home</a></td>
                                    <td><a href="{{url('/videos')}}">Videos</a></td>
                                </tr>
                               
                                <tr>
                                    <td><a href="{{url('/albums')}}">Photos</a></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            
        </footer>
        <!------------------------------------------footer black block ---------------------------->
        
        <div class="copyright">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <p> 2017 | Kepler </p>
                    </div>
                    <div class="col-lg-offset-1 col-lg-5 col-md-6 col-sm-6">
                        <p>SITE | PAOLA SANABRIA</p>
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
