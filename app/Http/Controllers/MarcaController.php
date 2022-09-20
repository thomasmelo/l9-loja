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

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::orderBy('marca');
        return view('marca.index')->with(compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marca = null;        
        return view('marca.form')->with(compact('marca'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marca = new Marca();
        $marca->fill($request->all());
        $marca->save();       
        return redirect()
            ->route('marca.index')
            ->with('success', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $marca = Marca::find($id);
        return view('marca.show')->with(compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $marca = Marca::find($id);      
        return view('marca.form')->with(compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $marca = Marca::find($id);
        $marca->fill($request->all());
        $marca->save();        
        return redirect()
            ->route('marca.index')
            ->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $marca = Marca::find($id);       
        $marca->delete();
        return redirect()
            ->route('marca.index')
            ->with('danger', 'Removida com sucesso!');
    }
}
