<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweets;
use App\Models\Links;
use App\Models\Organizers;



use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(){ 
        //deuxième méthode
        $alllinks = DB::table('links')->get(); 
        $alltweets = DB::table('tweets')->get(); 
        $allorganizer = DB::table('organizers')->get(); 


        return view('welcome', ['alllinks'=>$alllinks,'alltweets'=>$alltweets,'allorganizer'=>$allorganizer]); 
        } 
        public function index1(){ 
            //deuxième méthode
            $s = DB::table('sponsors')->get(); 
           
    
    
            return view('sponsors', ['s'=>$s]); 
            } 
}
