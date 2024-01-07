<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class OrganizersController extends Controller
{
    public function index(){ 
        //deuxième méthode
        $allorganizers = DB::table('organizers')->get(); 
        return view('organizers.index',['organizers' => $allorganizers]); 
        } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('organizers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'src' => 'required|string|max:100',
            'alt' => 'required|string|max:100',
            'order' => 'required|string',
           
        ];
        $mensaje = [
            'required' => ' :attribute manquant!!',
            
        ];

        $this->validate($request, $campos, $mensaje);

        $datosorganizers = request()->except(['_token']);

        Organizers::insert($datosorganizers);
        // return response()->json($datosEmpleado);

        return redirect('organizers')->with('message', 'le lien existe');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organizers $organizers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $organizers = Organizers::findOrFail($id);
        return view('organizers.edit', compact('organizers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'src' => 'required|string|max:100',
            'alt' => 'required|string|max:100',
            'order' => 'required|string',
        ];
        $mensaje = [
            'required' => ':attribute manquant !!',
        ];

    

        $this->validate($request, $campos, $mensaje);

        $datosorganizers = request()->except(['_token', '_method']);

     


        Organizers::where('id', '=', $id)->update($datosorganizers);
        $organizers = Organizers::findOrFail($id);
        // return view('empleado.edit', compact('empleado'));

        return redirect('organizers')->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $organizers = Organizers::findOrFail($id);
        
            Organizers::destroy($id);
        

        return redirect('organizers')->with('message', 'deleted');
    }
}
