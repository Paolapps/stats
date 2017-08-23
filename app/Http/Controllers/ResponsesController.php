<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Corner01_input;
use App\Corner02_input;
use App\Corner03_input;
use App\Corner04_input;
use db;

class ResponsesController extends Controller
{

    public function index(){
        return view('index');
    }
    
    //group hash_address e intervalos de tiempo with average time in store
    public function c1_avgMins(){
      
        $customers = \DB::table('corner01_inputs')
        	    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    ->groupBy('hash_address')
                    ->orderBy('avgMin', 'DESC')
                    ->get()->toArray();

         return json_encode($customers); 
    }
    
    //select all addresses in db with repeats
    public function test(){
        
        $customers = \DB::table('corner01_inputs')
        	    ->select('hash_address', 'time_sec')
                    ->where('time_sec', '<', 4)
                    ->get()->toArray();
       // var_dump($customers);
       
        return json_encode($customers);    
    }    
}

      
         //selecting each customer with his average time in store
         $groupCust = \DB::table('corner01_inputs')
        	    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    //->whereBetween('time_sec', [0, 60])
                    //->orWhereBetween('time_sec', [60, 120])
                    ->groupBy('hash_address')
                    ->get();
         
       
    
   