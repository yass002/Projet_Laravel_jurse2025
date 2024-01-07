<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keynote;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class KeynoteController extends Controller
{
    public function index(){ 
        //deuxième méthode
        $allkeynote = DB::table('keynotes')->get(); 
        return view('keynotes.index',['keynotes' => $allkeynote]); 
        } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('keynotes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'src' => 'required|string',
            'description' => 'required|string|max:100',
            'website' => 'required|string',
          
           
        ];
        $mensaje = [
            'required' => ' :attribute manquant!!',
            
        ];

        $this->validate($request, $campos, $mensaje);

        $datoskeynote = request()->except(['_token']);

        Keynote::insert($datoskeynote);
        // return response()->json($datosEmpleado);

        return redirect('keynotes')->with('message', 'le lien existe');
    }

    /**
     * Display the specified resource.
     */
    public function show(Keynote $keynotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $keynotes = Keynote::findOrFail($id);
        return view('keynotes.edit', compact('keynotes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'src' => 'required|string|max:100',

            'description' => 'required|string|max:100',
            'website' => 'required|string|max:100',
        ];
        $mensaje = [
            'required' => ':attribute manquant !!',
        ];

    

        $this->validate($request, $campos, $mensaje);

        $datoskeynote = request()->except(['_token', '_method']);

     


        Keynote::where('id', '=', $id)->update($datoskeynote);
        $keynotes = Keynote::findOrFail($id);
        // return view('empleado.edit', compact('empleado'));

        return redirect('keynotes')->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $keynotes = Keynote::findOrFail($id);
        
            Keynote::destroy($id);
        

        return redirect('keynotes')->with('message', 'deleted');
    }
}
