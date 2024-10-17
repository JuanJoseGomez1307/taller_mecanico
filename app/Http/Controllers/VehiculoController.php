<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = DB::table('vehiculos')
        ->join('propietarios', 'vehiculos.propietario_id', '=', 'propietarios.id') // Cambia 'propietario' a 'propietarios'
        ->select('vehiculos.*', 'propietarios.nombre')
        ->get();
        return view('vehiculo.index',['vehiculos'=>$vehiculos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $propietarios=DB::table('propietarios')
        ->orderby ('nombre')
        ->get();
        return view('vehiculo.create',['propietarios'=>$propietarios]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $vehiculo = new Vehiculo();
        $vehiculo->propietario_id=$request->propi;
        $vehiculo->marca=$request->marca;
        $vehiculo->modelo=$request->modelo;
        $vehiculo->año=$request->year;
        $vehiculo->matricula=$request->matricula;
        $vehiculo->tipo=$request->tipo;
        $vehiculo->save();

        $vehiculos = DB::table('vehiculos')
        ->join('propietarios', 'vehiculos.propietario_id','=','propietarios.id')
        ->select('vehiculos.*',"propietarios.nombre")
        ->get();
        return view('vehiculo.index',['vehiculos'=>$vehiculos]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $vehiculo = Vehiculo::find($id);
        $propietarios =DB::table('propietarios')
        ->orderBy('nombre')
        ->get();
        return view('vehiculo.edit', ['vehiculo'=>$vehiculo, 'propietarios'=>$propietarios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $vehiculo = Vehiculo::find($id);

        $vehiculo->propietario_id=$request->propi;
        $vehiculo->marca=$request->marca;
        $vehiculo->modelo=$request->modelo;
        $vehiculo->año=$request->year;
        $vehiculo->matricula=$request->matricula;
        $vehiculo->tipo=$request->tipo;
        $vehiculo->save();

        $vehiculos = DB::table('vehiculos')
        ->join('propietarios', 'vehiculos.propietario_id','=','propietarios.id')
        ->select('vehiculos.*',"propietarios.nombre")
        ->get();
        return view('vehiculo.index',['vehiculos'=>$vehiculos]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $vehiculo= Vehiculo::find($id);
        $vehiculo->delete();

        $vehiculos = DB::table('vehiculos')
        ->join('propietarios','vehiculos.propietario_id','=','propietarios.id')
        ->select('vehiculos.*',"propietarios.nombre")
        ->get();
        return view('vehiculo.index', ['vehiculos'=>$vehiculos]);

    }
}
