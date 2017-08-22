 var options;
 var chart;


$(document).ready(function(){
    var toChartX = new Array(); 
    var toChartY = new Array();
    $.ajax({
        method:'get',
        url:'chart8',
        success:function(response){
           
        var myObject = JSON.parse(response);//obj to js
        
            for( var i = 0; i<myObject.length; i++ ){
                 toChartX = myObject[i].hash_address;
            }
            //alert(myObject[44].hash_address);
        alert(response);
        
        
        },//end of success method
        Error: function(response){
            alert('Data not found');
        }
    });    
       
       
     //  chart = new Highcharts.Chart(options);
        
            /*for(x in myObject){
            objToChart[x] ={
                name:myObject[x].hash_address,
                y:myObject[x].time_sec
            };     
        }*/
        //alert(objToChart);
        /*for(var i=0; i<myObject.length; i++){
            objToChart[i];     
        }*/
        
       /*(Object.keys(myObject).forEach(function(key){
            alert(myObject['hash_address']);
        });*/
        
                       
                  
   $(function pie(){          
      var options = Highcharts.chart({
     // Build the chart
     
            chart: {
                renderTo: 'container04',
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
                data: 
                        [
 
                        /*$(function() {
                            var objSeries = new Object();
                            for( var i = 0; i<response.length; i++ ){
                                objSeries= {name: response[i].hash_address, y:response[i].time_sec };
                            }
                            
                        })*/
                        
                        
                     
                    /*for( var i = 0; i<myObject.length; i++ ){
                        name: response['hash_address']
                        y: response['time_sec']
                    }*/
                        //name: response['hash_address'],
                        //y: response['time_sec']
                    /*
                    {name: myObject[8].hash_address,
                        y: myObject[8].time_sec
                    },
                    {name: myObject[12].hash_address,
                        y: myObject[12].time_sec
                    }
                   */
                    ]
            }]    
            });
        });
    });
    



/*$(function four(){
  
  var options = Highcharts.chart({
     // Build the chart
     
            chart: {
                renderTo: 'container04',
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
                data: []
            }]    
    });

    //$("#container04").html();

    var url = "chart8";

    // $data=array("numCustomers"=>$countGroupCust,"customers"=>$groupCust, "phones_id"=>$address);
    $.get(url,function(result){
    var info= jQuery.parseJSON(result);
    var customers=info.customers;
    var numCustomers=info.numCustomers;
    var phones_id=info.phones_id;

        for(i=0; i<=numCustomers-1; i++){  
        var address=customers[i].hash_address;
        var obj= {name: customers[i], y:phones_id[address] };     
        options.series[0].data.push(obj);  
        }
     //options.title.text="aqui e podria cambiar el titulo dinamicamente";
    chart = new Highcharts.Chart(options);
    });
});*/



$(function one() { 
    var myChart = Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Fruit Consumption'
        },
        xAxis: {
            categories: ['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: 'Fruit eaten'
            }
        },
        series: [{
            name: 'Jane',
            data: [1, 0, 4]
        }, {
            name: 'John',
            data: [5, 7, 3]
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

