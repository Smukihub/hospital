<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade as PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if ($request) {
            $query = trim($request->get('search'));
            $usuarios = User::where('nombre','LIKE','%' . $query . '%')->orderBy('id','asc')->get();
        }
        $total = User::count();
        //$usuarios = User::all();
        return view('Usuarios.index', ['usuarios' => $usuarios , 'total' => $total, 'search' => $query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuarios.create');
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
        if ($valores['password']!=$valores['password2'])
            return redirect()->back()->with('error','El password no esta bien confirmado');

        $valores['password']=Hash::make( $valores['password'] );

                
        $registro = new User();
        $registro->fill($valores);
        $registro->save();

        return redirect("/Usuarios")->with('mensaje','Usuario agregado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view('Usuarios.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('Usuarios.edit',compact('usuario'));
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
        $registro = User::find($id);
        $registro->fill($valores);
        $registro->save();
   
     return redirect("/Usuarios")->with('mensaje','Usuario modificado correctamente');
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
            $registro = User::find($id);
            $registro->delete();
            return redirect("/Usuarios")->with('mensaje','Usuario modificado correctamente');
        }catch (\Illuminate\Database\QueryException $e) {
            return redirect("/Usuarios")->with('error',$e->getMessage());
        }
    }

    public function exportPdf()
    {
        $usuario = User::get();
        $pdf = PDF::loadView('pdf.users', compact('usuario'));
        return $pdf->download('user-list.pdf');
    }
    public function exportOnePdf($id)
    {
        
        $usuario = User::find($id);
        $data = [];
        $data ['user'] = $usuario;

        $pdf = PDF::loadView('pdf.user', compact('usuario'));
        return $pdf->download('usuario-pdf/{Usuario}');
    }
}
