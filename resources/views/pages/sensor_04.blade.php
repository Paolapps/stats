@extends('layouts.layout')
@section('content')
<section id="about" class="section-white">
 <div class="container-fluid"> 
     <p>Sensor 4</p>
       <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
            <h5>Time in minutes customers in Store</h5> 
            <div class="well">        
            <div class="row text-center">
                <div class="col-sm-12"></div>
            </div>
           </div>
        </div>
        <div class="col-sm-4">
         <h5>Number of visitors through time</h5>
         <div class="well"> 
            <div class="row text-center">
                <div class="col-sm-12"></div>
            </div>
          </div>
        </div>
      </div>
     <div class="row">
        <div class="col-sm-4 col-sm-offset-2 aButton">
            <h5>DB during time</h5>
            <div class="well">       
            <div class="row text-center">
                <div class="col-sm-12"></div>             
            </div>
           </div>
        </div>
        <div class="col-sm-4">
          <h5>Average</h5>
          <div class="well">  
            <div class="row text-center">
                <div class="col-sm-12"></div>
            </div>
          </div>
        </div>
      </div>
 </div>
</section>
@endsection