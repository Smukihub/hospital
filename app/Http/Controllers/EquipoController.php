<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = Equipo::count();
        $equipos= Equipo::all();
        return view('Equipos.index', compact('equipos', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = $request->all();
        $registro = new Equipo();
        $registro->fill($valores);
        $registro->save();

        return redirect("/Equipos")->with('mensaje','Equipo agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);
        return view('Equipos.show',compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $equipo = Equipo::find($id);
        return view('Equipos.edit',compact('equipo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valores = $request->all();
        $registro = Equipo::find($id);
        $registro->fill($valores);
        $registro->save();
   
     return redirect("/Equipos")->with('mensaje','Equipo modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $registro = Equipo::find($id);
            $registro->delete();
            return redirect("/Equipos")->with('mensaje','Equipo modificado correctamente');
        }catch (\Illuminate\Database\QueryException $e) {
            return redirect("/Equipo")->with('error',$e->getMessage());
        }
    }
}
