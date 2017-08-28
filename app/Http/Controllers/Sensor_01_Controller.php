<?php

/*
 * Stats of 4 data sensors.
 * Presented by: Paola Sanabria
 * To: Kepler Analytics
 * Date: 28/08/17
 * 
 * File: Sensor_01_Controller
 * Description: Contains all the functions of Sensor 1
 */

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
    /*SELECT hash_address, round(AVG(time_sec))/60 as avgMin, AVG(signal_db*-1) 
      as newSignal from corner01_inputs where time_sec > 60 and time_sec < 120 
      group by hash_address order by newSignal DESC*/ 
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
    //-------------------  functions get column Signal_db min COMMON------------
    //--------------------------------------------------------------------------
    public function col_dB_min_01(){
        $data_min_1 = Sensor_01_Controller::min_01();
        return $dB_1 = array_column($data_min_1, 'newSignal');
    }
    public function col_dB_min_02(){
        $data_min_2 = Sensor_01_Controller::min_02();
        return $dB_2 = array_column($data_min_2, 'newSignal');
    }
    public function col_dB_min_03(){
        $data_min_3 = Sensor_01_Controller::min_03();
        return $dB_3 = array_column($data_min_3, 'newSignal');
    }
    public function col_dB_min_04(){
        $data_min_4 = Sensor_01_Controller::min_04();
        return $dB_4 = array_column($data_min_4, 'newSignal');
    }
    public function col_dB_min_05(){
        $data_min_5 = Sensor_01_Controller::min_05();
        return $dB_5 = array_column($data_min_5, 'newSignal');
    }
    public function col_dB_min_06(){
        $data_min_6 = Sensor_01_Controller::min_06();
        return $dB_6 = array_column($data_min_6, 'newSignal');
    }
    public function col_dB_min_07(){
        $data_min_7 = Sensor_01_Controller::min_07();
        return $dB_7 = array_column($data_min_7, 'newSignal');
    }
    public function col_dB_min_08(){
        $data_min_8 = Sensor_01_Controller::min_08();
        return $dB_8 = array_column($data_min_8, 'newSignal');
    }
    public function col_dB_min_09(){
        $data_min_9 = Sensor_01_Controller::min_09();
        return $dB_9 = array_column($data_min_9, 'newSignal');
    }
    public function col_dB_min_10(){
        $data_min_10 = Sensor_01_Controller::min_10();
        return $dB_10 = array_column($data_min_10, 'newSignal');
    }
  
    //------------------- functions decibels AVERAGE min COMMON ----------------
    //--------------------------------------------------------------------------
    public function signal_min_01(){
        $dB_1 = Sensor_01_Controller::col_dB_min_01();
        $numCust_1 = Sensor_01_Controller::count_min_01();   
        return $avgSignal_1 = round(array_sum($dB_1)/$numCust_1);
    } 
    public function signal_min_02(){
        $dB_2 = Sensor_01_Controller::col_dB_min_02();
        $numCust_2 = Sensor_01_Controller::count_min_02(); 
        return $avgSignal_2 = round(array_sum($dB_2)/$numCust_2);
    } 
    public function signal_min_03(){
        $dB_3 = Sensor_01_Controller::col_dB_min_03();
        $numCust_3 = Sensor_01_Controller::count_min_03();
        return $avgSignal_3 = round(array_sum($dB_3)/$numCust_3);
    } 
    public function signal_min_04(){
        $dB_4 = Sensor_01_Controller::col_dB_min_04();
        $numCust_4 = Sensor_01_Controller::count_min_04(); 
        return $avgSignal_4 = round(array_sum($dB_4)/$numCust_4);
    } 
    public function signal_min_05(){
        $dB_5 = Sensor_01_Controller::col_dB_min_05();
        $numCust_5 = Sensor_01_Controller::count_min_05();
        return $avgSignal_5 = round(array_sum($dB_5)/$numCust_5);
    } 
    public function signal_min_06(){
        $dB_6 = Sensor_01_Controller::col_dB_min_06();
        $numCust_6 = Sensor_01_Controller::count_min_06();
        return $avgSignal_6 = round(array_sum($dB_6)/$numCust_6);
    } 
    public function signal_min_07(){
        $dB_7 = Sensor_01_Controller::col_dB_min_07();
        $numCust_7 = Sensor_01_Controller::count_min_07(); 
        return $avgSignal_7 = round(array_sum($dB_7)/$numCust_7);
    } 
    public function signal_min_08(){
        $dB_8 = Sensor_01_Controller::col_dB_min_08();
        $numCust_8 = Sensor_01_Controller::count_min_08();
        return $avgSignal_8 = round(array_sum($dB_8)/$numCust_8);
    } 
    public function signal_min_09(){
        $dB_9 = Sensor_01_Controller::col_dB_min_09();
        $numCust_9 = Sensor_01_Controller::count_min_09(); 
        return $avgSignal_9 = round(array_sum($dB_9)/$numCust_9);
    } 
    public function signal_min_10(){
        $dB_10 = Sensor_01_Controller::col_dB_min_10();
        $numCust_10 = Sensor_01_Controller::count_min_10(); 
        return $avgSignal_10 = round(array_sum($dB_10)/$numCust_10);
    }
    
    //--------------------------------------- general FUNCTIONS ----------------
    //--------------------------------------------------------------------------
    public function generalTime() {
        /*SELECT hash_address, round((max(time_sec)-min(time_sec))/60) as realTime 
            FROM `corner01_inputs` group by hash_address */
         $custTime = \DB::table('corner01_inputs')
                    ->select('hash_address', 
        		DB::raw('round((max(time_sec) - min(time_sec))/60) as timing'))
                    ->groupBy('hash_address')
                    ->get()->toArray();
         return $custTime;
    }
    
    public function generalSignal() {
        $decibels = \DB::table('corner01_inputs')
        	    ->select('hash_address', DB::raw('(round(avg(signal_db))*-1) as avgSignal'))
                    ->groupBy('hash_address')
                    ->orderBy('avgSignal', 'DESC')
                    ->get()->toArray();
        return $decibels;            
    }
    
    public function timeSignal() {
        //arrays average Signal per minute
        $avgSignal_1 = Sensor_01_Controller::signal_min_01();
        $avgSignal_2 = Sensor_01_Controller::signal_min_02();
        $avgSignal_3 = Sensor_01_Controller::signal_min_03();
        $avgSignal_4 = Sensor_01_Controller::signal_min_04();
        $avgSignal_5 = Sensor_01_Controller::signal_min_05();
        $avgSignal_6 = Sensor_01_Controller::signal_min_06(); 
        $avgSignal_7 = Sensor_01_Controller::signal_min_07(); 
        $avgSignal_8 = Sensor_01_Controller::signal_min_08();
        $avgSignal_9 = Sensor_01_Controller::signal_min_09(); 
        $avgSignal_10 = Sensor_01_Controller::signal_min_10();

        $dB_min = array($avgSignal_1, $avgSignal_2, $avgSignal_3, $avgSignal_4,
                       $avgSignal_5, $avgSignal_6, $avgSignal_7, $avgSignal_8, 
                       $avgSignal_9, $avgSignal_10);
        return $dB_min;
    }
    
    public function joinDataMin(){
        $data_min_1 = Sensor_01_Controller::min_01();
        $data_min_2 = Sensor_01_Controller::min_02();
        $data_min_3 = Sensor_01_Controller::min_03();
        $data_min_4 = Sensor_01_Controller::min_04();
        $data_min_5 = Sensor_01_Controller::min_05();
        $data_min_6 = Sensor_01_Controller::min_06();
        $data_min_7 = Sensor_01_Controller::min_07();
        $data_min_8 = Sensor_01_Controller::min_08();
        $data_min_9 = Sensor_01_Controller::min_09();
        $data_min_10 = Sensor_01_Controller::min_10();
        
        $all_data_min = array_merge($data_min_1, $data_min_2, $data_min_3, 
                $data_min_4, $data_min_5, $data_min_6, $data_min_7, $data_min_8, 
                $data_min_9, $data_min_10);
        return $all_data_min; 
     
    }
    
    //------------------------------------------- JSON functions ---------------
    //--------------------------------------------------------------------------
    public function c1_timeSignal(){  
        $dB_min = Sensor_01_Controller::timeSignal();
        return json_encode($dB_min);    
    }
    public function c1_numOfVisits(){
        //arrays counting data query of each minute
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
        
        $visits_min = [$numCust_1, $numCust_2, $numCust_3, $numCust_4,
                    $numCust_5, $numCust_6, $numCust_7, $numCust_8, $numCust_9,
                    $numCust_10];
        
        return json_encode($visits_min); 
    } 
 
    public function c1_avgSignal(){
      
        $decibels = Sensor_01_Controller::generalSignal();
        $countdB = count($decibels);
        $colAvgSignal = array_column($decibels,'avgSignal');
        $countCust1 = 0;
        $countCust2 = 0;
        $countCust3 = 0;
        $countCust4 = 0;
        $countCust5 = 0;
      
        //check levels of signal, count avg level per minute
        for($i=0; $i < $countdB; $i++ ){ 
            switch ($colAvgSignal) {
                case ($colAvgSignal[$i] <= 33 ):
                    $countCust1++;
                    break;
                case ($colAvgSignal[$i] > 33 && $colAvgSignal[$i] <= 47):
                    $countCust2++;
                    break;
                case ($colAvgSignal[$i] > 47 && $colAvgSignal[$i] <= 62):
                    $countCust3++;
                    break;
                case ($colAvgSignal[$i] > 62 && $colAvgSignal[$i] <= 76 ):
                    $countCust4++;
                    break;
                case ($colAvgSignal[$i] > 76 && $colAvgSignal[$i] < 90 ):
                    $countCust5++;
                    break;        
            }
        }
        //structuring object to be sent
        $dB_levels = array(
            ['name' => 'Very high', 'y' => $countCust1],
            ['name' => 'High', 'y' => $countCust2],
            ['name' => 'Moderate', 'y' => $countCust3],
            ['name' => 'Low', 'y' => $countCust4],
            ['name' => 'Very low', 'y' => $countCust5]
        );
        return json_encode($dB_levels); 
    }
    
    // average time in store per person
    public function c1_avgMins(){       
        $custTime = Sensor_01_Controller::generalTime();
        return json_encode($custTime); 
    }  
    
    //----------------------------------------fuctions ONE SINGLE DATA----------
    //--------------------------------------------------------------------------
    public function c1_statCust(){ //------------------total customers in sensor
        $custTime = Sensor_01_Controller::generalTime(); 
        $visitors = array_column($custTime,'hash_address');
        $totalVisitors = count($visitors);
        return response()->json($totalVisitors);
    }
    
    public function c1_statTime(){//--------------------- average time in sensor
        $custTime = Sensor_01_Controller::generalTime();
        $colTime = array_column($custTime,'timing');
        $avgGeneralTime = round(array_sum($colTime)/ count($colTime));
        return json_encode($avgGeneralTime);
    }
  
    public function c1_statDB(){//----------------------average signal in sensor
        
        $dB_min = Sensor_01_Controller::timeSignal();
        $avgGeneralSignal = round(array_sum($dB_min)/count($dB_min));
        $level;
        
         switch ($avgGeneralSignal) {
                case ($avgGeneralSignal <= 33 ):
                    $level = "Very high";
                    break;
                case ($avgGeneralSignal > 33 && $avgGeneralSignal <= 47):
                     $level = "High";
                    break;
                case ($avgGeneralSignal > 47 && $avgGeneralSignal <= 62):
                     $level = "Moderate";
                    break;
                case ($avgGeneralSignal > 62 && $avgGeneralSignal <= 76 ):
                     $level = "Very low";
                    break;
                case ($avgGeneralSignal > 76 && $avgGeneralSignal < 90 ):
                    $level = "Low";
                    break; 
                default :
                    $level = "Out of range";
            }
 
        return json_encode($level);
    }
  
    //longest time in the store
    public function c1_statLongTime(){
        $custTime = Sensor_01_Controller::generalTime();
        $colTime = array_column($custTime,'timing');
        $maxTime = max($colTime);
        return json_encode($maxTime);
    }
    
    //best reception
    public function c1_statHighDB(){
        $dB_min = Sensor_01_Controller::timeSignal();
        $maxSignal = max($dB_min);
        
        switch ($maxSignal) {
                case ($maxSignal <= 33 ):
                    $level = "Very high";
                    break;
                case ($maxSignal > 33 && $maxSignal <= 47):
                     $level = "High";
                    break;
                case ($maxSignal > 47 && $maxSignal <= 62):
                     $level = "Moderate";
                    break;
                case ($maxSignal > 62 && $maxSignal <= 76 ):
                     $level = "Low";
                    break;
                case ($maxSignal > 76 && $maxSignal < 90 ):
                    $level = "Very low";
                    break; 
                default :
                    $level = "Out of range";
        }
        
        return json_encode($level);
    }

    // person more than one time in the store
    public function c1_statReenter(){
        //arrays queries per minute
        $data_min_1 = Sensor_01_Controller::min_01();
        $data_min_2 = Sensor_01_Controller::min_02();
        $data_min_3 = Sensor_01_Controller::min_03();
        $data_min_4 = Sensor_01_Controller::min_04();
        $data_min_5 = Sensor_01_Controller::min_05();
        $data_min_6 = Sensor_01_Controller::min_06();
        $data_min_7 = Sensor_01_Controller::min_07();
        $data_min_8 = Sensor_01_Controller::min_08();
        $data_min_9 = Sensor_01_Controller::min_09();
        $data_min_10 = Sensor_01_Controller::min_10();
        
        //getting hash_address column for each minute
        $col_address_1 = array_column($data_min_1,'hash_address');
        $col_address_2 = array_column($data_min_2,'hash_address');
        $col_address_3 = array_column($data_min_3,'hash_address');
        $col_address_4 = array_column($data_min_4,'hash_address');
        $col_address_5 = array_column($data_min_5,'hash_address');
        $col_address_6 = array_column($data_min_6,'hash_address');
        $col_address_7 = array_column($data_min_7,'hash_address');
        $col_address_8 = array_column($data_min_8,'hash_address');
        $col_address_9 = array_column($data_min_9,'hash_address');
        $col_address_10 = array_column($data_min_10,'hash_address');
        
        //process between minute 1 and 2
        //---------------------------------
        $custOut_min_12 = array_diff($col_address_1, $col_address_2);//differences, customers out & new customers
        $custJoin_min_12 = array_merge($col_address_1, $col_address_2);//join both arrays min_01 and min_02 
        $custReal_in_12 = array_count_values($custJoin_min_12);//removing customer repeats from join
        
        //process between 1&2 minutes join + 3rd minute 
        $custOut_min_123 = array_diff($custReal_in_12, $col_address_3);
        $custJoin_min_123 = array_merge($custReal_in_12, $col_address_3);
        $custReal_in_123 = array_count_values($custJoin_min_123);
        
        //process between 1&2&3 minutes join + 4th minute 
        $custOut_min_1234 = array_diff($custReal_in_123, $col_address_4);
        $custJoin_min_1234 = array_merge($custReal_in_123, $col_address_4);
        $custReal_in_1234 = array_count_values($custJoin_min_1234);
        
        //process between 1&2&3&4 minutes join + 5th minute 
        $custOut_min_12345 = array_diff($custReal_in_1234, $col_address_5);
        $custJoin_min_12345 = array_merge($custReal_in_1234, $col_address_5);
        $custReal_in_12345 = array_count_values($custJoin_min_12345);
        
        //process between 1&2&3&4&5 minutes join + 6th minute 
        $custOut_min_123456 = array_diff($custReal_in_12345, $col_address_6);
        $custJoin_min_123456 = array_merge($custReal_in_12345, $col_address_6);
        $custReal_in_123456 = array_count_values($custJoin_min_123456);
        
        //process between 1&2&3&4&5&6 minutes join + 7th minute 
        $custOut_min_1234567 = array_diff($custReal_in_123456, $col_address_7);
        $custJoin_min_1234567 = array_merge($custReal_in_123456, $col_address_7);
        $custReal_in_1234567 = array_count_values($custJoin_min_1234567);
        
        //process between 1&2&3&4&5&6&7 minutes join + 8th minute 
        $custOut_min_12345678 = array_diff($custReal_in_1234567, $col_address_8);
        $custJoin_min_12345678 = array_merge($custReal_in_1234567, $col_address_8);
        $custReal_in_12345678 = array_count_values($custJoin_min_12345678);
        
        //process between 1&2&3&4&5&6&7&8 minutes join + 9th minute 
        $custOut_min_123456789 = array_diff($custReal_in_12345678, $col_address_9);
        $custJoin_min_123456789 = array_merge($custReal_in_12345678, $col_address_9);
        $custReal_in_123456789 = array_count_values($custJoin_min_123456789);
        
        //process between 1&2&3&4&5&6&7&8&9 minutes join + 10th minute 
        $custOut_min_12345678910 = array_diff($custReal_in_123456789, $col_address_10);
        $custJoin_min_12345678910 = array_merge($custReal_in_123456789, $col_address_10);
        $custReal_in_12345678910 = array_count_values($custJoin_min_12345678910);
        
        //Join array data of out & new customers of each minute
        $outerJoins = array_merge($custOut_min_12, $custOut_min_123, $custOut_min_1234,
                $custOut_min_12345, $custOut_min_123456, $custOut_min_1234567, 
                $custOut_min_12345678, $custOut_min_123456789, $custOut_min_12345678910);
        
        //Difference between customers in joins and and the ones outerjoins
        $custReturn = array_diff($custReal_in_12345678910, $outerJoins);
        
        return json_encode(sizeof($custReturn));
    }
   
    public function signal_veryHigh() {
        $all_data_min = Sensor_01_Controller::joinDataMin();//queries join 10 min
        $totalRows = count($all_data_min);
        $veryHigh= array();

        for ($x = 0; $x < $totalRows; $x++){
            if(($all_data_min[$x]->newSignal)<= 33){
                array_push($veryHigh, 
                     array('hash_address'=>$all_data_min[$x],'newSignal'=>$all_data_min[$x])); 
            }   
        } 
        return $veryHigh;
    }
    
    public function signal_high() {
        $all_data_min = Sensor_01_Controller::joinDataMin();//queries join 10 min
        $totalRows = count($all_data_min);
        $high = array();
        
        for ($x = 0; $x < $totalRows; $x++){
            if(($all_data_min[$x]->newSignal) > 33 && ($all_data_min[$x]->newSignal) <= 47){
                array_push($high, 
                   array('hash_address'=>$all_data_min[$x],'newSignal'=>$all_data_min[$x])); 
            }   
        }
        return $high;
    }
    
    public function signal_moderate() {
        $all_data_min = Sensor_01_Controller::joinDataMin();//queries join 10 min
        $totalRows = count($all_data_min);
        $moderate = array();
        
        for ($x = 0; $x < $totalRows; $x++){
            if(($all_data_min[$x]->newSignal) > 47 && ($all_data_min[$x]->newSignal) <= 62){
                 array_push($moderate, 
                   array('hash_address'=>$all_data_min[$x],'newSignal'=>$all_data_min[$x])); 
            }   
        }
        return $moderate;
    }
    public function signal_low() {
        $all_data_min = Sensor_01_Controller::joinDataMin();//queries join 10 min
        $totalRows = count($all_data_min);
        $low = array();
        
        for ($x = 0; $x < $totalRows; $x++){
            if(($all_data_min[$x]->newSignal) > 62 && ($all_data_min[$x]->newSignal) <= 76 ){
                 array_push($low, 
                   array('hash_address'=>$all_data_min[$x],'newSignal'=>$all_data_min[$x])); 
            }   
        }
        return $low;
    }
    public function signal_veryLow() {
        $all_data_min = Sensor_01_Controller::joinDataMin();//queries join 10 min
        $totalRows = count($all_data_min);
        $veryLow = array();
        
        for ($x = 0; $x < $totalRows; $x++){
            if(($all_data_min[$x]->newSignal) > 76 && ($all_data_min[$x]->newSignal) < 90 ){
                 array_push($veryLow, 
                   array('hash_address'=>$all_data_min[$x],'newSignal'=>$all_data_min[$x]));  
            }   
        }
        return $veryLow;
    }
    
    public function count_veryLow(){
         $veryLow = Sensor_01_Controller::signal_veryLow();
         return $veryLowFinal;
    }
    
    public function count_Low(){
        $low = Sensor_01_Controller::signal_low(); 
        $leng = count($moderate);
        $count = 0;
        $moderateFinal = array();
       
        for ($i=0; $i<$leng; $i++ ){
            if($moderate){
                $count++;
                array_push($moderateFinal, 
                   array('hash_address'=>$moderate[$i],'moderate_min'=>$count)); 
            }
        }
          return $lowFinal;
    }
    public function count_moderate(){
        $moderate = Sensor_01_Controller::signal_moderate();
 
        $leng = count($moderate);
        $count = 0;
        $moderateFinal = array();
       
        for ($i=0; $i<$leng; $i++ ){
            if($moderate){
                $count++;
                $moderateFinal = ['hash_address'=>$moderate[$i],'moderate_min'=>$count]; 
            }
        }
         return $moderateFinal;
    }
    public function count_High(){
         $high = Sensor_01_Controller::signal_high(); 
         return $highFinal;
    }
     public function count_veryHigh(){
         $veryHigh = Sensor_01_Controller::signal_veryHigh();
         return $veryHighFinal;
    }
    
   /* public function c1_eachCust_signal() {
        //$veryLowFinal = Sensor_01_Controller::count_veryLow();
       // $lowFinal = Sensor_01_Controller::count_low();
        $data_min_1 = Sensor_01_Controller::min_01();
        $all_data_min = Sensor_01_Controller::joinDataMin();
        $moderate = Sensor_01_Controller::signal_moderate();
        $moderateFinal = Sensor_01_Controller::count_moderate();
        //$highFinal = Sensor_01_Controller::count_High();
        //$veryHighFinal = Sensor_01_Controller::count_veryHigh();
        var_dump($moderateFinal);
       // return json_encode($moderateFinal);
    }*/
}
    
       
   
     
   