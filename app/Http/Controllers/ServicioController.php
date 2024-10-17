<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $servicios = DB::table('servicios')
        ->join('vehiculos', 'servicios.vehiculo_id', '=', 'vehiculos.id') 
        ->get();
        return view('servicio.index',['servicios'=>$servicios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $vehiculos=DB::table('vehiculos')
        ->orderby ('matricula')
        ->get();
        return view('servicio.create',['vehiculos'=>$vehiculos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $servicio = new Servicio();
        $servicio->vehiculo_id=$request->matricula;
        $servicio->fecha_servicio=$request->fecha;
        $servicio->costo=$request->costo;
        $servicio->descripcion=$request->descri;
        $servicio->save();

        $servicios = DB::table('servicios')
        ->join('vehiculos', 'servicios.vehiculo_id','=','vehiculos.id')
        ->select('servicios.*',"vehiculos.matricula")
        ->get();
        return view('servicio.index',['servicios'=>$servicios]);
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
        $servicio = Servicio::find($id);

       


        $vehiculos =DB::table('vehiculos')
        ->orderBy('matricula')
        ->get();
        return view('servicio.edit', ['servicio'=>$servicio, 'vehiculos'=>$vehiculos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $servicio = Servicio::find($id);

        $servicio->vehiculo_id=$request->matricula;
        $servicio->fecha_servicio=$request->fecha;
        $servicio->costo=$request->costo;
        $servicio->descripcion=$request->descri;
        $servicio->save();

        $servicios = DB::table('servicios')
        ->join('vehiculos', 'servicios.vehiculo_id','=','vehiculos.id')
        ->select('servicios.*',"vehiculos.matricula")
        ->get();
        return view('servicio.index',['servicios'=>$servicios]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $servicio= Servicio::find($id);
        $servicio->delete();

        $servicios = DB::table('servicios')
        ->join('vehiculos','servicios.vehiculo_id','=','vehiculos.id')
        ->select('servicios.*',"vehiculos.matricula")
        ->get();
        return view('servicio.index', ['servicios'=>$servicios]);
    }
}
