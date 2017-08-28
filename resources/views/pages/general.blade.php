
@extends('layouts.layout')
@section('content')
<section id="about" class="section-white">
 <div class="container-fluid"> 
    <h2>General Stats</h2>
     <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
          <h5>Reception strength Sensor-1</h5>
            <div class="well graph" id="c1_avgSignal"></div> 
        </div>
        <div class="col-sm-4">
         <h5>Reception strength Sensor-2</h5>
         <div class="well graph" id="c2_avgSignal"></div> 
        </div>
        </div>
        <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
         <h5>Reception strength Sensor-3</h5>
         <div class="well graph" id="c3_avgSignal"></div> 
        </div>
        <div class="col-sm-4">
         <h5>Reception strength Sensor-4</h5>
         <div class="well graph" id="c4_avgSignal"></div> 
        </div>
      </div>
 </div>
</section>
    
@endsection