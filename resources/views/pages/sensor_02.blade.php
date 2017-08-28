@extends('layouts.layout')
@section('content')
<section id="about" class="section-white">
 <div class="container-fluid"> 
     <h2>Sensor-2</h2>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
            <h5>General Stats Sensor-2</h5> 
            <div class="well graph" id="stats_2">
                <p id="c2_statCust"></p>
                <p id="c2_statTime"></p>
                <p id="c2_statDB"></p>
                <p id="c2_statLongTime"></p>
                <p id="c2_statHighDB"></p>
                <p id="c2_statBusyTime"></p>
                <p id="c2_statReenter"></p>
            </div>
        </div>
        <div class="col-sm-4">
            <h5>Reception strength Sensor-2</h5>
            <div class="well graph" id="c2_avgSignal"></div>   
        </div>
      </div>
       <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
         <h5>Number of visitors over time Sensor-2</h5>
         <div class="well graph" id="c2_numOfVisits"></div>
        </div>
      </div>
     <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
         <h5>Customer time in Store Sensor-2</h5>
         <div class="well graph" id="c2_timeSignal"></div>
        </div>
      </div>

     <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
          <h5>Time of customers in Store Sensor-2 (Values lest than 0 are not displayed)</h5>
          <div class="well graph" id="c2_avgMins"></div>
        </div>
      </div>
 </div>
</section>
@endsection