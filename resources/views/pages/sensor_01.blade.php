@extends('layouts.layout')
@section('content')
<section id="about" class="section-white">
 <div class="container-fluid"> 
     <p>Sensor 1</p>
       <div class="row">
        <div class="col-sm-8 col-sm-offset-2"> 
            <h5>Time in minutes customers in Store</h5> 
            <div class="well"></div>
        </div>
       </div>
       <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
         <h5>Number of visitors through time</h5>
         <div class="well" id="c1_numOfVisits"></div>
         
         
         
        </div>
      </div>
     <div class="row">
        <div class="col-sm-8 col-sm-offset-2"> 
            <h5>DB during time</h5>
            <div class="well" id="c1_avgSignal"></div>
        </div>
     </div>
     <div class="row">   
        <div class="col-sm-8 col-sm-offset-2"> 
          <h5>Average</h5>
          <div class="well" id="c1_avgMins"></div>
        </div>
      </div>
 </div>
</section>
@endsection