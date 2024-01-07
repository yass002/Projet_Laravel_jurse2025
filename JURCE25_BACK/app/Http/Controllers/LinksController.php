<?php

namespace App\Http\Controllers;

use App\Models\Links;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LinksController extends Controller
{
     /**
     * Display a listing of the resource.
     */
  /*   public function index()
    {
        //
        $datos['links'] = Links::paginate(4);
        return view('links.index', $datos);
    } */
    public function index(){ 
        //deuxième méthode
        $alllinks = DB::table('links')->get(); 
        return view('links.index',['links' => $alllinks]); 
        } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'description' => 'required|string|max:100',
            'links' => 'required|string|max:100',
           
        ];
        $mensaje = [
            'required' => ' :attribute manquant!!',
            
        ];

        $this->validate($request, $campos, $mensaje);

        $datosLinks = request()->except(['_token']);

        Links::insert($datosLinks);
        // return response()->json($datosEmpleado);

        return redirect('links')->with('message', 'le lien existe');
    }

    /**
     * Display the specified resource.
     */
    public function show(Links $links)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $links = Links::findOrFail($id);
        return view('links.edit', compact('links'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'description' => 'required|string|max:100',
            'links' => 'required|string|max:100',
        ];
        $mensaje = [
            'required' => ':attribute manquant !!',
        ];

    

        $this->validate($request, $campos, $mensaje);

        $datosLinks = request()->except(['_token', '_method']);

     


        Links::where('id', '=', $id)->update($datosLinks);
        $links = Links::findOrFail($id);
        // return view('empleado.edit', compact('empleado'));

        return redirect('links')->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $links = Links::findOrFail($id);
        
            Links::destroy($id);
        

        return redirect('links')->with('message', 'deleted');
    }
}
