<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsors;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class SponsorsController extends Controller
{
    public function index(){ 
        //deuxième méthode
        // $s=DB::table('sponsors')->get();
        // return view('sponsors',['s'=>$s]);
        return response()->json("test", 200);
    } 
}
