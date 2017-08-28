
/*
 * Stats of 4 data sensors.
 * Presented by: Paola Sanabria
 * To: Kepler Analytics
 * Date: 28/08/17
 * 
 * File: main.js
 * Description: Contains all the functions to render charts and stats
 */
$(document).ready(function(){
     //--------------------------------functions sensor 01
     c1_statReenter();
     c1_statCust();
     c1_statTime();
     c1_statDB();
     c1_statLongTime();
     c1_statHighDB();
     c1_numOfVisits();
     c1_avgSignal();
     c1_timeSignal();
     c1_avgMins();
            
     //--------------------------------functions sensor 02
     c2_statReenter();
     c2_statCust();
     c2_statTime();
     c2_statDB();
     c2_statLongTime();
     c2_statHighDB(); 
     c2_numOfVisits();
     c2_avgSignal();
     c2_timeSignal();
     c2_avgMins();
     
     //--------------------------------functions sensor 03
     c3_statReenter();
     c3_statCust();
     c3_statTime();
     c3_statDB();
     c3_statLongTime();
     c3_statHighDB();
     c3_numOfVisits();
     c3_avgSignal();
     c3_timeSignal();
     c3_avgMins();
      
     //--------------------------------functions sensor 04
     c4_statReenter();
     c4_statCust();
     c4_statTime();
     c4_statDB();
     c4_statLongTime();
     c4_statHighDB(); 
     c4_numOfVisits();
     c4_avgSignal();
     c4_timeSignal();
     c4_avgMins();
     
    
});

