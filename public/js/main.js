

$(document).ready(function(){
    $(function test(){}); 
    $(function c1_avgMins(){});
    $(function c1_avgSignal(){});
    $(function c1_numOfVisits(){});
    
});


//---------------------------------------------------Sensor 01 -----------------
//------------------------------------------------------------------------------
$(function c1_avgMins(){

    $.ajax({
        method:'get',
        url:'c1_avgMins',
        success:function(response){
            //alert(response);
            var myObject = JSON.parse(response);//obj to js
            //alert(myObject[0].hash_address);

            var toChart = [];

            for( var x in myObject){
                  var newElement = {}; 
                  newElement = [myObject[x].hash_address,myObject[x].avgMin];
                  toChart.push(newElement);
            }          
            //alert(JSON.stringify(toChart));

            var options = Highcharts.chart('c1_avgMins', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Time of customer at the store'
                },
                xAxis: {
                    type: '',
                    title: {
                        text: 'Customers'
                    },
                    labels: {
                        rotation: -90,
                        style: {
                            fontSize: '7px',
                            fontFamily: 'Verdana, sans-serif'
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
            });//end of options   
        } //end of success
    }); //end of ajax
});


$(function c1_avgSignal(){
    
    $.ajax({
        method:'get',
        url:'c1_avgSignal',
        success:function(response){
           // alert(response);
            var myObject = JSON.parse(response);//obj to js
            //alert(myObject[0].hash_address);
   
        var options = Highcharts.chart({
        // Build the chart
            chart: {
                renderTo: 'c1_avgSignal',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Reception strength'
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
                data: myObject
                }]    
           });//end of options   
        } //end of success
    }); //end of ajax    
});

$(function c1_numOfVisits() { 
        
        $.ajax({
        method:'get',
        url:'c1_numOfVisits',
        success:function(response){
          // alert(response);
            
            var myObject = JSON.parse(response);//obj to js
            //alert(JSON.stringify(myObject[1]));
            
            var myChart = Highcharts.chart('c1_numOfVisits', {

                title: {
                    text: 'Number the visits per minute'
                },
                xAxis: {
                    categories: [1,2,3,4,5,6,7,8,9,10],
                    title: {
                        text: 'Time (Minutes)'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Number of customers detected'
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
        } //end of success
    }); //end of ajax
});

//data: [{ name: 'Microsoft Internet Explorer', y: 56.33 }],
//data: [ ['Shanghai', 23.7]],
//series: [{name: 'Installation',data: [43934, 52503, 57177]}]
//series: [{name: 'John', data: [5, 3, 4, 7, 2]}]
$(function two () { 
        var myChart = Highcharts.chart('div_grafica_pie2', {
            chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Browser market shares January, 2015 to May, 2015'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Microsoft Internet Explorer',
                y: 56.33
            }, {
                name: 'Chrome',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'Firefox',
                y: 10.38
            }, {
                name: 'Safari',
                y: 4.77
            }, {
                name: 'Opera',
                y: 0.91
            }, {
                name: 'Proprietary or Undetectable',
                y: 0.2
            }]
        }]
    });
});

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