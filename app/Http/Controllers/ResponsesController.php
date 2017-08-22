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

    public function index()
    {
        return view('index');
    }
    
    public function chart9(){
        
        //hash_addresses display no repeats 
      	//agrupe por hash_address e intervalos de tiempo
		//calcule el average the tiempo de cada hash address
        $customers = \DB::table('corner01_inputs')
        			->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    //->whereBetween('time_sec', [0, 60])
                    //->orWhereBetween('time_sec', [60, 120])
                    ->groupBy('hash_address')
                    //->orderBy('avgMin', 'DESC')
                    ->get()->toArray();
         $averageMin = array_column($customers,'avgMin');

         //return response()->json($averageMin);
         return response(['Average Minutes' => $averageMin]);
         //return view('chart8')
	 //->with('customers',json_encode($averageMin,JSON_NUMERIC_CHECK));
                     
    }
    
    public function chart8(){
        
        //select each customer without repetition 
        /*$groupCust = \DB::table('corner01_inputs')
        	    ->select('hash_address')
                    ->groupBy('hash_address')
                    ->get();
         
        //count real number of customers in store -> 38
        $countGroupCust = count($groupCust);*/
        
        //select all addresses in db with repeats
        $customers = \DB::table('corner01_inputs')
        	    ->select('hash_address', 'time_sec')
                    
                    ->get();
       // var_dump($customers);
        //count all addresses in db even with repeats
       /* $countCust = count($customers);
        
        //loop in number of customers 37 times
        //make $address array with hash_address of 38 customers
        //array with hash_address as index inicialized 0, highchart requirement
        for($i=0; $i<=$countGroupCust-1; $i++){
         $address=$groupCust[$i]->hash_address;
         $numCust[$address]=0; 
        }

        //loop in total data, customers repetitions 600
        //make the $address array
        //add each hash_address found 
        for($i=0; $i<=$countCust-1; $i++){
         $address=$customers[$i]->hash_address;
         $numCust[$address]++;   
        }

        $data=array("numCustomers"=>$countGroupCust,"customers"=>$groupCust, "phones_id"=>$numCust);*/
        return json_encode($customers);
        
    }
     /*public function chart8(){
        
         //selecting each customer with his average time in store
         $groupCust = \DB::table('corner01_inputs')
        	    ->select('hash_address', DB::raw('(round(avg(time_sec)/60)) as avgMin'))
                    //->whereBetween('time_sec', [0, 60])
                    //->orWhereBetween('time_sec', [60, 120])
                    ->groupBy('hash_address')
                    ->get();
         
        //counting all the customers in store
        $countGroupCust = count($groupCust);
        
        //
        $customers = \DB::table('corner01_inputs')
        	    ->select('time_sec','hash_address', 'signal_db') 
                    ->get();
        //
        $countCust = count($customers);
        
        for($i=0;$i<=$countGroupCust-1;$i++){
         $address=$groupCust[$i]->hash_address;
         $numCust[$address]=0; //array with hash_address as index inicialized 0
        }

        for($i=0;$i<=$countCust-1;$i++){
         $address=$customers[$i]->hash_address;
         $numCust[$address]++;//add each hash_address found
           
        }

        $data=array("numCustomers"=>$countGroupCust,"customers"=>$groupCust, "phones_id"=>$address);
        return json_encode($data);
    }*/


    /*public function chart_01(){
        $result = \DB::table('corner01_inputs')
                    ->orderBy('time_sec', 'ASC')
                    ->get();
        return response()->json($result);
    }*/

}
