@extends('layouts.layout')
@section('content')
<section id="about" class="section-white">
 <div class="container-fluid"> 
     <h2>Sensor-3</h2>
       <div class="row">
        <div class="col-sm-8 col-sm-offset-2"> 
            <h5>General stats Sensor-3</h5> 
            <div class="well"></div>
        </div>
       </div>
       <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
         <h5>Number of visitors through time Sensor-3</h5>
         <div class="well graph" id="c3_numOfVisits"></div>
        </div>
      </div>
     <div class="row">
        <div class="col-sm-8 col-sm-offset-2"> 
            <h5>Percentage of reception strength Sensor-3</h5>
            <div class="well graph" id="c3_avgSignal"></div>
        </div>
     </div>
     <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
          <h5>Time of customers in Store Sensor-3</h5>
          <div class="well graph" id="c3_avgMins"></div>
        </div>
      </div>
 </div>
</section>
@endsection