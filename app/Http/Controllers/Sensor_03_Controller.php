<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Corner03_input;
use db;

class Sensor_03_Controller extends Controller
{
    public function sensor_03(){
        return view('pages/sensor_03');
    }
    
    public function c3_numOfVisits(){
    
        $custMin_1 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [0, 60])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_1 = count($custMin_1);  
        
        $custMin_2 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [1, 120])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_2 = count($custMin_2); 
        
        $custMin_3 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [120, 180])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_3 = count($custMin_3); 
        
        $custMin_4 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [180, 240])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_4 = count($custMin_4); 
        
        $custMin_5 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [240, 300])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_5 = count($custMin_5); 
        
        $custMin_6 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [300, 360])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_6 = count($custMin_6); 
        
        $custMin_7 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [360, 420])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_7 = count($custMin_7); 
       
        $custMin_8 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [420, 480])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_8 = count($custMin_8); 
        
        $custMin_9 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [480, 540])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_9 = count($custMin_9); 
        
        $custMin_10 = \DB::table('corner03_inputs')
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
        from corner03_inputs
        where time_sec 
        BETWEEN 0 and 60
        group by hash_address*/ 
    }  
    
    public function c3_avgSignal(){
      
        $decibels = \DB::table('corner03_inputs')
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
            FROM `corner03_inputs` 
            GROUP by hash_address
            order by avgSignal DESC*/
    }
   
    //group hash_address e intervalos de tiempo with average time in store
    public function c3_avgMins(){
      
        $minutes = \DB::table('corner03_inputs')
        	    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->groupBy('hash_address')
                    ->orderBy('avgMin', 'DESC')
                    ->get()->toArray();
         return json_encode($minutes); 
         //var_dump($minutes);
    }
}

