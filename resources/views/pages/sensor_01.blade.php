@extends('layouts.layout')
@section('content')
<section id="about" class="section-white">
 <div class="container-fluid"> 
     <h2>Sensor-1</h2>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
            <h5>General Stats Sensor-1</h5> 
            <div class="well graph" id="stats_1">
                <p id="c1_statCust"></p>
                <p id="c1_statTime"></p>
                <p id="c1_statDB"></p>
                <p id="c1_statLongTime"></p>
                <p id="c1_statHighDB"></p>
                <p id="c1_statBusyTime"></p>
                <p id="c1_statReenter"></p>
            </div>
        </div>
        <div class="col-sm-4">
            <h5>Reception strength Sensor-1</h5>
            <div class="well graph" id="c1_avgSignal"></div>   
        </div>
      </div> 
       <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
         <h5>Number of visitors over time Sensor-1</h5>
         <div class="well graph" id="c1_numOfVisits"></div>
        </div>
      </div>
     <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
         <h5>Reception strength over time Sensor-1 (High decibel means away from sensor)</h5>
         <div class="well graph" id="c1_timeSignal"></div>
        </div>
      </div>

     <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
          <h5>Customer time in Store Sensor-1 (Values lest than 0 are not displayed)</h5>
          <div class="well graph" id="c1_avgMins"></div>
        </div>
      </div>
 </div>
</section>
@endsection