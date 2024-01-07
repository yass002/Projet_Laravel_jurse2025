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
        $allsponsors = DB::table('sponsors')->get(); 
        return view('sponsors.index',['sponsors' => $allsponsors]); 
        } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('sponsors.create');
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

        $datossponsors = request()->except(['_token']);

        Sponsors::insert($datossponsors);
        // return response()->json($datosEmpleado);

        return redirect('sponsors')->with('message', 'le lien existe');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sponsors $sponsors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $sponsors = Sponsors::findOrFail($id);
        return view('sponsors.edit', compact('sponsors'));
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

        $datossponsors = request()->except(['_token', '_method']);

     


        Sponsors::where('id', '=', $id)->update($datossponsors);
        $sponsors = Sponsors::findOrFail($id);
        // return view('empleado.edit', compact('empleado'));

        return redirect('sponsors')->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $sponsors = Sponsors::findOrFail($id);
        
            Sponsors::destroy($id);
        

        return redirect('sponsors')->with('message', 'deleted');
    }
}
