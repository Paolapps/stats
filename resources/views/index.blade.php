@extends('layouts.layout')
@section('content')

<section id="about" class="section-white">
 <div class="container-fluid"> 
     
       <div class="row">
        <div class="col-sm-4 col-sm-offset-2 aButton">
          <a href="sensor_01">
            <h5>Sensor-1</h5>
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
          </a>
        </div>
        <div class="col-sm-4 aButton">
         <a href="sensor_02">
          <h5>Sensor-2</h5>
          <div class="well graph">           
            <div class="row">
                </br></br>
                    <div class="col-xs-5 col-xs-offset-1">
                        <p class="stats" ><span class="data1" id="c2_statCust"></span></br>Total visitors</p>
                        <p class="stats" ><span class="data2" id="c2_statTime"></span></br>Average time</p>
                        <p class="stats" ><span class="data3" id="c2_statDB"></span></br>Signal</p>
                    </div>
                    <div class="col-xs-6">
                        <p class="stats" ><span class="data4" id="c2_statLongTime"></span></br>Top time</p>
                        <p class="stats" ><span class="data5" id="c2_statReenter"></span></br>Returning customers</p>
                        <p class="stats" ><span class="data6" id="c2_statHighDB"></span></br>Top signal</p>
                    </div>
                </div>
          </div>
         </a>
        </div>
      </div>
     
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2 aButton">
         <a href="sensor_03">
          <h5>Sensor-3</h5>
            <div class="well graph">
                <div class="row">
                    </br></br>
                    <div class="col-xs-5 col-xs-offset-1">
                        <p class="stats" ><span class="data1" id="c3_statCust"></span></br>Total visitors</p>
                        <p class="stats" ><span class="data2" id="c3_statTime"></span></br>Average time</p>
                        <p class="stats" ><span class="data3" id="c3_statDB"></span></br>Signal</p>
                    </div>
                    <div class="col-xs-6">
                        <p class="stats" ><span class="data4" id="c3_statLongTime"></span></br>Top time</p>
                        <p class="stats" ><span class="data5" id="c3_statReenter"></span></br>Returning customers</p>
                        <p class="stats" ><span class="data6" id="c3_statHighDB"></span></br>Top signal</p>
                    </div>
                </div>
          </div>
         </a>
        </div>
        <div class="col-sm-4 aButton">
         <a href="sensor_04">
          <h5>Sensor-4</h5>
          <div class="well graph">
                <div class="row">
                   </br></br>
                    <div class="col-xs-5 col-xs-offset-1">
                        <p class="stats" ><span class="data1" id="c4_statCust"></span></br>Total visitors</p>
                        <p class="stats" ><span class="data2" id="c4_statTime"></span></br>Average time</p>
                        <p class="stats" ><span class="data3" id="c4_statDB"></span></br>Signal</p>
                    </div>
                    <div class="col-xs-6">
                        <p class="stats" ><span class="data4" id="c4_statLongTime"></span></br>Top time</p>
                        <p class="stats" ><span class="data5" id="c4_statReenter"></span></br>Returning customers</p>
                        <p class="stats" ><span class="data6" id="c4_statHighDB"></span></br>Top signal</p>
                    </div>
                </div>
          </div>
         </a>
        </div>
      </div>
      
      </div>

    </div>    
</section>

@endsection