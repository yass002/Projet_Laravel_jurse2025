<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class PhotosController extends Controller
{
    public function index(){ 
        //deuxième méthode
        $allphotos = DB::table('photos')->get(); 
        return view('photos.index',['photos' => $allphotos]); 
        } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'vpath' => 'required|string|max:100',
            'alt' => 'required|string|max:100',
            'title' => 'required|string|max:100',
            'order' => 'required|string',
           
        ];
        $mensaje = [
            'required' => ' :attribute manquant!!',
            
        ];

        $this->validate($request, $campos, $mensaje);

        $datosphotos = request()->except(['_token']);

        Photos::insert($datosphotos);
        // return response()->json($datosEmpleado);

        return redirect('photos')->with('message', 'le lien existe');
    }

    /**
     * Display the specified resource.
     */
    public function show(Photos $photos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $photos = Photos::findOrFail($id);
        return view('photos.edit', compact('photos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'vpath' => 'required|string|max:100',
            'alt' => 'required|string|max:100',
            'title' => 'required|string|max:100',
            'order' => 'required|string',
        ];
        $mensaje = [
            'required' => ':attribute manquant !!',
        ];

    

        $this->validate($request, $campos, $mensaje);

        $datosphotos = request()->except(['_token', '_method']);

     


        Photos::where('id', '=', $id)->update($datosphotos);
        $photos = Photos::findOrFail($id);
        // return view('empleado.edit', compact('empleado'));

        return redirect('photos')->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $photos = Photos::findOrFail($id);
        
            Photos::destroy($id);
        

        return redirect('photos')->with('message', 'deleted');
    }
}
