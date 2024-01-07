<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sessions;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class SessionsController extends Controller
{
    public function index(){ 
        //deuxième méthode
        $allessions = DB::table('sessions')->get(); 
        return view('sessions.index',['sessions' => $allessions]); 
        } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:100',
            'order' => 'required|string',
          
           
        ];
        $mensaje = [
            'required' => ' :attribute manquant!!',
            
        ];

        $this->validate($request, $campos, $mensaje);

        $datossessions = request()->except(['_token']);

        Sessions::insert($datossessions);
        // return response()->json($datosEmpleado);

        return redirect('sessions')->with('message', 'le lien existe');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sessions $sessions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $sessions = Sessions::findOrFail($id);
        return view('sessions.edit', compact('sessions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:100',
            'order' => 'required|string',
          
        ];
        $mensaje = [
            'required' => ':attribute manquant !!',
        ];

    

        $this->validate($request, $campos, $mensaje);

        $datossessions = request()->except(['_token', '_method']);

     


        Sessions::where('id', '=', $id)->update($datossessions);
        $sessions = Sessions::findOrFail($id);
        // return view('empleado.edit', compact('empleado'));

        return redirect('sessions')->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $sessions = Sessions::findOrFail($id);
        
            Sessions::destroy($id);
        

        return redirect('sessions')->with('message', 'deleted');
    }
}
