<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Corner01_input;
use App\Corner02_input;
use App\Corner03_input;
use App\Corner04_input;
use db;

class GeneralController extends Controller
{
    public function index(){
        return view('index');
    }
    public function general(){
        return view('pages/general');
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
    
    public function test(){
        
        $customers = \DB::table('corner01_inputs')
        	    ->select('hash_address', 'time_sec')
                    ->where('time_sec', '<', 4)
                    ->get()->toArray();
        return json_encode($customers);    
    } 
    
}
