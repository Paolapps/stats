@extends('layouts.layout')
@section('content')

<section id="about" class="section-white">
 <div class="container-fluid"> 
     
       <div class="row">
        <div class="col-sm-4 col-sm-offset-2 aButton">
          <a href="sensor_01">
            <div class="well"> 
            <h4>Sensor-1</h4>         
            <div class="row text-center">
                <div class="col-sm-4"><p>10 Customers</p></div>
                <div class="col-sm-4"><p>Weak Signal</p></div>
                <div class="col-sm-4"><p>5 Minutes</p></div>
            </div>
           </div>
          </a>
        </div>
        <div class="col-sm-4 aButton">
         <a href="sensor_02">
          <div class="well">
            <h4>Sensor-2</h4>
            <div class="row text-center">
                <div class="col-sm-4"><p>10 Customers</p></div>
                <div class="col-sm-4"><p>Weak Signal</p></div>
                <div class="col-sm-4"><p>5 Minutes</p></div>
            </div>
          </div>
         </a>
        </div>
      </div>
     
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2 aButton">
         <a href="sensor_03">
          <div class="well">
            <h4>Sensor-3</h4>
            <div class="row text-center">
                <div class="col-sm-4"><p>10 Customers</p></div>
                <div class="col-sm-4"><p>Weak Signal</p></div>
                <div class="col-sm-4"><p>5 Minutes</p></div>
            </div>
          </div>
         </a>
        </div>
        <div class="col-sm-4 aButton">
         <a href="sensor_04">
          <div class="well">
            <h4>Sensor-4</h4>
            <div class="row text-center">
                <div class="col-sm-4"><p>10 Customers</p></div>
                <div class="col-sm-4"><p>Weak Signal</p></div>
                <div class="col-sm-4"><p>5 Minutes</p></div>
            </div>
          </div>
         </a>
        </div>
      </div>
       <div class="row">
        <div class="col-sm-4 col-sm-offset-2 aButton">
          <a href="general">
          <div class="well">
            <h4>General Time</h4>
            <i class="fa fa-circle peak" aria-hidden="true">Peak</i>
            <i class="fa fa-circle moderate" aria-hidden="true">Moderate</i>
            <i class="fa fa-circle low" aria-hidden="true">Low</i>
            
            <i class="fa fa-universal-access fa-3x peak" aria-hidden="true"></i>
            <i class="fa fa-universal-access fa-3x moderate" aria-hidden="true"></i>
            <i class="fa fa-universal-access fa-3x low" aria-hidden="true"></i>
          </div>
          </a>
        </div>
        <div class="col-sm-4 aButton">
          
            <h5>Number of visitors over time Sensor-1</h5>
           <div class="well graph" id="c1_numOfVisits"></div> 
          
            
        </div>
           <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0"> 
            <h5>Reception strength Sensor-1</h5>
            <div class="well graph" id="c1_avgSignal"></div>
        </div>
       </div>
      </div>

    </div>    
</section>

@endsection