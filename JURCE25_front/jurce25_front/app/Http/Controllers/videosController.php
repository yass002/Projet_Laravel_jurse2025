<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videosController extends Controller
{
    public function index() {
        $moch_s = "test";
        dd($moch_s);
        return response("TEST");
    }
}
