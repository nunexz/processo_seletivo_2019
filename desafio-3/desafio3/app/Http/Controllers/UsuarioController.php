<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=\App\Usuario::all();
        return view('index',compact('usuarios'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $usuario= new \App\Usuario();
        $usuario->nome = $request->get('nome');
        $usuario->email = $request->get('email');
        $date=date_create($request->get('dataNascimento'));
        $format = date_format($date,"Y-m-d");
        $usuario->dataNascimento = $format;
        $usuario->senha = $request->get('senha');
        $usuario->save();

        return redirect('usuarios')->with('success', 'Dados salvos com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = \App\Usuario::find($id);
        return view('edit',compact('usuario','id'));
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
        $usuario= \App\Usuario::find($id);
        $usuario->nome=$request->get('nome');
        $usuario->email=$request->get('email');
        $usuario->senha=$request->get('senha');
        $usuario->save();
        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = \App\Usuario::find($id);
        $usuario->delete();
        return redirect('usuarios')->with('success','Dado deletado com sucesso!');
    }
}
