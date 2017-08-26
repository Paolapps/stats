

$(document).ready(function(){
     
     c1_numOfVisits();
     c1_avgSignal();
     c1_avgMins();

    test(); 
    
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
            alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

$(function c1_avgSignal(){ 
    $.ajax({
        method:'get',
        url:'c1_avgSignal',
        success:function(response){
           // alert(response);
           var renderDiv = 'c1_avgSignal';
           _avgSignal(response, renderDiv); 
        }, 
        error:function(response){
            alert("Error Connecting to Webservice.\nTry again.");
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
            alert("Error Connecting to Webservice.\nTry again.");
        }
    }); 
});

//----------------------------------- Common graphic functions -----------------
//------------------------------------------------------------------------------ 
function _numOfVisits(response, renderDiv) { 
        
    var myObject = JSON.parse(response);//obj to js
    //alert(JSON.stringify(myObject[1]));
            
    var myChart = Highcharts.chart({
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
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    pointStart: 0
                }
            },
            series: [{
                    name: 'Customers in the store',
                    data: myObject
            }]
    });
}

function _avgSignal(response, renderDiv){

    var myObject = JSON.parse(response);//obj to js
    //alert(myObject[0].hash_address);
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
                text: 'Reception strength during 10 minutes'
            },
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
            series: [{
                name: 'Visitors',
                colorByPoint: true,
                data: myObject
                }]    
    });     
}

function _avgMins(response, renderDiv){
    
    var myObject = JSON.parse(response);//obj to js
    //alert(myObject[0].hash_address);
    var toChart = [];

    for( var x in myObject){
        var newElement = {}; 
        newElement = [myObject[x].hash_address,myObject[x].avgMin];
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
                text: 'Time of customer in the store'
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




//data: [{ name: 'Microsoft Internet Explorer', y: 56.33 }],
//data: [ ['Shanghai', 23.7]],
//series: [{name: 'Installation',data: [43934, 52503, 57177]}]
//series: [{name: 'John', data: [5, 3, 4, 7, 2]}]



$(function test(){
    $.ajax({
        method:'get',
        url:'test',
        success:function(response){
        //alert(response);
            
        var myObject = JSON.parse(response);//obj to js
        //alert(myObject[0].hash_address);
        
        var associativeArray = [];
        
        for( var x =0; x < myObject.length; x++){
              var newElement = {};
              newElement['name'] = myObject[x].hash_address;
              newElement['y'] = myObject[x].time_sec;
              associativeArray.push(newElement);
        }
        //alert(JSON.stringify(associativeArray));
        
        var options = Highcharts.chart({
     // Build the chart
     
            chart: {
                renderTo: 'test',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Grafica publicaciones'
            },
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
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: associativeArray
                }]    
             }); //end of options   
        } //end of success
    }); //end of ajax
});