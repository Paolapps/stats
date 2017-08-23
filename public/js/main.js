/* global options */

$(document).ready(function(){

    $(function test(){}); 
    $(function c1_avgMins(){});
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

//data: [{ name: 'Microsoft Internet Explorer', y: 56.33 }],
//data: [ ['Shanghai', 23.7]],

$(function c1_avgMins(){

    $.ajax({
        method:'get',
        url:'c1_avgMins',
        success:function(response){
            alert(response);
            
            var myObject = JSON.parse(response);//obj to js
            //alert(myObject[0].hash_address);

            var toChart = [];

            for( var x in myObject){
                  var newElement = {}; 
                  newElement = [myObject[x].hash_address,myObject[x].avgMin];
                  toChart.push(newElement);
            }         
            
            alert(JSON.stringify(toChart));

            var options = Highcharts.chart('c1_avgMins', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Longest time at the store'
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '7px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Time (seconds)'
                    }
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: 'Population in 2008: <b>{point.y:.1f} millions</b>'
                },
                series: [{
                    name: 'Population',
                    data: toChart
                }]
            });//end of options   
        } //end of success
    }); //end of ajax
});



$(function one() { 
    
    var options = Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Longest time at the store'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '7px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Population in 2008: <b>{point.y:.1f} millions</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['Shanghai', 23.7],
                ['Lagos', 16.1],
                ['Istanbul', 14.2],
                ['Karachi', 14.0],
                ['Mumbai', 12.5],
                ['Moscow', 12.1],
                ['São Paulo', 11.8],
                ['Beijing', 11.7],
                ['Guangzhou', 11.1],
                ['Delhi', 11.1],
                ['Shenzhen', 10.5],
                ['Seoul', 10.4],
                ['Jakarta', 10.0],
                ['Kinshasa', 9.3],
                ['Tianjin', 9.3],
                ['Tokyo', 9.0],
                ['Cairo', 8.9],
                ['Dhaka', 8.9],
                ['Mexico City', 8.9],
                ['Lima', 8.9]
            ],
            
        }]
    });
});

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
