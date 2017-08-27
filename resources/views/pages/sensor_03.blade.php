@extends('layouts.layout')
@section('content')
<section id="about" class="section-white">
 <div class="container-fluid"> 
     <h2>Sensor-3</h2>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
            <h5>General Stats Sensor-3</h5> 
            <div class="well graph" id="stats_3"></div>
        </div>
        <div class="col-sm-4">
            <h5>Reception strength Sensor-3</h5>
            <div class="well graph" id="c3_avgSignal"></div>   
        </div>
      </div>
      <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
         <h5>Number of visitors over time Sensor-3</h5>
         <div class="well graph" id="c3_numOfVisits"></div>
        </div>
      </div>
     <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
         <h5>Customer time in Store Sensor-3</h5>
         <div class="well graph" id="c3_timeSignal"></div>
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