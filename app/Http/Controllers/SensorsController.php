<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Corner01_input;
use App\Corner02_input;
use App\Corner03_input;
use App\Corner04_input;
use db;

class SensorsController extends Controller
{
    public function index(){
        return view('index');
    }
    public function sensor_01(){
        return view('pages/sensor_01');
    }
    public function sensor_02(){
        return view('pages/sensor_02');
    }
    public function sensor_03(){
        return view('pages/sensor_03');
    }
    public function sensor_04(){
        return view('pages/sensor_04');
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
        
        return json_encode($decibels); 
        /*  SELECT hash_address, round(avg(signal_db)) as avgSignal
            FROM `corner01_inputs` 
            GROUP by hash_address
            order by avgSignal DESC*/
    }
    
    var $min;
    var $max;
    
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
        $countCust_5 = count($custMin_4); 
        
        $custMin_6 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [300, 360])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_6 = count($custMin_5); 
        
        $custMin_7 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [360, 420])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_7 = count($custMin_6); 
       
        $custMin_8 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [420, 480])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_8 = count($custMin_7); 
        
        $custMin_9 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [480, 540])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_9 = count($custMin_8); 
        
        $custMin_10 = \DB::table('corner01_inputs')
                    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->whereBetween('time_sec', [540, 600])
                    ->groupBy('hash_address')
                    ->get()->toArray();
        $countCust_10 = count($custMin_9); 
        
        
        /*$finalResult = [$custMin_1, $custMin_2, $custMin_3, $custMin_4, 
                        $custMin_5, $custMin_6, $custMin_7, $custMin_8, 
                        $custMin_9];*/
        $finalResult = [$countCust_1, $countCust_2, $countCust_3, $countCust_4, 
                        $countCust_5, $countCust_6, $countCust_7, $countCust_8, 
                        $countCust_9, $countCust_10];

        //print_r($finalResult);
        return json_encode($finalResult);  
        //var_dump($finalResult);
        
        /*SELECT hash_address, round(AVG(time_sec))/60 as avgMin  
        from corner01_inputs
        where time_sec 
        BETWEEN 0 and 60
        group by hash_address*/ 
    }
    
    //select all addresses in db with repeats
    public function test(){
        
        $customers = \DB::table('corner01_inputs')
        	    ->select('hash_address', 'time_sec')
                    ->where('time_sec', '<', 4)
                    ->get()->toArray();
        return json_encode($customers);    
    }  
    
}

        
       
    
   