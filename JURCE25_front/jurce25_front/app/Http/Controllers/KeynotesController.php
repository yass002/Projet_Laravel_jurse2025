<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class KeynotesController extends Controller
{
    public function index(){ 
        //deuxième méthode
        $allkeynote = DB::table('keynotes')->get(); 
        return view('keynotes',['allkeynotes' => $allkeynote]); 
        } 
}
