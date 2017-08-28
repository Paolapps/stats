@extends('layouts.layout')
@section('content')
<section id="about" class="section-white">
 <div class="container-fluid"> 
     <h2>Sensor-1</h2>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
            <h5>General Stats Sensor-1</h5> 
           <div class="well graph">          
                <div class="row">
                    </br></br>
                    <div class="col-xs-5 col-xs-offset-1">
                        <p class="stats" ><span class="data1" id="c1_statCust"></span></br>Total visitors</p>
                        <p class="stats" ><span class="data2" id="c1_statTime"></span></br>Average time</p>
                        <p class="stats" ><span class="data3" id="c1_statDB"></span></br>Signal</p>
                    </div>
                    <div class="col-xs-6">
                        <p class="stats" ><span class="data4" id="c1_statLongTime"></span></br>Top time</p>
                        <p class="stats" ><span class="data5" id="c1_statReenter"></span></br>Returning customers</p>
                        <p class="stats" ><span class="data6" id="c1_statHighDB"></span></br>Top signal</p>
                    </div>
                </div>
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