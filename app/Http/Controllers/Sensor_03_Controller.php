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
    //-------------------------------------------------------common functions---
    //--------------------------------------------------------------------------
    /*SELECT hash_address, round(AVG(time_sec))/60 as avgMin, AVG(signal_db*-1) 
      as newSignal from corner03_inputs where time_sec > 60 and time_sec < 120 
      group by hash_address order by newSignal DESC*/ 
    public function min_01(){
        $data_min_1 =  \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 1)
                    ->where('time_sec', '<', 60)
                    ->groupBy('hash_address')
                    ->get()->toArray();
       return $data_min_1;      
    }
    
    public function min_02(){
        $data_min_2 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 60)
                    ->where('time_sec', '<', 120)
                    ->groupBy('hash_address')
                    ->get()->toArray();
        return $data_min_2;
    }
    
    public function min_03(){
        $data_min_3 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 120)
                    ->where('time_sec', '<', 180)
                    ->groupBy('hash_address')
                    ->get()->toArray();
        return $data_min_3;
    }
    
    public function min_04(){
        $data_min_4 =  \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 180)
                    ->where('time_sec', '<', 240)
                    ->groupBy('hash_address')
                    ->get()->toArray();
        return $data_min_4;
    }

    public function min_05(){
         $data_min_5 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 240)
                    ->where('time_sec', '<', 300)
                    ->groupBy('hash_address')
                    ->get()->toArray(); 
         return $data_min_5;
    }
    
    public function min_06(){  
       $data_min_6 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 300)
                    ->where('time_sec', '<', 360)
                    ->groupBy('hash_address')
                    ->get()->toArray();
       return $data_min_6;
    }
    
    public function min_07(){
       $data_min_7 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 360)
                    ->where('time_sec', '<', 420)        
                    ->groupBy('hash_address')
                    ->get()->toArray();
       return $data_min_7;
    }
    
    public function min_08(){
        $data_min_8 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 420)
                    ->where('time_sec', '<', 480)
                    ->groupBy('hash_address')
                    ->get()->toArray();
        return $data_min_8;
    }
    
    public function min_09(){
        $data_min_9 = \DB::table('corner03_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'),
                            DB::raw('round(avg(signal_db*-1))as newSignal'))
                    ->where('time_sec', '>', 480)
                    ->where('time_sec', '<', 540)
                    ->groupBy('hash_address')
                    ->get()->toArray(); 
        return $data_min_9;        
    }
      
    public function min_10(){
        $data_min_10 = \DB::table('corner03_inputs')
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
         $data_min_1 = Sensor_03_Controller::min_01();
         return $numCust_1 = count($data_min_1); 
    }
    public function count_min_02(){
        $data_min_2 = Sensor_03_Controller::min_02();
        return $numCust_2 = count($data_min_2);    
    }
    public function count_min_03(){
        $data_min_3 = Sensor_03_Controller::min_03();
        return $numCust_3 = count($data_min_3);       
    }
    public function count_min_04(){
         $data_min_4 = Sensor_03_Controller::min_04();
         return $numCust_4 = count($data_min_4);    
    }
    public function count_min_05(){
         $data_min_5 = Sensor_03_Controller::min_05();
         return $numCust_5 = count($data_min_5);   
    }
    public function count_min_06(){
         $data_min_6 = Sensor_03_Controller::min_06();
         return $numCust_6 = count($data_min_6);    
    }
    public function count_min_07(){
         $data_min_7 = Sensor_03_Controller::min_07();
         return $numCust_7 = count($data_min_7);   
    }
    public function count_min_08(){
         $data_min_8 = Sensor_03_Controller::min_08();
         return $numCust_8 = count($data_min_8);    
    }
    public function count_min_09(){
         $data_min_9 = Sensor_03_Controller::min_09();
         return $numCust_9 = count($data_min_9);    
    }
    public function count_min_10(){
         $data_min_10 = Sensor_03_Controller::min_10();
         return $numCust_10 = count($data_min_10);    
    }
    
    //-------------------------- functions get column Signal_db min ------------
    //--------------------------------------------------------------------------
    public function col_dB_min_01(){
        $data_min_1 = Sensor_03_Controller::min_01();
        return $dB_1 = array_column($data_min_1, 'newSignal');
    }
    public function col_dB_min_02(){
        $data_min_2 = Sensor_03_Controller::min_02();
        return $dB_2 = array_column($data_min_2, 'newSignal');
    }
    public function col_dB_min_03(){
        $data_min_3 = Sensor_03_Controller::min_03();
        return $dB_3 = array_column($data_min_3, 'newSignal');
    }
    public function col_dB_min_04(){
        $data_min_4 = Sensor_03_Controller::min_04();
        return $dB_4 = array_column($data_min_4, 'newSignal');
    }
    public function col_dB_min_05(){
        $data_min_5 = Sensor_03_Controller::min_05();
        return $dB_5 = array_column($data_min_5, 'newSignal');
    }
    public function col_dB_min_06(){
        $data_min_6 = Sensor_03_Controller::min_06();
        return $dB_6 = array_column($data_min_6, 'newSignal');
    }
    public function col_dB_min_07(){
        $data_min_7 = Sensor_03_Controller::min_07();
        return $dB_7 = array_column($data_min_7, 'newSignal');
    }
    public function col_dB_min_08(){
        $data_min_8 = Sensor_03_Controller::min_08();
        return $dB_8 = array_column($data_min_8, 'newSignal');
    }
    public function col_dB_min_09(){
        $data_min_9 = Sensor_03_Controller::min_09();
        return $dB_9 = array_column($data_min_9, 'newSignal');
    }
    public function col_dB_min_10(){
        $data_min_10 = Sensor_03_Controller::min_10();
        return $dB_10 = array_column($data_min_10, 'newSignal');
    }
  
    //-------------------------- functions decibels AVERAGE min ----------------
    //--------------------------------------------------------------------------
    public function signal_min_01(){
        $dB_1 = Sensor_03_Controller::col_dB_min_01();
        $numCust_1 = Sensor_03_Controller::count_min_01();   
        return $avgSignal_1 = round(array_sum($dB_1)/$numCust_1);
    } 
    public function signal_min_02(){
        $dB_2 = Sensor_03_Controller::col_dB_min_02();
        $numCust_2 = Sensor_03_Controller::count_min_02(); 
        return $avgSignal_2 = round(array_sum($dB_2)/$numCust_2);
    } 
    public function signal_min_03(){
        $dB_3 = Sensor_03_Controller::col_dB_min_03();
        $numCust_3 = Sensor_03_Controller::count_min_03();
        return $avgSignal_3 = round(array_sum($dB_3)/$numCust_3);
    } 
    public function signal_min_04(){
        $dB_4 = Sensor_03_Controller::col_dB_min_04();
        $numCust_4 = Sensor_03_Controller::count_min_04(); 
        return $avgSignal_4 = round(array_sum($dB_4)/$numCust_4);
    } 
    public function signal_min_05(){
        $dB_5 = Sensor_03_Controller::col_dB_min_05();
        $numCust_5 = Sensor_03_Controller::count_min_05();
        return $avgSignal_5 = round(array_sum($dB_5)/$numCust_5);
    } 
    public function signal_min_06(){
        $dB_6 = Sensor_03_Controller::col_dB_min_06();
        $numCust_6 = Sensor_03_Controller::count_min_06();
        return $avgSignal_6 = round(array_sum($dB_6)/$numCust_6);
    } 
    public function signal_min_07(){
        $dB_7 = Sensor_03_Controller::col_dB_min_07();
        $numCust_7 = Sensor_03_Controller::count_min_07(); 
        return $avgSignal_7 = round(array_sum($dB_7)/$numCust_7);
    } 
    public function signal_min_08(){
        $dB_8 = Sensor_03_Controller::col_dB_min_08();
        $numCust_8 = Sensor_03_Controller::count_min_08();
        return $avgSignal_8 = round(array_sum($dB_8)/$numCust_8);
    } 
    public function signal_min_09(){
        $dB_9 = Sensor_03_Controller::col_dB_min_09();
        $numCust_9 = Sensor_03_Controller::count_min_09(); 
        return $avgSignal_9 = round(array_sum($dB_9)/$numCust_9);
    } 
    public function signal_min_10(){
        $dB_10 = Sensor_03_Controller::col_dB_min_10();
        $numCust_10 = Sensor_03_Controller::count_min_10(); 
        return $avgSignal_10 = round(array_sum($dB_10)/$numCust_10);
    } 

    public function c3_timeSignal(){  
    
     $avgSignal_1 = Sensor_03_Controller::signal_min_01();
     $avgSignal_2 = Sensor_03_Controller::signal_min_02();
     $avgSignal_3 = Sensor_03_Controller::signal_min_03();
     $avgSignal_4 = Sensor_03_Controller::signal_min_04();
     $avgSignal_5 = Sensor_03_Controller::signal_min_05();
     $avgSignal_6 = Sensor_03_Controller::signal_min_06(); 
     $avgSignal_7 = Sensor_03_Controller::signal_min_07(); 
     $avgSignal_8 = Sensor_03_Controller::signal_min_08();
     $avgSignal_9 = Sensor_03_Controller::signal_min_09(); 
     $avgSignal_10 = Sensor_03_Controller::signal_min_10();

     $dB_min = array();
     $dB_min = [$avgSignal_1, $avgSignal_2, $avgSignal_3, $avgSignal_4,
                    $avgSignal_5, $avgSignal_6, $avgSignal_7, $avgSignal_8, 
                    $avgSignal_9, $avgSignal_10];
      
     return json_encode($dB_min);    
    }
    public function c3_numOfVisits(){
        
        $numCust_1 = Sensor_03_Controller::count_min_01();
        $numCust_2 = Sensor_03_Controller::count_min_02();
        $numCust_3 = Sensor_03_Controller::count_min_03();
        $numCust_4 = Sensor_03_Controller::count_min_04();
        $numCust_5 = Sensor_03_Controller::count_min_05();
        $numCust_6 = Sensor_03_Controller::count_min_06();
        $numCust_7 = Sensor_03_Controller::count_min_07();
        $numCust_8 = Sensor_03_Controller::count_min_08();
        $numCust_9 = Sensor_03_Controller::count_min_09();
        $numCust_10 = Sensor_03_Controller::count_min_10();
        
        $visits_min = array();
        $visits_min = [$numCust_1, $numCust_2, $numCust_3, $numCust_4,
                    $numCust_5, $numCust_6, $numCust_7, $numCust_8, $numCust_9,
                    $numCust_10];
        
        return json_encode($visits_min); 
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
            ['name' => 'Moderate', 'y' => $countCust3],
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
    }  
}

