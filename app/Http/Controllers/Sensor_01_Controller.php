<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Corner01_input;
use db;

class Sensor_01_Controller extends Controller
{
    
    public function sensor_01(){
        return view('pages/sensor_01');
    }
    //-------------------------------------------------------common functions---
    //--------------------------------------------------------------------------
    public function min_01(){
       $data_min_1 =  \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 1)
                    ->where('time_sec', '<', 60)
                    ->groupBy('hash_address')
                    ->get()->toArray();
       return $data_min_1;      
    }
    
    public function min_02(){
        $data_min_2 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 60)
                    ->where('time_sec', '<', 120)
                    ->groupBy('hash_address')
                    ->get()->toArray();
        return $data_min_2;
    }
    
    public function min_03(){
        $data_min_3 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 120)
                    ->where('time_sec', '<', 180)
                    ->groupBy('hash_address')
                    ->get()->toArray();
        return $data_min_3;
    }
    
    public function min_04(){
        $data_min_4 =  \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 180)
                    ->where('time_sec', '<', 240)
                    ->groupBy('hash_address')
                    ->get()->toArray();
        return $data_min_4;
    }

    public function min_05(){
         $data_min_5 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 240)
                    ->where('time_sec', '<', 300)
                    ->groupBy('hash_address')
                    ->get()->toArray(); 
         return $data_min_5;
    }
    
    public function min_06(){   
       $data_min_6 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 300)
                    ->where('time_sec', '<', 360)
                    ->groupBy('hash_address')
                    ->get()->toArray();
       return $data_min_6;
    }
    
    public function min_07(){
       $data_min_7 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 360)
                    ->where('time_sec', '<', 420)        
                    ->groupBy('hash_address')
                    ->get()->toArray();
       return $data_min_7;
    }
    
    public function min_08(){
        $data_min_8 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 420)
                    ->where('time_sec', '<', 480)
                    ->groupBy('hash_address')
                    ->get()->toArray();
        return $data_min_8;
    }
    
    public function min_09(){
        $data_min_9 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 480)
                    ->where('time_sec', '<', 540)
                    ->groupBy('hash_address')
                    ->get()->toArray(); 
        return $data_min_9;        
    }
      
    public function min_10(){
         $data_min_10 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 540)
                    ->where('time_sec', '<', 600)
                    ->groupBy('hash_address')
                    ->get()->toArray();
         return $data_min_10;
    }
    //------------------------------------common functions COUNT----------------
    //--------------------------------------------------------------------------
    public function count_min_01(){
         $data_min_1 = Sensor_01_Controller::min_01();
         return $numCust_1 = count($data_min_1); 
    }
    public function count_min_02(){
        $data_min_2 = Sensor_01_Controller::min_02();
        return $numCust_2 = count($data_min_2);    
    }
    public function count_min_03(){
        $data_min_3 = Sensor_01_Controller::min_03();
        return $numCust_3 = count($data_min_3);       
    }
    public function count_min_04(){
         $data_min_4 = Sensor_01_Controller::min_04();
         return $numCust_4 = count($data_min_4);    
    }
    public function count_min_05(){
         $data_min_5 = Sensor_01_Controller::min_05();
         return $numCust_5 = count($data_min_5);   
    }
    public function count_min_06(){
         $data_min_6 = Sensor_01_Controller::min_06();
         return $numCust_6 = count($data_min_6);    
    }
    public function count_min_07(){
         $data_min_7 = Sensor_01_Controller::min_07();
         return $numCust_7 = count($data_min_7);   
    }
    public function count_min_08(){
         $data_min_8 = Sensor_01_Controller::min_08();
         return $numCust_8 = count($data_min_8);    
    }
    public function count_min_09(){
         $data_min_9 = Sensor_01_Controller::min_09();
         return $numCust_9 = count($data_min_9);    
    }
    public function count_min_10(){
         $data_min_10 = Sensor_01_Controller::min_10();
         return $numCust_10 = count($data_min_10);    
    }
    
    public function c1_numOfVisits(){
        
        $numCust_1 = Sensor_01_Controller::count_min_01();
        $numCust_2 = Sensor_01_Controller::count_min_02();
        $numCust_3 = Sensor_01_Controller::count_min_03();
        $numCust_4 = Sensor_01_Controller::count_min_04();
        $numCust_5 = Sensor_01_Controller::count_min_05();
        $numCust_6 = Sensor_01_Controller::count_min_06();
        $numCust_7 = Sensor_01_Controller::count_min_07();
        $numCust_8 = Sensor_01_Controller::count_min_08();
        $numCust_9 = Sensor_01_Controller::count_min_09();
        $numCust_10 = Sensor_01_Controller::count_min_10();
        
        $visits_min = array();
        $visits_min = [$numCust_1, $numCust_2, $numCust_3, $numCust_4,
                    $numCust_5, $numCust_6, $numCust_7, $numCust_8, $numCust_9,
                    $numCust_10];
        
        return json_encode($visits_min); 
    }  
    //-------------------------- functions decibels AVERAGE min ----------------
    //--------------------------------------------------------------------------
    public function signal_min_01(){
        $numCust_1 = Sensor_01_Controller::count_min_01();
    
    } 
    public function signal_min_02(){
        $numCust_2 = Sensor_01_Controller::count_min_02(); 
    } 
    public function signal_min_03(){
        $numCust_3 = Sensor_01_Controller::count_min_03();
    } 
    public function signal_min_04(){
        $numCust_4 = Sensor_01_Controller::count_min_04(); 
    } 
    public function signal_min_05(){
        $numCust_5 = Sensor_01_Controller::count_min_05(); 
    } 
    public function signal_min_06(){
        $numCust_6 = Sensor_01_Controller::count_min_06(); 
    } 
    public function signal_min_07(){
        $numCust_7 = Sensor_01_Controller::count_min_07(); 
    } 
    public function signal_min_08(){
        $numCust_8 = Sensor_01_Controller::count_min_08();
    } 
    public function signal_min_09(){
        $numCust_9 = Sensor_01_Controller::count_min_09(); 
    } 
    public function signal_min_10(){
        $numCust_10 = Sensor_01_Controller::count_min_10(); 
    } 
    
    
     
    public function c1_timeSignal(){
    
    //SELECT hash_address, round(AVG(time_sec))/60 as avgMin, AVG(signal_db*-1) 
    //as newSignal from corner01_inputs where time_sec > 60 and time_sec < 120 
    //group by hash_address order by newSignal DESC 
       $data_min_2 = Sensor_01_Controller::min_02();
      
       
       $neww = count($data_min_2);
      
       //$dB_levels = array();
       
       var_dump($data_min_2);
       die();
     	//return response()->json($data_min_2);
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
    
    //group hash_address e intervalos de tiempo with average time in store
    public function c1_avgMins(){
      
        $minutes = \DB::table('corner01_inputs')
        	    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->groupBy('hash_address')
                    ->orderBy('avgMin', 'DESC')
                    ->get()->toArray();
         return json_encode($minutes); 
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

        
       
    
   