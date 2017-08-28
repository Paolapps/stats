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
    
    
    
  
}
