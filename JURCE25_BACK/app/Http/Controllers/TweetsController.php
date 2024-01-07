<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweets;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TweetsController extends Controller
{
    public function index(){ 
        //deuxième méthode
        $alltweets = DB::table('tweets')->get(); 
        return view('tweets.index',['tweets' => $alltweets]); 
        } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tweets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'link' => 'required|string|max:100',
            'date_tweet' => 'required|string|max:100',
           
        ];
        $mensaje = [
            'required' => ' :attribute manquant!!',
            
        ];

        $this->validate($request, $campos, $mensaje);

        $datostweets = request()->except(['_token']);

        Tweets::insert($datostweets);
        // return response()->json($datosEmpleado);

        return redirect('tweets')->with('message', 'le lien existe');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tweets $tweets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $tweets = Tweets::findOrFail($id);
        return view('tweets.edit', compact('tweets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'link' => 'required|string|max:100',
            'date_tweet' => 'required|string|max:100',
        ];
        $mensaje = [
            'required' => ':attribute manquant !!',
        ];

    

        $this->validate($request, $campos, $mensaje);

        $datostweets = request()->except(['_token', '_method']);

     


        Tweets::where('id', '=', $id)->update($datostweets);
        $tweets = Tweets::findOrFail($id);
        // return view('empleado.edit', compact('empleado'));

        return redirect('tweets')->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $tweets = Tweets::findOrFail($id);
        
            Tweets::destroy($id);
        

        return redirect('tweets')->with('message', 'deleted');
    }
}
