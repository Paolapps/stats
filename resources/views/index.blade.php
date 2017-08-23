@extends('layouts.layout')
@section('content')

<section id="about" class="section-white">
 <div class="container-fluid"> 
       <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
          <div class="well">
            <h4>Sensor 1</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <h4>Sensor 2</h4>
            <p>100 Million</p> 
          </div>
        </div>
      </div>
     
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
          <div class="well">
            <h4>Sensor 3</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <h4>Sensor 4</h4>
            <p>100 Million</p> 
          </div>
        </div>
      </div>
        
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
        <h4>Dashboard</h4>
        <div id="c1_avgMins"></div>
        </div>
      </div>
      <div class="row">
       <div class="col-sm-8 col-sm-offset-2"> 
        <div id="test"></div>
       </div>
      </div>
       <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
        <div id="c1_numOfVisits"></div>
        </div>
       </div>
       <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
        <div id="div_grafica_pie2"></div>
        </div>   
      </div>
      </div>

    </div>    
</section>

@endsection