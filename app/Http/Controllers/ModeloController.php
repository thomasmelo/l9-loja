<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# Models
use App\Models\{
    Acessorio,
    AcessorioModelo,
    Marca,
    Modelo,
    User,
    Veiculo
};

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = Modelo::orderBy('modelo');
        return view('modelo.index')->with(compact('modelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelo = null;
        $marcas = Marca::orderBy('marca')->get();
        return view('modelo.form')->with(compact('modelo', 'marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelo = new Modelo();
        $modelo->fill($request->all());
        $modelo->save();       
        return redirect()
            ->route('modelo.index')
            ->with('success', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $modelo = Modelo::find($id);
        return view('modelo.show')->with(compact('modelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $modelo = Modelo::find($id);
        $marcas = Marca::orderBy('marca')->get();
        return view('modelo.form')->with(compact('modelo', 'marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $modelo = Modelo::find($id);
        $modelo->fill($request->all());
        $modelo->save();        
        return redirect()
            ->route('modelo.index')
            ->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $modelo = Modelo::find($id);        
        $modelo->delete();
        return redirect()
            ->route('modelo.index')
            ->with('danger', 'Removido com sucesso!');
    }
}
