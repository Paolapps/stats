@extends('layouts.layout')
@section('content')
<section id="about" class="section-white">
 <div class="container-fluid"> 
     <h2>Sensor-4</h2>
       <div class="row">
        <div class="col-sm-8 col-sm-offset-2"> 
            <h5>General stats Sensor-4</h5> 
            <div class="well"></div>
        </div>
       </div>
       <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
         <h5>Number of visitors through time Sensor-4</h5>
         <div class="well graph" id="c4_numOfVisits"></div>
        </div>
      </div>
     <div class="row">
        <div class="col-sm-8 col-sm-offset-2"> 
            <h5>Percentage of reception strength Sensor-4</h5>
            <div class="well graph" id="c4_avgSignal"></div>
        </div>
     </div>
     <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
          <h5>Time of customers in Store Sensor-4</h5>
          <div class="well graph" id="c4_avgMins"></div>
        </div>
      </div>
 </div>
</section>
@endsection