//---------------------------------------------------Sensor 01 -----------------
//------------------------------------------------------------------------------
$(function c1_numOfVisits() {   
        $.ajax({
        method:'get',
        url:'c1_numOfVisits', 
        success:function(response){
        //alert(response); 
           var renderDiv = 'c1_numOfVisits';
           _numOfVisits(response, renderDiv); 
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c1_avgSignal(){ 
    $.ajax({
        method:'get',
        url:'c1_avgSignal',
        success:function(response){
           //alert(response);
           var renderDiv = 'c1_avgSignal';
           _avgSignal(response, renderDiv); 
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c1_timeSignal(){  
   $.ajax({
        method:'get',
        url:'c1_timeSignal', 
        success:function(response){
            //alert(response);
            var renderDiv = 'c1_timeSignal';
            _timeSignal(response, renderDiv)   
        }, 
        error:function(response){
          // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
    
});

$(function c1_avgMins(){                      
    $.ajax({
        method:'get',
        url:'c1_avgMins',
        success:function(response){
            //alert(response);
            var renderDiv = 'c1_avgMins';
            _avgMins(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c1_statReenter(){                      
    $.ajax({
        method:'get',
        url:'c1_statReenter',
        success:function(response){
             //alert(response);
             var renderDiv = '#c1_statReenter';
            _statReenter(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c1_statCust(){
    $.ajax({
        method:'get',
        url:'c1_statCust',
        success:function(response){
             //alert(response);
             var renderDiv = '#c1_statCust';
             _statCust(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c1_statTime(){
    $.ajax({
        method:'get',
        url:'c1_statTime',
        success:function(response){
             //alert(response);
             var renderDiv = '#c1_statTime';
             _statTime(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c1_statDB(){
    $.ajax({
        method:'get',
        url:'c1_statDB',
        success:function(response){
             //alert(response);
             var renderDiv = '#c1_statDB';
            _statDB(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c1_statLongTime(){
    $.ajax({
        method:'get',
        url:'c1_statLongTime',
        success:function(response){
             //alert(response);
             var renderDiv = '#c1_statLongTime';
             _statLongTime(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c1_statHighDB(){
    $.ajax({
        method:'get',
        url:'c1_statHighDB',
        success:function(response){
             //alert(response);
             var renderDiv = '#c1_statHighDB';
             _statHighDB(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});


//---------------------------------------------------Sensor 02 -----------------
//------------------------------------------------------------------------------
$(function c2_numOfVisits() {   
        $.ajax({
        method:'get',
        url:'c2_numOfVisits', 
        success:function(response){
        //alert(response); 
           var renderDiv = 'c2_numOfVisits';
           _numOfVisits(response, renderDiv); 
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c2_avgSignal(){ 
    $.ajax({
        method:'get',
        url:'c2_avgSignal',
        success:function(response){
           // alert(response);
           var renderDiv = 'c2_avgSignal';
           _avgSignal(response, renderDiv); 
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c2_timeSignal(){  
   $.ajax({
        method:'get',
        url:'c2_timeSignal', 
        success:function(response){
            //alert(response);
            var renderDiv = 'c2_timeSignal';
            _timeSignal(response, renderDiv)   
        }, 
        error:function(response){
          // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
    
});

$(function c2_avgMins(){                      
    $.ajax({
        method:'get',
        url:'c2_avgMins',
        success:function(response){
            //alert(response);
            var renderDiv = 'c2_avgMins';
            _avgMins(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c2_statReenter(){                      
    $.ajax({
        method:'get',
        url:'c2_statReenter',
        success:function(response){
             //alert(response);
             var renderDiv = '#c2_statReenter';
            _statReenter(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$ (function c2_statCust(){
    $.ajax({
        method:'get',
        url:'c2_statCust',
        success:function(response){
             //alert(response);
             var renderDiv = '#c2_statCust';
             _statCust(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c2_statTime(){
    $.ajax({
        method:'get',
        url:'c2_statTime',
        success:function(response){
             //alert(response);
             var renderDiv = '#c2_statTime';
             _statTime(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c2_statDB(){
    $.ajax({
        method:'get',
        url:'c2_statDB',
        success:function(response){
             //alert(response);
             var renderDiv = '#c2_statDB';
            _statDB(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c2_statLongTime(){
    $.ajax({
        method:'get',
        url:'c2_statLongTime',
        success:function(response){
             //alert(response);
             var renderDiv = '#c2_statLongTime';
             _statLongTime(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c2_statHighDB(){
    $.ajax({
        method:'get',
        url:'c2_statHighDB',
        success:function(response){
             //alert(response);
             var renderDiv = '#c2_statHighDB';
             _statHighDB(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

//---------------------------------------------------Sensor 03 -----------------
//------------------------------------------------------------------------------
$(function c3_numOfVisits() {   
        $.ajax({
        method:'get',
        url:'c3_numOfVisits', 
        success:function(response){
        //alert(response); 
           var renderDiv = 'c3_numOfVisits';
           _numOfVisits(response, renderDiv); 
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c3_avgSignal(){ 
    $.ajax({
        method:'get',
        url:'c3_avgSignal',
        success:function(response){
           // alert(response);
           var renderDiv = 'c3_avgSignal';
           _avgSignal(response, renderDiv); 
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c3_timeSignal(){  
   $.ajax({
        method:'get',
        url:'c3_timeSignal', 
        success:function(response){
            //alert(response);
            var renderDiv = 'c3_timeSignal';
            _timeSignal(response, renderDiv)   
        }, 
        error:function(response){
          // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
    
});

$(function c3_avgMins(){                      
    $.ajax({
        method:'get',
        url:'c3_avgMins',
        success:function(response){
            //alert(response);
            var renderDiv = 'c3_avgMins';
            _avgMins(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c3_statReenter(){                      
    $.ajax({
        method:'get',
        url:'c3_statReenter',
        success:function(response){
             //alert(response);
             var renderDiv = '#c3_statReenter';
            _statReenter(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$ (function c3_statCust(){
    $.ajax({
        method:'get',
        url:'c3_statCust',
        success:function(response){
             //alert(response);
             var renderDiv = '#c3_statCust';
             _statCust(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c3_statTime(){
    $.ajax({
        method:'get',
        url:'c3_statTime',
        success:function(response){
             //alert(response);
             var renderDiv = '#c3_statTime';
             _statTime(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c3_statDB(){
    $.ajax({
        method:'get',
        url:'c3_statDB',
        success:function(response){
             //alert(response);
             var renderDiv = '#c3_statDB';
            _statDB(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c3_statLongTime(){
    $.ajax({
        method:'get',
        url:'c3_statLongTime',
        success:function(response){
             //alert(response);
             var renderDiv = '#c3_statLongTime';
             _statLongTime(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c3_statHighDB(){
    $.ajax({
        method:'get',
        url:'c3_statHighDB',
        success:function(response){
             //alert(response);
             var renderDiv = '#c3_statHighDB';
             _statHighDB(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

//---------------------------------------------------Sensor 04 -----------------
//------------------------------------------------------------------------------
$(function c4_numOfVisits() {   
        $.ajax({
        method:'get',
        url:'c4_numOfVisits', 
        success:function(response){
        //alert(response); 
           var renderDiv = 'c4_numOfVisits';
           _numOfVisits(response, renderDiv); 
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c4_avgSignal(){ 
    $.ajax({
        method:'get',
        url:'c4_avgSignal',
        success:function(response){
           // alert(response);
           var renderDiv = 'c4_avgSignal';
           _avgSignal(response, renderDiv); 
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c4_timeSignal(){  
   $.ajax({
        method:'get',
        url:'c4_timeSignal', 
        success:function(response){
            //alert(response);
            var renderDiv = 'c4_timeSignal';
            _timeSignal(response, renderDiv)   
        }, 
        error:function(response){
          // alert("Error Connecting to Webservice.\nTry again.");
        }
    });    
});

$(function c4_avgMins(){                      
    $.ajax({
        method:'get',
        url:'c4_avgMins',
        success:function(response){
            //alert(response);
            var renderDiv = 'c4_avgMins';
            _avgMins(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c4_statReenter(){                      
    $.ajax({
        method:'get',
        url:'c4_statReenter',
        success:function(response){
             //alert(response);
             var renderDiv = '#c4_statReenter';
            _statReenter(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$ (function c4_statCust(){
    $.ajax({
        method:'get',
        url:'c4_statCust',
        success:function(response){
             //alert(response);
             var renderDiv = '#c4_statCust';
             _statCust(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c4_statTime(){
    $.ajax({
        method:'get',
        url:'c4_statTime',
        success:function(response){
             //alert(response);
             var renderDiv = '#c4_statTime';
             _statTime(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c4_statDB(){
    $.ajax({
        method:'get',
        url:'c4_statDB',
        success:function(response){
             //alert(response);
             var renderDiv = '#c4_statDB';
            _statDB(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c4_statLongTime(){
    $.ajax({
        method:'get',
        url:'c4_statLongTime',
        success:function(response){
             //alert(response);
             var renderDiv = '#c4_statLongTime';
             _statLongTime(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c4_statHighDB(){
    $.ajax({
        method:'get',
        url:'c4_statHighDB',
        success:function(response){
             //alert(response);
             var renderDiv = '#c4_statHighDB';
             _statHighDB(response, renderDiv);    
        }, 
        error:function(response){
           // alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});
//------------------------------ retrieving data common functions --------------
//------------------------------------------------------------------------------ 
function _statReenter(response, renderDiv) {  
    $(renderDiv).html(response);       
}
function _statCust(response, renderDiv) {  
    $(renderDiv).html(response);       
}
function _statTime(response, renderDiv) {  
    $(renderDiv).html(response);       
}
function _statDB(response, renderDiv) { 
    var myObject;
    myObject = JSON.parse(response);
    $(renderDiv).html(myObject); 
}
function _statLongTime(response, renderDiv) {  
    $(renderDiv).html(response);       
}
function _statHighDB(response, renderDiv) {  
    var myObject;
    myObject = JSON.parse(response);
    $(renderDiv).html(myObject);       
}  
//------------------------------------ graphic common functions -- -------------
//------------------------------------------------------------------------------ 
function _numOfVisits(response, renderDiv) { 
    var myObject;
    myObject = JSON.parse(response);//
    //alert(JSON.stringify(myObject));
            
    var options = Highcharts.chart({
            chart: {
                renderTo: renderDiv,
                style: {
                fontFamily: '"Open Sans", sans-serif'
              }
            },
            title: {
                text: 'Number of visits per minute',
            },
            xAxis: {
                categories: [1,2,3,4,5,6,7,8,9,10],
                title: {
                     text: 'Time (Minutes)'
                },
                style: {
                fontFamily: '"Open Sans", sans-serif'
              }
            },
            yAxis: {
                title: {
                    text: 'Number of visitors'
                },
                style: {
                fontFamily: '"Open Sans", sans-serif'
              }
            },
            legend: {
                layout: 'horizontal',
                align: 'right',
                itemStyle: {
                    color: 'gray',
                    fontWeight: '1px'
                }
            },
            plotOptions: {
                series: {
                    pointStart: 0
                }
            },
            series: [{
                    name: 'Visitors',
                    data: myObject
            }]
    });
}

function _avgSignal(response, renderDiv){
    var myObject;
    myObject = JSON.parse(response);//obj to js
    //alert(myObject[0].hash_address);
    
    Highcharts.Color.prototype.parsers.push({
	regex: /^[a-z]+$/,
        parse: function (result) {
    	var rgb = new RGBColor(result[0]);
        if (rgb.ok) {
        	return [rgb.r, rgb.g, rgb.b, 1]; // returns rgba to Highcharts
            }
        }
    });

    var options = Highcharts.chart({
            chart: {
                renderTo: renderDiv,
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie',
                style: {
                fontFamily: '"Open Sans", sans-serif'
              }
            },
            title: {
                text: 'Reception strength over 10 minutes'
            },
            colors: ['#FF8F0B', '#ffcf40', '#7bc043', '#0392cf', '#66ccff'],
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                itemStyle: {
                    color: 'gray',
                    fontWeight: '1px',
                    fontSize: '12px'
                }
            },
            series: [{
                name: 'Visitors',
                colorByPoint: true,               
                data: myObject
                }]    
    });     
}

function _timeSignal(response, renderDiv){
    var myObject; 
    myObject = JSON.parse(response);//obj to js

    var options = Highcharts.chart({
  
        chart: {
            renderTo: renderDiv,
            zoomType: 'x',
            style: {
                fontFamily: '"Open Sans", sans-serif'
              }
        },
        title: {
            text: 'Reception strength over 10 minutes '
        },
        
        xAxis: {
            categories: [1,2,3,4,5,6,7,8,9,10],
            title: {
                     text: 'Time (Minutes)'
                },
            type: 'datetime',
            dateTimeLabelFormats: { //force all formats to be hour:minute:second
            second: '%H:%M:%S',
             
         }
        },
        yAxis: {
            title: {
                text: 'Signal levels (Decibels)'
            }
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            area: {
                fillColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                    ]
                },
                marker: {
                    radius: 2
                },
                lineWidth: 1,
                states: {
                    hover: {
                        lineWidth: 1
                    }
                },
                threshold: null
                 }
            },

            series: [{
            type: 'area',
            name: 'Decibels',
            data: myObject
        
        }]
    });
}

function _avgMins(response, renderDiv){
    var myObject;
    myObject = JSON.parse(response);//obj to js
    //alert(myObject[0].hash_address);
    var toChart = [];

    for( var x in myObject){
        var newElement = {}; 
        newElement = [myObject[x].hash_address,myObject[x].timing];
        toChart.push(newElement);
    }  
    //alert(JSON.stringify(toChart));
            
    var options = Highcharts.chart({
            chart: {
                type: 'column',
                renderTo: renderDiv,
                style: {
                fontFamily: '"Open Sans", sans-serif'
              }
            },
            position: {
                spacingLeft: 0,
                marginRight: 0
            },
            style: {
                width: '100%',
                height: '70%'
            },
            title: {
                text: 'Time length of customer in store'
            },
            xAxis: {
                type: '',
                title: {
                    text: 'Customers'
                    },
                labels: {
                     rotation: -90,
                    style: {
                        fontSize: '9px',
                        fontFamily: '"Open Sans", sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                text: 'Time (Minutes)'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Time: <b>{point.y:.1f} minutes</b>'
            },
            series: [{
                name: 'Customer',
                data: toChart
            }]
    }); 
}
 
        
