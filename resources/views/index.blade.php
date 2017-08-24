@extends('layouts.layout')
@section('content')

<section id="about" class="section-white">
 <div class="container-fluid"> 
     
       <div class="row">
        <div class="col-sm-4 col-sm-offset-2 aButton">
          <a href="sensor_01">
            <div class="well"> 
            <h4>Sensor 1</h4>         
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
            <h4>Sensor 2</h4>
            <div class="row text-center">
                <div class="col-sm-4"><p>10 Customers</p></div>
                <div class="col-sm-4"><p>Weak Signal</p></div>
                <div class="col-sm-4"><p>5 Minutes</p></div>
            </div>
          </div>
          
        </div>
      </div>
     
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2 aButton">
         <a href="sensor_03">
          <div class="well">
            <h4>Sensor 3</h4>
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
            <h4>Sensor 4</h4>
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
        <div class="col-sm-4 col-sm-offset-2">
          <div class="well">
            <h4>General Time</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <h4>General Signal</h4>
            <p>100 Million</p> 
          </div>
        </div>
      </div>
        
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">  
        <div class="well"id="c1_avgMins"></div>
        </div>
      </div>
      
      </div>

    </div>    
</section>

@endsection