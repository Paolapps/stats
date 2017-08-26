<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Corner01_input;
use App\Corner02_input;
use App\Corner03_input;
use App\Corner04_input;
use db;

class Sensor_01_Controller extends Controller
{
    
    public function sensor_01(){
        return view('pages/sensor_01');
    }
   
    //group hash_address e intervalos de tiempo with average time in store
    public function c1_avgMins(){
      
        $minutes = \DB::table('corner01_inputs')
        	    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->groupBy('hash_address')
                    ->orderBy('avgMin', 'DESC')
                    ->get()->toArray();
         return json_encode($minutes); 
    }

    public function c1_avgSignal(){
      
        $decibels = \DB::table('corner01_inputs')
        	    ->select('hash_address', DB::raw('round(avg(signal_db)) as avgSignal'))
                    ->groupBy('hash_address')
                    ->orderBy('avgSignal', 'DESC')
                    ->get()->toArray();
        
        $countdB = count($decibels);
        $colAvgSignal = array_column($decibels,'avgSignal');
        $positiveDB = array();
        $countCust1 = 0;
        $countCust2 = 0;
        $countCust3 = 0;
        $countCust4 = 0;
        $countCust5 = 0;
        
        $dB_levels = array();
        
        for($i=0; $i < $countdB; $i++ ){    
            array_push($positiveDB, abs($colAvgSignal[$i]));
        }

        for($i=0; $i < $countdB; $i++ ){ 
            switch ($positiveDB) {
                case ($positiveDB[$i] <= 19 ):
                    $countCust1++;
                    break;
                case ($positiveDB[$i] > 19 && $positiveDB[$i] <= 37):
                    $countCust2++;
                    break;
                case ($positiveDB[$i] > 37 && $positiveDB[$i] <= 55):
                    $countCust3++;
                    break;
                case ($positiveDB[$i] > 55 && $positiveDB[$i] <= 72 ):
                    $countCust4++;
                    break;
                case ($positiveDB[$i] > 72 && $positiveDB[$i] <= 90 ):
                    $countCust5++;
                    break;        
            }
        }
        
        $dB_levels = array(
            ['name' => 'Very low', 'y' => $countCust1],
            ['name' => 'Low', 'y' => $countCust2],
            ['name' => 'Neutral', 'y' => $countCust3],
            ['name' => 'High', 'y' => $countCust4],
            ['name' => 'Very high', 'y' => $countCust5]
        );
        return json_encode($dB_levels); 
        /*  SELECT hash_address, round(avg(signal_db)) as avgSignal
            FROM `corner01_inputs` 
            GROUP by hash_address
            order by avgSignal DESC*/
    }
      
    public function c1_numOfVisits(){
    
        $custMin_1 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [0, 60])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_1 = count($custMin_1);  
        
        $custMin_2 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [1, 120])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_2 = count($custMin_2); 
        
        $custMin_3 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [120, 180])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_3 = count($custMin_3); 
        
        $custMin_4 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [180, 240])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_4 = count($custMin_4); 
        
        $custMin_5 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [240, 300])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_5 = count($custMin_5); 
        
        $custMin_6 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [300, 360])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_6 = count($custMin_6); 
        
        $custMin_7 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [360, 420])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_7 = count($custMin_7); 
       
        $custMin_8 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [420, 480])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_8 = count($custMin_8); 
        
        $custMin_9 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [480, 540])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_9 = count($custMin_9); 
        
        $custMin_10 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [540, 600])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_10 = count($custMin_10); 
        
        $finalResult = [$countCust_1, $countCust_2, $countCust_3, $countCust_4, 
                        $countCust_5, $countCust_6, $countCust_7, $countCust_8, 
                        $countCust_9, $countCust_10];
   
        return json_encode($finalResult);  
        /*SELECT hash_address, round(AVG(time_sec))/60 as avgMin, AVG(signal_db) as dB  
        from corner01_inputs
        where time_sec 
        BETWEEN 0 and 60
        group by hash_address*/ 
    }
    
    //total customers per sensor
    public function statVisitors(){
         $visitors = \DB::table('corner01_inputs')
                    ->get()->keyBy('hash_address');
         $totalVisitors = count($visitors);

        return response()->json($totalVisitors);
    }
                
    //average time
    public function statTime(){
        $time = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $totalTime = count($time);
        $colTime = array_column($time,'avgMin');
        //loop, sumar y dividir en count
        return response()->json($totalTime);
    }
    //average signal 
    public function statSignal(){
        $decibels = \DB::table('corner01_inputs')
        	    ->select('hash_address', DB::raw('round(avg(signal_db)) as avgSignal'))
                    ->groupBy('hash_address')
                    ->orderBy('avgSignal', 'DESC')
                    ->get()->toArray();
        //loop, sumar y dividir en count
        $countdB = count($decibels);
        $colDB = array_column($decibels,'avgSignal');
       
        return response()->json($colDB);
        
    }
    
    //longest time in the store
    public function longestTime(){
     $result = \DB::table('corner01_inputs')
                    
        			->select('hash_address', DB::raw('count(*) as total'), 
        				DB::raw('max(time_sec) as max'),
        				DB::raw('min(time_sec) as min'),
        				DB::raw('max(time_sec) - min(time_sec) as timing'))
                    ->groupBy('hash_address')
                    ->orderBy('timing', 'DESC')
                    ->get();
    }
    
    //best reception
    public function bestSignal(){
        
    }
    //bussiest time
    public function bestTime(){
        
    }
    
    //info each person db
    public function eachDB(){
        
    }
    //info each person time
    public function eachTime(){
        
    }
    
    
    //people rentering
    
    //in which sensor the signal is higher, how many people, how long
    //select all addresses in db with repeats
     
    
    
}

        
       
    
   