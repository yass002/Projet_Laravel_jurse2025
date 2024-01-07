<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class VideosController extends Controller
{
    public function index(){ 
        //deuxième méthode
        $allvideos = DB::table('videos')->get(); 
        return view('videos.index',['videos' => $allvideos]); 
        } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'vpath' => 'required|string|max:100',
            
            'title' => 'required|string|max:100',
            'order' => 'required|string',
           
        ];
        $mensaje = [
            'required' => ' :attribute manquant!!',
            
        ];

        $this->validate($request, $campos, $mensaje);

        $datosvideos = request()->except(['_token']);

        Videos::insert($datosvideos);
        // return response()->json($datosEmpleado);

        return redirect('videos')->with('message', 'le lien existe');
    }

    /**
     * Display the specified resource.
     */
    public function show(Videos $videos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $videos = Videos::findOrFail($id);
        return view('videos.edit', compact('videos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'vpath' => 'required|string|max:100',
            'title' => 'required|string|max:100',
            'order' => 'required|string',
        ];
        $mensaje = [
            'required' => ':attribute manquant !!',
        ];

    

        $this->validate($request, $campos, $mensaje);

        $datosvideos = request()->except(['_token', '_method']);

     


        Videos::where('id', '=', $id)->update($datosvideos);
        $videos = Videos::findOrFail($id);
        // return view('empleado.edit', compact('empleado'));

        return redirect('videos')->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $videos = Videos::findOrFail($id);
        
            Videos::destroy($id);
        

        return redirect('videos')->with('message', 'deleted');
    }
}
