@extends('layouts.layout')
@section('content')

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Age</a></li>
        <li><a href="#section3">Gender</a></li>
        <li><a href="#section3">Geo</a></li>
      </ul><br>
    </div>
    <br>
    
    

    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <div id="c1_avgMins" style="min-width: 600px; height: 300px; max-width: 600px; margin: 0 auto"></div>
        <div id="test" style="min-width: 310px; height: 300px; max-width: 400px; margin: 0 auto"></div>
        <div id="container" style="min-width: 310px; height: 300px; max-width: 400px; margin: 0 auto"></div>
        <div id="div_grafica_pie2" style="min-width: 310px; height: 300px; max-width: 400px; margin: 0 auto"></div>

      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-------------------------------- Intro -----------------------------------*-->

<div id="intro">
    <div class="container-fluid">
           <!--  Logo image-->
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               
            </div>
        </div>
    </div>
</div>  

<!-------------------------------- Section About ------------------------------*-->
<section id="about" class="section-blue">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="section-heading">ABOUT US</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <p class="text-justify">In 2010 Michael and Jon came together 
                    after a mutual friend pointed out they both were both prolific 
                    authors of great bedroom pop-rock songs.  
                    After a few misfires - including Jon presenting some folky 
                    material - Michael finished off Jon's 'Don't Be a Stranger', 
                    followed quite soon after by "Kitchen Table".  More and more 
                    tunes popped out. A partnership was born.</p>
                    
                <p class="text-justify"> Matt - formerly of Michael's old group 
                    Beautiful Disaster - joined ship in late 2015 and they were 
                    on their way to the open mics!</p>
            </div>
        </div>
        
        <div class="row text-center">
            <div class="col-md-4 col-sm-4 about-wrapper"> 
                <div>
                    <h4 class="sub-heading">JON</h4>
                </div>
                <p class="text-justify">Jon is our rhythm guitarist and lead singer. 
                    He relishes being on stage but is the infant of the group.
                    Since his early 20's he's been sitting at home in the dark 
                    writing some magical tunes.</p>
                <p class="text-justify">He loves the
                    Fauves and lives with his Lovely Latina wife.
                </p>
            </div>
            <div class="col-md-4 col-sm-4 about-wrapper">
                <div>
                    <h4 class="sub-heading">MICHAEL</h4>
                </div>
                <p class="text-justify">Michael is our five-string fretless bassist 
                    and lead singer! He is always present with his purple energy. 
                    The band's leader grew up in Canberra but has been all around 
                    the world, rock-climbing and learning Spanish. Michael has sung, 
                    played and recorded music since the mid-1990s.
                </p>
            </div>
            <div class="col-md-4 col-sm-4 about-wrapper">
                <div>
                    <h4 class="sub-heading">MATT</h4>
                </div>
                <p class="text-justify">Matt is our drummer and enduring backing 
                    vocalist. He points out our boring tunes and embellishes all 
                    the good ones with his kit. Our number one fan, he gets us 
                    access to our rehearsal space and is always in a positive mood.
                </p>
            </div>           
        </div>
    </div>  
</section>
@endsection